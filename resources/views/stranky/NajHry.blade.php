@extends('layouts.app')

@section('content')

    <style>
        /*table, th, td {*/
        /*    border-width: 3px;*/
        /*    border-collapse:unset ;*/
        /*    text-align: center;*/
        /*}*/

        /*th {*/
        /*    background-color: #4c110f;*/
        /*    font-weight: bolder;*/
        /*}*/

        /*.card-body {*/
        /*    height: 14rem;*/
        /*    width: 18rem;*/
        /*}*/

        /*.cardNajHry {*/
        /*    box-shadow: 0 4px 8px rgba(0.5, 0.5, 0.5, 0.5);*/
        /*    overflow: hidden;*/
        /*    background-color: #2C2F33;*/
        /*    border-radius: 10px;*/
        /*}*/

        /*img {*/
        /*    max-width: 100%;*/
        /*}*/

        /*.table-hover tbody tr:hover td, .table-hover tbody tr:hover th {*/
        /*    background-color: #4237c4;*/
        /*}*/
    </style>
    <body>

    <div class="container">
        <table class="tabulkaprva  data table table-striped table-dark  hawr table-hover">
            <tr>
                <th>Názov Hry</th>
                <th>Rok vydania</th>
                <th>Platforma</th>
                <th>Žáner</th>
                <th>HW Náročnosť</th>
                <th>Hodnotenie</th>
            </tr>

            <tr>
                <td>The Witcher 3: Wild Hunt</td>
                <td>2015</td>
                <td>PC/PS4/XBOX</td>
                <td>Akčné RPG</td>
                <td>Stredné</td>
                <td>100%</td>

            </tr>

            <tr>
                <td>The Last of Us 2</td>
                <td>2020</td>
                <td>PS4</td>
                <td>Akčná adventúra</td>
                <td>PS4</td>
                <td>95%</td>
            </tr>


            <tr>
                <td>Ghost of Tsushima</td>
                <td>2020</td>
                <td>PS4</td>
                <td>Akčná adventúra</td>
                <td>PS4</td>
                <td>95%</td>
            </tr>

            <tr>
                <td>Red Dead Redemption 2</td>
                <td>2018</td>
                <td>PC/PS4/XBOX</td>
                <td>Akčná adventúra</td>
                <td>Vysoké</td>
                <td>95%</td>
            </tr>

            <tr>
                <td>Star Wars Jedi: Fallen Order</td>
                <td>2020</td>
                <td>PC/PS4/XBOX</td>
                <td>Akčná adventúra</td>
                <td>Stredné</td>
                <td>94%</td>
            </tr>

            <tr>
                <td>Metro Exodus</td>
                <td>2019</td>
                <td>PC/PS4/XBOX</td>
                <td>FPS</td>
                <td>Vysoké</td>
                <td>92%</td>
            </tr>

            <tr>
                <td>Frostpunk</td>
                <td>2018</td>
                <td>PC/PS4/XBOX/Android</td>
                <td>Stratégia</td>
                <td>Nízke</td>
                <td>93%</td>
            </tr>
            <tr>
                <td>Doom Eternal</td>
                <td>2020</td>
                <td>PC/PS4/XBOX</td>
                <td>FPS</td>
                <td>Vysoké</td>
                <td>92%</td>
            </tr>

            <tr>
                <td>Cyberpunk 2077</td>
                <td>2020</td>
                <td>PC/PS4/XBOX</td>
                <td>Akčńe RPG</td>
                <td>Vysoké</td>
                <td>90%</td>
            </tr>
            <tr>
                <td>Assassin's Creed: Valhalla</td>
                <td>2020</td>
                <td>PC/PS4/XBOX</td>
                <td>Akčná adventúra</td>
                <td>Vysoké</td>
                <td>90%</td>
            </tr>
        </table>
    </div>

    <div class="d-flex justify-content-between col-span-3 col-start-5 ml-5">
        <div class="row d-flex justify-content-center ">

            @foreach($games as $game)
                <div class="col-auto ">
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
                        <div class="najhrybodycard card-body">
                            <h5 class="card-title">{{$game->name}}</h5>
                            <p class="card-text">{{$game->description}}</p>
                        </div>
                    </div>
                </div>

            @endforeach
            {{--            <div class="col-auto ">--}}
            {{--                <div class="cardNajHry mt-3 ml-5 " style="width: 18rem">--}}
            {{--                    <div class="overflow-hidden hover01">--}}
            {{--                        <img class="neviem" src="img/the_witcher_3___wallpaper_hd_4k_by_seiikya_d989ila-fullview.jpg"--}}
            {{--                             alt="witcher">--}}
            {{--                    </div>--}}
            {{--                    <div class="najhrybodycard card-body">--}}
            {{--                        <h5 class="card-title">Witcher 3: Wild Hunt</h5>--}}
            {{--                        <p class="card-text">You play as a bounty hunter, a man of the road. You set your own goals and--}}
            {{--                            choose your own destinations. Go after the bounty on the head of a nasty monster.</p>--}}
            {{--                    </div>--}}
            {{--                </div>--}}

            {{--            </div>--}}

            {{--            <div class="col-auto">--}}
            {{--                <div class="cardNajHry mt-3" style="width: 18rem">--}}
            {{--                    <div class="overflow-hidden hover01">--}}
            {{--                        <img class="neviem" src="img/lastofus.png" alt="tlou2">--}}
            {{--                    </div>--}}
            {{--                    <div class="najhrybodycard card-body">--}}
            {{--                        <h5 class="card-title">The Last of Us 2</h5>--}}
            {{--                        <p class="card-text">The Last of Us Part II is a 2020 action-adventure game developed by Naughty--}}
            {{--                            Dog and published by Sony Interactive Entertainment for the PlayStation 4.</p>--}}
            {{--                    </div>--}}
            {{--                </div>--}}

            {{--            </div>--}}

            {{--            <div class="col-auto">--}}

            {{--                <div class="cardNajHry mt-3" style="width: 18rem">--}}
            {{--                    <div class="overflow-hidden hover01">--}}
            {{--                        <img class="neviem" src="img/gotthusim.jpg" alt="got">--}}
            {{--                    </div>--}}
            {{--                    <div class="najhrybodycard card-body">--}}
            {{--                        <h5 class="card-title">Ghost of Tsushima</h5>--}}
            {{--                        <p class="card-text">Ghost of Tsushima is a 2020 action-adventure game developed by Sucker Punch--}}
            {{--                            Productions and published by Sony Interactive Entertainment.</p>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}

            {{--            <div class="col-auto">--}}

            {{--                <div class="cardNajHry mt-3" style="width: 18rem">--}}
            {{--                    <div class="overflow-hidden hover01">--}}
            {{--                        <img class="neviem" src="img/rdrrrrrrrrrrr.jpg" alt="rdr">--}}
            {{--                    </div>--}}
            {{--                    <div class="najhrybodycard card-body">--}}
            {{--                        <h5 class="card-title">Red Dead Redemption 2</h5>--}}
            {{--                        <p class="card-text">Arthur Morgan and the Van der Linde gang are outlaws on the run. With--}}
            {{--                            federal agents and the best bounty hunters in the nation massing on their heels, the gang--}}
            {{--                            .</p>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}


            {{--            <div class="col-auto">--}}

            {{--                <div class="cardNajHry mt-3" style="width: 18rem">--}}
            {{--                    <div class="overflow-hidden hover01">--}}
            {{--                        <img class="neviem" src="img/frostpunk.jpg" alt="frost">--}}
            {{--                    </div>--}}
            {{--                    <div class="najhrybodycard card-body">--}}
            {{--                        <h5 class="card-title">Frostpunk</h5>--}}
            {{--                        <p class="card-text">Frostpunk is a city-building survival videogame developed and published by--}}
            {{--                            11 bit studios. Players take on the role of a leader in an alternate-history late 19th--}}
            {{--                            century, in which they must build and maintain a city during a worldwide volcanic--}}
            {{--                            winter.</p>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}

        </div>

    </div>
    </body>
    </html>

@endsection
