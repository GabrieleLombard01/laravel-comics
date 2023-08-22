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

    <div class="comic-info-second-box">
        <div class="container-lg d-flex align-items-center justify-content-center">

            <div class="col-5 border ">
                <h2 class="ps-5">Talent</h2>
                <hr>
                <h4 class="ps-5 d-inline">Art by</h4>

                @foreach ($products as $product)
                    <p class="d-inline-block">{{ $product['artists'] }}</p>
                @endforeach

            </div>

            <div class="col-5 border">
                <h2>Specs</h2>
                <hr>
                <h4 class="d-inline">Series</h4>

            </div>

        </div>

    </div>

@endsection
