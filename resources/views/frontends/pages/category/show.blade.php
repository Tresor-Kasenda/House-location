@extends('layouts.app')

@section('title')
    Detail de la maison
@endsection

@section('content')
    <section class="lg:px-24 md:px-12 px-6 pt-8 pb-16">
        <div class="container m-auto space-y-8">
            <div class="lg:flex gap-12 space-y-12 lg:space-y-0">
                <div class="lg:w-7/12 -mx-6 md:-mx-12 lg:mx-0">
                    <div class="flex lg:block px-4 md:px-8 lg:px-0 lg:space-y-8 space-x-4 md:space-x-8 lg:space-x-0 overflow-x-auto lg:overflow-x-hidden">
                        <img src="{{ asset('storage/'.$apartment->picture) }}" class="w-10/12 md:w-8/12 lg:w-full rounded-2xl" alt="{{ $apartment->email }}">
                        @foreach($apartment->images as $image)
                            <img src="{{ asset('storage/'. $image->picture) }}" class="w-10/12 md:w-8/12 lg:w-full rounded-2xl" alt="{{ $image->key }}">
                        @endforeach
                    </div>
                </div>
                <div class="lg:w-5/12">
                    <div class="lg:sticky top-16 space-y-6 lg:mt-8">
                        <h3 class="text-3xl text-gray-700 font-bold">{{ $apartment->address ?? "" }}</h3>
                        <div class="">
                            <h3 class="text-3xl font-bold text-purple-600">{{ $apartment->getPricePerMonth() ?? "" }}</h3>
                            <span class="text-sm text-gray-500">{{$apartment->getGuaranties() ?? ""}} Garantie</span>
                        </div>
                        <table class="w-full rounded-lg table-fixed">
                            <tr>
                                <td class="border p-2 bg-gray-50 text-gray-700">Pièces</td>
                                <td class="border p-2 rounded">{{ $apartment->piece_number ?? "" }}</td>
                            </tr>
                            <tr>
                                <td class="border p-2 bg-gray-50 text-gray-700">Toilettes</td>
                                <td class="border p-2 rounded">Exterieur</td>
                            </tr>
                            <tr>
                                <td class="border p-2 bg-gray-50 text-gray-700">Cloture</td>
                                <td class="border p-2 rounded">Oui</td>
                            </tr>
                            <tr>
                                <td class="border p-2 bg-gray-50 text-gray-700">Eau</td>
                                <td class="border p-2 rounded">REGIDESO</td>
                            </tr>
                            <tr>
                                <td class="border p-2 bg-gray-50 text-gray-700">Electricité</td>
                                <td class="border p-2 rounded">4 J / Semaine</td>
                            </tr>
                        </table>
                        <div class="pt-4 flex gap-4">
                            <a href="tel:{{ $apartment->phone_number ?? "" }}" class="inline-block py-4 px-12 shadow-lg bg-gradient-to-r from-green-400 to-purple-600 rounded-full hover:bg-purple-600 focus:bg-purple-700 active:scale-95 transition">
                                <span class="flex gap-4 text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 m-auto" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                    </svg>
                                    <span class="text-lg text-white">Appeler <span class="hidden sm:inline">le propriétaire</span></span>
                                </span>
                            </a>
                            <a href="mailto:{{ $apartment->email ?? "" }}" aria-label="send mail" class="w-16 h-16 flex items-center rounded-full bg-gray-200 hover:shadow-md focus:bg-opacity-60 active:scale-95 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 m-auto text-gray-600" viewBox="0 0 16 16">
                                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="lg:px-28 md:px-12 px-6 py-16">
        <div class="container m-auto space-y-8">
            <h4 class="mb-8 sm:text-2xl text-xl text-gray-800">Maisons similaires</h4>
            <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-6">
                @foreach($apartments as $apartment)
                    @include('frontends.components._card')
                @endforeach
            </div>
        </div>
    </section>
@endsection
