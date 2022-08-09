 <section class="w-full z-30 flex justify-center h-screen max-h-screen lg:max-h-[750px] overflow-hidden">
        <div
            class="w-full relative h-full max-w-screen-lg lg:max-w-screen-2xl px-0 lg:pt-24 lg:px-12 xl:px-16 overflow-hidden">
            <div class="relative h-full w-full overflow-hidden">
                <div class="uppercase text-6xl text-gray-100 absolute top-5 font-bold rotate-12">karibu kwako</div>
                <div
                    class="absolute top-16 right-1/2 opacity-60 rounded-full w-14 h-14 bg-gradient-to-tr from-purple-600 to-green-400">
                </div>
                <div class="swiper homeSwiper h-full z-30">
                    <div class="swiper-wrapper h-full">
                    @if (count($sliders) > 0)
                            @foreach($sliders as $slide)
                                @include('apps.components._slider')   
                            @endforeach
                    @endif

                                      <!-- section  autre -->
                                      
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
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                                </svg>
                            </div>
                            <div
                                class="swip-next-homeslide z-500 p-3 transition hover:bg-purple-700 focus:bg-purple-500 rounded bg-purple-600 text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>