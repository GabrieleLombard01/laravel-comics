<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Gabriele Lombardo">
    <meta name="keywords" content="Boolean exercise Classe 100">
    <meta name="description" content="Riproduzione del sito DC Comics">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/ico">
    <title>{{ env('APP_NAME') }} | Home</title>
    {{-- Importiamo gli asset --}}
    @vite('resources/js/app.js')
</head>

<body>

    <!-- HEADER: -->
    <header>
        <div class="blue_header">
            <div class="container-lg">
                <small class="text-white fw-bold">DC POWER VISA</small>
                <small class="text-white fw-bold">ADDITIONAL DC SITES</small>
            </div>
        </div>
        <div class="container-lg ">
            <nav>
                <ul>
                    <li><a href="{{ route('home') }}">
                            <figure>
                                <img src="{{ asset('images/dc-logo.png') }}" alt="Logo">
                            </figure>
                        </a>
                    </li>
                    <li><a href="{{ route('characters') }}">CHARACTERS</a></li>
                    <li><a href="{{ route('comics') }}">COMICS</a></li>
                    <li><a href="{{ route('movies') }}">MOVIES</a></li>
                    <li><a href="{{ route('tv') }}">TV</a></li>
                    <li><a href="{{ route('games') }}">GAMES</a></li>
                    <li><a href="{{ route('collectibles') }}">COLLECTIBLES</a></li>
                    <li><a href="{{ route('videos') }}">VIDEOS</a></li>
                    <li><a href="{{ route('fans') }}">FANS</a></li>
                    <li><a href="{{ route('news') }}">NEWS</a></li>
                    <li><a href="{{ route('shop') }}">SHOP</a></li>
                    <li>
                        <input type="search">
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- JUMBO: -->
    <div class="jumbo"></div>

    <!-- MAIN: -->
    <main>
        <div class="container-lg position-relative">
            <div class="main_title">
                <h1 class="text-white">HOME</h1>
            </div>

            <!-- contents: -->
            <h1>Hello world</h1>

        </div>
    </main>

    <!-- CATEGORY: -->
    <div class="category-box">
        <div class="container-lg">
            <ul class="d-flex justify-content-between">
                <li>
                    <figure>
                        <a href="#"><img src="{{ asset('images/buy-comics-digital-comics.png') }}"
                                alt="cat_1"></a>
                    </figure>
                    <a href="">DIGITAL COMICS</a>
                </li>
                <li>
                    <figure>
                        <a href="#"><img class="pt-2" src="{{ asset('images/buy-comics-merchandise.png') }}"
                                alt="cat_1"></a>
                    </figure>
                    <a href="">DC MERCHANDISE</a>
                </li>
                <li>
                    <figure>
                        <a href="#"><img class="pt-2" src="{{ asset('images/buy-comics-subscriptions.png') }}"
                                alt="cat_1"></a>
                    </figure>
                    <a href="">SUBSCRIPTION</a>
                </li>
                <li>
                    <figure>
                        <a href="#"><img class="w-75 pt-1"
                                src="{{ asset('images/buy-comics-shop-locator.png') }}" alt="cat_1"></a>
                    </figure>
                    <a href="">COMIC SHOP LOCATOR</a>
                </li>
                <li>
                    <figure>
                        <a href="#"><img src="{{ asset('images/buy-comics-digital-comics.png') }}"
                                alt="cat_1"></a>
                    </figure>
                    <a href="">DC POWER VISA</a>
                </li>
            </ul>
        </div>
    </div>

</body>

</html>
