@extends('layouts.app')

@section('title', "Les apartements par categorie")

@section('content')
    <section class="lg:px-28 md:px-12 px-4 lg:pt-8 pt-4">
        <div class="container m-auto">
            <div class="relative lg:flex gap-12">
                <div class="lg:w-full">
                    <div class="grid sm:grid-cols-2 gap-4 md:gap-6">
                        @forelse($apartments as $apartment)
                            <a href="{{ route('categories.show', $apartment->key) }}" title="{{ $apartment->commune }}"
                               class="block space-y-4 p-1 rounded-xl border hover:shadow-lg hover:rounded-2xl hover:border-transparent group transition duration-200">
                                <img src="{{ asset('storage/'.$apartment->images) }}" alt="{{ $apartment->commune }}"
                                     class="w-full h-44 object-cover rounded-lg group-hover:!rounded-xl group:transition duration-200">
                                <div class="flex justify-between p-4 pt-2.5">
                                    <div>
                                        <h6 class="text-lg leading-none text-gray-700">{{ $apartment->roomNumber }} pièces</h6>
                                        <span class="text-sm">{{ $apartment->address }}</span>
                                    </div>
                                    <div class="w-max">
                                        <h5 class="text-xl leading-none md:text-right font-bold text-purple-500">{{ $apartment->prices }} $</h5>
                                        <span class="block w-max text-xs text-gray-600">{{ $apartment->guaranties }} $ Garantie</span>
                                    </div>
                                </div>
                            </a>
                        @empty
                        @endforelse
                    </div>
                    <div class="flex flex-col gap-4 mt-16">
                        <div class="flex justify-center">
                            {{ $reservations->links('users.component._pagination') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
