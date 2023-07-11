@extends('layout.main-layout')

@section('namePage')
    singlePage
@endsection

@section('content')
    <main id="singlePage">
        <div class="container-page">
            <h1>
                {{ $fumetto['title'] }}
            </h1>

            <div class="commerc text-light">
                <div class="price">
                    price: <strong>{{ $fumetto['price'] }}</strong>

                </div>

                <select name="avaiable" id="avaiable">

                </select>
            </div>

            <p>
                {{ $fumetto['description'] }}
            </p>

        </div>

        <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="">
    </main>
@endsection
