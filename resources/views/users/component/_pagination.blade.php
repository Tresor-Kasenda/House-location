@if($paginator->hasPages())
    <ul class="flex items-center relative gap-2">
        @if($paginator->onFirstPage())
            <li class="flex w-12 h-12 items-center rounded-lg overflow-hidden">
                <span class="w-full font-medium text-gray-600 transition-all h-full flex items-center justify-center bg-gray-100 text-base hover:text-white hover:bg-green-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                </span>
            </li>
        @else
            <li class="flex w-12 h-12 items-center rounded-lg overflow-hidden">
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="w-full font-medium text-gray-600 transition-all h-full flex items-center justify-center bg-gray-100 text-base hover:text-white hover:bg-green-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                </a>
            </li>
        @endif

        @foreach($elements as $element)
            @if(is_string($element))
                <li class="flex w-12 h-12 items-center rounded-lg overflow-hidden">
                    <span
                        class="w-full font-medium text-gray-600 transition-all h-full flex items-center justify-center bg-gray-100 text-base hover:text-green-600"
                    >{{ $element }}</span>
                </li>
            @endif

            @if(is_array($element))
                @foreach($element as $page => $url)
                    @if($page == $paginator->currentPage())
                        <li class="flex w-12 h-12 items-center rounded-lg overflow-hidden">
                            <span
                                class="w-full font-medium text-gray-600 transition-all h-full flex items-center justify-center bg-gray-100 text-base hover:text-green-600"
                            >{{ $page }}</span>
                        </li>
                    @else
                        <li class="activeItemPag flex w-12 h-12 items-center rounded-lg overflow-hidden">
                            <a
                                href="{{ $url }}"
                                class="w-full font-medium text-gray-600 transition-all h-full flex items-center justify-center bg-gray-100 text-base hover:text-green-600"
                            >{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        @if($paginator->hasMorePages())
            <li class="flex w-12 h-12 items-center rounded-lg overflow-hidden">
                <a href="{{ $paginator->nexPageUrl() }}" rel="next" class="w-full font-medium text-gray-600 transition-all h-full flex items-center justify-center bg-gray-100 text-base  hover:text-white hover:bg-green-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </li>
        @else
            <li class="flex w-12 h-12 items-center rounded-lg overflow-hidden">
                <span class="w-full font-medium text-gray-600 transition-all h-full flex items-center justify-center bg-gray-100 text-base  hover:text-white hover:bg-green-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </span>
            </li>
        @endif
    </ul>
@endif
