<section class="lg:px-24 md:px-12 overflow-hidden">
    <div class="overflow-hidden md:mx-0 -mx-4">
        <div class="container m-auto py-8 overflow-x-auto">
            @if($apartments->count() > 0)
                <div class="md:w-full w-[130vh] md:h-full h-[60vh] md:pl-0 md:pr-0 pl-8 pr-4 grid grid-cols-12 grid-rows-4 gap-4">
                    @foreach($cards as $card)
                        @foreach($apartments as  $key => $aprtment)
                            <div class="{{ $card }}">
                                <div class="absolute bottom-0 w-full h-full">
                                    <div class="h-full sm:p-6 p-4 pt-2 flex items-end lg:rounded-tr-2xl md:rounded-none rounded-2xl bg-gradient-to-t from-gray-900 overflow-hidden">
                                        <div class="w-full translate-y-24 group-hover:translate-y-0 transition duration-500">
                                            <div class="pb-8">
                                                <h4 class="mb-4 text-lg text-white font-semibold">{{ $aprtment->address ?? "" }}</h4>
                                                <div class="flex items-end gap-2">
                                                    <h3 class="text-2xl font-bold text-purple-400">{{ $aprtment->prices ?? 0 }} $</h3>
                                                    <div class="text-xs tracking-wide text-gray-300">
                                                        <span class="block">/ Mois</span>
                                                        <span class="block">{{ $aprtment->guarantees ?? 0 }} $ Garantie</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="relative pt-4 flex gap-2 group-hover:-mt-4 transition">
                                                <div class="translate-y-8 group-hover:translate-y-0 transition delay-150 duration-300 ease-in-out">
                                                    <a href="{{ route('categories.show', $aprtment->key) }}" title="En savoir plus" class="block w-max py-2 px-6 border border-gray-600 text-white rounded-full hover:border-transparent hover:bg-white hover:text-purple-700 focus:bg-white focus:text-purple-700 active:scale-95 transition">
                                                        <span class="text-sm font-medium tracking-wide">Savoir plus</span>
                                                    </a>
                                                </div>
                                                <div class="translate-y-16 group-hover:translate-y-0 transition delay-200 duration-300 ease-in-out">
                                                    <a href="{{ $aprtment->phoneNumber ?? "" }}" aria-label="call" class="w-10 h-10 flex items-center rounded-full bg-purple-600 bg-opacity-0 hover:border-transparent hover:bg-opacity-30 focus:bg-opacity-40 active:scale-95 transition">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                             class="w-4 m-auto text-purple-300" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                                        </svg>
                                                    </a>
                                                </div>
                                                <div class="translate-y-32 group-hover:translate-y-0 transition delay-300 duration-300 ease-in-out">
                                                    <button title="Partager" class=" block w-10 h-10 rounded-full bg-purple-600 bg-opacity-0 hover:border-transparent hover:bg-opacity-30 focus:bg-opacity-40 active:scale-95 transition">
                                                        <svg viewBox="0 0 1200 1130" fill="none" class="w-4 m-auto fill-current text-purple-300" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M754.553 0V294.208C487.317 294.216 0 297.148 0 1129.94C55.25 573.04 309.061 569.538 754.553 569.532V890.824L1200 445.377L754.553 0Z" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <img src="{{ asset('storage/'.$aprtment->images) }}" class="w-full h-full lg:rounded-tr-2xl md:rounded-none rounded-2xl object-cover" alt="">
                            </div>
                        @endforeach
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</section>
