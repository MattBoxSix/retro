<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\GamesRequest;
use App\Game;
use App\Category;

class AdminGamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::paginate(5);
        $categories = Category::pluck('name', 'id')->all();
        return view('admin.games.index', compact('games', 'categories'));
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
    public function store(GamesRequest $request)
    {
      $file = $request->file('image');
      if($file){
        $name = $file->getClientOriginalName();
        if($file->move('images/games/', $name)){
          $games = new Game();
          $games->image = '/images/games/' . $name;
          $games->title = $request->title;
          $games->score = $request->score;
          $games->description = $request->description;
          $games->price = $request->price;
          $games->category_id = $request->category_id;
          $games->promote = $request->promote;
          $games->sold = 0;
          $games->save();
          return redirect()->route('admin.games.index');
        };
      };
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'SHOW';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $gameSearch = Game::findOrFail($id);
      $categories = Category::pluck('name', 'id')->all();
      return view('admin.games.edit', compact('gameSearch', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GamesRequest $request, $id)
    {
          $gameSearch = Game::findOrFail($id);
          $input = $request->all();
          if($file = $request->file('image')){
            $name = $file->getClientOriginalName();
            $file->move('images/games/', $name);
            $input['image'] = '/images/games/' . $name;
          }
            $input['title'] = $request->title;
            $input['price'] = $request->price;
            $input['score'] = $request->score;
            $input['description'] = $request->description;
            $input['category_id'] = $request->category_id;
            $input['promote'] = $request->promote;
            $input['sold'] = 0;
          $gameSearch->update($input);
          return redirect('admin/games');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Game::findOrFail($id)->delete();
      return redirect()->back();
    }
}
