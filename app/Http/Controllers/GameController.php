<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{

    public function adminIndex() {
        return view('admin.games',['games'=>Game::all()]);
    }



    public function edit(Game $game)
    {
        return view('admin.games.edit', ['game' => $game]);
    }


    public function update(Request $request, Game $game)
    {
        $attributes = $request->validate([
            'image' => 'required|image',
            'name' => 'required|string',
            'relase_date' => 'required|digits:4|integer|min:1900|max:2099',
            'platform' => 'required|string',
            'genre' => 'required|string',
            'HW_requirements' => 'required|string',
            'rating' => 'required|integer|min:0|max:100',
            'description' => 'required|string|max:100'
        ]);
        $path = request()->file('image')->store('games', 'public');
        $attributes['image'] = $path;
        $game->update($attributes);
        return redirect()->route('admin.games');
    }

    public function destroy(Game $game)
    {
        $game->delete();
        return redirect()->route('admin.games');
    }

    public function create()
    {
        return view('admin.games.create');

    }

    public function store()
    {

        $attributes = request()->validate([
            'image' => 'required|image',
            'name' => 'required|string',
            'relase_date' => 'required|digits:4|integer|min:1900|max:2099',
            'platform' => 'required|string',
            'genre' => 'required|string',
            'HW_requirements' => 'required|string',
            'rating' => 'required|integer|min:0|max:100',
            'description' => 'required|string'

        ]);
        $path = request()->file('image')->store('games', 'public');
        $attributes['image'] = $path;


        Game::create($attributes);
        return redirect()->route('admin.games');
    }


}
