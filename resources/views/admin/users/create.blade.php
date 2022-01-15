@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Add new user') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="post"
                              action="{{route('admin.users.store')}}"> {{--premenna zavisi ci budeme vytvarat noveho uzivatela alebo editovat existujuceho--}}
                            @csrf {{--ochrana formulara--}}
                            @method('POST')
                            <div class="form-group">
                                <label for="name">Full name</label>
                                <input required type="text" class="form-control" id="name" name="name" placeholder="Full name"
                                       value="{{old('name')}}">
                                {{--    old vrati to čo mam už napr rozpísane napr pri editacii rozpisane meno a netrafim heslo tak rozpisane meno zostane nezmenene--}}
                                {{$errors->first('name')}}
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input required type="email" class="form-control" id="email" name="email"
                                       aria-describedby="emailHelp"
                                       placeholder="Enter Email" value="{{old('email')}}">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                    anyone else.</small>
                                {{$errors->first('email')}}
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input required type="password" class="form-control" id="password" name="password"
                                       placeholder="Password">
                                {{$errors->first('password')}}
                            </div>

                            <div class="form-group">
                                <label for="password">Password again</label>
                                <input required type="password" class="form-control" id="password" name="password_confirmation"
                                       placeholder="Password again">
                                {{$errors->first('password_confirmation')}}
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-primary form-control">
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
