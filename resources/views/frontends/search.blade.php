@extends('layouts.app')

@section('title', "Trouvez une maison de vos reve")

@section('content')
    <section class="lg:px-28 md:px-12 px-6 py-16">
        <div class="container m-auto space-y-8">
            <div>
                <h4 class="mb-8 sm:text-2xl text-xl text-gray-800">Nouvelles maisons</h4>
                <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-6">
                    @foreach($houses as $apartment)
                        @include('frontends.components._card')
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
