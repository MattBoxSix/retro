@extends('layouts.games')

@section('content')
  @if(Session::has('cart'))
      <h1>Shopping Cart</h1>
      <div class="row">
        <div class="col-3">Item</div>
        <div class="col-2">Image</div>
        <div class="col-2"></div>
        <div class="col-3">Price</div>
        <div class="col-2">P&P</div>
      </div>
      <hr>
        @foreach($products as $product)
      <div class="row checkoutRows">
        <div class="col-3">{{ $product['item']['title']}}</div>
        <div class="col-2"><img src="{{ $product['item']['image']}}" alt=""  width="50"></div>
        <div class="col-2 text-center"><a href="{{ route('games.remove', ['id'=>$product['item']['id']]) }}" class="btn btn-outline-success"  role="button">Remove</a></div>
        <div class="col-3">£{{ $product['price'] }}</div>
        @if($totalPrice < 25)
        <div class="col-2">£{{ $cartPP }}</div>
        @else
          <div class="col-2">£0.00</div>
        @endif
      </div>
      @endforeach
      <hr>
      <div class="row">
        <div class="col-3 offset-6 font-weight-bold">Subtotal</div>
        @if($totalPrice < 25)
        <div class="col-3 font-weight-bold">£{{ $totalPrice + (count($products) * $cartPP) }}</div>
      @else
        <div class="col-3 font-weight-bold">£{{ $totalPrice }}</div>
      @endif
      </div>
      <br>
      <div class="row">
        <div class="col-6 offset-6" id="paypal-button-container">
          <a href="{{ route('paypal') }}"><img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/buy-logo-large.png" alt="Buy now with PayPal" /></a>
        </div>
      </div>
    @else
          <h1>No items in cart</h1>
      @endif
@endsection
