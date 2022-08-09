

                <!-- ===============slide card testim =============== -->
                <div class="swiper-slide">
                    <div
                        class="w-full relative flex flex-col p-4 rounded-xl border hover:shadow-lg hover:rounded-2xl hover:border-transparent group transition duration-200">
                        <div class="flex gap-4 items-center">
                          
                            <div class="min-w-max flex">
                                <img src="{{!is_null($temoignage->user->images)?asset('storage/images/'.$temoignage->user->images) : asset('images/profile.jpg')}}" alt="photo personne" width="200" class="w-14 h-14 rounded-full object-cover"/>
                            </div>
                            <div class="flex flex-col w-full gap-2">
                                <h3 class="text-xl font-semibold text-gray-600">  {{$temoignage->user->name}}</h3>
                                <div>
                                    <h3 class="text-sm">  {{$temoignage->user->lastName}}</h3>
                                </div>
                            </div>
                        </div>
                        <div class="flex pt-5 text-sm pb-6">
                            <p class="line-clamp-5">
                            {{$temoignage->note}}</p>
                        </div>
                        <div class="absolute w-full bottom-0 left-0 p-4">
                            <div class="w-full flex h-2 bg-gray-200 rounded-b-xl relative after:absolute after:h-full after:left-0 after:top-0 after:w-8/12 after:bg-purple-300 after:rounded-xl after:rounded-tl-none"></div>
                        </div>
                    </div>
                </div>
                <!-- ===============end slide card testim =============== -->

         
   