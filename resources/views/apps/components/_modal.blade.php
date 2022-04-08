<div id="modaleSearch"
     class="fixed flex items-center justify-center w-full h-full top-0 left-0 bg-transparent transition-all duration-500  -z-10 bg-gray-700 bg-opacity-60 opacity-0">
    <div id="modalContent"
         class="w-11/12 sm:w-[38rem] rounded-xl bg-white p-4 -translate-y-full transition-all duration-500">
        <div class="flex justify-end pb-3">
            <button id="closeModalSearch" class="text-gray-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor"
                     stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <div class="rounded-xl">
            <form action=""
                  class="bg-gray-100 border focus-within:shadow-search focus-within:bg-white rounded-xl">
                <div
                    class="w-full overflow-hidden flex items-center">
                    <div class="hidden md:flex relative outline-none w-40">
                        <select name="" id=""
                                class="bg-white rounded-l-3xl w-full text-gray-600 appearance-none py-3 px-4 pr-8 outline-none">
                            <option value="">Tous</option>
                            <option value="">Recent</option>
                            <option value="">Populaire</option>
                        </select>
                        <div
                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 20 20">
                                <path
                                    d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </div>
                    </div>
                    <div class="hidden md:flex items-center w-0.5 h-full bg-white">
                        <div class="bg-gray-300 h-5 w-0.5"></div>
                    </div>
                    <input type="search"
                           class="rounded-l-md md:rounded-none w-full px-4 py-3 outline-none bg-whitetext-sm text-gray-700 peer placeholder:text-gray-500"
                           placeholder="Que voulez-vous chercher?">
                    <div class="flex items-center w-0.5 h-full bg-white">
                        <div class="bg-gray-300 h-5 w-0.5"></div>
                    </div>
                    <button
                        class="px-4 pr-5 py-3 rounded-r-md text-gray-600 transition duration-300 hover:bg-purple-600 peer-focus:bg-gradient-to-tr peer-focus:from-green-400 peer-focus:to-purple-600 peer-focus:text-white hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-5 w-5 peer-focus:fill-white hover:fill-white"
                             viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                  clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
