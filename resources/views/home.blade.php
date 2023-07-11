@extends('layout.main-layout')

@section('namePage')
    Comics Home
@endsection

@section('content')
    <div class="conteiner d-flex flex-wrap">

        @foreach ($fumetti as $fumetto)
            <div class="card">
                {{ $fumetto['title'] }}
            </div>
        @endforeach
    </div>
@endsection
