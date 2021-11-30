<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{


    public function index(Post $post)
    {
        return view('stranky.commentForm', [
            'post' => $post
        ]);
    }

    public function store(Post $post)
    {

        $attributes = request()->validate([
            'text' => 'required'
        ]);

        //TODO pridelovanie použivatelovi

        $attributes['post_id'] = $post->id;
        Comment::create($attributes);
        return redirect('/stena');
    }


}
