<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\Cart;
use App\Category;

use Session;

class SearchController extends Controller
{
  public function request(request $request)
  {
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

    $query = $request->getRequestUri();
    $prefix = '/search/';

    if (substr($query, 0, strlen($prefix)) == $prefix) {
        $query = substr($query, strlen($prefix));
    }
    $searchResults = Game::where('title', 'LIKE', '%' .$query. '%')->where('sold', 0)->get();
    $cart = Session::has('cart') ? Session::get('cart') : new Cart(null);
    return view('searchResults', compact('searchResults','segaCategories', 'nintCategories', 'psCategories', 'xboxCategories', 'amigaCategories', 'atariCategories', 'bitCategories', 'doCategories', 'cdiCategories', 'neoCategories', 'gawCategories', 'pcEngineCategories', 'pcCategories', 'importCategories', 'cart'));
  }

  public function results(request $request){
    return redirect()->route('search.request', ['search' => $request->search]);
  }
}
