@extends('layouts.app')

@section('title', "Les appartements par categorie")

@section('content')
    <section class="lg:px-28 md:px-12 px-6 pt-8">
        <div class="container mx-auto">
            <div class="fixed bottom-0 left-0 w-full px-10 py-3 bg-transparent md:hidden  z-[1000]">
                <button id="btnTogFrmReser" class=" w-full text-sm py-3 px-4 rounded-xl text-center text-white  bg-gradient-to-br from-green-400 to-purple-600 z-[1000]">
                    Reserver maintenant
                </button>
            </div>
            <div id="reservaForm"
                 class="fixed w-full h-full top-0 left-0 z-[1001] md:hidden flex justify-center transition-all duration-1000 bg-gray-800 bg-opacity-70 -translate-y-full opacity-0">
                <div class="w-5/6 sm:w-80 pt-5">
                    <div class="w-full bg-white p-4 rounded-xl transition-all relative">
                        <div class="absolute -top-3 -right-3 z-[1004] ">
                            <button id="closeModalReserF"
                                    class="text-gray-100 rounded-full flex items-center justify-center w-7 h-7 bg-gray-700 bg-opacity-80">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor"
                                     stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                        <form id="frmNoModal" action="{{ route('reservation.store') }}" method="POST" class="w-full">
                            @csrf
                            <div class="flex flex-col gap-6 w-full">
                                <h1 class="text-xl font-semibold text-gray-600">Reservation</h1>
                                <input type="hidden" name="house" value="{{ $apartment->key }}">
                                <div class="flex flex-col gap-4">
                                    <div class="relative">
                                        <input
                                            id="username"
                                            type="text"
                                            class="relative peer transition-all focus:border-purple-600 border-[3px] border-gray-200 outline-none rounded-xl px-4 py-3 w-full text-sm text-gray-400 placeholder-transparent"
                                            placeholder="votre nom"
                                            name="username"
                                            value="{{ old('username') ?? auth()->user()->name }}"
                                            required>
                                        <label for="username" class="absolute text-sm bg-white left-4 transition-all text-gray-400 peer-placeholder-shown:text-sm peer-focus:text-sm -top-3 peer-placeholder-shown:top-3.5 peer-focus:text-purple-600 peer-focus:px-1 peer-focus:-top-3">Nom complet</label>
                                    </div>
                                    <div class="relative">
                                        <input
                                            id="email"
                                            type="email"
                                            class="relative peer transition-all focus:border-purple-600 border-[3px] border-gray-200 outline-none rounded-xl px-4 py-3 w-full text-sm text-gray-400 placeholder-transparent"
                                            placeholder="votre addresse email"
                                            name="email"
                                            value="{{ old('email') ?? auth()->user()->email }}"
                                            >
                                        <label for="email" class="absolute text-sm bg-white left-4 transition-all text-gray-400 peer-placeholder-shown:text-sm peer-focus:text-sm -top-3 peer-placeholder-shown:top-3.5 peer-focus:text-purple-600 peer-focus:px-1 peer-focus:-top-3">Adresse mail</label>
                                    </div>
                                    <div class="relative">
                                        <input
                                            id="phoneNumber"
                                            type="text"
                                            class="relative peer transition-all focus:border-purple-600 border-[3px] border-gray-200 outline-none rounded-xl px-4 py-3 w-full text-sm text-gray-400 placeholder-transparent"
                                            placeholder="Votre numero de telephone"
                                            name="phoneNumber"
                                            value="{{ old('phoneNumber') ?? auth()->user()->phone_number }}"
                                            required>
                                        <label for="phoneNumber" class="absolute text-sm bg-white left-4 transition-all text-gray-400 peer-placeholder-shown:text-sm peer-focus:text-sm -top-3 peer-placeholder-shown:top-3.5 peer-focus:text-purple-600 peer-focus:px-1 peer-focus:-top-3">Numero de telephone</label>
                                    </div>
                                    <div class="relative">
                                        <textarea
                                            name="message"
                                            id="message"
                                            class="resize-none h-36 relative peer transition-all focus:border-purple-600 border-[3px] border-gray-200 outline-none rounded-xl px-4 py-3 w-full text-sm text-gray-400 placeholder-transparent"
                                            placeholder="Votre messages"
                                            required>{{ old('message') }}</textarea>
                                        <label for="message" class="absolute text-sm bg-white left-4 transition-all text-gray-400 peer-placeholder-shown:text-sm peer-focus:text-sm -top-3 peer-placeholder-shown:top-3.5 peer-focus:text-purple-600 peer-focus:px-1 peer-focus:-top-3">Message</label>
                                    </div>

                                    <button type="submit" class="px-4 py-3 rounded-xl text-white bg-gradient-to-br  from-green-400 to-purple-600 transition-all duration-300 hover:bg-gradient-to-br hover:from-purple-600 hover:to-green-400">Reserver</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="md:grid md:grid-cols-3 gap-4">
                <div class="md:col-span-2 overflow-hidden">
                    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2 max-h-72 md:max-h-80 lg:max-h-96 overflow-hidden mb-5">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide rounded-xl overflow-hidden">
                                <a href="{{ asset('storage/'.$apartment->images) }}" data-fslightbox="houseGallery"
                                   class="w-full h-full">
                                    <img src="{{ asset('storage/'.$apartment->images) }}" class="rounded-xl w-full h-full object-cover transition-all hover:scale-105 duration-300" />
                                </a>
                            </div>
                            @if($apartment->image !== null)
                                @foreach($apartment->image as $image)
                                    <div class="swiper-slide rounded-xl overflow-hidden">
                                        <a href="{{ asset('storage/'.$image->images) }}" data-fslightbox="houseGallery" class="w-full h-full">
                                            <img src="{{ asset('storage/'.$image->images) }}" class="rounded-xl w-full h-full object-cover transition-all hover:scale-105 duration-300" />
                                        </a>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="swiper mySwiper pt-1 max-h-24 overflow-hidden">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{ asset('storage/'.$apartment->images) }}" class="rounded-xl w-full h-full object-cover" />
                            </div>
                            @if($apartment->image !== null)
                                @foreach($apartment->image as $image)
                                    <div class="swiper-slide">
                                        <img src="{{ asset('storage/'.$image->images) }}" class="rounded-xl w-full h-full object-cover" />
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>

                    <div class="py-7 flex flex-col gap-5 z-30">
                        <div class="flex flex-wrap gap-2">
                            @if($apartment->type->name !== \App\Enums\HouseType::FOR_HIRE)
                                <div class="px-3 py-2 text-white bg-purple-600">
                                    A louer
                                </div>
                            @else
                                <div class="px-3 py-2 text-white bg-blue-600">
                                    A vendre
                                </div>
                            @endif
                            @if($apartment->reservations_count > 0)
                                <div class="px-3 py-2 text-white bg-green-600">
                                    {{ $apartment->reservations_count }} Proposition de location en cours
                                </div>
                            @else
                                <div class="px-3 py-2 text-white bg-orange-600">
                                    Aucune proposition pour cette maison
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="flex flex-col pl-4 relative before:absolute before:w-1 before:h-6 before:bg-purple-600 before:top-1 before:left-0 z-20">
                        <h1 class="flex font-semibold text-gray-600 text-xl">Descriptions</h1>
                        <div class="flex py-4">
                            <p class="text-gray-500 font-light text-base text-justify">
                                {{ $apartment->description }}
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col mt-4 pl-4 relative before:absolute before:w-1 before:h-6 before:bg-purple-600 before:top-1 before:left-0">
                        <h1 class="flex font-semibold text-gray-600 text-xl">Details appartement</h1>
                        <div class="flex py-4 w-full">
                            <table class="w-full rounded-lg table-fixed bg-gray-100">
                                <tbody>
                                <tr>
                                    <td class="p-2 bg-gray-50 text-gray-700 font-weight-bolder">Code Reference</td>
                                    <td class="p-2 rounded">{{ $apartment->reference ?? "" }}</td>
                                </tr>
                                <tr>
                                    <td class="p-2 bg-gray-50 text-gray-700">Chambres</td>
                                    <td class="p-2 rounded">{{ $apartment->roomNumber ?? 0 }}</td>
                                </tr>
                                <tr>
                                    <td class="p-2 bg-gray-50 text-gray-700">Salon</td>
                                    <td class="p-2 rounded">{{ $apartment->detail->roomNumber ?? 0 }}</td>
                                </tr>
                                <tr>
                                    <td class="p-2 bg-gray-50 text-gray-700">Toilette interieur</td>
                                    <td class="p-2 rounded">{{ $apartment->detail->toilette ?? 0 }}</td>
                                </tr>
                                <tr>
                                    <td class="p-2 bg-gray-50 text-gray-700">Eau</td>
                                    <td class="p-2 rounded">REGIDESO</td>
                                </tr>
                                <tr>
                                    <td class="p-2 bg-gray-50 text-gray-700">Electricité</td>
                                    <td class="p-2 rounded">{{ $apartment->detail->electricity ?? "" }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="flex flex-col mt-4 pl-4 relative before:absolute before:w-1 before:h-6 before:bg-purple-600 before:top-1 before:left-0">
                        <h1 class="flex font-semibold text-gray-600 text-xl">Categories</h1>
                        <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 py-4 w-full">
                            @foreach($apartment->categories as $category)
                                <div class="flex flex-row gap-1 lg:space-y-0 lg:gap-4 col-span-1 rounded bg-purple-100 p-2">
                                    <div class="lg:block flex flex-0">
                                        <div class="flex">
                                            <div class="relative flex items-center justify-center p-2 h-8 w-8 min-w-[20px] rounded-xl bg-purple-100">
                                            <span class="text-gray-600">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                                </svg>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-col space-y-2 md:flex-1">
                                        <h1 class="text-base font-semibold text-gray-800">{{ $category->name }}</h1>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="flex mt-4 flex-col pl-4 relative before:absolute before:w-1 before:h-6 before:bg-purple-600 before:top-1 before:left-0">
                        <h1 class="flex font-semibold text-gray-600 text-xl">Localisation</h1>
                        <div class="flex py-4 w-full gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                            </svg>
                            <span>A quelque KM de votre position actuelle</span>
                        </div>
                    </div>
                </div>

                <div class="hidden lg:block lg:col-span-1">
                    <div class="lg:sticky top-16 space-y-6 lg:mt-8 bg-white shadow-lg rounded-xl w-full p-4">
                        <form action="{{ route('reservation.store') }}" method="POST" class="w-full">
                            @csrf
                            <div class="flex flex-col gap-6 w-full">
                                <h1 class="text-xl font-semibold text-gray-600">Reservation</h1>
                                <input type="hidden" name="house" value="{{ $apartment->key }}">
                                <div class="flex flex-col gap-4">
                                    <div class="relative">
                                        <input
                                            id="username"
                                            type="text"
                                            class=" relative peer transition-all focus:border-purple-600 border-[3px] border-gray-200 outline-none rounded-xl px-4 py-3 w-full text-sm text-gray-400 placeholder-transparent"
                                            placeholder="votre nom"
                                            name="username"
                                            value="{{ old('username') }}"
                                            required>
                                        <label for="username" class="absolute text-sm bg-white left-4 transition-all text-gray-400 peer-placeholder-shown:text-sm peer-focus:text-sm -top-3 peer-placeholder-shown:top-3.5 peer-focus:text-purple-600 peer-focus:px-1 peer-focus:-top-3">Nom complet</label>
                                    </div>
                                    <div class="relative">
                                        <input
                                            id="email"
                                            type="email"
                                            class=" relative peer transition-all focus:border-purple-600 border-[3px] border-gray-200 outline-none rounded-xl px-4 py-3 w-full text-sm text-gray-400 placeholder-transparent"
                                            placeholder="votre addresse email"
                                            name="email"
                                            value="{{ old('email') }}"
                                            >
                                        <label for="email" class="absolute text-sm bg-white left-4 transition-all text-gray-400 peer-placeholder-shown:text-sm peer-focus:text-sm -top-3 peer-placeholder-shown:top-3.5 peer-focus:text-purple-600 peer-focus:px-1 peer-focus:-top-3">Adresse mail</label>
                                    </div>
                                    <div class="relative">
                                        <input
                                            id="phoneNumber"
                                            type="tel"
                                            class="relative peer transition-all focus:border-purple-600 border-[3px] border-gray-200 outline-none rounded-xl px-4 py-3 w-full text-sm text-gray-400 placeholder-transparent"
                                            placeholder="Votre numero de telephone"
                                            name="phoneNumber"
                                            value="{{ old('phoneNumber') }}"
                                            required>
                                        <label for="phoneNumber" class="absolute text-sm bg-white left-4 transition-all text-gray-400 peer-placeholder-shown:text-sm peer-focus:text-sm -top-3 peer-placeholder-shown:top-3.5 peer-focus:text-purple-600 peer-focus:px-1 peer-focus:-top-3">Numero de telephone</label>
                                    </div>
                                    <div class="relative">
                                        <textarea
                                            name="message"
                                            id="message"
                                            class="resize-none h-36 relative peer transition-all focus:border-purple-600 border-[3px] border-gray-200 outline-none rounded-xl px-4 py-3 w-full text-sm text-gray-400 placeholder-transparent"
                                            placeholder="Votre messages"
                                            required>{{ old('message') }}</textarea>
                                        <label for="message" class="absolute text-sm bg-white left-4 transition-all text-gray-400 peer-placeholder-shown:text-sm peer-focus:text-sm -top-3 peer-placeholder-shown:top-3.5 peer-focus:text-purple-600 peer-focus:px-1 peer-focus:-top-3">Message</label>
                                    </div>

                                    <button type="submit" class="px-4 py-3 rounded-xl text-white bg-gradient-to-br  from-green-400 to-purple-600 transition-all duration-300 hover:bg-gradient-to-br hover:from-purple-600 hover:to-green-400">Reserver</button>
                                </div>
                            </div>
                        </form>
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
                    <a href="{{ route('categories.show', $apartment->key) }}" title="Voir les détails"
                       class="block space-y-4 p-1 rounded-xl border hover:shadow-lg hover:rounded-2xl hover:border-transparent group transition duration-200">
                        <img src="{{ asset('storage/'.$apartment->images) }}" alt="photo maison" class="w-full h-44 object-cover rounded-lg group-hover:!rounded-xl group:transition duration-200">
                        <div class="flex justify-between p-4 pt-2.5">
                            <div>
                                <h6 class="text-lg leading-none text-gray-700">{{ $apartment->roomNumber ?? ""}} pièces</h6>
                                <span class="text-sm">{{ $apartment->address ?? "" }}</span>
                            </div>
                            <div class="w-max">
                                <h5 class="text-xl leading-none md:text-right font-bold text-purple-500">{{ $apartment->prices ?? 0 }} $</h5>
                                <span class="block w-max text-xs text-gray-600">{{ $apartment->guarantees ?? 0 }}$ Garantie</span>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('app/css/swiper-bundle.min.css') }}">
@endsection

@section('scripts')
    <script src="{{ asset('app/js/fslightbox.js') }}"></script>
    <script src="{{ asset('app/js/swiper-bundle.min.js') }}"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 10,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesProgress: true,
        })
        var swiper2 = new Swiper(".mySwiper2", {
            spaceBetween: 10,
            thumbs: {
                swiper: swiper,
            },
        })

        const btnTogFrmReser = document.querySelector('#btnTogFrmReser')
        const reservaForm = document.querySelector('#reservaForm')
        const closeModalReserF = document.querySelector('#closeModalReserF')
        closeModalReserF.addEventListener('click', (e) => {
            e.preventDefault()
            reservaForm.classList.add('-translate-y-full', 'opacity-0')
        })

        btnTogFrmReser.addEventListener('click', (e) => {
            e.preventDefault()
            reservaForm.classList.remove('-translate-y-full', 'opacity-0')
        })
    </script>
@endsection
