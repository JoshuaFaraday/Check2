@extends('layouts.app')

@section('content')
    <div class="container-flex ml-5">
        <div class="row">
            <div class="d-flex justify-content-start flex-wrap">
                @foreach (\App\Models\Post::all() as $post)
                   <x-post :post="$post"></x-post>
                @endforeach
            </div>
            </div>

        </div>
    </div>

    <script>
        var token = '{{csrf_token()}}';
        var urlLike = '{{route('like')}}';
    </script>
@endsection
