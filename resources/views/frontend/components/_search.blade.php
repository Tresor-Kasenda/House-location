<div
    data-modal data-modal-id="search"
    class="fixed inset-0 z-800 transition-all duration-300 invisible opacity-0">
    <div
        data-modal-overlay
        class="fixed inset-0 z-780 bg-gray-800 bg-opacity-60 backdrop-filter backdrop-blur-sm transition-all duration-300">
    </div>
    <div
        data-modal-container
        class="mx-auto w-full max-w-2xl lg:px-0 p-4 lg:max-w-4xl pt-24 transition-all duration-300 ">
        <div class="w-full relative bg-white z-[850] rounded-md p-4 md:p-6 lg:p-8 shadow-lg">
            <div class="w-full flex flex-col">
                <div class="w-full pt-5">
                    <form action="" class="w-full relative lg:w-full flex flex-col  z-50 rounded-md">
                        <div
                            class="grid  items-center w-full pt-4 pb-1 lg:py-4 px-1 shadow-md bg-white  border border-gray-100 rounded-b-md z-50">
                            <div class="relative flex lg:col-span-1 col-span-2">
                                <input
                                    type="text"
                                    name="location"
                                    id="location"
                                    class="w-full text-sm bg-white text-gray-500 px-3 py-1 flex"
                                    placeholder="Likasi ....">
                            </div>
                            <div
                                class="border-t border-t-gray-200 pt-3 lg:pt-0 lg:border-none lg:w-max w-full col-span-2 flex lg:absolute lg:right-2 lg:top-1/2 lg:-translate-y-1/2">
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
                                    <span class="lg:hidden flex">Rechercher</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
