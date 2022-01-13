@extends('layouts.app')

@section('content')

    <div class="d-flex justify-content-center flex-column my-n4 ">

        <div class="d-flex justify-content-center flex-column">
            <div class="image overflow-hidden">
                <img src="{{ asset('storage/' . $post->image) }}">
            </div>
            <div class="d-flex justify-content-between post mt-1">
                <div>
                    <h1>{{$post->title}}</h1>
                </div>
                <div>
                    Andrzej Sapkowski
                    {{$post->created_at}}
                </div>
            </div>
        </div>

        <div class="post">
            <div class="border-top border-dark">
                <p>{{$post->text}}</p>
            </div>
            <div class="d-flex border-top border-secondary flex-column pt-2" id="comments">
                <div class="ml-3">
                    <h3>Comments:</h3>
                    <a href="{{route('post.add.comment',$post->id)}}"  class="btn btn-secondary" >Add comment</a>
                    @foreach($post->comments as $comment)
                        <div class="d-flex justify-content mt-2 border-top border-dark">
                            <div class="col-1 p-0  mw-100">

                                <img
                                    src="https://eu.ui-avatars.com/api/?size=75&name={{$comment->author()->first()->name}}&background=random">
                            </div>
                            <div class="col-11 p-0 d-flex flex-column">
                                <div>
                                    <div class="pt-2 pl-2">
                                        <h6>{{$comment->author()->first()->name}}</h6>
                                        <p class="comment-timestamp"><i
                                                class="far fa-clock pr-1"></i>{{$comment->created_at->format("d/m/Y H:i:s")}}
                                        </p>
                                    </div>
                                </div>
                                <div class="pt-2 pl-2">
                                    <p>{{$comment->text}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
