<div
    id="editeUserProfile"
    class="fixed -translate-y-full flex items-center justify-center top-0 left-0 w-full h-full transition-all duration-500 z-[1006] ">
    <div class="bg-white px-8 py-10 rounded-md shadow-2xl w-11/12 sm:w-96">
        <form action="" class="flex flex-col gap-6">
            <div class="flex justify-between items-center">
                <h1 class="text-xl font-semibold text-gray-500">Editer votre profile</h1>
                <button
                    id="closeProfile"
                    class="rounded-md outline-none flex p-2 transition-all duration-300 hover:bg-red-600 hover:text-white bg-gray-100 text-gray-600">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex flex-col gap-4">
                <div class="relative">
                    <input
                        id="mailAd"
                        type="text"
                        class="relative peer transition-all focus:border-purple-600 border-[3px] border-gray-200 outline-none rounded-xl px-4 py-3 w-full text-sm text-gray-400 placeholder-transparent"
                        placeholder="johnkat@gmail.com"
                        required>
                    <label
                        for="mailAd"
                        class="absolute text-sm bg-white left-4 transition-all text-gray-400 peer-placeholder-shown:text-sm peer-focus:text-sm -top-3 peer-placeholder-shown:top-3.5 peer-focus:text-purple-600 peer-focus:px-1 peer-focus:-top-3">
                        Adresse mail
                    </label>
                </div>
                <div class="relative">
                    <input
                        id="fullName"
                        type="text"
                        class="relative peer transition-all focus:border-purple-600 border-[3px] border-gray-200 outline-none rounded-xl px-4 py-3 w-full text-sm text-gray-400 placeholder-transparent"
                        placeholder="johnkat@gmail.com"
                        required>
                    <label
                        for="fullName"
                        class="absolute text-sm bg-white left-4 transition-all text-gray-400 peer-placeholder-shown:text-sm peer-focus:text-sm -top-3 peer-placeholder-shown:top-3.5 peer-focus:text-purple-600 peer-focus:px-1 peer-focus:-top-3">
                        Nom complet
                    </label>
                </div>
                <div class="relative">
                    <select
                        name=""
                        id=""
                        class=" relative peer transition-all focus:border-purple-600 border-[3px] border-gray-200 outline-none rounded-xl px-4 py-3 w-full text-sm text-gray-400 placeholder-transparent">
                        <option value="">Selectionnez le type de compte</option>
                        <option value="">Commissionnaire</option>
                        <option value="">Vendeur</option>
                        <option value="">Client</option>
                    </select>
                </div>
                <div class="relative">
                    <input
                        id="passW"
                        type="password"
                        class="relative peer transition-all focus:border-purple-600 border-[3px] border-gray-200 outline-none rounded-xl px-4 py-3 w-full text-sm text-gray-400 placeholder-transparent"
                        placeholder="johnkat@gmail.com"
                        required>
                    <label
                        for="passW"
                        class="absolute text-sm bg-white left-4 transition-all text-gray-400 peer-placeholder-shown:text-sm peer-focus:text-sm -top-3 peer-placeholder-shown:top-3.5 peer-focus:text-purple-600 peer-focus:px-1 peer-focus:-top-3">
                        Mot de passe
                    </label>
                </div>
                <div class="w-full">
                    <button
                        class="bg-gradient-to-tr from-green-400 to-purple-600 text-white px-5 py-3 rounded-xl text-sm text-center w-full hover:from-purple-600 hover:to-green-400 transition">Sauvergarder</button>
                </div>
            </div>
        </form>
    </div>
</div>
