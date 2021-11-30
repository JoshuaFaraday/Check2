<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kontakt extends Controller
{
    public function index()
    {
        return view('stranky.Kontakt');
    }
}
