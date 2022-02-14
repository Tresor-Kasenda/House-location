<a href="{{ route('categories.show', $apartment->key) }}" title="Voir la maison" class="block lg:flex items-center w-52 lg:w-full gap-4 lg:px-2 lg:py-2 rounded-xl bg-white shadow-md lg:shadow-none lg:bg-transparent lg:hover:bg-gray-100">
    <img src="{{ asset('storage/'.$apartment->images) }}" class="lg:w-4/12 w-52 lg:h-16 h-28 object-cover lg:rounded-lg rounded-t-lg" alt="{{ $apartment->commune }}">
    <div class="space-y-2 lg:p-0 p-4">
        <h6 class="text-lg leading-none text-gray-700">{{ $apartment->piece_number ?? "" }} pièces</h6>
        <div class="w-max flex items-end gap-2">
            <h5 class="sm:text-xl text-lg leading-none md:text-right font-bold text-purple-500">{{ $apartment->guarantees ?? "" }}</h5>
            <span class="block w-max text-xs text-gray-600">{{ $apartment->guarantees ?? "" }} Garantie</span>
        </div>
    </div>
</a>

