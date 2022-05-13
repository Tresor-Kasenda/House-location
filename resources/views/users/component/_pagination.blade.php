@if($paginator->hasPages())
    <ul class="flex gap-2 text-gray-600">
        @if($paginator->onFirstPage())
            <li class="flex-1 w-12 h-12 sm:w-14 sm:h-14 rounded-full bg-gray-100">
                <span class="flex items-center justify-center hover:text-purple-600 w-full h-full transiton duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                </span>
            </li>
        @else
            <li class="flex-1 w-12 h-12 sm:w-14 sm:h-14 rounded-full bg-gray-100">
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="flex items-center justify-center hover:text-purple-600 w-full h-full transiton duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                </a>
            </li>
        @endif

        @foreach($elements as $element)
            @if(is_string($element))
                <li class="flex-1 w-12 h-12 sm:w-14 sm:h-14 rounded-full bg-gray-100">
                    <span
                        class="flex items-center justify-center hover:text-purple-600 w-full h-full transiton duration-300"
                    >{{ $element }}</span>
                </li>
            @endif

            @if(is_array($element))
                @foreach($element as $page => $url)
                    @if($page == $paginator->currentPage())
                        <li class="flex-1 w-12 h-12 sm:w-14 sm:h-14 rounded-full bg-gray-100 activeBtnPagination">
                            <span
                                class="flex items-center justify-center hover:text-purple-600 w-full h-full transiton duration-300"
                            >{{ $page }}</span>
                        </li>
                    @else
                        <li class="flex-1 w-12 h-12 sm:w-14 sm:h-14 rounded-full bg-gray-100">
                            <a
                                href="{{ $url }}"
                                class="flex items-center justify-center hover:text-purple-600 w-full h-full transiton duration-300"
                            >{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        @if($paginator->hasMorePages())
            <li class="flex-1 w-12 h-12 sm:w-14 sm:h-14 rounded-full bg-gray-100">
                <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="flex items-center justify-center hover:text-purple-600 w-full h-full transiton duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </li>
        @else
            <li class="flex-1 w-12 h-12 sm:w-14 sm:h-14 rounded-full bg-gray-100">
                <span class="flex items-center justify-center hover:text-purple-600 w-full h-full transiton duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </span>
            </li>
        @endif
    </ul>
@endif
