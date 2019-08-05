<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Game;
use App\Cart;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $gameRecommends  = Game::where('promote', 1)->where('sold', 0)->paginate(12);
        $gamesJustIn = Game::latest()->paginate(4)->where('sold', 0);
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
        $cart = Session::has('cart') ? Session::get('cart') : new Cart(null);
        return view('home', compact('segaCategories', 'nintCategories','gawCategories', 'psCategories', 'xboxCategories', 'amigaCategories', 'atariCategories', 'bitCategories', 'doCategories', 'cdiCategories', 'neoCategories', 'pcEngineCategories', 'pcCategories', 'importCategories', 'gameRecommends', 'gamesJustIn','cart'));
    }
}
