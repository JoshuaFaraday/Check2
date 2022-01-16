@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 table-responsive">
                <a href="{{route('admin.games.create')}}" class="btn btn-sn btn-primary ">Add Game <i
                        class="fas fa-plus"></i></a>

                <table class="table table-hover table-dark">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Rating</th>
                        <th scope="col">Created at</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($games as $game)
                        <tr>
                            <th scope="row">{{$game->id}}</th>
                            <td>{{$game->name}}</td>
                            <td>
                                <img width="40" src="{{ asset('storage/' . $game->image) }}" alt="{{$game->name}}">
                            </td>
                            <td>{{$game->rating}} %</td>
                            <td>{{$game->created_at}}</td>
                            <td>
                                <div class="d-flex justify-content-around">
                                    <a href="{{route('admin.games.edit', $game->id)}}" title="Edit"
                                       class="btn btn-sn btn-primary"> Edit <i class="fas fa-edit"></i></a>
                                    <form action="{{route('admin.games.destroy',$game->id)}}" method="POST"
                                          enctype="multipart/form-data">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" title="Delete" class="btn btn-sn btn-danger"
                                        ><i class="far fa-trash-alt"></i></button>
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

