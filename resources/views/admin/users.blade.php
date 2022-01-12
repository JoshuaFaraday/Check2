@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <a href="{{route('admin.users.create')}}" class="btn btn-sn btn-primary ">Add User <i
                        class="fas fa-plus"></i></a>

                <table class="table table-hover table-dark">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Created at</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->created_at}}</td>
                            <td>
                                <div class="d-flex justify-content-around">
                                    <a href="{{route('admin.users.edit', $user->id)}}" title="Edit"
                                       class="btn btn-sn btn-primary"> Edit <i class="fas fa-edit"></i></a>
                                    <form action="{{route('admin.users.destroy',$user->id)}}" method="POST"
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

