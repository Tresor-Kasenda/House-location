@extends('layouts.app')

@section('title', "Trouvez une maison de vos reve")

@section('content')
    @if (!$apartments->isEmpty())
        <section class="lg:px-24 md:px-12 overflow-hidden">
            <div class="overflow-hidden md:mx-0 -mx-4">
                <div class="container m-auto py-8 overflow-x-auto">
                    <div class="md:w-full w-[130vh] md:h-full h-[60vh] md:pl-0 md:pr-0 pl-8 pr-4 grid grid-cols-12 grid-rows-4 gap-4">
                        <div class="relative lg:col-span-6 md:col-span-8 col-span-4 row-span-4 lg:h-[31rem] md:h-[25rem] group transition">
                            <div class="absolute z-10 right-2 top-2 group opacity-0 group-hover:opacity-100 transition">
                                <label role="button" for="like" class="h-10 w-10 flex justify-center items-center rounded-full bg-gray-800 bg-opacity-75 backdrop-blur-lg cursor-pointer group active:scale-90 transition">
                                    <input hidden type="checkbox" name="like" id="like" class="peer">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="absolute w-5 m-auto scale-75 opacity-0 text-pink-500 peer-checked:scale-100 peer-checked:opacity-100 transition ease-in" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="absolute w-5 m-auto text-white peer-checked:opacity-0 transition" viewBox="0 0 16 16">
                                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                    </svg>
                                </label>
                            </div>
                            <div class="absolute bottom-0 w-full h-full">
                                <div class="h-full sm:p-8 p-4 pt-2 flex items-end lg:rounded-l-2xl md:rounded-tl-2xl md:rounded-r-none rounded-2xl bg-gradient-to-t from-gray-900 overflow-hidden">
                                    <div class="w-full translate-y-24 group-hover:translate-y-0 transition duration-500">
                                        <div class="md:flex justify-between pb-8">
                                            <div>
                                                <h4 class="text-xl text-white font-semibold">{{ $apartments[0]->district ?? "" }}, {{ $apartments[0]->address ?? "" }}</h4>
                                                <span class="text-sm text-gray-200">A quelques minutes de votre position actuelle.</span>
                                            </div>

                                            <div class="md:mt-0 mt-4">
                                                <h3 class="text-3xl md:text-right font-bold text-purple-400">78 $</h3>
                                                <span class="text-xs text-gray-200">{{ $apartments[0]->getGuaranties() ?? "" }} Garantie</span>
                                            </div>
                                        </div>
                                        <div class="relative pt-4 flex gap-2
                                                    before:absolute before:w-[60%] before:right-0 before:top-0 before:h-[1px] before:bg-gray-500 before:rounded-full">

                                            <div class="translate-y-8 group-hover:translate-y-0 transition delay-150 duration-300 ease-in-out">
                                                <a href="{{ route('categories.show', $apartments[0]->key) }}" title="En savoir plus" class="block w-max py-2 px-6 border border-gray-600 text-white rounded-full hover:border-transparent hover:bg-white hover:text-purple-700 focus:bg-white focus:text-purple-700 active:scale-95 transition">
                                                    <span class="text-sm font-medium tracking-wide">Savoir plus</span>
                                                </a>
                                            </div>
                                            <div class="translate-y-16 group-hover:translate-y-0 transition delay-200 duration-300 ease-in-out">
                                                <a href="tel:{{ $apartments[0]->phone_number ?? "" }}" aria-label="call" class="w-10 h-10 flex items-center rounded-full bg-purple-600 bg-opacity-0 hover:border-transparent hover:bg-opacity-30 focus:bg-opacity-40 active:scale-95 transition">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 m-auto text-purple-300" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="translate-y-32 group-hover:translate-y-0 transition delay-300 duration-300 ease-in-out">
                                                <button title="Partager" class=" block w-10 h-10 rounded-full bg-purple-600 bg-opacity-0 hover:border-transparent hover:bg-opacity-30 focus:bg-opacity-40 active:scale-95 transition">
                                                    <svg viewBox="0 0 1200 1130" fill="none" class="w-4 m-auto fill-current text-purple-300" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M754.553 0V294.208C487.317 294.216 0 297.148 0 1129.94C55.25 573.04 309.061 569.538 754.553 569.532V890.824L1200 445.377L754.553 0Z"/>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <img src="{{ asset('storage/'.$apartments[0]->images) }}" class="w-full h-full  lg:rounded-l-2xl md:rounded-tl-2xl md:rounded-r-none md:rounded-bl-none rounded-2xl object-cover" alt="">
                        </div>

                        <div class="relative lg:col-span-3 md:col-span-4 col-span-4 row-span-2 lg:h-60 group transition">
                            <div class="absolute z-10 right-2 top-2 group opacity-0 group-hover:opacity-100 transition">
                                <label role="button" for="like2" class="h-10 w-10 flex justify-center items-center rounded-full bg-gray-800 bg-opacity-75 backdrop-blur-lg cursor-pointer group active:scale-90 transition">
                                    <input hidden type="checkbox" name="like2" id="like2" class="peer">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="absolute w-5 m-auto scale-75 opacity-0 text-pink-500 peer-checked:scale-100 peer-checked:opacity-100 transition ease-in" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="absolute w-5 m-auto text-white peer-checked:opacity-0 transition" viewBox="0 0 16 16">
                                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                    </svg>
                                </label>
                            </div>
                            <div class="absolute bottom-0 w-full h-full">
                                <div class="h-full sm:p-6 p-4 pt-2 lg:rounded-none md:rounded-tr-2xl md:rounded-b-none md:rounded-tl-none rounded-2xl flex items-end bg-gradient-to-t from-gray-900 overflow-hidden">
                                    <div class="w-full translate-y-24 group-hover:translate-y-0 transition duration-500">
                                        <div class="pb-8">
                                            <h4 class="mb-4 text-lg text-white font-semibold">{{ $apartments[1]->district ?? "" }}, {{ $apartments[1]->address ?? "" }}</h4>

                                            <div class="flex items-end gap-2">
                                                <h3 class="text-2xl font-bold text-purple-400">{{ $apartments[1]->getPricePerMonth() ?? "" }}</h3>
                                                <div class="text-xs tracking-wide text-gray-300">
                                                    <span class="block">{{ $apartments[1]->getPricePerMonth() ?? "" }} / Mois</span>
                                                    <span class="block">{{ $apartments[1]->getGuaranties() ?? "" }} Garantie</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="relative pt-4 flex gap-2 group-hover:-mt-4 transition">
                                            <div class="translate-y-8 group-hover:translate-y-0 transition delay-150 duration-300 ease-in-out">
                                                <a href="{{ route('categories.show', $apartments[1]->key ) }}" title="En savoir plus" class="block w-max py-2 px-6 border border-gray-600 text-white rounded-full hover:border-transparent hover:bg-white hover:text-purple-700 focus:bg-white focus:text-purple-700 active:scale-95 transition">
                                                    <span class="text-sm font-medium tracking-wide">Savoir plus</span>
                                                </a>
                                            </div>
                                            <div class="translate-y-16 group-hover:translate-y-0 transition delay-200 duration-300 ease-in-out">
                                                <a href="tel:{{ $apartments[1]->phone_number ?? "" }}" aria-label="call" class="w-10 h-10 flex items-center rounded-full bg-purple-600 bg-opacity-0 hover:border-transparent hover:bg-opacity-30 focus:bg-opacity-40 active:scale-95 transition">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 m-auto text-purple-300" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="translate-y-32 group-hover:translate-y-0 transition delay-300 duration-300 ease-in-out">
                                                <button title="Partager" class=" block w-10 h-10 rounded-full bg-purple-600 bg-opacity-0 hover:border-transparent hover:bg-opacity-30 focus:bg-opacity-40 active:scale-95 transition">
                                                    <svg viewBox="0 0 1200 1130" fill="none" class="w-4 m-auto fill-current text-purple-300" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M754.553 0V294.208C487.317 294.216 0 297.148 0 1129.94C55.25 573.04 309.061 569.538 754.553 569.532V890.824L1200 445.377L754.553 0Z"/>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <img src="{{ asset('storage/'.$apartments[1]->images ) }}" class="w-full h-full lg:rounded-none md:rounded-tr-2xl md:rounded-tl-none rounded-2xl object-cover" alt="">
                        </div>

                        <div class="relative lg:col-span-3 md:col-span-4 col-span-4 row-span-2 lg:h-60 group transition">
                            <div class="absolute z-10 right-2 top-2 group opacity-0 group-hover:opacity-100 transition">
                                <label role="button" for="like4" class="h-10 w-10 flex justify-center items-center rounded-full bg-gray-800 bg-opacity-75 backdrop-blur-lg cursor-pointer group active:scale-90 transition">
                                    <input hidden type="checkbox" name="like4" id="like4" class="peer">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="absolute w-5 m-auto scale-75 opacity-0 text-pink-500 peer-checked:scale-100 peer-checked:opacity-100 transition ease-in" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="absolute w-5 m-auto text-white peer-checked:opacity-0 transition" viewBox="0 0 16 16">
                                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                    </svg>
                                </label>
                            </div>
                            <div class="absolute bottom-0 w-full h-full">
                                <div class="h-full sm:p-6 p-4 pt-2 flex items-end lg:rounded-tr-2xl md:rounded-none rounded-2xl bg-gradient-to-t from-gray-900 overflow-hidden">
                                    <div class="w-full translate-y-24 group-hover:translate-y-0 transition duration-500">
                                        <div class="pb-8">
                                            <h4 class="mb-4 text-lg text-white font-semibold">{{ $apartments[1]->district ?? "" }}, {{ $apartments[1]->address ?? "" }}</h4>

                                            <div class="flex items-end gap-2">
                                                <h3 class="text-2xl font-bold text-purple-400">{{ $apartments[1]->getPricePerMonth() ?? "" }}</h3>
                                                <div class="text-xs tracking-wide text-gray-300">
                                                    <span class="block"> {{ $apartments[1]->getPricePerMonth() ?? "" }} / Mois</span>
                                                    <span class="block">{{ $apartments[1]->getGuaranties() ?? "" }} Garantie</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="relative pt-4 flex gap-2 group-hover:-mt-4 transition">
                                            <div class="translate-y-8 group-hover:translate-y-0 transition delay-150 duration-300 ease-in-out">
                                                <a href="{{ route('categories.show', $apartments[1]->key ) }}" title="En savoir plus" class="block w-max py-2 px-6 border border-gray-600 text-white rounded-full hover:border-transparent hover:bg-white hover:text-purple-700 focus:bg-white focus:text-purple-700 active:scale-95 transition">
                                                    <span class="text-sm font-medium tracking-wide">Savoir plus</span>
                                                </a>
                                            </div>
                                            <div class="translate-y-16 group-hover:translate-y-0 transition delay-200 duration-300 ease-in-out">
                                                <a href="tel:099000000" aria-label="call" class="w-10 h-10 flex items-center rounded-full bg-purple-600 bg-opacity-0 hover:border-transparent hover:bg-opacity-30 focus:bg-opacity-40 active:scale-95 transition">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 m-auto text-purple-300" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="translate-y-32 group-hover:translate-y-0 transition delay-300 duration-300 ease-in-out">
                                                <button title="Partager" class=" block w-10 h-10 rounded-full bg-purple-600 bg-opacity-0 hover:border-transparent hover:bg-opacity-30 focus:bg-opacity-40 active:scale-95 transition">
                                                    <svg viewBox="0 0 1200 1130" fill="none" class="w-4 m-auto fill-current text-purple-300" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M754.553 0V294.208C487.317 294.216 0 297.148 0 1129.94C55.25 573.04 309.061 569.538 754.553 569.532V890.824L1200 445.377L754.553 0Z"/>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <img src="{{ asset('storage/'.$apartments[1]->images ) }}" class="w-full h-full lg:rounded-tr-2xl md:rounded-none rounded-2xl object-cover" alt="">
                        </div>

                        <div class="relative lg:col-span-4 md:col-span-7 col-span-5 row-span-2 lg:h-60 group transition">
                            <div class="absolute z-10 right-2 top-2 group opacity-0 group-hover:opacity-100 transition">
                                <label role="button" for="like" class="h-10 w-10 flex justify-center items-center rounded-full bg-gray-800 bg-opacity-75 backdrop-blur-lg cursor-pointer group active:scale-90 transition">
                                    <input hidden type="checkbox" name="like" id="like" class="peer">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="absolute w-5 m-auto scale-75 opacity-0 text-pink-500 peer-checked:scale-100 peer-checked:opacity-100 transition ease-in" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="absolute w-5 m-auto text-white peer-checked:opacity-0 transition" viewBox="0 0 16 16">
                                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                    </svg>
                                </label>
                            </div>
                            <div class="absolute bottom-0 w-full h-full">
                                <div class="h-full sm:p-6 p-4 pt-2 lg:rounded-none md:rounded-bl-2xl md:rounded-t-none md:rounded-br-none rounded-2xl flex items-end bg-gradient-to-t from-gray-900 overflow-hidden">
                                    <div class="w-full translate-y-24 group-hover:translate-y-0 transition duration-500">
                                        <div class="pb-8">
                                            <h4 class="mb-4 text-lg text-white font-semibold">{{ $apartments[0]->address ?? "" }}</h4>

                                            <div class="flex items-end gap-2">
                                                <h3 class="text-2xl font-bold text-purple-400">{{ $apartments[0]->getPricePerMonth() ?? "" }}</h3>
                                                <div class="text-xs tracking-wide text-gray-300">
                                                    <span class="block">{{ $apartments[0]->getPricePerMonth() ?? "" }}/ Mois</span>
                                                    <span class="block">{{ $apartments[0]->getGuaranties() ?? "" }} Garantie</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="relative pt-4 flex gap-2 group-hover:-mt-4 transition">
                                            <div class="translate-y-8 group-hover:translate-y-0 transition delay-150 duration-300 ease-in-out">
                                                <a href="{{ route('categories.show', $apartments[0]->key ) }}" title="En savoir plus" class="block w-max py-2 px-6 border border-gray-600 text-white rounded-full hover:border-transparent hover:bg-white hover:text-purple-700 focus:bg-white focus:text-purple-700 active:scale-95 transition">
                                                    <span class="text-sm font-medium tracking-wide">Savoir plus</span>
                                                </a>
                                            </div>
                                            <div class="translate-y-16 group-hover:translate-y-0 transition delay-200 duration-300 ease-in-out">
                                                <a href="tel:{{ $apartments[0]->phone_number ?? "" }}" aria-label="call" class="w-10 h-10 flex items-center rounded-full bg-purple-600 bg-opacity-0 hover:border-transparent hover:bg-opacity-30 focus:bg-opacity-40 active:scale-95 transition">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 m-auto text-purple-300" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="translate-y-32 group-hover:translate-y-0 transition delay-300 duration-300 ease-in-out">
                                                <button title="Partager" class=" block w-10 h-10 rounded-full bg-purple-600 bg-opacity-0 hover:border-transparent hover:bg-opacity-30 focus:bg-opacity-40 active:scale-95 transition">
                                                    <svg viewBox="0 0 1200 1130" fill="none" class="w-4 m-auto fill-current text-purple-300" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M754.553 0V294.208C487.317 294.216 0 297.148 0 1129.94C55.25 573.04 309.061 569.538 754.553 569.532V890.824L1200 445.377L754.553 0Z"/>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <img src="{{ asset('storage/'. $apartments[0]->images ) }}" class="w-full h-full lg:rounded-none md:rounded-bl-2xl md:rounded-t-none md:rounded-br-none rounded-2xl object-cover" alt="">
                        </div>

                        <div class="relative lg:col-span-2 md:col-span-5 col-span-3 row-span-2 lg:h-60 group transition">
                            <div class="absolute z-10 right-2 top-2 group opacity-0 group-hover:opacity-100 transition">
                                <label role="button" for="like5" class="h-8 w-8 flex justify-center items-center rounded-full bg-gray-800 bg-opacity-75 backdrop-blur-lg cursor-pointer group active:scale-90 transition">
                                    <input hidden type="checkbox" name="like5" id="like5" class="peer">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="absolute w-5 m-auto scale-75 opacity-0 text-pink-500 peer-checked:scale-100 peer-checked:opacity-100 transition ease-in" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="absolute w-5 m-auto text-white peer-checked:opacity-0 transition" viewBox="0 0 16 16">
                                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                    </svg>
                                </label>
                            </div>
                            <div class="absolute bottom-0 w-full h-full">
                                <div class="h-full p-4 pt-2 md:rounded-br-2xl md:rounded-t-none md:rounded-bl-none rounded-2xl flex items-end bg-gradient-to-t from-gray-900 overflow-hidden">
                                    <div class="w-full translate-y-24 group-hover:translate-y-0 transition duration-500">
                                        <div class="pb-8">
                                            <h6 class="mb-4 text-base text-white font-semibold">{{ $apartments[1]->address ?? "" }}</h6>

                                            <div class="flex items-end gap-2">
                                                <h3 class="text-2xl font-bold text-purple-400">{{ $apartments[1]->getPricePerMonth() ?? "" }}</h3>
                                                <div class="text-xs tracking-wide text-gray-300">
                                                    <span class="block">{{ $apartments[1]->getPricePerMonth() ?? "" }}/ Mois</span>
                                                    <span class="block">{{ $apartments[1]->getGuaranties() ?? "" }} Garantie</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="relative pt-4 flex gap-4 group-hover:-mt-4 transition">
                                            <div class="translate-y-8 group-hover:translate-y-0 transition delay-150 duration-300 ease-in-out">
                                                <a href="{{ route('categories.show', $apartments[1]->key ) }}" class="block w-max py-2 px-6 border border-gray-600 text-white rounded-full hover:border-transparent hover:bg-white hover:text-purple-700 focus:bg-white focus:text-purple-700 active:scale-95 transition">
                                                    <span class="text-sm font-medium tracking-wide">Savoir plus</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <img src="{{ asset('storage/'. $apartments[1]->images ) }}" class="w-full h-full md:rounded-br-2xl md:rounded-t-none md:rounded-bl-none rounded-2xl object-cover" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <section class="lg:px-28 md:px-12 px-6 py-16">
        @if (!$apartments->isEmpty())
            <div class="container m-auto space-y-8">
                <div>
                    <h4 class="mb-8 sm:text-2xl text-xl text-gray-800">Nouvelles maisons</h4>
                    <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-6">
                        @foreach($apartments as $apartment)
                            @include('frontends.components._card')
                        @endforeach
                    </div>
                </div>
                <div>
                    <h4 class="mb-8 sm:text-2xl text-xl text-gray-800">Bas prix</h4>
                    <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-6">
                        @foreach($apartmentPrices as $apartment)
                            @include('frontends.components._card')
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
    </section>
@endsection
