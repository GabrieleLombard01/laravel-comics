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
    <title>{{ env('APP_NAME') }} | News</title>
    {{-- Importiamo gli asset --}}
    @vite('resources/js/app.js')
</head>

<body>

    {{-- HEADER --}}
    @include('includes.header')

    {{-- JUMBO --}}
    @include('includes.jumbo')

    <!-- MAIN: -->
    <main>
        <div class="container-lg position-relative">
            <div class="main_title">
                <h1 class="text-white">NEWS</h1>
            </div>

            <!-- contents: -->
            <h1 class="pt-4 text-white">Hello world</h1>

        </div>
    </main>

    {{-- NAVBAR --}}
    @include('includes.navbar')


    {{-- DETAILS --}}
    @include('includes.details')


    {{-- FOOTER --}}
    @include('includes.footer')

</body>

</html>
