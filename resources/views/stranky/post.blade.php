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
                    {{--                    Andrzej Sapkowski--}}

                    {{$post->created_at->diffForHumans()}}
                </div>
            </div>
        </div>

        <div class="post">
            <div class="border-top border-dark">
                <p class="preserve">{{$post->text}}</p>
            </div>
            <div class="d-flex border-top border-secondary flex-column pt-2" id="comments">
                <div class="ml-3">
                    <h3>Comments:</h3>
                    <div class="d-flex flex-column">
                        @auth
                        <a href="#" class="commentButton btn btn-secondary">Add comment</a>
                        <div style="display: none " id="commentWrapper" data-postid="{{$post->id}}">
                            <textarea class="form-control" rows="5" name="commentText" id="commentText"></textarea>
                            <p id="commentsList-p" class="text-danger" style="display: none">Comment can not be
                                empty!</p>

                        </div>
                        @endauth
                        @guest
                            <div class="cardNastenka card-bodyNastenka d-flex flex-column justify-content-center">
                                <p>You need to be logged in to post comments !</p>
                                <a class="btn btn-primary" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </div>
                            @endguest
                    </div>
                    <div id="commentsList">
                        @foreach($post->comments->reverse() as $comment)
                            <div class="d-flex justify-content mt-2 border-top border-dark" data-id="{{$comment->id}}">
                                <div class="col-1 p-0  mw-100">

                                    <img
                                        src="https://eu.ui-avatars.com/api/?size=75&name={{$comment->author()->first()->name}}&background=random">
                                </div>
                                <div class="col-11 p-0 d-flex flex-column">
                                    <div>
                                        <div class="d-flex justify-content-between">
                                            <div class="pt-2 pl-2">
                                                <h6>{{$comment->author()->first()->name}}</h6>
                                                <p class="comment-timestamp"><i
                                                        class="far fa-clock pr-1"></i>{{$comment->created_at->diffForHumans()}}
                                                </p>
                                            </div>
                                            <div class="p-2">
                                                @auth
                                                @if(Auth::user()->id == 1 || Auth::user()->id == $comment->author()->first()->id)

                                                    <form action="{{route('comment.destroy',$comment->id)}}"
                                                          method="POST"
                                                          enctype="multipart/form-data">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" title="Delete"
                                                                class="btn btn-sn btn-danger"
                                                                data-confirm="Are you sure?"><i
                                                                class="far fa-trash-alt"></i></button>
                                                    </form>
                                                @endif
                                                @endauth
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pt-2 pl-2">
                                        <p class="preserve">{{$comment->text}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var token = '{{csrf_token()}}';
        var urlComment = '{{route('addComment')}}';
    </script>

@endsection
