<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\Cart;
use App\Category;
use Session;

class ShowGamesController extends Controller
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $showGames = Game::find($id);
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
      return view('viewgame', compact('merchCategories','showGames','gawCategories', 'pcEngineCategories', 'pcCategories', 'title','segaCategories', 'nintCategories', 'psCategories', 'xboxCategories', 'amigaCategories', 'atariCategories', 'bitCategories', 'doCategories', 'cdiCategories', 'neoCategories', 'importCategories','cart'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
