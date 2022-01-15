@extends('layouts.app')

@section('content')
    <h1 class="d-flex justify-content-center">Top Games (sorted by rating)</h1>
    <div class="d-flex flex-wrap justify-content-center">
        @foreach($games as $game)
            <div class="col-auto">
                <div class="cardNajHry mt-3 " style="width: 18rem">
                    <div class="overflow-hidden hover01">

                        @if($game->image != null)
                            <img class="neviem" src="{{ asset('storage/' . $game->image) }}"
                                 alt="{{$game->name}}">
                        @else
                            <img class="neviem" src="{{ asset('storage/placeholder.jpg') }}"
                                 alt="{{$game->name}}">
                        @endif
                    </div>
                    <div class="najhrybodycard card-body h-auto">
                        <h5 class="card-title font-weight-bold">{{$game->name}}</h5>
                        <p class="card-text">{{$game->description}}</p>

                        <div class="border-top border-secondary">
                            <p class="card-text">Platform: {{$game->platform}}</p>
                            <p class="card-text">Relase date: {{$game->relase_date}}</p>
                            <p class="card-text">Genre: {{$game->genre}}</p>
                            <p class="card-text">HW requirements: {{$game->HW_requirements}}</p>
                            <div class="border-top border-secondary">
                                @if($game->rating < 50)
                                    <strong class="card-text text-danger">Rating: {{$game->rating}}</strong>
                                @elseif($game->rating < 75)
                                    <strong class="card-text text-warning ">Rating: {{$game->rating}}</strong>
                                @else
                                    <strong class="card-text text-success">Rating: {{$game->rating}}</strong>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
