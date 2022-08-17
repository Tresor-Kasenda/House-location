<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Karibu kwako - @yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('app/images/logo.png')  }}">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('app/css/app.css') }}">
    <link rel="stylesheet" href="{{asset('dist/swiper-bundle.min.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">
    @yield('styles')
</head>
<body class="text-gray-500 overflow-y-auto  overflow-hidden overflow-x-hidden w-full">
    @include('frontend.partials.header')
    @include('frontend.components._search')
    <div>
        @yield('content')
    </div>

    @if(request()->getPathInfo() != '/localisation')
        @include('frontend.partials.footer')
    @endif
    <script src="{{ asset('app/js/hamburger.js') }}"></script>
    <script src="{{ asset('app/js/jquery.js') }}"></script>
    <script src="{{ asset('app/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('app/js/config-swipe.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#location').on('keyup', function () {
                const search = $('#location').val();
                const render  = $('#resultRender');

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

        @if(Session::has('message'))
            let type = "{{ Session::get('alert-type', 'info') }}";
            switch(type){
                case 'info':
                    toastr.info("{{ Session::get('message') }}");
                    break;
                case 'warning':
                    toastr.warning("{{ Session::get('message') }}");
                    break;
                case 'success':
                    toastr.success("{{ Session::get('message') }}");
                    break;
                case 'error':
                    toastr.error("{{ Session::get('message') }}");
                    break;
            }
        @endif
    </script>
    @yield("scripts")
</body>
</html>
