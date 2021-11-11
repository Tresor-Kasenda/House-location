<li>
    <a title="{{ $title }}" href="{{ $route }}" class="block lg:px-4 py-4 group {{ Request::url() === $route ? 'text' : '' }} ">
        <span class="relative before:absolute before:-bottom-4 before:w-full before:scale-x-0 before:h-0.5 before:bg-gradient-to-r before:from-green-400 before:to-purple-600 group-hover:before:scale-x-100 before:transition">
            {{ $name }}
        </span>
    </a>
</li>
