@extends('frontend.layouts.app')

@section('title', "Trouvez une maison de vos reve")

@section('content')

    @include('frontend.components._section')

    <section class="lg:px-28 md:px-12 px-6 py-16">
        @if ($apartments->count() > 0)
            <div class="container m-auto space-y-8">
                <div>
                    <h4 class="mb-8 sm:text-2xl text-xl text-gray-800">Nouvelles maisons</h4>
                    <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-6">
                        @foreach($apartments as $apartment)
                            @include('frontend.components._card')
                        @endforeach
                    </div>
                </div>
            </div>
        @else
            <div class="sm:w-6/12 h-screen m-auto flex items-center justify-center">
                <div class="space-y-3">
                    <img src="{{ asset('app/images/icons/open-box.png') }}" class="sm:w-40 w-32 m-auto" alt="">
                    <p class="text-lg text-gray-600 text-center">Aucune maison n'est disponible</p>
                </div>
            </div>
        @endif
            <div class="flex flex-col gap-4 mt-16">
                <div class="flex justify-center">
                    {{ $apartments->links('users.component._pagination') }}
                </div>
            </div>
    </section>
@endsection
