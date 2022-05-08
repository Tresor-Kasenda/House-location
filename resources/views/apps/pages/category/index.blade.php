@extends('layouts.app')

@section('title', "Les apartements par categorie")

@section('content')
    <section class="lg:px-28 md:px-12 px-4 lg:pt-8 pt-4">
        <div class="container m-auto">
            <div class="relative lg:flex gap-12">
                <div class="absolute lg:relative hidden lg:block lg:w-3/12 md:w-6/12 md:min-w-[22rem] md:right-0">
                    <form class="bg-white shadow-lg p-6 border rounded-2xl top-28 space-y-6">
                        <div class="flex justify-between border-b pb-4">
                            <h5 class="md:text-xl text-lg text-gray-800">Filtres</h5>
                            <button
                                class="h-11 px-6 -mr-4 -mt-2 bg-transparent rounded-full hover:bg-blue-50 focus:bg-blue-100 active:scale-95 transition">
                                <span class="text-sm text-blue-700 font-semibold">Appliquer</span>
                            </button>
                        </div>
                        <div class="">
                            <div class="flex flex-col h-full">
                                <div class=" w-full py-4">
                                    <div class="flex flex-col gap-6">
                                        <div class="flex flex-col w-full gap-2.5">
                                            <div class="flex items-center gap-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                                     stroke="currentColor"
                                                     stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                                                </svg>
                                                <span class="text-base text-gray-600">Classer par</span>
                                            </div>
                                            <div class="grid grid-cols-3 gap-3">
                                                <!-- costum radioOption -->
                                                <div class="relative col-span-1 flex">
                                                    <input type="radio" name="popularity" id="All" class="hidden peer">
                                                    <label for="All"
                                                           class="w-full relative px-4 text-sm py-2.5 text-center bg-white border rounded font-normal peer-checked:border-purple-600 peer-checked:text-purple-600 text-gray-600 z-[1003]">
                                                        <span>Tout</span>
                                                    </label>
                                                    <div
                                                        class=" opacity-0 peer-checked:opacity-100 absolute -top-2 -right-2  text-white rounded-full bg-purple-600 p-1 z-[1004]">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none"
                                                             viewBox="0 0 24 24"
                                                             stroke="currentColor"
                                                             stroke-width="2">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                                        </svg>
                                                    </div>
                                                </div>
                                                <!-- costum radioOption -->
                                                <div class="flex relative col-span-1">
                                                    <input type="radio" name="popularity" id="recent" class="hidden peer">
                                                    <label for="recent"
                                                           class="w-full relative px-4 text-sm py-2.5 text-center bg-white border rounded font-normal peer-checked:border-purple-600 peer-checked:text-purple-600 text-gray-600 z-[1003]">
                                                        <span>Recent</span>
                                                    </label>
                                                    <div
                                                        class=" opacity-0 peer-checked:opacity-100 absolute -top-2 -right-2 text-white rounded-full bg-purple-600 p-1 z-[1004]">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none"
                                                             viewBox="0 0 24 24"
                                                             stroke="currentColor"
                                                             stroke-width="2">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                                        </svg>
                                                    </div>
                                                </div>

                                                <!-- costum radioOption -->
                                                <div class="flex relative col-span-1">
                                                    <input type="radio" name="popularity" id="popular" class="hidden peer">
                                                    <label for="popular"
                                                           class="w-full relative px-4 text-sm py-2.5 text-center bg-white border rounded font-normal peer-checked:border-purple-600 peer-checked:text-purple-600 text-gray-600 z-[1003]">
                                                        <span>Populaire</span>
                                                    </label>
                                                    <div
                                                        class=" opacity-0 peer-checked:opacity-100 absolute -top-2 -right-2 text-white rounded-full bg-purple-600 p-1 z-[1004]">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none"
                                                             viewBox="0 0 24 24"
                                                             stroke="currentColor"
                                                             stroke-width="2">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="flex flex-col w-full gap-2.5">
                                            <div class="flex items-center gap-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                                     stroke="currentColor"
                                                     stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                                                </svg>
                                                <span class="text-base text-gray-600">Statut</span>
                                            </div>
                                            <div class="grid grid-cols-3 gap-3">
                                                <!-- costum radioOption -->
                                                <div class="relative col-span-1 flex">
                                                    <input type="radio" name="status" id="stAll" class="hidden peer">
                                                    <label for="stAll"
                                                           class="w-full relative px-4 text-sm py-2.5 text-center bg-white border rounded font-normal peer-checked:border-purple-600 peer-checked:text-purple-600 text-gray-600 z-[1003]">
                                                        <span>Tout</span>
                                                    </label>
                                                    <div
                                                        class=" opacity-0 peer-checked:opacity-100 absolute -top-2 -right-2  text-white rounded-full bg-purple-600 p-1 z-[1004]">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none"
                                                             viewBox="0 0 24 24"
                                                             stroke="currentColor"
                                                             stroke-width="2">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                                        </svg>
                                                    </div>
                                                </div>
                                                <!-- costum radioOption -->
                                                <div class="flex relative col-span-1">
                                                    <input type="radio" name="status" id="vente" class="hidden peer">
                                                    <label for="vente"
                                                           class="w-full relative px-4 text-sm py-2.5 text-center bg-white border rounded font-normal peer-checked:border-purple-600 peer-checked:text-purple-600 text-gray-600 z-[1003]">
                                                        <span>A vendre</span>
                                                    </label>
                                                    <div
                                                        class=" opacity-0 peer-checked:opacity-100 absolute -top-2 -right-2 text-white rounded-full bg-purple-600 p-1 z-[1004]">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none"
                                                             viewBox="0 0 24 24"
                                                             stroke="currentColor"
                                                             stroke-width="2">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                                        </svg>
                                                    </div>
                                                </div>

                                                <!-- costum radioOption -->
                                                <div class="flex relative col-span-1">
                                                    <input type="radio" name="status" id="louer" class="hidden peer">
                                                    <label for="louer"
                                                           class="w-full relative px-4 text-sm py-2.5 text-center bg-white border rounded font-normal peer-checked:border-purple-600 peer-checked:text-purple-600 text-gray-600 z-[1003]">
                                                        <span>A louer</span>
                                                    </label>
                                                    <div
                                                        class=" opacity-0 peer-checked:opacity-100 absolute -top-2 -right-2 text-white rounded-full bg-purple-600 p-1 z-[1004]">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none"
                                                             viewBox="0 0 24 24"
                                                             stroke="currentColor"
                                                             stroke-width="2">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="flex flex-col w-full gap-2.5">
                                            <div class="flex items-center gap-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                                     stroke="currentColor"
                                                     stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                                                </svg>
                                                <span class="text-base text-gray-600">Categories</span>
                                            </div>
                                            <div class="flex flex-wrap gap-3">
                                                <!-- costum radioOption -->
                                                <div class="relative col-span-1 flex">
                                                    <input type="radio" name="categorie" id="allCat" class="hidden peer">
                                                    <label for="allCat"
                                                           class="w-full relative px-4 text-sm py-2.5 text-center bg-white border rounded font-normal peer-checked:border-purple-600 peer-checked:text-purple-600 text-gray-600 z-[1003]">
                                                        <span>Tout</span>
                                                    </label>
                                                    <div
                                                        class=" opacity-0 peer-checked:opacity-100 absolute -top-2 -right-2  text-white rounded-full bg-purple-600 p-1 z-[1004]">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none"
                                                             viewBox="0 0 24 24"
                                                             stroke="currentColor"
                                                             stroke-width="2">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                                        </svg>
                                                    </div>
                                                </div>

                                                <!-- costum radioOption -->
                                                <div class="relative col-span-1 flex">
                                                    <input type="radio" name="categorie" id="house" class="hidden peer">
                                                    <label for="house"
                                                           class="w-full relative px-4 text-sm py-2.5 text-center bg-white border rounded font-normal peer-checked:border-purple-600 peer-checked:text-purple-600 text-gray-600 z-[1003]">
                                                        <span>Maison</span>
                                                    </label>
                                                    <div
                                                        class=" opacity-0 peer-checked:opacity-100 absolute -top-2 -right-2  text-white rounded-full bg-purple-600 p-1 z-[1004]">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none"
                                                             viewBox="0 0 24 24"
                                                             stroke="currentColor"
                                                             stroke-width="2">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                                        </svg>
                                                    </div>
                                                </div>

                                                <!-- costum radioOption -->
                                                <div class="relative col-span-1 flex">
                                                    <input type="radio" name="categorie" id="batiment" class="hidden peer">
                                                    <label for="batiment"
                                                           class="w-full relative px-4 text-sm py-2.5 text-center bg-white border rounded font-normal peer-checked:border-purple-600 peer-checked:text-purple-600 text-gray-600 z-[1003]">
                                                        <span>Batiment</span>
                                                    </label>
                                                    <div
                                                        class=" opacity-0 peer-checked:opacity-100 absolute -top-2 -right-2  text-white rounded-full bg-purple-600 p-1 z-[1004]">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none"
                                                             viewBox="0 0 24 24"
                                                             stroke="currentColor"
                                                             stroke-width="2">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                                        </svg>
                                                    </div>
                                                </div>

                                                <!-- costum radioOption -->
                                                <div class="relative col-span-1 flex">
                                                    <input type="radio" name="categorie" id="shop" class="hidden peer">
                                                    <label for="shop"
                                                           class="w-full relative px-4 text-sm py-2.5 text-center bg-white border rounded font-normal peer-checked:border-purple-600 peer-checked:text-purple-600 text-gray-600 z-[1003]">
                                                        <span>Shop</span>
                                                    </label>
                                                    <div
                                                        class=" opacity-0 peer-checked:opacity-100 absolute -top-2 -right-2  text-white rounded-full bg-purple-600 p-1 z-[1004]">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none"
                                                             viewBox="0 0 24 24"
                                                             stroke="currentColor"
                                                             stroke-width="2">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                                        </svg>
                                                    </div>
                                                </div>

                                                <!-- costum radioOption -->
                                                <div class="relative col-span-1 flex">
                                                    <input type="radio" name="categorie" id="villa" class="hidden peer">
                                                    <label for="villa"
                                                           class="w-full relative px-4 text-sm py-2.5 text-center bg-white border rounded font-normal peer-checked:border-purple-600 peer-checked:text-purple-600 text-gray-600 z-[1003]">
                                                        <span>Villa</span>
                                                    </label>
                                                    <div
                                                        class=" opacity-0 peer-checked:opacity-100 absolute -top-2 -right-2  text-white rounded-full bg-purple-600 p-1 z-[1004]">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none"
                                                             viewBox="0 0 24 24"
                                                             stroke="currentColor"
                                                             stroke-width="2">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="flex flex-col w-full gap-2.5">
                                            <div class="flex items-center gap-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                                     stroke="currentColor"
                                                     stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                                                </svg>
                                                <span class="text-base text-gray-600">Carateristiques</span>
                                            </div>
                                            <div class="grid grid-cols-2 gap-3">
                                                <!-- costum radioOption -->
                                                <div class="flex relative">
                                                    <input type="checkbox" name="condi" id="tInt" class="hidden peer">
                                                    <label for="tInt"
                                                           class="w-full relative px-4 text-sm py-2.5 text-center bg-white border rounded font-normal peer-checked:border-purple-600 peer-checked:text-purple-600 text-gray-600 z-[1003]">
                                                        <span>Toilette interne</span>
                                                    </label>
                                                    <div
                                                        class=" opacity-0 peer-checked:opacity-100 absolute -top-2 -right-2 text-white rounded-full bg-purple-600 p-1 z-[1004]">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none"
                                                             viewBox="0 0 24 24"
                                                             stroke="currentColor"
                                                             stroke-width="2">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="flex relative">
                                                    <input type="checkbox" name="condi" id="tCar2" class="hidden peer">
                                                    <label for="tCar2"
                                                           class="w-full relative px-4 text-sm py-2.5 text-center bg-white border rounded font-normal peer-checked:border-purple-600 peer-checked:text-purple-600 text-gray-600 z-[1003]">
                                                        <span>Toilette interne</span>
                                                    </label>
                                                    <div
                                                        class=" opacity-0 peer-checked:opacity-100 absolute -top-2 -right-2 text-white rounded-full bg-purple-600 p-1 z-[1004]">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none"
                                                             viewBox="0 0 24 24"
                                                             stroke="currentColor"
                                                             stroke-width="2">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                                        </svg>
                                                    </div>
                                                </div>

                                                <div class="flex relative">
                                                    <input type="checkbox" name="tCar2" id="tCare" class="hidden peer">
                                                    <label for="tCare"
                                                           class="w-full relative px-4 text-sm py-2.5 text-center bg-white border rounded font-normal peer-checked:border-purple-600 peer-checked:text-purple-600 text-gray-600 z-[1003]">
                                                        <span>Toilette externe</span>
                                                    </label>
                                                    <div
                                                        class=" opacity-0 peer-checked:opacity-100 absolute -top-2 -right-2 text-white rounded-full bg-purple-600 p-1 z-[1004]">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none"
                                                             viewBox="0 0 24 24"
                                                             stroke="currentColor"
                                                             stroke-width="2">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                                        </svg>
                                                    </div>
                                                </div>

                                                <div class="flex relative">
                                                    <input type="checkbox" name="condi" id="tCar4" class="hidden peer">
                                                    <label for="tCar4"
                                                           class="w-full relative px-4 text-sm py-2.5 text-center bg-white border rounded font-normal peer-checked:border-purple-600 peer-checked:text-purple-600 text-gray-600 z-[1003]">
                                                        <span>Douche interne</span>
                                                    </label>
                                                    <div
                                                        class=" opacity-0 peer-checked:opacity-100 absolute -top-2 -right-2 text-white rounded-full bg-purple-600 p-1 z-[1004]">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none"
                                                             viewBox="0 0 24 24"
                                                             stroke="currentColor"
                                                             stroke-width="2">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                                        </svg>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

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
                </div>
            </div>
        </div>
    </section>
@endsection
