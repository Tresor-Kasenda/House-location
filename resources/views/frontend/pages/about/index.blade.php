@extends('frontend.layouts.app')

@section('title', "A propos de nous")

@section('content')
    <section class="w-full lg:px-28 sm:px-12 px-6 overflow-hidden">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="col-span-1 flex items-end">
                    <div class="flex flex-col gap-7 pt-10 md:pt-0">
                        <h1 class="text-xl sm:text-2xl md:text-4xl font-semibold text-gray-500">
                            Le leader du marché de la location immobilière.
                        </h1>
                        <p class="text-gray-500 text-justify">
                            Plus de 39 000 personnes nous ont choisi dans plus de 70 pays à travers le monde Cette
                            étendue de couverture
                            mondiale, associée à des services spécialisés
                        </p>
                        <div class="w-full grid sm:grid-cols-2 gap-4">
                            <div class="p-2">
                                <div
                                    class="flex flex-row gap-3 lg:space-y-0 lg:gap-4 col-span-1 rounded-xl">
                                    <div class="lg:block flex flex-0">
                                        <div class="flex">
                                            <div
                                                class="relative flex items-center justify-center p-2 h-10 w-10 min-w-[20px] rounded-xl bg-gradient-to-tr from-green-400 to-purple-600">
                                                <span class="text-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                                         viewBox="0 0 24 24" stroke="currentColor"
                                                         stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-col space-y-2 md:flex-1">
                                        <h1 class="text-xl font-semibold text-gray-800">+ 45k</h1>
                                        <p class="text-gray-600 text-justify text-sm">
                                            Maisons reservees
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="p-2">
                                <div
                                    class="flex flex-row gap-3 lg:space-y-0 lg:gap-4 col-span-1 rounded-xl">
                                    <div class="lg:block flex flex-0">
                                        <div class="flex">
                                            <div
                                                class="relative flex items-center justify-center p-2 h-10 w-10 min-w-[20px] rounded-xl bg-gradient-to-tr from-green-400 to-purple-600">
                                                <span class="text-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                                         viewBox="0 0 24 24" stroke="currentColor"
                                                         stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-col space-y-2 md:flex-1">
                                        <h1 class="text-xl font-semibold text-gray-800">+ 45k</h1>
                                        <p class="text-gray-600 text-justify text-sm">
                                            Commisionnaires
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="p-2">
                                <div
                                    class="flex flex-row gap-3 lg:space-y-0 lg:gap-4 col-span-1 rounded-xl">
                                    <div class="lg:block flex flex-0">
                                        <div class="flex">
                                            <div
                                                class="relative flex items-center justify-center p-2 h-10 w-10 min-w-[20px] rounded-xl bg-gradient-to-tr from-green-400 to-purple-600">
                                                <span class="text-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                                         viewBox="0 0 24 24" stroke="currentColor"
                                                         stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-col space-y-2 md:flex-1">
                                        <h1 class="text-xl font-semibold text-gray-800">+ 45k</h1>
                                        <p class="text-gray-600 text-justify text-sm">
                                            Internautes satisfaits
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="p-2">
                                <div
                                    class="flex flex-row gap-3 lg:space-y-0 lg:gap-4 col-span-1 rounded-xl">
                                    <div class="lg:block flex flex-0">
                                        <div class="flex">
                                            <div
                                                class="relative flex items-center justify-center p-2 h-10 w-10 min-w-[20px] rounded-xl bg-gradient-to-tr from-green-400 to-purple-600">
                                                <span class="text-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                                         viewBox="0 0 24 24" stroke="currentColor"
                                                         stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-col space-y-2 md:flex-1">
                                        <h1 class="text-xl font-semibold text-gray-800">+ 45k</h1>
                                        <p class="text-gray-600 text-justify text-sm">
                                            Maisons reservees
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-span-1 hidden md:flex">
                    <img src="{{ asset('app/images/bannerHouse.png') }}" class="w-full" alt="Hero-image">
                </div>
            </div>
        </div>
    </section>

    <section class="w-full lg:px-28 sm:px-12 px-6 py-10">
        <div class="container mx-auto">
            <div class="flex flex-col gap-4">
                <div class="flex justify-center flex-col text-center">
                    <span class="text-gray-500 text-sm font-light">Services offerts</span>
                    <h1 class="text-gray-600 font-semibold text-lg">Nos services</h1>
                </div>

                <div
                    class="grid justify-center sm:grid-cols-2 lg:grid-cols-3 gap-5 sm:gap-7 lg:gap-14 relative before:w-20 before:absolute before:h-20 before:bg-gradient-to-r before:from-green-400 before:to-purple-600 before:top-0 before:left-0 after:w-20 after:absolute after:h-20 after:bg-gradient-to-r after:from-green-400 after:to-purple-600 after:bottom-0 after:right-0  before:rounded-xl after:rounded-xl before:z-10 after:z-10 sm:after:hidden md:after:block p-1">
                    <div
                        class="transition-all col-span-1 z-30 bg-purple-50 rounded-xl shadow-sm px-4 py-12 flex flex-col gap-2.5 duration-300 before:transition-all before:scale-0 before:origin-center hover:before:scale-100 before:duration-500 before:z-10 before:bg-gradient-to-tr before:from-purple-600 before:to-green-400 before:rounded-xl before:absolute relative before:top-0 before:left-0 before:w-full before:h-full group">
                        <div class="flex justify-center items-center z-50">
                            <img src="{{ asset('app/images/icons/home1.svg') }}" alt="" class="w-14 h-14 sm:w-28 sm:h-28">
                        </div>
                        <h1
                            class="text-center text-lg transition group-hover:text-white font-semibold text-gray-600 z-50">
                            Achat maison</h1>
                        <p
                            class="text-gray-500 font-light text-sm text-center  transtion group-hover:text-gray-100 z-50">
                            Trouvez plus de 2k de maisons en ventes en toute simplicité et facilité
                        </p>
                    </div>
                    <div
                        class="transition-all col-span-1 z-30 bg-purple-50 rounded-xl shadow-sm px-4 py-12 flex flex-col gap-2.5 duration-300 before:transition-all before:scale-0 before:origin-center hover:before:scale-100 before:duration-500 before:z-10 before:bg-gradient-to-tr before:from-purple-600 before:to-green-400 before:rounded-xl before:absolute relative before:top-0 before:left-0 before:w-full before:h-full group">
                        <div class="flex justify-center items-center z-50">
                            <img src="{{ asset('app/images/icons/home2.svg') }}" alt="" class="w-14 h-14 sm:w-28 sm:h-28">
                        </div>
                        <h1
                            class="text-center text-lg font-semibold text-gray-600 transition group-hover:text-white z-50">
                            Location maison</h1>
                        <p
                            class="text-gray-500 font-light text-sm text-center transition group-hover:text-gray-100 z-50">
                            Trouvez facilement votre maison de reve à louer sans se casser les nerfs </p>
                    </div>
                    <div
                        class="transition-all col-span-1 z-30 bg-purple-50 rounded-xl shadow-sm px-4 py-12 flex flex-col gap-2.5 duration-300 before:transition-all before:scale-0 before:origin-center hover:before:scale-100 before:duration-500 before:z-10 before:bg-gradient-to-tr before:from-purple-600 before:to-green-400 before:rounded-xl before:absolute relative before:top-0 before:left-0 before:w-full before:h-full group">
                        <div class="flex justify-center items-center z-50">
                            <img src="{{ asset('app/images/icons/home3.svg') }}" alt="" class="w-14 h-14 sm:w-28 sm:h-28">
                        </div>
                        <h1
                            class="text-center text-lg font-semibold text-gray-600 transition group-hover:text-white z-50">
                            Vente maison</h1>
                        <p
                            class="text-gray-500 font-light text-sm text-center transition group-hover:text-gray-100 z-50">
                            Rejoingnez plus de 300 vendeurs de terrain sur notre plateform </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full lg:px-28 sm:px-12 px-6 py-10 relative overflow-hidden">
        <div class="container mx-auto flex flex-col gap-7">
            <div class="flex flex-col">
                <div class="flex justify-center flex-col text-center">
                    <span class="text-gray-500 text-sm font-light z-50">Pourquoi Karibukuako</span>
                    <h1 class="text-gray-600 font-semibold text-lg">Pourquoi nous choisir</h1>
                </div>
            </div>
            <div class="grid items-center md:grid-cols-2 gap-4">
                <div class="col-span-1">
                    <img src="{{ asset('app/images/banner.png') }}" alt="">
                </div>
                <div class="col-span-1 flex flex-col gap-3">
                    <h1 class="text-gray-600 text-lg font-semibold">Karibukuako vous facilite la vie</h1>
                    <div class="flex flex-col gap-4">
                        <div class="flex flex-col gap-2  z-50">
                            <div class="text-base font-medium text-gray-600 flex items-center">
                                <span class="text-gray-600 pr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20"
                                         fill="currentColor">
                                        <path fill-rule="evenodd"
                                              d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                              clip-rule="evenodd" />
                                    </svg>
                                </span>
                                <span>Reservation rapide et simple</span>
                            </div>
                            <div class="flex pl-6">
                                <p class="text-sm text-gray-500 font-light text-justify">Lorem ipsum dolor sit amet
                                    consectetur
                                    adipisicing elit. Sequi debitis eos repellendus explicabo nostrum maxime officia
                                    omnis dolores libero nam maiores doloremque minima, temporibus ullam dignissimos
                                    expedita laudantium inventore quos.</p>
                            </div>
                        </div>

                        <div class="flex flex-col gap-2  z-50">
                            <div class="text-base font-medium text-gray-600 flex items-center">
                                <span class="text-gray-600 pr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20"
                                         fill="currentColor">
                                        <path fill-rule="evenodd"
                                              d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                              clip-rule="evenodd" />
                                    </svg>
                                </span>
                                <span>Reservation rapide et simple</span>
                            </div>
                            <div class="flex pl-6">
                                <p class="text-sm text-gray-500 font-light text-justify">Lorem ipsum dolor sit amet
                                    consectetur
                                    adipisicing elit. Sequi
                                    debitis eos repellendus explicabo nostrum maxime officia omnis dolores libero nam
                                    maiores doloremque minima,
                                    temporibus ullam dignissimos expedita laudantium inventore quos.</p>
                            </div>
                        </div>

                        <div class="flex flex-col gap-2  z-50">
                            <div class="text-base font-medium text-gray-600 flex items-center">
                                <span class="text-gray-600 pr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20"
                                         fill="currentColor">
                                        <path fill-rule="evenodd"
                                              d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                              clip-rule="evenodd" />
                                    </svg>
                                </span>
                                <span>Reservation rapide et simple</span>
                            </div>
                            <div class="flex pl-6">
                                <p class="text-sm text-gray-500 font-light text-justify">Lorem ipsum dolor sit amet
                                    consectetur
                                    adipisicing elit. Sequi
                                    debitis eos repellendus explicabo nostrum maxime officia omnis dolores libero nam
                                    maiores doloremque minima,
                                    temporibus ullam dignissimos expedita laudantium inventore quos.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full lg:px-28 sm:px-12 px-6 py-10 relative overflow-hidden">
        <div class="container mx-auto">
            <div class="w-full sm:w-96 mx-auto">
                <div class="flex flex-col w-full gap-3">
                    <h1 class="text-center font-semibold text-lg text-gray-600">News-letter</h1>
                    <p class="text-sm font-light text-gray-500 text-center">Inscrivez-vous à notre News-letter pour
                        rester informwer à tout moment</p>
                    <div class="flex justify-center w-full mx-auto">
                        <form action="{{ route('newsletters.send') }}" method="post" class="flex relative w-full justify-self-center gap-3 justify-center transition-all duration-300">
                            @csrf
                            <input type="email" class="py-3 border px-5 rounded-full bg-gray-100  transition-all outline-none text-sm text-gray-600 w-full focus:shadow-lg focus:shadow-purple-200 hover:border-0">
                            <button type="submit" class="absolute top-1/2 -translate-y-1/2 right-1 px-3 py-2 rounded-full text-white bg-gradient-to-r from-green-400 to-purple-600 outline-none">S'inscrire</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
