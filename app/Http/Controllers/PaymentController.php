<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\Order;
use App\CartItem;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use PayPal\Api\PaymentExecution;

use Session;
use Auth;
class PaymentController extends Controller
{
    //
    private $api_context;
    public function __construct()
    {
      /** PayPal api context **/
        $paypal_conf = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential(
            $paypal_conf['client_id'],
            $paypal_conf['secret'])
        );
        $this->_api_context->setConfig($paypal_conf['settings']);
      }
      public function paypalWrapper(){
        $cart = Session::get('cart');
        return PaymentController::payWithpaypal($cart);
      }
      public function payWithpaypal($cart){
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');
        $item_list = new ItemList();
        foreach($cart->items as $item){
          $item_1 = new Item();
          $item_1->setName($item['item']['title'] . ' SKU: ' . $item['item']['id']) /** item name **/
          ->setCurrency('GBP')
          ->setQuantity($item['qty'])
          ->setPrice($item['price'])
          ->setSku($item['item']['id']);
          $item_list->addItem($item_1);
        }
        if ($cart->totalPrice < 25){
          $item_1 = new Item();
          $item_1->setName('Postage & Packaging') /** item name **/
          ->setCurrency('GBP')
          ->setQuantity(1)
          ->setPrice($cart->pp * $cart->totalQty);
          $item_list->addItem($item_1);
          $total = $cart->totalPrice + ($cart->pp * $cart->totalQty);
        } else{
          $total = $cart->totalPrice;
        }
        $amount = new Amount();
        $amount->setCurrency('GBP')
               ->setTotal($total);
      $transaction = new Transaction();
              $transaction->setAmount($amount)
                  ->setItemList($item_list)
                  ->setDescription('Your transaction description');
      $redirect_urls = new RedirectUrls();
              $redirect_urls->setReturnUrl(URL::route('paymentsuccess')) /** Specify return URL **/
                  ->setCancelUrl(URL::route('home.index'));
      $payment = new Payment();
              $payment->setIntent('Sale')
                  ->setPayer($payer)
                  ->setRedirectUrls($redirect_urls)
                  ->setTransactions(array($transaction));
              /** dd($payment->create($this->_api_context));exit; **/
              try {
      $payment->create($this->_api_context);
      } catch (\PayPal\Exception\PPConnectionException $ex) {
      if (\Config::get('app.debug')) {
      \Session::put('error', 'Connection timeout');
                      return Redirect::route('paywithpaypal');
      } else {
      \Session::put('error', 'An error has occured, sorry for the inconvenience');
                      return Redirect::route('paywithpaypal');
      }
      }
      foreach ($payment->getLinks() as $link) {
      if ($link->getRel() == 'approval_url') {
      $redirect_url = $link->getHref();
                      break;
      }
      }
      /** add payment ID to session **/
              Session::put('paypal_payment_id', $payment->getId());
      if (isset($redirect_url)) {
      /** redirect to paypal **/
                  return Redirect::away($redirect_url);
      }
      \Session::put('error', 'Unknown error occurred');
              return Redirect::route('paywithpaypal');
      }

      public function getPaymentStatus(Request $request)
    {
        /** Get the payment ID before session clear **/
        $payment_id = Session::get('paypal_payment_id');
        /** clear the session payment ID **/
        // Session::forget('paypal_payment_id');
        if (empty(Input::get('PayerID')) || empty(Input::get('token'))) {
        \Session::put('error', 'Payment failed');
            return Redirect::route('home.index');
        }
        $payment = Payment::get($payment_id, $this->_api_context);
        $execution = new PaymentExecution();
        $execution->setPayerId(Input::get('PayerID'));
        /**Execute  the payment **/
        $result = $payment->execute($execution, $this->_api_context);
        if ($result->getState() == 'approved') {
          \Session::put('success', 'Payment success');
          $itemName = '';
          foreach($payment->transactions[0]->item_list->items as $item){
            if(isset($item->sku)){
              $gameUpdate = Game::findOrFail($item->sku);
              $gameUpdate->sold = 1;
              $gameUpdate->save();
            }
          }
          $order = Order::create ([
                      'total' => $payment->transactions[0]->amount->total,
                      'processed' => 0,
                      'payment_id' => $payment_id,
                      'user_id' => Auth::user()->id,
                      'addressLine1'=> $payment->payer->payer_info->shipping_address->line1,
                      'addressLine2'=> $payment->payer->payer_info->shipping_address->line2,
                      'city'=> $payment->payer->payer_info->shipping_address->city,
                      'county'=> $payment->payer->payer_info->shipping_address->state,
                      'postcode'=> $payment->payer->payer_info->shipping_address->postal_code
                      ]);

          foreach($payment->transactions[0]->item_list->items as $item){
            if(isset($item->sku)){
              $itemName = $itemName . $item->sku;
              $cartItem = new CartItem();
              $cartItem->order_id = $order->id;
              $cartItem->game_id = $item->sku;
              $cartItem->price = $item->price;
              $cartItem->save();
            }
          }

          Session::forget('cart');

          return redirect()->route('thankyou.index');
        }
        \Session::put('error', 'Payment failed');
        return Redirect::route('home.index');
    }
}
