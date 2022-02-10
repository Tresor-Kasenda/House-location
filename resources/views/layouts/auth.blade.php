<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="js">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="that especially build for developers and programmers.">
    <link rel="shortcut icon" href="{{ asset('app/images/logo.png') }}">
    <title>{{ config('app.name') }} | @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('admins/css/dashlite.css') }}">
</head>

<body class="nk-body bg-white npc-default pg-auth">
    <div class="nk-app-root">
        <div class="nk-main ">
            <div class="nk-wrap nk-wrap-nosidebar">
                <div class="nk-content">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('admins/js/bundle.js') }}"></script>
    <script src="{{ asset('admins/js/scripts.js') }}"></script>
</body>
</html>
