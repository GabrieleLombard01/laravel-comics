@extends('layouts.main')

@section('title', $product['title'])

@section('main-content')
    <div class="top_line"></div>
    <div class="comic-info-box bg-white">
        <div class="container-lg d-flex justify-content-center align-items-center gap-4">

            <div class="col-7">

                <!-- contents: -->
                <h1 class="">{{ $product['title'] }}</h1>

                <p>{{ $product['description'] }}</p>
            </div>

            <!--ADV-->
            <div class="col-2">
                <img src="{{ asset('images/adv.jpg') }}" alt="">
            </div>

        </div>

    </div>
@endsection
