<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class thankYouController extends Controller
{
    public function index(){
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
      return view('thankYou', compact('merchCategories','segaCategories', 'nintCategories', 'psCategories', 'xboxCategories', 'amigaCategories', 'atariCategories', 'bitCategories', 'doCategories', 'cdiCategories', 'neoCategories', 'gawCategories', 'pcEngineCategories', 'pcCategories', 'importCategories'));
    }
}
