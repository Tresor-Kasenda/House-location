<header
    class="w-full lg:px-28 sm:px-12 px-6 relative lg:after:absolute lg:after:bottom-0 bg-white z-50 after:max-w-7xl after:h-0 after:left-1/2 after:-translate-x-1/2 after:bg-gradient-to-tr after:from-green-400 after:to-purple-600 shadow-md shadow-purple-100 lg:shadow-none lg:after:w-9/12 after:z-40">
    <nav class="container m-auto h-16 md:h-20 py-4 flex items-center justify-between">
        <div class="flex items-center">
            <div class="flex items-center">
                <a href="{{ route('home.index') }}" class="flex items-center gap-2 text-xl font-semibold text-gray-500">
                    <img src="{{ asset('app/images/logo.png') }}" class="w-8" alt="">
                    <span class="hidden sm:flex lg:hidden xl:flex">Karibukuako</span>
                </a>
            </div>
        </div>
        <div class="hidden lg:flex items-center">
            <ul class="flex items-center text-gray-500 text-lg gap-3 capitalize">
                @include('apps.components._link', [
                    'title' => "accueil",
                    'route' => route('home.index'),
                    'name' => "Accueil"
                ])
                @include('apps.components._link', [
                    'title' => "Apropos",
                    'route' => route('abouts.index'),
                    'name' => "Apropos"
                ])
                @include('apps.components._link', [
                    'title' => "Cartes",
                    'route' => route('location.index'),
                    'name' => "Cartes"
                ])
                @include('apps.components._link', [
                    'title' => "categories",
                    'route' => route('categories.index'),
                    'name' => "categories"
                ])
                @include('apps.components._link', [
                    'title' => "Contact",
                    'route' => route('contact.index'),
                    'name' => "Contact"
                ])
            </ul>
        </div>
        <div id="overlayM" class="fixed flex bg-transparent h-full w-full z-[998] top-0 left-0 lg:hidden ">
        </div>
        <div id="menuMob" class="flex flex-col -left-[83.333333%] fixed right-0 w-10/12 top-0 sm:w-60 md:w-64 bg-purple-50 h-full overflow-x-hidden overflow-y-scroll lg:hidden before:w-1 before:h-full before:absolute before:bg-gray-700 before:bg-opacity-50 before:backdrop-filter before:blur-lg before:top-0 before:right-0.5 p-5 z-[1000] transition-all duration-300">
            <div class="py-4">
                <livewire:header-search />
            </div>
            <div class="flex flex-col text-lg text-gray-400 w-full pb-2">
                @include('apps.components._mobile', [
                    'route' => route('home.index'),
                    'name' => "Contact"
                ])
                @include('apps.components._mobile', [
                    'route' => route('abouts.index'),
                    'name' => "A propos"
                ])
                @include('apps.components._mobile', [
                    'route' => route('location.index'),
                    'name' => "Cartes"
                ])
                @include('apps.components._mobile', [
                    'route' => route('categories.index'),
                    'name' => "categories"
                ])
                @include('apps.components._mobile', [
                    'route' => route('contact.index'),
                    'name' => "Contact"
                ])
            </div>
            <div class="relative h-2 w-36 mx-auto before:absolute before:top-1/2 before:-translate-y-1/2 before:bg-gray-400 before:w-full before:h-[1px] before:left-1/2 before:-translate-x-1/2"></div>
            <div class="flex flex-col">
                <div class="w-full text-lg text-gray-500">
                    <a href="" class="flex gap-2 px-4 py-2.5 ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span>Mes Favoris (0)</span>
                    </a>
                    @auth
                        @if(auth()->user()->role_id == \App\Enums\UserRoleEnum::USERS)
                            <a href="" class="flex gap-2 px-4 py-2.5 ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                <span>Mon compte</span>
                            </a>
                        @endif
                    @endauth
                </div>
            </div>
            <div class="flex gap-2 py-4 flex-wrap justify-between">
                <a href="{{ route('register') }}" class="px-4 py-3 text-sm rounded-xl text-center text-white bg-gradient-to-br from-green-400 to-purple-600 w-full">S'inscrire</a>
                <a href="{{ route('login') }}" class="px-4 py-3 text-sm rounded-xl text-center bg-purple-600 text-white w-full">Se connecter</a>
            </div>
        </div>
        <div class="flex gap-3 sm:gap-1 items-center relative">
            <div class="flex lg:flex items-center lg:gap-3 relative lg:before:absolute lg:before:w-full lg:before:h-full before:lg:-top-4 lg:before:left-0 lg:before:bg-gray-00 lg:p-4 lg:before:rounded-b-xl before:z-10 lg:before:border lg:before:bg-gray-100">
                <button id="toggleSearchBox" class="bg-gray-100 p-3 rounded-xl transition-all hover:bg-gray-100 hover:text-purple-600 duration-300 z-50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
                <a href="" class="sm:p-3 rounded-xl transition-all bg-gray-100 hover:text-purple-600 duration-300 hidden lg:flex lg:z-50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </a>
            </div>
            <div class="relative group hidden lg:flex z-[1002]">
                <button class="p-2 sm:p-3 rounded-xl bg-gradient-to-tr from-green-400 to-purple-600 text-white ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </button>
                <div class="absolute shadow-purple-100 left-8 top-full -translate-x-full w-40 bg-white shadow-lg rounded-xl scale-y-0 transition-all duration-500 group-hover:scale-y-100 origin-top border border-purple-100">
                    <ul class="flex flex-col pt-2 text-gray-500 w-full z-[1003]">
                        @auth
                            @if(auth()->user()->role_id == \App\Enums\UserRoleEnum::USERS)
                                <li class="block hover:bg-purple-100 transition">
                                    <a href="" class="py-2 px-4 hover:text-purple-600 block transition">Mon compte</a>
                                </li>
                            @endif
                        @endauth
                        <li class="block hover:bg-purple-100 transition">
                            <a href="{{ route('login') }}" class="py-2 px-4 hover:text-purple-600 block transition">Se connecter</a>
                        </li>
                        <li class="block hover:bg-purple-100 transition">
                            <a href="{{ route('register') }}" class="py-2 px-4 hover:text-purple-600 block transition">S'inscrire</a>
                        </li>
                    </ul>
                </div>
            </div>
            <button id="btnHumberger" class="z-[1000] relative flex flex-col justify-between h-5 w-5 transition duration-300 rotate-0 lg:hidden">
                <span id="line1" class="left-0 w-full h-0.5 bg-gray-600 transition duration-300"></span>
                <span id="line2" class="left-0 w-full top-2 h-0.5 bg-gray-600 transition duration-300"></span>
                <span id="line3" class="left-0 w-full h-0.5 bg-gray-600 transition duration-300"></span>
            </button>

        </div>
    </nav>
    @include('apps.components._modal')
</header>
