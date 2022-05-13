<div class="bg-white shadow-lg p-6 border rounded-2xl sticky top-28 space-y-6">
    {!! form_start($form) !!}
        <div class="flex justify-between border-b pb-4">
            <h5 class="md:text-xl text-lg text-gray-800">Filtres</h5>
            <button type="submit" class="h-11 px-6 -mr-4 -mt-2 bg-transparent rounded-full hover:bg-blue-50 focus:bg-blue-100 active:scale-95 transition">
                <span class="text-sm text-blue-700 font-semibold">Appliquer</span>
            </button>
        </div>

        <div>
            <h6 class="text-lg text-gray-700">Type</h6>
            <ul class="space-y-2 mt-4">
                <li class="space-x-4 flex items-center">
                    {!! form_row($form->type) !!}
                </li>
            </ul>
        </div>
        <div>
        <h6 class="text-lg text-gray-700">Pièces</h6>
        <ul class="flex gap-4 mt-4">
            <li>
                <input type="radio" name="one" id="one" class="hidden peer">
                <label title="Une pièce" for="one" class="h-8 w-8 rounded-full flex justify-center items-center bg-p-100 text-purple-700 peer-checked:bg-purple-500 ring-2 ring-offset-2 ring-gray-200 peer-checked:text-white peer-checked:ring-purple-400 ring-offset-white cursor-pointer transition">
                    <span class="text-base font-semibold">1</span>
                </label>
            </li>

            <li>
                <input type="radio" name="rooms" id="two" class="hidden peer">
                <label title="Deux pièces" for="two" class="h-8 w-8 rounded-full flex justify-center items-center bg-p-100 text-purple-700 peer-checked:bg-purple-500 ring-2 ring-offset-2 ring-gray-200 peer-checked:text-white peer-checked:ring-purple-400 ring-offset-white cursor-pointer transition">
                    <span class="text-base font-semibold">2</span>
                </label>
            </li>

            <li>
                <input type="radio" name="rooms" id="tree" class="hidden peer">
                <label title="Trois pièces" for="tree" class="h-8 w-8 rounded-full flex justify-center items-center bg-p-100 text-purple-700 peer-checked:bg-purple-500 ring-2 ring-offset-2 ring-gray-200 peer-checked:text-white peer-checked:ring-purple-400 ring-offset-white cursor-pointer transition">
                    <span class="text-base font-semibold">3</span>
                </label>
            </li>

            <li>
                <input type="radio" name="rooms" id="plus" class="hidden peer">
                <label title="Plus de quatre" for="plus" class="h-8 w-8 rounded-full flex justify-center items-center bg-p-100 text-purple-700 peer-checked:bg-purple-500 ring-2 ring-offset-2 ring-gray-200 peer-checked:text-white peer-checked:ring-purple-400 ring-offset-white cursor-pointer transition">
                    <span class="text-base font-semibold">+4</span>
                </label>
            </li>
        </ul>
    </div>
    {!! form_end($form) !!}
</div>
