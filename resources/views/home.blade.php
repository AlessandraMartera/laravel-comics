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

    <section>
        <!-- nav -->
        <nav>
            <div class="wrapper">
                <ul>
                    {{-- <li v-for="navButton in navButtons">

                    <img :src="navButton.immage" alt="">
                    {{ navButton . text }}
                </li> --}}
                </ul>
            </div>

        </nav>
        <!-- content uls links -->
        <div id="section_footer">
            <div class="wrapper">

                <div id="list">

                    <ul>
                        <li>
                            <h2>DC COMICS</h2>
                        </li>
                        <li>Characters</li>
                        <li>Comics</li>
                        <li>Movies</li>
                        <li>TV</li>
                        <li>Games</li>
                        <li>Videos</li>
                        <li>News</li>
                    </ul>

                    <ul>
                        <li>
                            <h2>SHOP</h2>
                        </li>
                        <li>Shop DC</li>
                        <li>Shop DC Collectibles</li>

                    </ul>


                    <ul>
                        <li>
                            <h2>DC</h2>
                        </li>
                        <li>Characters</li>
                        <li>Comics</li>
                        <li>Movies</li>
                        <li>TV</li>
                        <li>Games</li>
                        <li>Videos</li>
                        <li>News</li>
                        <li>Videos</li>
                        <li>Videos</li>
                        <li>Videos</li>
                        <li>Videos</li>
                    </ul>

                    <ul>
                        <li>
                            <h2>SITES</h2>
                        </li>
                        <li>Shop DC</li>
                        <li>Shop DC Collectibles</li>

                    </ul>
                </div>

                <div id="logo-bg">

                </div>
            </div>
        </div>

    </section>
@endsection
