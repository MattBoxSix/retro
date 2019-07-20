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
      $pcCategories = Category::where('company', 'PC')->get();
      $importCategories = Category::where('company', 'Imports')->get();
      return view('thankYou', compact('segaCategories', 'nintCategories', 'psCategories', 'xboxCategories', 'amigaCategories', 'atariCategories', 'bitCategories', 'doCategories', 'cdiCategories', 'neoCategories', 'pcCategories', 'importCategories'));
    }
}