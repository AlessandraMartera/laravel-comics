@extends('layout.main-layout')

@section('namePage')
    Comics Home
@endsection

@section('content')
    <main class="bg-dark">
        <div class="container d-flex flex-wrap">

            @foreach ($fumetti as $fumetto)
                <div class="card bg-dark text-light">
                    <a href="{{ route('singlePage') }}">
                        <img src="{{ $fumetto['thumb'] }}" alt="">
                        <div>
                            {{ $fumetto['title'] }}
                        </div>
                    </a>

                </div>
            @endforeach
        </div>

    </main>
@endsection
