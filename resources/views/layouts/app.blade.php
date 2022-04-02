<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="refresh" content="60">
    <title>Karibu kwako - @yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('app/css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('app/images/logo.png')  }}">
    @livewireStyles
</head>
<body class="text-gray-500">
    @include('frontends.partials.header')
    <div>
        @yield('content')
    </div>
    @include('frontends.partials.footer')
    @livewireStyles
    @if(env('APP_ENV') === 'local')
        <script src="{{ asset('app/js/jquery.js') }}"></script>
    @else
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        ></script>
    @endif
    <script src="{{ asset('app/js/hamburger.js') }}"></script>
    @include('sweetalert::alert')
    @yield("scripts")
</body>
</html>
