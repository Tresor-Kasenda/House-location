<li class="flex w-full">
    <a
        data-is-activepage="{{ Request::url() === $route ? "true" : "false" }}"
        href="{{ $route ?? "" }}"
        title="{{ $name ?? "" }}"
        data-turbolinks="false"
        class="relative min-w-max lg:w-auto w-full transition hover:text-gray-600 py-3 text-lg text-gray-600 font-normal after:absolute after:bottom-0 after:left-0 after:scale-0 after:origin-left after:transition-all hover:after:scale-100 after:bg-gray-700 after:h-[3px] after:rounded-t-lg after:w-full">
        {{ $name ?? "" }}
    </a>
</li>
