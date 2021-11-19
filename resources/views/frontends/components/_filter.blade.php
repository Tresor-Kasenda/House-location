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
