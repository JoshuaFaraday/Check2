<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NajhryController extends Controller
{
    public function index()
    {
        return view('stranky.NajHry');
    }
}
