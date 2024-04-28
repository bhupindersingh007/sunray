<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }} - @yield('title')</title>

    {{-- Bootstrap --}}
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])


    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/png">

</head>

<body>


    @include('partials.header')
    @include('partials.alerts')


    <main style="min-height: 76vh;">
        @yield('content')
    </main>

    @include('partials.footer')

</body>

</html>