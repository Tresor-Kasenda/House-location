<div id="modaleSearch" class="fixed flex items-center justify-center w-full h-full top-0 left-0 bg-transparent transition-all duration-500 scale-0 -z-10 bg-gray-700 bg-opacity-60">
    <div id="modalContent" class="w-11/12 sm:w-[38rem] rounded-xl bg-white p-4 -translate-y-full transition-all duration-500">
        <div class="flex justify-end pb-3">
            <button id="closeModalSearch" class="text-gray-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <div class="rounded-xl">
            @livewire('search-livewire')
        </div>
    </div>
</div>
