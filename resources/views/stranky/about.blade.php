@extends('layouts.app')

@section('content')

    <head>
        <!-- Latest compiled JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>


            .d-md-block {
                background: #383637;
                opacity: 75%;
            }
            .carousel-inner{
                margin-left: 5%;
            }
            .rounded-pill{
                margin-right: 10%;
            }

        </style>
    </head>


    <div class="container ml-10">

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


        <div class="container mt-3,">

            <div class="col-12">

                <!-- Carousel -->
                <div id="demo" class="carousel slide" data-bs-ride="carousel">

                    <!-- Indicators/dots -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                    </div>

                    <!-- The slideshow/carousel -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/lastofus.png" alt="tlou2" class="d-block" style="width:90%">
                            <div class="carousel-caption d-md-block rounded-pill">
                                <h3>The Last of Us 2</h3>
                                <p class="nazov">Action-adventure game developed by Naughty Dog and published by Sony
                                    Interactive Entertainment for the PlayStation 4</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/the_witcher_3___wallpaper_hd_4k_by_seiikya_d989ila-fullview.jpg" alt="Witcher"
                                 class="d-block" style="width:90%">
                            <div class="carousel-caption d-md-block rounded-pill">
                                <h3 class="text-background-dark">
                                    The Witcher 3: Wild Hunt</h3>
                                <p class="nazov">Professional Monster Hunter</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/frostpunk.jpg" alt="lol" class="d-block" style="width:90%">
                            <div class="carousel-caption d-md-block rounded-pill">
                                <h3>League of Legends</h3>
                                <p class="nazov">Rakovina</p>
                            </div>
                        </div>
                    </div>

                    <!-- Left and right controls/icons -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>


            </div>
        </div>
    </div>
    </body>
    </html>

@endsection
