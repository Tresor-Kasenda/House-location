<div
    data-modal data-modal-id="verify-reservation"
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
                    <form action="#" class="w-full relative lg:w-full flex flex-col  z-50 rounded-md">
                        <div class="flex items-center relative w-full sm:flex-row flex-col gap-3">
                            <input
                                type="text"
                                name="bookingId"
                                id="bookingId"
                                class="w-full bg-white border-2 border-gray-100 shadow-lg shadow-gray-100 rounded-md px-5 py-3 text-gray-600"
                                placeholder="Code de reservation Ex : rdlushi92032m" />
                            <button
                                class="flex sm:w-auto w-full items-center gap-2 justify-center p-3 rounded bg-purple-600 text-white sm:absolute sm:right-1">
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
                                <span
                                    class="lg:hidden flex">
                                    Rechercher
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
