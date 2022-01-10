<header class="w-full lg:px-28 sm:px-12 px-6">
    <nav class="container m-auto h-16 md:h-20 py-4 flex lg:items-center">
        <div class="relative z-50 w-full lg:flex justify-between items-center">
            <div class="flex lg:justify-start justify-between items-center gap-12">
                <div class="w-max flex justif-between">
                    <div class="flex items-center gap-4">
                        <a href="{{ route('home.index') }}" class="md:hidden lg:block text-xl font-semibold text-gray-700">
                            <img src="{{ asset('app/images/logo.png') }}" class="w-8" alt="">
                        </a>
                    </div>
                </div>

                <div class="lg:w-9/12 sm:w-11/12 md:block" hidden>
                    <form id="searchData" class="bg-gray-100 border focus-within:shadow-search focus-within:bg-white rounded-full">
                        <div class="relative flex justify-between p-1 text-gray-700">
                            <div class="w-3/12">
                                <input type="text" id="quartier" name="Quartier" value="{{ old('Quartier') }}" placeholder="Quartier" class="w-full border-transparent ring-transparent py-3 px-6 rounded-full outline-none text-sm bg-transparent focus:bg-gray-100 focus:ring-transparent focus:border-transparent">
                            </div>
                            <div class="w-3/12">
                                <input type="text" id="commune" name="Commune" value="{{ old('Commune') }}" placeholder="Commune" class="w-full border-transparent ring-transparent p-3 rounded-full outline-none text-sm bg-transparent focus:bg-gray-100 focus:ring-transparent focus:border-transparent">
                            </div>
                            <div class="w-2/12">
                                <input type="text" id="pieces" name="pièces" value="{{ old('pièces') }}" placeholder="Pièces" class="w-full border-transparent ring-transparent p-3 rounded-full outline-none text-sm bg-transparent focus:bg-gray-100 focus:ring-transparent focus:border-transparent">
                            </div>
                            <div class="w-max ml-auto">
                                <button id="submit" class="h-11 px-6 bg-gradient-to-br from-green-400 to-purple-600 rounded-full hover:bg-purple-600 focus:bg-purple-700 active:scale-95 transition">
                                    <span class="text-sm text-white">Rechercher</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="lg:hidden space-x-2">
                    <button class="md:hidden h-12 w-12 rounded-full bg-gray-100">
                        <svg class="w-5 m-auto stroke-current text-gray-600" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M21 21L16.65 16.65" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>

                    <button id="hamburger">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                    </button>
                </div>
            </div>

            <div id="navitems" class="lg:w-5/12 overflow-y-hidden lg:translate-y-0 -translate-y-10 lg:h-auto h-0 lg:mt-0 mt-6 lg:mx-0 -mx-4 lg:px-0 px-6 lg:py-0 lg:flex items-center justify-end gap-6 rounded-xl shadow-xl lg:shadow-none lg:bg-transparent bg-white transition duration-200">
                <ul class="list-unstyled lg:flex text-gray-600 lg:mb-0 mb-8">
                    @include('frontends.components.link', [
                        'route' => route('categories.index'),
                        'name' => "Categories",
                        'title' => "Les catégories"
                    ])
                    @include('frontends.components.link', [
                        'route' => route('localisation.index'),
                        'name' => "Carte",
                        'title' => "Voir sur la carte"
                    ])
                    @include('frontends.components.link', [
                        'route' => route('abouts.index'),
                        'name' => "A propos",
                        'title' => "A propos de nous"
                    ])
                </ul>

                <div class="lg:p-0 p-6 rounded-2xl lg:border-transparent border">
                    <div class="lg:hidden w-max mx-auto -mt-9 px-4  bg-white text-purple-500">Contact</div>
                    <button hidden class="relative z-20 lg:block w-11 h-11 bg-purple-100 rounded-full hover:bg-purple-100 focus:bg-purple-200 active:scale-95 transition peer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 m-auto text-purple-600" viewBox="0 0 16 16">
                            <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.5a1 1 0 0 0-.8.4l-1.9 2.533a1 1 0 0 1-1.6 0L5.3 12.4a1 1 0 0 0-.8-.4H2a2 2 0 0 1-2-2V2zm5 4a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                        </svg>
                    </button>
                    <div class="lg:hidden w-max m-auto lg:mb-0 mb-4 h-12 lg:mt-28 lg:p-2 lg:rounded-full bg-white lg:shadow-md lg:flex-col flex justify-between gap-4 pt-4 peer-hover:block">
                        <a href="tel:099000000" aria-label="call" class="w-12 h-12 lg:w-10 lg:h-10 flex items-center rounded-full bg-gray-600 bg-opacity-10 hover:bg-opacity-30 focus:bg-opacity-40 active:scale-95 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 m-auto text-gray-600" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                            </svg>
                        </a>
                        <a href="mailto:hello@mail.com" aria-label="send mail" class="w-12 h-12 lg:w-10 lg:h-10 flex items-center rounded-full bg-gray-600 bg-opacity-10 hover:bg-opacity-30 focus:bg-opacity-40 active:scale-95 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 m-auto text-gray-600" viewBox="0 0 16 16">
                                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                            </svg>
                        </a>
                        <a href="#" title="facebook" target="blank" aria-label="facebook" class="w-12 h-12 lg:w-10 lg:h-10 flex items-center rounded-full bg-gray-600 bg-opacity-10 hover:bg-opacity-30 focus:bg-opacity-40 active:scale-95 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 m-auto text-gray-600" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                            </svg>
                        </a>
                        <a href="#" title="linkedin" target="blank" aria-label="linkedin" class="w-12 h-12 lg:w-10 lg:h-10 flex items-center rounded-full bg-gray-600 bg-opacity-10 hover:bg-opacity-30 focus:bg-opacity-40 active:scale-95 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 m-auto text-gray-600" viewBox="0 0 16 16">
                                <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div id="layer" class="lg:hidden invisible fixed inset-0 z-20 w-screen h-scw-screen  bg-white bg-opacity-80 backdrop-blur-xl"></div>
    </nav>
</header>
