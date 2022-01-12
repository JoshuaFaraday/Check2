@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Edit new user') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                            <div class="form-group text-danger">        {{--vypíše všetky chyby (meno email heslo) validator--}}
                                @foreach($errors->all() as $error)
                                    {{ $error }}<br>
                                @endforeach
                            </div>
                            <form method="post"
                                  action="{{route('admin.users.update', $user->id)}}"> {{--premenna zavisi ci budeme vytvarat noveho uzivatela alebo editovat existujuceho--}}
                                @csrf {{--ochrana formulara--}}
                                @method('PATCH')
                                <div class="form-group">
                                    <label for="name">Full name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Full name"
                                           value="{{old('name', $user->name)  }}">
                                    {{--    old vrati to čo mam už napr rozpísane napr pri editacii rozpisane meno a netrafim heslo tak rozpisane meno zostane nezmenene--}}
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"
                                           placeholder="Enter Email" value="{{old('email',  $user->email)  }}">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                </div>

                                <div class="form-group">
                                    <label for="password">Password again</label>
                                    <input type="password" class="form-control" id="password" name="password_confirmation"
                                           placeholder="Password again">
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
