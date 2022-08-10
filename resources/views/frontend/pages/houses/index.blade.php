@extends('frontend.layouts.app')

@section('title')
    Nos Maison
@endsection

@section('content')
    <section class="w-full z-30 flex justify-center h-screen max-h-screen lg:max-h-[650px] overflow-hidden">
        <div class="w-full relative h-full max-w-screen-lg lg:max-w-screen-2xl pt-16 lg:pt-24 px-4 xs:px-6 sm:px-10 lg:px-12 xl:px-16 overflow-hidden">
            <div class="h-full items-center grid lg:grid-cols-2">
                <div class="col-span-1 flex">
                    <div class="flex flex-col gap-8 xl:gap-10">
                        <div class="flex flex-col gap-5 xl:gap-7">
                            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-white lg:text-gray-600 z-40">
                                Trouvez la location qui vous convient le mieux
                            </h1>
                            <p class="text-sm md:text-base text-gray-100 lg:text-gray-500 line-clamp-5 z-40">
                                Rechercher - trouver - acheter ou louer en quelques clics seulement
                            </p>
                        </div>
                        <div class="flex sm:flex-row flex-col gap-4 z-40"></div>
                        <div class="w-full flex">
                            <form action="#" class="w-full relative lg:w-full flex flex-col  z-50 rounded-md">
                                <div class="grid  items-center w-full pt-4 pb-1 lg:py-4 px-1 shadow-md bg-white  border border-gray-100 rounded-b-md z-50">
                                    <div class="relative flex">
                                        <input
                                            type="text"
                                            name="prix"
                                            id="prix"
                                            class="w-full text-sm bg-white text-gray-500 px-3 py-1 flex"
                                            placeholder="Categorie prix">
                                    </div>
                                    <div class="border-t border-t-gray-200 pt-3 lg:pt-0 lg:border-none lg:w-max w-full col-span-2 flex lg:absolute lg:right-2 lg:top-1/2 lg:-translate-y-1/2">
                                        <button
                                            class="flex lg:w-auto w-full items-center gap-2 justify-center p-3 rounded bg-purple-600 text-white">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="h-5 w-5 hidden lg:flex"
                                                viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path
                                                    fill-rule="evenodd"
                                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span class="lg:hidden flex">
                                                Rechercher
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-span-1 absolute top-0 left-0 w-full lg:flex h-full items-center lg:relative">
                    <div class="h-full w-full">
                        <div
                            class="absolute right-0 top-0 h-3/5 w-3/5 hidden lg:block rounded-tl-3xl rounded-br-3xl border border-purple-400">
                        </div>

                        <div class="w-full lg:pl-5 h-full relative lg:pt-4">
                            <img src="{{ asset('app/images/houses/3.jpg') }}" alt="house illustration"
                                 class="absolute right-0 lg:top-4 w-full h-full lg:w-[90%] z-20 lg:h-[calc(100%-30px)] object-cover lg:rounded-tl-3xl lg:rounded-br-3xl"
                                 width="300">
                            <div
                                class="absolute bg-gradient-to-t from-gray-900 lg:to-transparent z-30 right-0 lg:top-4 w-full h-full lg:w-[90%] lg:h-[calc(100%-30px)] lg:rounded-tl-3xl lg:rounded-br-3xl">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full flex justify-center overflow-hidden py-10">
        @if($apartments->count() > 0)
            <div class="relative w-full max-w-screen-lg lg:max-w-screen-2xl px-4 xs:px-6 sm:px-10 lg:px-12 xl:px-16 flex flex-col gap-6 lg:gap-8">
                <div class="w-full flex justify-between items-center">
                    <h1 class="text-2xl md:text-3xl font-semibold text-gray-600">Maisons disponible</h1>
                </div>
                <div class="flex flex-col gap-5">
                    <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 sm:gap-5 md:gap-6 ">
                        @foreach($apartments as $apartment)
                            @include('frontend.components._service', with($apartment))
                        @endforeach
                    </div>
                    <div class="flex items-center w-full pt-4">
                        <div class=" flex items-center justify-between w-full">
                            <div class="flex-1 w-full flex gap-2 sm:hidden">
                                <a href="#"
                                   class="swip-prev-bestrate z-500 p-2 transition  hover:bg-purple-700 focus:bg-purple-500 focus:border-transparent rounded-md bg-purple-600 text-white hover:text-white border-2 border-gray-100 hover:border-purple-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                         stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                                    </svg>
                                </a>
                                <a href="#"
                                   class="swip-next-bestrate z-500 p-2 transition  hover:bg-purple-700 focus:bg-purple-500 focus:border-transparent rounded-md bg-purple-600 text-white hover:text-white border-2 border-gray-100 hover:border-purple-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                         stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>
                            </div>
                            <div class="hidden w-full sm:flex-1 sm:flex sm:items-center sm:justify-between">
                                <div>
                                    <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                                        <a href="#"
                                           class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                            <span class="sr-only">Precedent</span>
                                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                                 aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                      d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                                      clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                        <a href="#" aria-current="page"
                                           class="z-10 bg-purple-50 border-purple-600 text-purple-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                            1 </a>
                                        <a href="#"
                                           class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                            2 </a>
                                        <a href="#"
                                           class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 hidden md:inline-flex relative items-center px-4 py-2 border text-sm font-medium">
                                            3 </a>
                                        <span
                                            class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700">
                                        ... </span>
                                        <a href="#"
                                           class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 hidden md:inline-flex relative items-center px-4 py-2 border text-sm font-medium">
                                            8 </a>
                                        <a href="#"
                                           class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                            9 </a>
                                        <a href="#"
                                           class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                            10 </a>
                                        <a href="#"
                                           class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                            <span class="sr-only">Suivant</span>
                                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                                 aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                      d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                      clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </section>
@endsection
