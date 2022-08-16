@extends('frontend.layouts.app')

@section('title', "Merci d'avoir choisie notre plateforme")

@section('content')

    <section class="w-full h-screen flex items-center relative lg:px-28 sm:px-12 px-6 overflow-hidden">
        <div class="absolute w-screen h-80 top-1/2 -translate-y-1/2">
            <svg width="407" height="408" viewBox="0 0 407 408" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.698236" d="M365.474 102.147C380.763 123.373 403.29 140.892 406.203 168.577C409.17 196.771 403.454 232.347 381.48 254.239C357.854 277.775 315.107 258.633 291.822 282.526C263.025 312.077 277.927 368.132 245.74 393.53C218.359 415.137 177.491 408.366 151.577 393.194C125.307 377.813 128.833 334.87 107.937 312.848C89.8088 293.742 56.7714 294.773 39.3801 274.947C19.8138 252.642 -6.42542 225.23 2.6508 192.824C12.3866 158.064 57.7403 144.882 83.384 117.837C101.42 98.8149 111.484 73.5722 131.537 56.8921C151.692 40.1278 175.377 30.7209 198.987 21.681C224.161 12.0418 251.182 -4.20534 274.968 1.97412C298.887 8.18784 307.578 36.2018 323.741 54.0906C338.133 70.0208 352.856 84.6292 365.474 102.147Z" fill="#6842FF" fill-opacity="0.13" />
            </svg>
        </div>
        <div class="container mx-auto flex items-center pt-24 md:pt-12 lg:pt-0">
            <div class="grid md:grid-cols-2 gap-2 items-center">
                <div class="flex flex-col gap-7">
                    <h1 class="text-3xl sm:text-4xl lg:text-6xl font-semibold text-gray-600">
                        Merci d'avoir choisi Karibukuako
                    </h1>
                    <p class="text-gray-500 text-base text-2xl flex xl:leading-snug">
                        Votre reservation est effextuée avec succes, le code de votre reservation est :
                        <span class="font-semibold text-purple-600">{{ $reservation->transaction_code ?? "" }}</span>
                    </p>
                </div>
                <div class="flex items-end justify-end align-bottom">
                    <img src="{{ asset('app/images/High five-pana.png') }}" alt="" class="flex">
                </div>
            </div>
        </div>
    </section>
@endsection
