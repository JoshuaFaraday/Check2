<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{


    public function index(Post $post)
    {
        return view('stranky.commentForm', [
            'post' => $post
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'commentText' => 'required|string'
        ]);
        $commentText = $request['commentText'];
        $postId = $request['postId'];
        if (empty($commentText)) {
            $status = false;
            return response()->json($status);

        } else {
            $comment = new Comment();
            $comment->text = $commentText;
            $comment->user_id = Auth::user()->id;
            $comment->post_id = $postId;
            $comment->save();
            return [
                'author' => $comment->author()->first()->name,
                'timestamp' => $comment->created_at->diffForHumans(),
                'text' => $comment->text
            ];
        }

    }

    public function destroy(Comment $comment)
    {
        $post_id = $comment->post()->first()->id;
        if (Auth::user()->id == 1 || Auth::user()->id == $comment->author()->first()->id ) {
            $comment->delete();
        }
        return redirect()->back();
    }


}
