<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function postLike(Request $request)
    {
        $post_id = $request['postId'];
        $is_like = $request['isLike'] === 'true';
        $update = false;
        $post = Post::find($post_id);
        if (!$post) {
            return null;
        }

        $user = Auth::user();
        $like = $user->likes()->where('post_id', $post_id)->first();

        if ($like) {
            $already_like = $like->like;
            $update = true;
            if ($already_like == $is_like) {
                $like->delete();
                return null;
            }
        } else {
            $like = new Like();
        }

        $like->like = $is_like;
        $like->user_id = $user->id;
        $like->post_id = $post->id;

        if ($update) {
            $like->update();
        } else {
            $like->save();
        }

        return null;
    }

}
