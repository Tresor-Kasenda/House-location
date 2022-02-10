@extends('layouts.app')

@section('title', "Les apartements par categorie")

@section('content')
    <section class="lg:px-28 md:px-12 px-4 lg:pt-8 pt-4">
        <div class="container m-auto">
            <div class="relative lg:flex gap-12">
                <div class="absolute lg:relative hidden lg:block lg:w-3/12 md:w-6/12 md:right-0">
                    @include('frontends.components._filter')
                </div>

                <div class="lg:w-9/12">
                    @if (!$apartments->isEmpty())
                        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-4 md:gap-6">
                            @foreach($apartments as $apartment)
                                @include('frontends.components._category')
                            @endforeach
                        </div>
                    @else
                        <div class="sm:w-6/12 h-screen m-auto flex items-center justify-center">
                            <div class="space-y-3">
                                <img src="{{ asset('app/images/icons/open-box.png') }}" class="sm:w-40 w-32 m-auto" alt="">
                                <p class="text-lg text-gray-600 text-center">Aucune maison n'est disponible</p>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
