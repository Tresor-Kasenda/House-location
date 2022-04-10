<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="js">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="that especially build for developers and programmers.">
    <meta http-equiv="refresh" content="60">
    <link rel="shortcut icon" href="{{ asset('app/images/logo.png') }}">
    <title>{{ config('app.name') }} | @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('app/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('app/css/swiper-bundle.min.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
</head>

<body  class="text-gray-500 min-h-screen bg-gray-100">
    <div class="flex h-screen w-full justify-center items-center">
        @yield('content')
    </div>
</body>
</html>
