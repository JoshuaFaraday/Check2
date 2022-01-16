<?php

namespace App\Http\Controllers;

use App\Http\Requests\Games\StoreGameRequest;
use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index(Request $request)
    {
        if ($request->is('admin/*')) {
            return view('admin.games', ['games' => Game::all()]);
        } else {
            return view('stranky.topGames', ['games' => Game::all()->sortByDesc('rating')]);
        }
    }

    public function create()
    {
        return view('admin.games.create');
    }

    public function store(StoreGameRequest $request)
    {
        $attributes = $request->validated();

        $path = request()->file('image')->store('games', 'public');
        $attributes['image'] = $path;

        Game::create($attributes);
        return redirect()->route('admin.games');
    }

    public function edit(Game $game)
    {
        return view('admin.games.edit', ['game' => $game]);
    }


    public function update(StoreGameRequest $request, Game $game)
    {
        $attributes = $request->validated();

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
}
