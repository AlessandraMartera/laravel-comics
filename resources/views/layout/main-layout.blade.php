<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('namePage')</title>

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    @include('components.header')

    <h1>root</h1>

    @yield('content')

    @include('components.footer')
</body>

</html>
