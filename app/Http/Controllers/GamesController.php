<?php

namespace App\Http\Controllers;

use App\Game;
use App\Cart;
use App\Category;
use App\Holiday;
use Illuminate\Http\Request;

use Session;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Game  $games
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
      $allGames = Game::where('category_id', $category->id)->where('sold', 0)->get();
      $title = $category->name;
      $segaCategories = Category::where('company', 'sega')->get();
      $nintCategories = Category::where('company', 'nintendo')->get();
      $psCategories = Category::where('company', 'ps')->get();
      $xboxCategories = Category::where('company', 'xbox')->get();
      $amigaCategories = Category::where('company', 'amiga')->get();
      $atariCategories = Category::where('company', 'atari')->get();
      $bitCategories = Category::where('company', '8-Bit')->get();
      $doCategories = Category::where('company', '3DO')->get();
      $cdiCategories = Category::where('company', 'CDi')->get();
      $neoCategories = Category::where('company', 'Neo-Geo')->get();
      $pcEngineCategories = Category::where('company', 'PCengine')->get();
      $pcCategories = Category::where('company', 'PC')->get();
      $gawCategories = Category::where('company', 'Game And Watch')->get();
      $importCategories = Category::where('company', 'Imports')->get();
      $merchCategories = Category::where('company', 'Merchandise')->get();
      $cart = Session::has('cart') ? Session::get('cart') : new Cart(null);
      return view('games', compact('merchCategories','allGames','gawCategories', 'pcEngineCategories', 'pcCategories', 'title','segaCategories', 'nintCategories', 'psCategories', 'xboxCategories', 'amigaCategories', 'atariCategories', 'bitCategories', 'doCategories', 'cdiCategories', 'neoCategories', 'importCategories','cart'));
    }

    public function getAddToCart(Request $request, $id){
      $product = Game::find($id);
      $oldCart = Session::has('cart') ? Session::get('cart') : null;
      $cart = new Cart($oldCart);
      $cart->add($product, $id);
      $request->session()->put('cart', $cart);
      return redirect()->back();
    }
    public function getRemoveItem($id){
      $oldCart = Session::has('cart') ? Session::get('cart') : null;
      $cart = new Cart($oldCart);
      $cart->removeItem($id);
      if(count($cart->items) > 0){
        Session::put('cart', $cart);
      } else{
        Session::forget('cart');
      }
      return redirect()->route('games.shoppingCart');
    }
    public function getCart(){
      $segaCategories = Category::where('company', 'sega')->get();
      $nintCategories = Category::where('company', 'nintendo')->get();
      $psCategories = Category::where('company', 'ps')->get();
      $xboxCategories = Category::where('company', 'xbox')->get();
      $amigaCategories = Category::where('company', 'amiga')->get();
      $atariCategories = Category::where('company', 'atari')->get();
      $bitCategories = Category::where('company', '8-Bit')->get();
      $doCategories = Category::where('company', '3DO')->get();
      $cdiCategories = Category::where('company', 'CDi')->get();
      $neoCategories = Category::where('company', 'Neo-Geo')->get();
      $pcEngineCategories = Category::where('company', 'PCengine')->get();
      $pcCategories = Category::where('company', 'PC')->get();
      $gawCategories = Category::where('company', 'Game And Watch')->get();
      $importCategories = Category::where('company', 'Imports')->get();
      $merchCategories = Category::where('company', 'Merchandise')->get();
      if (!Session::has('cart')){
        return view('shoppingCart', ['products' => null], compact('merchCategories','segaCategories', 'nintCategories', 'psCategories', 'xboxCategories', 'amigaCategories', 'atariCategories', 'bitCategories', 'doCategories', 'cdiCategories', 'neoCategories', 'gawCategories', 'pcEngineCategories', 'pcCategories', 'importCategories'));
      }
      $oldCart = Session::get('cart');
      $cart = new Cart($oldCart);
      return view('shoppingCart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice, 'cartPP' => $cart->pp], compact('merchCategories','segaCategories', 'nintCategories', 'psCategories', 'xboxCategories', 'amigaCategories', 'atariCategories', 'bitCategories', 'doCategories', 'cdiCategories', 'neoCategories', 'pcEngineCategories','gawCategories', 'pcEngineCategories', 'pcCategories','importCategories'));
    }

    public function getCheckout(){
      $segaCategories = Category::where('company', 'sega')->get();
      $nintCategories = Category::where('company', 'nintendo')->get();
      $psCategories = Category::where('company', 'ps')->get();
      $xboxCategories = Category::where('company', 'xbox')->get();
      $amigaCategories = Category::where('company', 'amiga')->get();
      $atariCategories = Category::where('company', 'atari')->get();
      $bitCategories = Category::where('company', '8-Bit')->get();
      $doCategories = Category::where('company', '3DO')->get();
      $cdiCategories = Category::where('company', 'CDi')->get();
      $neoCategories = Category::where('company', 'Neo-Geo')->get();
      $pcEngineCategories = Category::where('company', 'PCengine')->get();
      $pcCategories = Category::where('company', 'PC')->get();
      $gawCategories = Category::where('company', 'Game And Watch')->get();
      $importCategories = Category::where('company', 'Imports')->get();
      $merchCategories = Category::where('company', 'Merchandise')->get();
      if (!Session::has('cart')){
        return view('shoppingCart', ['products' => null], compact('merchCategories','segaCategories', 'nintCategories', 'psCategories', 'xboxCategories', 'amigaCategories', 'atariCategories', 'bitCategories', 'doCategories', 'cdiCategories', 'neoCategories', 'gawCategories', 'pcEngineCategories', 'pcCategories', 'importCategories'));
      }
      $oldCart = Session::get('cart');
      $cart = new Cart($oldCart);
      $total = $cart->totalPrice;
      return view('checkout', ['total' => $total], compact('merchCategories','segaCategories', 'nintCategories', 'psCategories', 'xboxCategories', 'amigaCategories', 'atariCategories', 'bitCategories', 'doCategories', 'cdiCategories', 'neoCategories', 'gawCategories', 'pcEngineCategories', 'pcCategories', 'importCategories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Game  $games
     * @return \Illuminate\Http\Response
     */
    public function edit(Games $games)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Game  $games
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Games $games)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Game  $games
     * @return \Illuminate\Http\Response
     */
    public function destroy(Games $games)
    {
        //
    }
}
