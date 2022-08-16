@php use Illuminate\Support\Facades\Route; @endphp
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
    @yield('styles')
    @include('sweetalert::alert')
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
    <script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>
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
    </script>
    <script>
        new Swiper(".homeSwiper", {
            navigation: {
                nextEl: '.swip-next-homeslide',
                prevEl: '.swip-prev-homeslide',
            },
            pagination: {
                el: ".home-swiper-pagination",
                bulletClass: 'costum-bullet',
                bulletActiveClass: 'costum-bullet-active',
                clickable: true,
                renderBullet: function (index, className) {
                    return '<span class="' + className + ' costumSwiperPagination">' + "</span>";
                },
            },
        });

        new Swiper(".swiperBestrate", {
            slidesPerView: 1,
            spaceBetween: 10,
            navigation: {
                nextEl: '.swip-next-bestrate',
                prevEl: '.swip-prev-bestrate',
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
            },
        })

        new Swiper(".swiperBestcommis", {
            slidesPerView: 1,
            spaceBetween: 10,
            navigation: {
                nextEl: '.swip-next-bestcommis',
                prevEl: '.swip-prev-bestcommis',
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
            },
        })

        new Swiper(".swipertestimonial", {
            slidesPerView: 1,
            spaceBetween: 10,
            navigation: {
                nextEl: '.swip-next-testim',
                prevEl: '.swip-prev-testim',
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
                1240: {
                    slidesPerView: 4,
                    spaceBetween: 30,
                },
            },
        })

    </script>
    @yield("scripts")
</body>
</html>
