@extends('layouts.app')

@section('content')

    <div class="d-flex justify-content-center flex-column">
        <div class="d-flex justify-content-center flex-column">
        <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="...">
        <h1>{{$post->title}}</h1>
        <p>{{$post->text}}</p>
            <a href="#comments"> sdjkongsjognjisk</a>
            <br> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
        <div class="border-top border-secondary" id="comments">
            <h3 >Comments: </h3>
            @foreach($post->comments as $comment)
                <p>{{$comment->text}}</p>
                @endforeach
        </div>
    </div>

@endsection
