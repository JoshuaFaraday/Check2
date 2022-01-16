<?php

namespace App\Http\Controllers;

use App\Http\Requests\Posts\StorePostRequest;
use App\Models\Like;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(Post $post, Request $request)
    {
        if ($request->is('admin/*')) {
            return view('admin.posts', ['posts' => Post::all()]);
        } else {
            return view('stranky.posts');
        }
    }

    public function show(Post $post)
    {
        return view('stranky.post', [
            'post' => $post
        ]);
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(StorePostRequest $request)
    {
        $attributes = $request->validated();

        $path = request()->file('image')->store('posts', 'public');
        $attributes['image'] = $path;

        Post::create($attributes);
        return redirect(route('admin.posts'));
    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit', ['post' => $post]);
    }

    public function update(StorePostRequest $request, Post $post)
    {
        $attributes = $request->validated();

        $path = request()->file('image')->store('posts', 'public');
        $attributes['image'] = $path;

        $post->update($attributes);
        return redirect()->route('admin.posts');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.posts');
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

                return [$post->likes()->where('like', '=', '1')->count(), $post->likes()->where('like', '=', '0')->count()];
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

        return [$post->likes()->where('like', '=', '1')->count(), $post->likes()->where('like', '=', '0')->count()];
    }

}
