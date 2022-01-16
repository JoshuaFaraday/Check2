<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('stranky.about', [
            'games' => Game::all()->whereNotNull('image')
        ]);
    }
}
