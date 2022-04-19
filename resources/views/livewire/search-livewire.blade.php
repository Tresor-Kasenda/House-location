<div class="bg-gray-100 border focus-within:shadow-search focus-within:bg-white rounded-xl">
    <div class="w-full overflow-hidden flex items-center">
        <div class="hidden md:flex items-center w-0.5 h-full bg-white">
            <div class="bg-gray-300 h-5 w-0.5"></div>
        </div>
        <input
            type="text"
            wire:model="search"
            class="rounded-l-md md:rounded-none w-full px-4 py-3 outline-none bg-whitetext-sm text-gray-700 peer placeholder:text-gray-500"
            placeholder="Que voulez-vous chercher?"
        >
        <div class="flex items-center w-0.5 h-full bg-white">
            <div class="bg-gray-300 h-5 w-0.5"></div>
        </div>
        <button class="px-4 pr-5 py-3 rounded-r-md text-gray-600 transition duration-300 hover:bg-purple-600 peer-focus:bg-gradient-to-tr peer-focus:from-green-400 peer-focus:to-purple-600 peer-focus:text-white hover:text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 peer-focus:fill-white hover:fill-white" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
            </svg>
        </button>
    </div>
</div>