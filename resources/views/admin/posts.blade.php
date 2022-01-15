@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <a href="{{route('admin.posts.create')}}" class="btn btn-sn btn-primary ">Add Post <i
                        class="fas fa-plus"></i></a>

                <table class="table table-hover table-dark">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Image</th>
                        <th class="d-flex justify-content-center " scope="col">Likes / Dislikes</th>
                        <th scope="col">Comments</th>
                        <th scope="col">Created at</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <th scope="row">{{$post->id}}</th>
                            <td><a href="{{ route('post',$post->id) }} " class="text-decoration-none text-light">{{$post->title}}</a></td>
                            <td>
                                <img width="40px" src="{{ asset('storage/' . $post->image) }}">
                            </td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    @if($post->likes()->where('like','=','1')->count() > 0)
                                        <div class="text-success">
                                            {{$post->likes()->where('like','=','1')->count()}}
                                        </div>
                                    @else
                                        <div class="text-secondary">
                                            {{$post->likes()->where('like','=','1')->count()}}
                                        </div>
                                    @endif
                                    <div class="px-1">
                                        /
                                    </div>
                                    @if($post->likes()->where('like','=','0')->count() > 0)
                                        <div class="text-danger">
                                            {{$post->likes()->where('like','=','0')->count()}}
                                        </div>
                                    @else
                                        <div class="text-secondary">
                                            {{$post->likes()->where('like','=','0')->count()}}
                                        </div>
                                    @endif
                                </div>
                            </td>
                            <td>{{$post->comments->count()}}</td>
                            <td>{{$post->created_at}}</td>
                            <td>
                                <div class="d-flex justify-content-around">
                                    <a href="{{route('admin.posts.edit', $post->id)}}" title="Edit"
                                       class="btn btn-sn btn-primary"> Edit <i class="fas fa-edit"></i></a>
                                    <form action="{{route('admin.posts.destroy',$post->id)}}" method="POST"
                                          enctype="multipart/form-data">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" title="Delete" class="btn btn-sn btn-danger"
                                                data-confirm="Are you sure?"><i class="far fa-trash-alt"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>

                    @endforeach

                    </tbody>
                </table>

            </div>
        </div>
    </div>


@endsection

