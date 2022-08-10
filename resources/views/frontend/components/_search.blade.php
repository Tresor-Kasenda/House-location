<div data-modal data-modal-id="search" class="fixed inset-0 z-800 transition-all duration-300 invisible opacity-0">
    <div data-modal-overlay
         class="fixed inset-0 z-780 bg-gray-800 bg-opacity-60 backdrop-filter backdrop-blur-sm transition-all duration-300">
    </div>
    <div data-modal-container
         class="mx-auto w-full max-w-2xl pt-24 transition-all duration-300 ">
        <div class="w-full relative z-[850] rounded-md shadow-lg">
            <div class="w-full flex flex-col">
                <div class="hidden invisible">
                    <div class="w-full flex items-center">
                        <h2 class="text-xl text-gray-600 font-semibold">Rechercher une maison</h2>
                    </div>
                    <div class="w-max min-w-max pl-2">
                        <div data-btn-close-modal
                             class="border-2 border-gray-200 p-2 rounded transition hover:bg-gray-200 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                 fill="currentColor">
                                <path fill-rule="evenodd"
                                      d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                      clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="w-full py-4 shadow-lg bg-white   rounded-md flex flex-col gap-5">
                    <form action="" class="w-full px-1 relative lg:w-full flex flex-col  z-50 ">
                        <div
                            class="grid gap-y-4 relative items-center w-full  z-50">
                            <div class="relative flex lg:col-span-1 col-span-2">
                                <input
                                    type="text"
                                    name="location"
                                    id="location"
                                    class="w-full text-sm bg-white text-gray-500 shadow-sm shadow-purple-100 px-3 py-3 flex rounded-md border-2 border-gray-200 transition focus:border-purple-600"
                                    placeholder="Likasi ....">
                            </div>
                            <div
                                class="absolute right-2 top-1/2 -translate-y-1/2">
                                <button
                                    class="flex lg:w-auto w-full items-center gap-2 justify-center p-2 rounded bg-purple-600 text-white">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-5 w-5 flex"
                                        viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path
                                            fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="w-full flex flex-col pt-3 ">
                        <a href="house.html" class="flex items-center py-2 px-4 hover:bg-gray-100 text-gray-600 transition">
                            <div class="min-w-[10rem] text-gray-700 w-40 font-semibold">Quartier</div>
                            <div class="w-full line-clamp-3 sm:line-clamp-2 md:line-clamp-1 text-gray-500">
                                Quartier Kalubwe, adresse
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
