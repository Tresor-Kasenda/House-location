
                        <!-- ===============slide card best commis profile =============== -->
                        <div class="swiper-slide">
                            <div
                                class="w-full flex flex-col p-4 rounded-xl border hover:shadow-lg hover:rounded-2xl hover:border-transparent group transition duration-200">
                                <div class="flex pb-4 w-full flex-row sm:justify-center gap-4 items-center">
                                    <div class="w-max min-w-max">
                                        
                                        <img src="{{!is_null($commissioner->commissioner->images)?asset('storage/'.$commissioner->commissioner->images): asset('images/profile.jpg')}}" width="300" alt="avatar user"
                                            class="w-24 h-24 object-cover rounded" />
                                    </div>
                                    <div class="flex flex-col gap-3 w-full">
                                        <h3 class="text-xl font-semibold text-gray-600">John Doe</h3>
                                        <div class="flex items-start gap-2 text-sm text-gray-400">
                                            <span class="text-purple-600">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </span>
                                            <span class="text-sm line-clamp-1">Kasapa, Lubumbashi, RDC</span>
                                        </div>
                                        <div class="text-sm">Disponible 24h/24h</div>
                                    </div>
                                </div>
                                <div class="border-t border-t-gray-300 flex justify-between items-center pt-3">
                                    <div class="flex items-center gap-2">
                                        <a href="#" class="text-gray-500 transition hover:text-purple-600">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-messenger" viewBox="0 0 16 16">
                                                <path
                                                    d="M0 7.76C0 3.301 3.493 0 8 0s8 3.301 8 7.76-3.493 7.76-8 7.76c-.81 0-1.586-.107-2.316-.307a.639.639 0 0 0-.427.03l-1.588.702a.64.64 0 0 1-.898-.566l-.044-1.423a.639.639 0 0 0-.215-.456C.956 12.108 0 10.092 0 7.76zm5.546-1.459-2.35 3.728c-.225.358.214.761.551.506l2.525-1.916a.48.48 0 0 1 .578-.002l1.869 1.402a1.2 1.2 0 0 0 1.735-.32l2.35-3.728c.226-.358-.214-.761-.551-.506L9.728 7.381a.48.48 0 0 1-.578.002L7.281 5.98a1.2 1.2 0 0 0-1.735.32z" />
                                            </svg>
                                        </a>
                                        <a href="#" class="text-gray-500 transition hover:text-purple-600">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                                <path
                                                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                            </svg>
                                        </a>
                                        <a href="#" class="text-gray-500 transition hover:text-purple-600">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-messenger" viewBox="0 0 16 16">
                                                <path
                                                    d="M0 7.76C0 3.301 3.493 0 8 0s8 3.301 8 7.76-3.493 7.76-8 7.76c-.81 0-1.586-.107-2.316-.307a.639.639 0 0 0-.427.03l-1.588.702a.64.64 0 0 1-.898-.566l-.044-1.423a.639.639 0 0 0-.215-.456C.956 12.108 0 10.092 0 7.76zm5.546-1.459-2.35 3.728c-.225.358.214.761.551.506l2.525-1.916a.48.48 0 0 1 .578-.002l1.869 1.402a1.2 1.2 0 0 0 1.735-.32l2.35-3.728c.226-.358-.214-.761-.551-.506L9.728 7.381a.48.48 0 0 1-.578.002L7.281 5.98a1.2 1.2 0 0 0-1.735.32z" />
                                            </svg>
                                        </a>
                                        <a href="#" class="text-gray-500 transition hover:text-purple-600">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                                <path
                                                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="flex items-center">
                                        <a href="commissionnaire.html"
                                            class="px-5 py-2 text-sm text-white bg-purple-600 rounded">Voir le
                                            profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ===============end slide card best commis profile =============== -->
                        
                        
                   
           