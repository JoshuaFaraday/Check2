<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        return view('stranky.upload');
    }
    public function store()
    {

        $attributes = request()->validate([
           'image' => 'required|image',

        ]);
        $path = request()->file('image')->store('posts', 'public');
        $attributes['image'] = $path;


        Post::create($attributes);
       return redirect('/stena');
    }

    public function wall()
    {
        return view('stranky.stena');
    }
}
