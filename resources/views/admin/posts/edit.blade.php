@extends('layouts.app')
@section('content')

    <div class="container-flex">
        <div class="d-flex justify-content-center">
            <div class="col-md-8">
                <form method="post" enctype="multipart/form-data" action="{{route('admin.posts.update',$post->id)}}">
                    @csrf
                    @method('PATCH')
                    <div>
                        <div class="mb-3">
                            @if($post->image != null)
                                <img class="neviem" src="{{ asset('storage/' . $post->image) }}"
                                     alt="{{$post->title}}">
                            @else
                                <img class="neviem" src="{{ asset('storage/placeholder.jpg') }}"
                                     alt="{{$post->title}}">
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="formFile" class="form-label">Image</label>
                            <input name="image" class="form-control mb-3" id="image" type="file">
                            <div class="form-group text-danger">
                                {{$errors->first('image')}}
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input name="title" class="form-control mb-3" id="title" type="text"
                                   value="{{$post->title}}">
                            <div class="form-group text-danger">
                                {{$errors->first('title')}}
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="text" class="form-label">Text</label>
                            <textarea class="border border-secondary p-2 w-100" id="text" rows="5"
                                      name="text"
                            >{{$post->text}}</textarea>
                            <div class="form-group text-danger">
                                {{$errors->first('text')}}
                            </div>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
