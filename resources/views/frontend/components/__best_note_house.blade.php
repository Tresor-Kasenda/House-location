
                        <!-- ===============slide card house best rate for rent =============== -->
                        <div class="swiper-slide">
                            <div
                                class="w-full flex flex-col p-1 rounded-xl border hover:shadow-lg hover:rounded-2xl hover:border-transparent group transition duration-200">
                                <div class="w-full rounded-t-md relative">
                                    <img src="{{asset('storage/'.$house->images)}}" width="300" alt="house presentation"
                                        class="w-full h-44 sm:h-52 lg:h-60 object-cover rounded-lg group-hover:!rounded-xl group:transition duration-200">
                                    <span
                                        class="text-pink-600 absolute right-2 top-2 p-2 rounded-full bg-gray-100 bg-opacity-70">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="flex flex-col px-3 py-4 gap-4">
                                    <div class="flex flex-col gap-2">
                                        <h1 class="flex text-lg leading-none text-gray-600 line-clamp-1 font-semibold">
                                            Maison {{$house->roomNumber}}
                                            pieces, douches,
                                            wc</h1>
                                        <div class="flex items-center gap-3 text-sm text-gray-400">
                                            <span class="text-purple-600">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </span>
                                            <span class="line-clamp-1">{{$house->commune}}, {{$house->town}}, RDC</span>
                                        </div>
                                    </div>
                                    <div class="w-full justify-between flex items-center">
                                        <div class="flex items-center gap-1 text-sm">
                                            <span>{{$house->guarantees}}$ Garantie</span>
                                        </div>
                                        <div class="flex items-center">
                                            <h5
                                                class="text-2xl uppercase  leading-none md:text-right font-bold text-purple-500">
                                                {{$house->prices}}
                                                $</h5>
                                            <span class="text-xs md:text-sm">/mois</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="py-3 px-3 border-t border-gray-300 flex justify-between">
                                    <div class="flex items-center">
                                    
                                        @foreach($house->notes as $note)
                                        <img src="{{asset('images/icons/star.svg')}}" width="10" alt="star"
                                            class="w-5 h-5 lg:w-6 lg:h-6">
                                        @endforeach
                                       
                                    </div>
                                    <div class="flex items-center min-w-max">
                                        <a href="\categories\{{$house->key }}"
                                            class="px-5 py-2 rounded bg-purple-600 text-white transition hover:bg-purple-700 text-sm">Voir
                                            plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ===============end slide card house best rate for rent =============== -->
