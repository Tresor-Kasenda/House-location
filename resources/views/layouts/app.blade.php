<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('app/css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('app/images/logo.png')  }}">
</head>
<body class="text-gray-500">
    @include('frontends.partials.header')
    <div id="app">
        @yield('content')
    </div>
    @include('frontends.partials.footer')
    <script src="https://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="{{ asset('app/js/app.js') }}"></script>
    @include('sweetalert::alert')
    @yield('scripts')
    <script>
        let hamburger = document.querySelector('#hamburger')
        let navitems = document.querySelector('#navitems')
        let layer = document.querySelector('#layer')

        hamburger.addEventListener('click', function(){
            if (navitems.classList.contains('h-0')){
                navitems.classList.replace('h-0', 'h-64')
                navitems.classList.replace('-translate-y-10', 'translate-y-0')
                navitems.classList.add('py-6')
                layer.classList.replace('invisible', 'visible')
            } else{
                navitems.classList.replace('h-64', 'h-0')
                navitems.classList.remove('py-6')
                navitems.classList.replace('translate-y-0', '-translate-y-10')
                layer.classList.replace('visible', 'invisible')
            }
        })
    </script>
</body>
</html>
