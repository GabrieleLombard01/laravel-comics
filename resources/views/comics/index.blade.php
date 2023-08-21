@extends('layouts.main')

@section('title', 'Comics')

@section('main-content')
    <div class="container-lg position-relative">
        <div class="main_title">
            <h1 class="text-white">CURRENT SERIES</h1>
        </div>

        <!-- contents: -->
        <div id="products" class="container card-deck">

            @foreach ($products as $product)
                <div class="my_card">
                    <img src="{{ $product['thumb'] }}" alt="{{ $product['title'] }}">
                    <div class="card-body text-center">
                        <h5 class="pt-2 text-white">{{ $product['title'] }}</h5>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
@endsection
