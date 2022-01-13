@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center flex-column">

        <p class="info">
            Web o počítačoch a internete
            🎮 Hry a všetko čo o nich chcete vedieť denne aktualizované na vašej obľúbenej stránke.
        </p>

        <p class="Novinky"> ▪️ Novinky </p>
        <p class="Recenzie">▪️ Recenzie </p>
        <p class="Rozhovory">▪️ Rozhovory </p>
        <p class="Videa">▪️ Videá </p>


        <p class="info">
            Hráme sa celé dni na PC, konzolách, handheldoch, mobiloch, aby sme o tom mohli písať. Nájdete nás na
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
                                    <h5>...</h5>
                                    <p>...</p>
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
