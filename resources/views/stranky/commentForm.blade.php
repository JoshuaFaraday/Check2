@extends('layouts.app')

@section('content')

    <div class="col-md-8">
        <form method="post" enctype="multipart/form-data" action="{{ route('addComment',$post->id) }}">

            @csrf
            <div>
                <div class="mb-3">
                    <label for="text" class="form-label">Komentare</label>
                    <textarea name="text" class="form-control mb-3" id="text"> </textarea>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Odoslať</button>
                </div>
            </div>
        </form>
    </div>

@endsection
