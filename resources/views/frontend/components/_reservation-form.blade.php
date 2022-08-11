<form id="frmNoModal" action="" class="w-full">
    <div class="flex flex-col gap-6 w-full">
        <h1 class="text-xl font-semibold text-gray-600">Reservation</h1>
        <div class="flex flex-col gap-4">
            <div class="relative">
                <input
                    id="fullName_"
                    type="text"
                    class="relative peer transition-all focus:border-purple-600 border-[3px] border-gray-200 outline-none rounded-xl px-4 py-3 w-full text-sm text-gray-400 placeholder-transparent"
                    placeholder="johnkat@gmail.com"
                    required>
                <label
                    for="fullName_"
                    class="absolute text-sm bg-white left-4 transition-all text-gray-400 peer-placeholder-shown:text-sm peer-focus:text-sm -top-3 peer-placeholder-shown:top-3.5 peer-focus:text-purple-600 peer-focus:px-1 peer-focus:-top-3">
                    Nom complet
                </label>
            </div>
            <div class="relative">
                <input
                    id="mailAdress_"
                    type="email"
                    class=" relative peer transition-all focus:border-purple-600 border-[3px] border-gray-200 outline-none rounded-xl px-4 py-3 w-full text-sm text-gray-400 placeholder-transparent"
                    placeholder="johnkat@gmail.com"
                    required>
                <label
                    for="mailAdress_"
                    class="absolute text-sm bg-white left-4 transition-all text-gray-400 peer-placeholder-shown:text-sm peer-focus:text-sm -top-3 peer-placeholder-shown:top-3.5 peer-focus:text-purple-600 peer-focus:px-1 peer-focus:-top-3">
                    Adresse mail
                </label>
            </div>
            <div class="relative">
                <input
                    id="phoneNumber_"
                    type="email"
                    class=" relative peer transition-all focus:border-purple-600 border-[3px] border-gray-200 outline-none rounded-xl px-4 py-3 w-full text-sm text-gray-400 placeholder-transparent"
                    placeholder="johnkat@gmail.com"
                    required>
                <label
                    for="phoneNumber_"
                    class="absolute text-sm bg-white left-4 transition-all text-gray-400 peer-placeholder-shown:text-sm peer-focus:text-sm -top-3 peer-placeholder-shown:top-3.5 peer-focus:text-purple-600 peer-focus:px-1 peer-focus:-top-3">
                    Numero de telephone
                </label>
            </div>
            <div class="relative">
                                        <textarea
                                            name=""
                                            id="message_"
                                            type="email"
                                            class="resize-none h-36 relative peer transition-all focus:border-purple-600 border-[3px] border-gray-200 outline-none rounded-xl px-4 py-3 w-full text-sm text-gray-400 placeholder-transparent"
                                            placeholder="johnkat@gmail.com"
                                            required></textarea>
                <label
                    for="message_"
                    class="absolute text-sm bg-white left-4 transition-all text-gray-400 peer-placeholder-shown:text-sm peer-focus:text-sm -top-3 peer-placeholder-shown:top-3.5 peer-focus:text-purple-600 peer-focus:px-1 peer-focus:-top-3">
                    Message
                </label>
            </div>

            <button
                class="px-4 py-3 rounded-xl text-white bg-gradient-to-br  from-green-400 to-purple-600 transition-all duration-300 hover:bg-gradient-to-br hover:from-purple-600 hover:to-green-400">
                Reserver
            </button>
        </div>
    </div>
</form>
