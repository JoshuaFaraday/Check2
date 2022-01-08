<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class NajhryController extends Controller
{
    public function index()
    {
        return view('stranky.NajHry',['games'=>Game::all()]);
    }
}
