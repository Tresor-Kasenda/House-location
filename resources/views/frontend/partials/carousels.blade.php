<section class="w-full z-30 flex justify-center h-screen max-h-screen lg:max-h-[750px] overflow-hidden">
    <div class="w-full relative h-full max-w-screen-lg lg:max-w-screen-2xl px-0 lg:pt-24 lg:px-12 xl:px-16 overflow-hidden">
        <div class="relative h-full w-full overflow-hidden">
            <div class="uppercase text-6xl text-gray-100 absolute top-5 font-bold rotate-12">
                karibu kwako
            </div>
            <div class="absolute top-16 right-1/2 opacity-60 rounded-full w-14 h-14 bg-gradient-to-tr from-purple-600 to-green-400">
            </div>
                <div class="swiper homeSwiper h-full z-30">
                    <div class="swiper-wrapper h-full">
                        @if($sliders->count() > 0)
                            @foreach($sliders as $key => $slider)
                                <div class="swiper-slide h-full px-4 xs:px-6 sm:px-10 lg:px-0">
                                    <div class="h-full items-center grid lg:grid-cols-2">
                                        <div class="col-span-1 flex">
                                            <div class="flex flex-col gap-8 xl:gap-10">
                                                <div class="flex flex-col gap-5 xl:gap-7">
                                                    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-white lg:text-gray-600 z-40">
                                                        {{ ucfirst($slider->title) ?? "" }}
                                                    </h1>
                                                    <p class="text-sm md:text-base text-gray-100 lg:text-gray-500 line-clamp-5 z-40">
                                                        {{ ucfirst($slider->description) ?? "" }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-1 absolute top-0 left-0 w-full lg:flex h-full items-center lg:relative">
                                            <div class="h-full w-full">
                                                <div class="absolute right-0 top-0 h-3/5 w-3/5 hidden lg:block rounded-tl-3xl rounded-br-3xl border border-purple-400">
                                                </div>
                                                <div class="w-full lg:pl-5 h-full relative lg:pt-4">
                                                    <img
                                                        src="{{ $slider->images() ?? "" }}"
                                                        alt="{{ $slider->title ?? "" }}"
                                                        title="{{ $slider->title ?? "" }}"
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
                            @endforeach
                        @else
                            <div class="swiper-slide h-full px-4 xs:px-6 sm:px-10 lg:px-0">
                                <div class="h-full items-center grid lg:grid-cols-2">
                                    <div class="col-span-1 flex">
                                        <div class="flex flex-col gap-8 xl:gap-10">
                                            <div class="flex flex-col gap-5 xl:gap-7">
                                                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-white lg:text-gray-600 z-40">
                                                    Trouvez la location qui vous convient le mieux
                                                </h1>
                                                <p class="text-sm md:text-base text-gray-100 lg:text-gray-500 line-clamp-5 z-40">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores,
                                                    sunt
                                                    deserunt amet molestiae libero dignissimos earum eius pariatur atque
                                                    fugit
                                                    commodi perspiciatis vel totam qui voluptates rem numquam, eum quidem!
                                                </p>
                                            </div>
                                            <div class="flex sm:flex-row flex-col gap-4 z-40">
                                                <a
                                                    href="#service"
                                                    class="w-full z-40 sm:w-auto flex items-center justify-center rounded-md px-5 py-2.5 bg-purple-600 text-white transition border-2 border-purple-600 hover:border-purple-800 hover:bg-purple-800">
                                                    Get Started
                                                </a>
                                                <a
                                                    href="#"
                                                    class="w-full z-40 sm:w-auto flex items-center justify-center gap-3 rounded-md text-white lg:text-gray-600 transition hover:text-purple-600 ">
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="h-5 w-5"
                                                        viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path
                                                            fill-rule="evenodd"
                                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                    <span>
                                                        Voir une demo
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-span-1 absolute top-0 left-0 w-full lg:flex h-full items-center lg:relative">
                                        <div class="h-full w-full">
                                            <div class="absolute right-0 top-0 h-3/5 w-3/5 hidden lg:block rounded-tl-3xl rounded-br-3xl border border-purple-400">
                                            </div>
                                            <div class="w-full lg:pl-5 h-full relative lg:pt-4">
                                                <img
                                                    src="{{ asset('app/images/houses/1.jpg') }}"
                                                    alt="house illustration"
                                                    class="absolute right-0 lg:top-4 w-full h-full lg:w-[90%] z-20 lg:h-[calc(100%-30px)] object-cover lg:rounded-tl-3xl lg:rounded-br-3xl"
                                                    width="300">
                                                <div class="absolute bg-gradient-to-t from-gray-900 lg:to-transparent z-30 right-0 lg:top-4 w-full h-full lg:w-[90%] lg:h-[calc(100%-30px)] lg:rounded-tl-3xl lg:rounded-br-3xl">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            <div class="absolute bottom-6 left-0 z-50 w-full lg:w-1/2">
                <div class="flex items-center justify-between w-full lg:px-0 px-4 xs:px-6 sm:px-10">
                    <div class="flex items-center">
                        <div class="home-swiper-pagination flex items-center gap-2"></div>
                    </div>
                    <div class="flex gap-2">
                        <div
                            class="swip-prev-homeslide z-500 p-3 transition hover:bg-purple-700 focus:bg-purple-500 rounded bg-purple-600 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
                            </svg>
                        </div>
                        <div
                            class="swip-next-homeslide z-500 p-3 transition hover:bg-purple-700 focus:bg-purple-500 rounded bg-purple-600 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
