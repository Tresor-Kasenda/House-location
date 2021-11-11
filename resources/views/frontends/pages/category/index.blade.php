@extends('layouts.app')

@section('title')

@endsection

@section('content')
    <section class="lg:px-28 md:px-12 px-4 lg:pt-8 pt-4">
        <div class="container m-auto">
            <div class="relative lg:flex gap-12">
                <div class="absolute lg:relative hidden lg:block lg:w-3/12 md:w-6/12 md:right-0">
                    <div class="bg-white shadow-lg p-6 border rounded-2xl sticky top-28 space-y-6">
                        <div class="flex justify-between border-b pb-4">
                            <h5 class="md:text-xl text-lg text-gray-800">Filtres</h5>
                            <button class="h-11 px-6 -mr-4 -mt-2 bg-transparent rounded-full hover:bg-blue-50 focus:bg-blue-100 active:scale-95 transition">
                                <span class="text-sm text-blue-700 font-semibold">Appliquer</span>
                            </button>
                        </div>

                        <div>
                            <h6 class="text-lg text-gray-700">Toilettes</h6>
                            <ul class="space-y-2 mt-4">
                                <li class="space-x-4 flex items-center">
                                    <input type="radio" id="out" name="wc" class="text-purple-500 focus:ring-purple-400 ">
                                    <label for="out">Extérieur</label>
                                </li>

                                <li class="space-x-4 flex items-center">
                                    <input type="radio" id="in" name="wc" class="text-purple-500 focus:ring-purple-400 ">
                                    <label for="in">Intérieur</label>
                                </li>

                                <li class="space-x-4 flex items-center">
                                    <input type="radio" id="outin" name="wc" class="text-purple-500 focus:ring-purple-400 ">
                                    <label for="outin">Intérieur & Extérieur</label>
                                </li>
                            </ul>
                        </div>

                        <div>
                            <h6 class="text-lg text-gray-700">Pièces</h6>
                            <ul class="flex gap-4 mt-4">
                                <li>
                                    <input type="radio" name="rooms" id="1" class="hidden peer">
                                    <label title="Une pièce" for="1" class="h-8 w-8 rounded-full flex justify-center items-center bg-p-100 text-purple-700 peer-checked:bg-purple-500 ring-2 ring-offset-2 ring-gray-200 peer-checked:text-white peer-checked:ring-purple-400 ring-offset-white cursor-pointer transition">
                                        <span class="text-base font-semibold">1</span>
                                    </label>
                                </li>

                                <li>
                                    <input type="radio" name="rooms" id="2"class="hidden peer">
                                    <label title="Deux pièces" for="2" class="h-8 w-8 rounded-full flex justify-center items-center bg-p-100 text-purple-700 peer-checked:bg-purple-500 ring-2 ring-offset-2 ring-gray-200 peer-checked:text-white peer-checked:ring-purple-400 ring-offset-white cursor-pointer transition">
                                        <span class="text-base font-semibold">2</span>
                                    </label>
                                </li>

                                <li>
                                    <input type="radio" name="rooms" id="3" class="hidden peer">
                                    <label title="Trois pièces" for="3" class="h-8 w-8 rounded-full flex justify-center items-center bg-p-100 text-purple-700 peer-checked:bg-purple-500 ring-2 ring-offset-2 ring-gray-200 peer-checked:text-white peer-checked:ring-purple-400 ring-offset-white cursor-pointer transition">
                                        <span class="text-base font-semibold">3</span>
                                    </label>
                                </li>

                                <li>
                                    <input type="radio" name="rooms" id="4" class="hidden peer">
                                    <label title="Quatre pièces" for="4" class="h-8 w-8 rounded-full flex justify-center items-center bg-p-100 text-purple-700 peer-checked:bg-purple-500 ring-2 ring-offset-2 ring-gray-200 peer-checked:text-white peer-checked:ring-purple-400 ring-offset-white cursor-pointer transition">
                                        <span class="text-base font-semibold">4</span>
                                    </label>
                                </li>

                                <li>
                                    <input type="radio" name="rooms" id="+4" class="hidden peer">
                                    <label title="Plus de quatre" for="+4" class="h-8 w-8 rounded-full flex justify-center items-center bg-p-100 text-purple-700 peer-checked:bg-purple-500 ring-2 ring-offset-2 ring-gray-200 peer-checked:text-white peer-checked:ring-purple-400 ring-offset-white cursor-pointer transition">
                                        <span class="text-base font-semibold">+4</span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="lg:w-9/12">
                    <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-4 md:gap-6">
                        <a href="house.html" title="Voir les détails" class="block space-y-4 p-1 rounded-xl border hover:shadow-lg hover:rounded-2xl hover:border-transparent group transition duration-200">
                            <img src="../public/images/houses/1.jpg" alt="photo maison" class="w-full h-44 object-cover rounded-lg group-hover:!rounded-xl group:transition duration-200">
                            <div class="flex justify-between p-4 pt-2.5">
                                <div>
                                    <h6 class="text-lg leading-none text-gray-700">4 pièces</h6>
                                    <span class="text-sm">Golf Plateau</span>
                                </div>
                                <div class="w-max">
                                    <h5 class="text-xl leading-none md:text-right font-bold text-purple-500">78 $</h5>
                                    <span class="block w-max text-xs text-gray-600">500$ Garantie</span>
                                </div>
                            </div>
                        </a>
                        <a href="house.html" title="Voir les détails" class="block space-y-4 p-1 rounded-xl border hover:shadow-lg hover:rounded-2xl hover:border-transparent group transition duration-200">
                            <img src="../public/images/houses/2.jpg" alt="photo maison" class="w-full h-44 object-cover rounded-lg group-hover:!rounded-xl group:transition duration-200">
                            <div class="flex justify-between p-4 pt-2.5">
                                <div>
                                    <h6 class="text-lg leading-none text-gray-700">4 pièces</h6>
                                    <span class="text-sm">Golf Plateau</span>
                                </div>
                                <div class="w-max">
                                    <h5 class="text-xl leading-none md:text-right font-bold text-purple-500">78 $</h5>
                                    <span class="block w-max text-xs text-gray-600">500$ Garantie</span>
                                </div>
                            </div>
                        </a>
                        <a href="house.html" title="Voir les détails" class="block space-y-4 p-1 rounded-xl border hover:shadow-lg hover:rounded-2xl hover:border-transparent group transition duration-200">
                            <img src="../public/images/houses/3.jpg" alt="photo maison" class="w-full h-44 object-cover rounded-lg group-hover:!rounded-xl group:transition duration-200">
                            <div class="flex justify-between p-4 pt-2.5">
                                <div>
                                    <h6 class="text-lg leading-none text-gray-700">4 pièces</h6>
                                    <span class="text-sm">Golf Plateau</span>
                                </div>
                                <div class="w-max">
                                    <h5 class="text-xl leading-none md:text-right font-bold text-purple-500">78 $</h5>
                                    <span class="block w-max text-xs text-gray-600">500$ Garantie</span>
                                </div>
                            </div>
                        </a>
                        <a href="house.html" title="Voir les détails" class="block space-y-4 p-1 rounded-xl border hover:shadow-lg hover:rounded-2xl hover:border-transparent group transition duration-200">
                            <img src="../public/images/houses/4.jpg" alt="photo maison" class="w-full h-44 object-cover rounded-lg group-hover:!rounded-xl group:transition duration-200">
                            <div class="flex justify-between p-4 pt-2.5">
                                <div>
                                    <h6 class="text-lg leading-none text-gray-700">4 pièces</h6>
                                    <span class="text-sm">Golf Plateau</span>
                                </div>
                                <div class="w-max">
                                    <h5 class="text-xl leading-none md:text-right font-bold text-purple-500">78 $</h5>
                                    <span class="block w-max text-xs text-gray-600">500$ Garantie</span>
                                </div>
                            </div>
                        </a>
                        <a href="house.html" title="Voir les détails" class="block space-y-4 p-1 rounded-xl border hover:shadow-lg hover:rounded-2xl hover:border-transparent group transition duration-200">
                            <img src="../public/images/houses/1.jpg" alt="photo maison" class="w-full h-44 object-cover rounded-lg group-hover:!rounded-xl group:transition duration-200">
                            <div class="flex justify-between p-4 pt-2.5">
                                <div>
                                    <h6 class="text-lg leading-none text-gray-700">4 pièces</h6>
                                    <span class="text-sm">Golf Plateau</span>
                                </div>
                                <div class="w-max">
                                    <h5 class="text-xl leading-none md:text-right font-bold text-purple-500">78 $</h5>
                                    <span class="block w-max text-xs text-gray-600">500$ Garantie</span>
                                </div>
                            </div>
                        </a>
                        <a href="house.html" title="Voir les détails" class="block space-y-4 p-1 rounded-xl border hover:shadow-lg hover:rounded-2xl hover:border-transparent group transition duration-200">
                            <img src="../public/images/houses/2.jpg" alt="photo maison" class="w-full h-44 object-cover rounded-lg group-hover:!rounded-xl group:transition duration-200">
                            <div class="flex justify-between p-4 pt-2.5">
                                <div>
                                    <h6 class="text-lg leading-none text-gray-700">4 pièces</h6>
                                    <span class="text-sm">Golf Plateau</span>
                                </div>
                                <div class="w-max">
                                    <h5 class="text-xl leading-none md:text-right font-bold text-purple-500">78 $</h5>
                                    <span class="block w-max text-xs text-gray-600">500$ Garantie</span>
                                </div>
                            </div>
                        </a>
                        <a href="house.html" title="Voir les détails" class="block space-y-4 p-1 rounded-xl border hover:shadow-lg hover:rounded-2xl hover:border-transparent group transition duration-200">
                            <img src="../public/images/houses/3.jpg" alt="photo maison" class="w-full h-44 object-cover rounded-lg group-hover:!rounded-xl group:transition duration-200">
                            <div class="flex justify-between p-4 pt-2.5">
                                <div>
                                    <h6 class="text-lg leading-none text-gray-700">4 pièces</h6>
                                    <span class="text-sm">Golf Plateau</span>
                                </div>
                                <div class="w-max">
                                    <h5 class="text-xl leading-none md:text-right font-bold text-purple-500">78 $</h5>
                                    <span class="block w-max text-xs text-gray-600">500$ Garantie</span>
                                </div>
                            </div>
                        </a>
                        <a href="house.html" title="Voir les détails" class="block space-y-4 p-1 rounded-xl border hover:shadow-lg hover:rounded-2xl hover:border-transparent group transition duration-200">
                            <img src="../public/images/houses/4.jpg" alt="photo maison" class="w-full h-44 object-cover rounded-lg group-hover:!rounded-xl group:transition duration-200">
                            <div class="flex justify-between p-4 pt-2.5">
                                <div>
                                    <h6 class="text-lg leading-none text-gray-700">4 pièces</h6>
                                    <span class="text-sm">Golf Plateau</span>
                                </div>
                                <div class="w-max">
                                    <h5 class="text-xl leading-none md:text-right font-bold text-purple-500">78 $</h5>
                                    <span class="block w-max text-xs text-gray-600">500$ Garantie</span>
                                </div>
                            </div>
                        </a>
                        <a href="house.html" title="Voir les détails" class="block space-y-4 p-1 rounded-xl border hover:shadow-lg hover:rounded-2xl hover:border-transparent group transition duration-200">
                            <img src="../public/images/houses/1.jpg" alt="photo maison" class="w-full h-44 object-cover rounded-lg group-hover:!rounded-xl group:transition duration-200">
                            <div class="flex justify-between p-4 pt-2.5">
                                <div>
                                    <h6 class="text-lg leading-none text-gray-700">4 pièces</h6>
                                    <span class="text-sm">Golf Plateau</span>
                                </div>
                                <div class="w-max">
                                    <h5 class="text-xl leading-none md:text-right font-bold text-purple-500">78 $</h5>
                                    <span class="block w-max text-xs text-gray-600">500$ Garantie</span>
                                </div>
                            </div>
                        </a>
                        <a href="house.html" title="Voir les détails" class="block space-y-4 p-1 rounded-xl border hover:shadow-lg hover:rounded-2xl hover:border-transparent group transition duration-200">
                            <img src="../public/images/houses/2.jpg" alt="photo maison" class="w-full h-44 object-cover rounded-lg group-hover:!rounded-xl group:transition duration-200">
                            <div class="flex justify-between p-4 pt-2.5">
                                <div>
                                    <h6 class="text-lg leading-none text-gray-700">4 pièces</h6>
                                    <span class="text-sm">Golf Plateau</span>
                                </div>
                                <div class="w-max">
                                    <h5 class="text-xl leading-none md:text-right font-bold text-purple-500">78 $</h5>
                                    <span class="block w-max text-xs text-gray-600">500$ Garantie</span>
                                </div>
                            </div>
                        </a>
                        <a href="house.html" title="Voir les détails" class="block space-y-4 p-1 rounded-xl border hover:shadow-lg hover:rounded-2xl hover:border-transparent group transition duration-200">
                            <img src="../public/images/houses/3.jpg" alt="photo maison" class="w-full h-44 object-cover rounded-lg group-hover:!rounded-xl group:transition duration-200">
                            <div class="flex justify-between p-4 pt-2.5">
                                <div>
                                    <h6 class="text-lg leading-none text-gray-700">4 pièces</h6>
                                    <span class="text-sm">Golf Plateau</span>
                                </div>
                                <div class="w-max">
                                    <h5 class="text-xl leading-none md:text-right font-bold text-purple-500">78 $</h5>
                                    <span class="block w-max text-xs text-gray-600">500$ Garantie</span>
                                </div>
                            </div>
                        </a>
                        <a href="house.html" title="Voir les détails" class="block space-y-4 p-1 rounded-xl border hover:shadow-lg hover:rounded-2xl hover:border-transparent group transition duration-200">
                            <img src="../public/images/houses/4.jpg" alt="photo maison" class="w-full h-44 object-cover rounded-lg group-hover:!rounded-xl group:transition duration-200">
                            <div class="flex justify-between p-4 pt-2.5">
                                <div>
                                    <h6 class="text-lg leading-none text-gray-700">4 pièces</h6>
                                    <span class="text-sm">Golf Plateau</span>
                                </div>
                                <div class="w-max">
                                    <h5 class="text-xl leading-none md:text-right font-bold text-purple-500">78 $</h5>
                                    <span class="block w-max text-xs text-gray-600">500$ Garantie</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
