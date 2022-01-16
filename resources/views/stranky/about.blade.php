@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center flex-column">

        <p class="info">
            Web about computers and internet
            🎮 Games and all what you want to know about them, daily actualised on your favorite page.
        </p>
        <p class="Novinky"> ▪️ News </p>
        <p class="Recenzie">▪️ Reviews </p>
        <p class="Rozhovory">▪️ Interviews </p>
        <p class="Videa">▪️ Videos </p>

        <p class="info">
            We play all day on PCs, consoles, handhelds, mobile phones to we can write about it. You can find us at
            www.sector.sk
        </p>

        <div class="d-flex justify-content-center flex-column mt-3 w-50  align-self-center">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    @foreach($games as $game)
                        @if($loop->first)
                            <li data-target="#carouselExampleIndicators " data-slide-to="{{$loop->index}}"
                                class="active"></li>
                        @else
                            <li data-target="#carouselExampleIndicators " data-slide-to="{{$loop->index}}"></li>
                        @endif
                    @endforeach
                </ol>

                <div class="carousel-inner">
                    @foreach($games as $game)

                        @if($loop->first)
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{ asset('storage/' . $game->image) }}"
                                     alt="{{$game->name}}">
                                <div class="carousel-caption d-none d-md-block rounded-pill">
                                    <h4>{{$game->name}}</h4>
                                    <h5>{{$game->genre}}</h5>
                                    <p>{{$game->rating}}%</p>
                                </div>
                            </div>
                        @else
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ asset('storage/' . $game->image) }}"
                                     alt="{{$game->name}}">
                                <div class="carousel-caption d-none d-md-block rounded-pill">
                                    <h4>{{$game->name}}</h4>
                                    <h5>{{$game->genre}}</h5>
                                    <p>{{$game->rating}}%</p>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
@endsection
