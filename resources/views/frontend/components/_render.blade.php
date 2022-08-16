@foreach($searches as $search)
    <a href="{{ route('house.show', $search->key) }}" class="flex items-center py-2 px-4 hover:bg-gray-100 text-gray-600 transition">
        <div class="min-w-[10rem] text-gray-700 w-40 font-semibold">
            {{ ucfirst($search->district) ?? "" }}
        </div>
        <div class="w-full line-clamp-3 sm:line-clamp-2 md:line-clamp-1 text-gray-500">
            {{ ucfirst($search->commune) }} {{ ucfirst($search->address) }}, {{ $search->prices }} $
        </div>
    </a>
@endforeach
