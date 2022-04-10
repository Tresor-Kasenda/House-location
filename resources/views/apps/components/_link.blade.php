<li class="relative">
    <a href="{{ $route ?? "" }}"
       title="{{ $title ?? "" }}"
       class=" {{ Request::url() === $route ? 'transition hover:text-purple-600' : '' }}  ralative block before:bg-gradient-to-r py-3 before:absolute before:top-full before:right-0 before:from-green-400 before:to-purple-600 before:w-full before:h-0.5 before:scale-x-0 before:origin-right hover:before:scale-x-100 before:transition-all before:duration-300 hover:before:origin-left">
        {{ $name ?? "" }}
    </a>
</li>
