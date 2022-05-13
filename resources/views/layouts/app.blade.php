<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Karibu kwako - @yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('app/css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('app/images/logo.png')  }}">
    @yield('styles')
</head>
<body class="text-gray-500  overflow-x-hidden w-full">
    @include('apps.partials.header')
    <div>
        @yield('content')
    </div>
    @include('apps.partials.footer')
    <script src="{{ asset('app/js/hamburger.js') }}"></script>
    <script src="{{ asset('app/js/jquery.js') }}"></script>
    @include('sweetalert::alert')
    @yield("scripts")
    <script>
        $(document).ready(function(){
            $('#search').on('keyup', function () {
                const search = $('#search').val();
                const render  = $('#searchResult');
                if(search !== null){
                    $.ajax({
                        type: "GET",
                        url: '{{ route('search.house') }}',
                        data: {_search : search},
                        dataType: 'json',
                        delay: 220,
                        success: function (response) {
                            if(response.search){
                                render.html(response.search)
                            }
                            render.html(response.empty)
                        }
                    })
                }
            })
        })
    </script>
</body>
</html>
