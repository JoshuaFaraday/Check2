@extends('layouts.app')

@section('content')
{{--<style>--}}
{{--    .card-body,container,row,card,card-header,session,div {--}}
{{--        text-color: #cc0be1;--}}

{{--    }--}}

{{--</style>--}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="userheaderindex">
                    <div class="card-header ">{{ __('Users') }}</div>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @can('create', \App\Models\User::class)
                            <a href="{{ route('user.create') }}" class="btn btn-success mb-2" role="button">Add new
                                user</a>
                        @endcan
                        {!!$grid->show()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
