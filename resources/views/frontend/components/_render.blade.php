@foreach($searches as $search)
    <a href="{{ route('categories.show', $search->key) }}"
       title="{{ $search->commune ?? "" }}"
       class="flex p-2 items-center sm:gap-2 sm:block col-span-1 w-full gap-4 lg:px-2 lg:py-2 rounded-xl bg-white shadow-md lg:shadow-none lg:bg-transparent sm:hover:bg-gray-100">
        <img src="{{ asset('storage/'.$search->images) }}"
             class="w-4/12 sm:w-full h-16 sm:h-36 object-cover rounded-lg"
             alt="{{ $search->commune ?? "" }}">
        <div class="w-full space-y-2 sm:pt-3">
            <h6 class="text-lg leading-none text-gray-700">{{ $search->roomNumber ?? 0 }} pièces</h6>
            <div class="w-max flex items-end gap-2">
                <h5 class="sm:text-xl text-lg leading-none md:text-right font-bold text-purple-500">
                    {{ $search->guarantees ?? 0 }} $
                </h5>
                <span class="block w-max text-xs text-gray-600">{{ $search->guarantees ?? 0 }} $ Garantie</span>
            </div>
        </div>
    </a>
@endforeach
