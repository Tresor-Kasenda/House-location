<!-- ============section meilleurs commissionnaires============ -->
<section class="w-full flex justify-center overflow-hidden py-10">
       <div
           class="relative w-full max-w-screen-lg lg:max-w-screen-2xl px-4 xs:px-6 sm:px-10 lg:px-12 xl:px-16 flex flex-col gap-6 lg:gap-8">
           <div class="w-full flex">
               <h1 class="text-2xl md:text-3xl font-semibold text-gray-600">Meilleurs commissionnaires</h1>
           </div>

           <div class="flex flex-col gap-4">
               <div class="swiper swiperBestcommis">
                   <div class="swiper-wrapper">
               
               @foreach ($best_commissionnaires as $commissioner)
                   @include('apps.components.best_commission')
               @endforeach


                   </div>
                </div>


                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <div
                            class="swip-prev-bestcommis z-500 p-2 transition  hover:bg-purple-700 focus:bg-purple-500 focus:border-transparent rounded bg-purple-100 text-purple-600 hover:text-white border-2 border-gray-100 hover:border-purple-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                            </svg>
                        </div>
                        <div
                            class="swip-next-bestcommis z-500 p-2 transition  hover:bg-purple-700 focus:bg-purple-500 focus:border-transparent rounded bg-purple-100 text-purple-600 hover:text-white border-2 border-gray-100 hover:border-purple-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </div>
                    </div>
                    <div class="flex items-center min-w-max">
                        <a href="/categories"
                            class="flex items-center gap-1 transition-all hover:gap-3 text-purple-600 font-normal">
                            Decouvrir plus
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
