@extends('layouts.main')

@section('title', $product['title'])

@section('main-content')
    <div class="myCard">
        <img src="{{ $product['thumb'] }}" alt="{{ $product['title'] }}">
    </div>
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
                <h2 class="FW-BOLD text-end">ADVERTISEMENT</h2>
                <img src="{{ asset('images/adv.jpg') }}" alt="">
            </div>

        </div>

    </div>

    <div class="comic-info-second-box">

        <div class="container-lg d-flex align-items-center justify-content-center">

            <div class="talent-box ">
                <div class="long_card">
                    <h3>Talent</h3>
                </div>
                <div class="long_card d-flex justify-content-between">
                    <div class="col-2">
                        <h5>Art by</h5>
                    </div>
                    <div class="col-8">
                        @foreach ($product['artists'] as $artist)
                            <small class="fw-bold ps-2 d-inline-block">{{ $artist }}</small>
                        @endforeach
                    </div>
                </div>
                <div class="long_card d-flex  justify-content-between">
                    <div class="col-2">
                        <h5>Written by</h5>
                    </div>
                    <div class="col-8">
                        @foreach ($product['writers'] as $writer)
                            <small class="fw-bold ps-2 d-inline-block">{{ $writer }}</small>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="specs-box ">
                <div class="long_card">
                    <h3>Specs</h3>
                </div>
                <div class="long_card d-flex justify-content-between">
                    <div class="col-2">
                        <h5>Series</h5>
                    </div>
                    <div class="col-8">
                        <small class="fw-bold ps-2 d-inline-block text-end">{{ $product['series'] }}</small>
                    </div>
                </div>
                <div class="long_card d-flex justify-content-between">
                    <div class="col-2">
                        <h5>U.S. Price:</h5>
                    </div>
                    <div class="col-8">
                        <small class="fw-bold ps-2 d-inline-block text-end">{{ $product['price'] }}</small>
                    </div>
                </div>
                <div class="long_card d-flex justify-content-between">
                    <div class="col-2">
                        <h5>ON Sale Date:</h5>
                    </div>
                    <div class="col-8">
                        <small class="fw-bold ps-2 d-inline-block text-end">{{ $product['sale_date'] }}</small>
                    </div>
                </div>
            </div>

        </div>

        <div class="container-lg icons-box">
            <div class="row align-items-center pt-4">
                <div class="col-3 d-flex justify-content-between align-items-center gap-4">
                    <h4>DIGITAL COMICS </h4>
                    <img src="{{ asset('images/buy-comics-digital-comics.png') }}" alt="icon">

                </div>
                <div class="col-3 d-flex justify-content-between align-items-center gap-4">
                    <h4> SHOP DC</h4>
                    <img src="{{ asset('images/buy-comics-digital-comics.png') }}" alt="icon">

                </div>
                <div class="col-3 d-flex justify-content-between align-items-center gap-4">
                    <h4> COMIC SHOP</h4>
                    <img src="{{ asset('images/buy-comics-digital-comics.png') }}" alt="icon">

                </div>
                <div class="col-3 d-flex justify-content-between align-items-center gap-4">
                    <h4>SUBSCRIPTION</h4>
                    <img src="{{ asset('images/buy-comics-digital-comics.png') }}" alt="icon">

                </div>

            </div>

        </div>

    </div>

@endsection
