@extends('layouts.app')

@section('title', "Users profiles")

@section('content')
    <section class="lg:px-28 md:px-12 px-6 pt-8">
        <div class="container mx-auto">
            <div id="editeUserProfile"
                 class="fixed -translate-y-full flex items-center justify-center top-0 left-0 w-full h-full transition-all duration-500 z-[1006] bg-gray-600 bg-opacity-30">
                <div class="bg-white px-8 py-10 rounded-md shadow-2xl w-11/12 sm:w-96">
                    <form action="" class="flex flex-col gap-6">
                        <div class="flex justify-between items-center">
                            <h1 class="text-xl font-semibold text-gray-500">Editer votre profile</h1>
                            <button id="closeProfile"
                                    class="rounded-md outline-none flex p-2 transition-all duration-300 hover:bg-red-600 hover:text-white bg-gray-100 text-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                        <div class="flex flex-col gap-4">
                            <div class="relative">
                                <input id="mailAd" type="text"
                                       class=" relative peer transition-all focus:border-purple-600 border-[3px] border-gray-200 outline-none rounded-xl px-4 py-3 w-full text-sm text-gray-400 placeholder-transparent"
                                       placeholder="johnkat@gmail.com" required>
                                <label for="mailAd"
                                       class="absolute text-sm bg-white left-4 transition-all text-gray-400 peer-placeholder-shown:text-sm peer-focus:text-sm -top-3 peer-placeholder-shown:top-3.5 peer-focus:text-purple-600 peer-focus:px-1 peer-focus:-top-3">Adresse
                                    mail</label>
                            </div>
                            <div class="relative">
                                <input id="fullName" type="text"
                                       class=" relative peer transition-all focus:border-purple-600 border-[3px] border-gray-200 outline-none rounded-xl px-4 py-3 w-full text-sm text-gray-400 placeholder-transparent"
                                       placeholder="johnkat@gmail.com" required>
                                <label for="fullName"
                                       class="absolute text-sm bg-white left-4 transition-all text-gray-400 peer-placeholder-shown:text-sm peer-focus:text-sm -top-3 peer-placeholder-shown:top-3.5 peer-focus:text-purple-600 peer-focus:px-1 peer-focus:-top-3">Nom
                                    complet</label>
                            </div>
                            <div class="relative">
                                <select name="" id=""
                                        class=" relative peer transition-all focus:border-purple-600 border-[3px] border-gray-200 outline-none rounded-xl px-4 py-3 w-full text-sm text-gray-400 placeholder-transparent">
                                    <option value="">Selectionnez le type de compte</option>
                                    <option value="">Commissionnaire</option>
                                    <option value="">Vendeur</option>
                                    <option value="">Client</option>
                                </select>
                            </div>
                            <div class="relative">
                                <input id="passW" type="password"
                                       class=" relative peer transition-all focus:border-purple-600 border-[3px] border-gray-200 outline-none rounded-xl px-4 py-3 w-full text-sm text-gray-400 placeholder-transparent"
                                       placeholder="johnkat@gmail.com" required>
                                <label for="passW"
                                       class="absolute text-sm bg-white left-4 transition-all text-gray-400 peer-placeholder-shown:text-sm peer-focus:text-sm -top-3 peer-placeholder-shown:top-3.5 peer-focus:text-purple-600 peer-focus:px-1 peer-focus:-top-3">Mot
                                    de passe</label>
                            </div>
                            <div class="w-full">
                                <button
                                    class="bg-gradient-to-tr from-green-400 to-purple-600 text-white px-5 py-3 rounded-xl text-sm text-center w-full hover:from-purple-600 hover:to-green-400 transition">Sauvergarder</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div id="editeUserPictures"
                 class="fixed -translate-y-full flex items-center justify-center top-0 left-0 w-full h-full transition-all duration-500 z-[1006] bg-gray-600 bg-opacity-30">
                <div class="bg-white px-8 py-10 rounded-md shadow-2xl w-11/12 sm:w-96">
                    <form action="" class="flex flex-col gap-6">
                        <div class="flex justify-between items-center">
                            <h1 class="text-xl font-semibold text-gray-500">Changer votre photo de profile</h1>
                            <button id="closeProfile"
                                    class="rounded-md outline-none flex p-2 transition-all duration-300 hover:bg-red-600 hover:text-white bg-gray-100 text-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                        <div class="flex flex-col gap-4">
                            <div class="relative">
                                <input id="mailAd" type="text"
                                       class=" relative peer transition-all focus:border-purple-600 border-[3px] border-gray-200 outline-none rounded-xl px-4 py-3 w-full text-sm text-gray-400 placeholder-transparent"
                                       placeholder="johnkat@gmail.com" required>
                                <label for="mailAd"
                                       class="absolute text-sm bg-white left-4 transition-all text-gray-400 peer-placeholder-shown:text-sm peer-focus:text-sm -top-3 peer-placeholder-shown:top-3.5 peer-focus:text-purple-600 peer-focus:px-1 peer-focus:-top-3">Adresse
                                    mail</label>
                            </div>
                            <div class="relative">
                                <input id="fullName" type="text"
                                       class=" relative peer transition-all focus:border-purple-600 border-[3px] border-gray-200 outline-none rounded-xl px-4 py-3 w-full text-sm text-gray-400 placeholder-transparent"
                                       placeholder="johnkat@gmail.com" required>
                                <label for="fullName"
                                       class="absolute text-sm bg-white left-4 transition-all text-gray-400 peer-placeholder-shown:text-sm peer-focus:text-sm -top-3 peer-placeholder-shown:top-3.5 peer-focus:text-purple-600 peer-focus:px-1 peer-focus:-top-3">Nom
                                    complet</label>
                            </div>
                            <div class="relative">
                                <select name="" id=""
                                        class=" relative peer transition-all focus:border-purple-600 border-[3px] border-gray-200 outline-none rounded-xl px-4 py-3 w-full text-sm text-gray-400 placeholder-transparent">
                                    <option value="">Selectionnez le type de compte</option>
                                    <option value="">Commissionnaire</option>
                                    <option value="">Vendeur</option>
                                    <option value="">Client</option>
                                </select>
                            </div>
                            <div class="relative">
                                <input id="passW" type="password"
                                       class=" relative peer transition-all focus:border-purple-600 border-[3px] border-gray-200 outline-none rounded-xl px-4 py-3 w-full text-sm text-gray-400 placeholder-transparent"
                                       placeholder="johnkat@gmail.com" required>
                                <label for="passW"
                                       class="absolute text-sm bg-white left-4 transition-all text-gray-400 peer-placeholder-shown:text-sm peer-focus:text-sm -top-3 peer-placeholder-shown:top-3.5 peer-focus:text-purple-600 peer-focus:px-1 peer-focus:-top-3">Mot
                                    de passe</label>
                            </div>
                            <div class="w-full">
                                <button
                                    class="bg-gradient-to-tr from-green-400 to-purple-600 text-white px-5 py-3 rounded-xl text-sm text-center w-full hover:from-purple-600 hover:to-green-400 transition">Sauvergarder</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="md:grid md:grid-cols-3 gap-4">
                <div class="lg:block lg:col-span-1">
                    <div class="lg:sticky top-16">
                        <div class="w-full">
                            <div class="lg:sticky col-span-1">
                                <div class="flex flex-col gap-2">
                                    <div class="relative flex justify-center p-6 pb-3">
                                        <div
                                            class="z-20 absolute top-0 left-0 w-full h-1/2 bg-gray-500 rounded-xl overflow-hidden">
                                            <img src="." alt="image background" class="w-full h-full object-cover">
                                        </div>
                                        <div
                                            class="absolute flex items-center justify-center right-2.5 top-2.5 w-10 h-10 z-40 rounded-full  bg-white shadow-2xl">
                                            <button id="editProfile"
                                                    class="outline-none w-full h-full rounded-md flex items-center justify-center bg-gradient-to-tr from-green-400 to-purple-600 text-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                     viewBox="0 0 20 20" fill="currentColor">
                                                    <path
                                                        d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                    <path fill-rule="evenodd"
                                                          d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                          clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="relative block p-1 bg-white rounded-full z-50">
                                            <img src="../public/images/johnkat.jfif" alt="avatar"
                                                 class="min-h-[8rem] min-w-[8rem] z-50 w-32 h-32 object-cover sm:w-32 sm:h-32 rounded-full">
                                            <div
                                                class="absolute flex items-center justify-center right-0 bottom-6 w-10 h-10 rounded-full  bg-white shadow-2xl">
                                                <button id="editImage"
                                                        class="outline-none w-full h-full rounded-full flex items-center justify-center text-purple-600 transition-all duration-300 hover:bg-gradient-to-tr hover:from-green-400 hover:to-purple-600 hover:text-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              d="        QM15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    </svg>
                                                </button>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="flex justify-center flex-col gap-3">
                                        <span class="text-2xl font-semibold text-center">Johnkat</span>
                                        <div class="flex w-full rounded-md">
                                            <table class="w-full overflow-hidden table-fixed bg-gray-100 rounded-md">
                                                <tbody>
                                                <tr>
                                                    <td class="p-2 bg-gray-200 text-gray-700">Favories</td>
                                                    <td class="p-2 rounded">10</td>
                                                </tr>
                                                <tr>
                                                    <td class="p-2 bg-gray-200 text-gray-700">En location</td>
                                                    <td class="p-2 rounded">3</td>
                                                </tr>
                                                <tr>
                                                    <td class="p-2 bg-gray-200 text-gray-700">En vente</td>
                                                    <td class="p-2 rounded">2</td>
                                                </tr>
                                                <tr>
                                                    <td class="p-2 bg-gray-200 text-gray-700">Loué</td>
                                                    <td class="p-2 rounded">2</td>
                                                </tr>
                                                <tr>
                                                    <td class="p-2 bg-gray-200 text-gray-700">Acheté</td>
                                                    <td class="p-2 rounded">2</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="md:col-span-2 overflow-hidden">
                    <div id="tab-control" class="grid grid-cols-1 gap-5">
                        <div id="tab-header" class="flex gap-3 bg-white p-2 rounded-md shadow-md shadow-purple-100">
                            <button data-target="house"
                                    class="outline-none px-3 py-2 rounded-md bg-gray-100 text-gray-600 text-sm activeTabBtn">
                                Maison ajoutée
                            </button>
                            <button data-target="houseRent"
                                    class="outline-none px-3 py-2 rounded-md bg-gray-100 text-gray-600 text-sm">
                                Maison louée
                            </button>
                        </div>
                        <div id="tab-content" class="flex w-full overflow-hidden">
                            <div id="house"
                                 class="activeTab tab-cItem absolute origin-left scale-0 transition-all duration-300 opacity-0 ">
                                <div class="flex justify-between gap-3 flex-wrap items-center">
                                    <h1 class="text-xl font-semibold text-gray-500">Maison ajoutée par vous</h1>
                                    <a href=""
                                       class="transition-all duration-300 hover:bg-purple-600 hover:text-white bg-white border border-purple-600 text-purple-600 text-sm outline-none px-3 py-2 rounded-md">Ajouter
                                        une maison</a>
                                </div>
                                <div class="grid sm:grid-cols-2 lg:grid-cols-3 py-4">
                                    ici les maisons ajoutées par Johnkat
                                </div>
                            </div>
                            <div id="houseRent"
                                 class="tab-cItem absolute origin-left scale-0 transition-all duration-300 opacity-0 py-3 w-full">

                                <div class="py-4">
                                    <div class="w-full">
                                        <div class="flex justify-center w-full text-center flex-col gap-4">
                                            <img src="../public/images/icons/open-box.png" class="h-40 w-40 flex self-center" alt="">
                                            <h1 class="font-semibold text-xl text-gray-500">Vous n'avez encore loué aucune maison sur Karibukuako</h1>
                                        </div>
                                    </div>
                                    <!-- else -->
                                    <!-- <div class="flex flex-col gap-8">
                                        <div class="flex"><h1 class="text-xl font-semibold text-gray-500">Maison louées par vous</h1></div>
                                        <div class="grid sm:grid-cols-2 lg:grid-cols-3 "></div>
                                        House herer
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@section("scripts")
    @parent
    <script>
        const editProfile = document.querySelector('#editProfile')
        const closeProfile = document.querySelector('#closeProfile')
        const editeUserProfile = document.querySelector('#editeUserProfile')
        editProfile.addEventListener('click', (e) => {
            e.preventDefault()
            editeUserProfile.classList.remove('-translate-y-full')
        })
        closeProfile.addEventListener('click', (e) => {
            e.preventDefault()
            editeUserProfile.classList.add('-translate-y-full')
        })


        const tabControl = document.querySelector('#tab-control')
        const tabHeader = tabControl.querySelector('#tab-header')
        const tab_container = tabControl.querySelector('#tab-content')
        window.onload = () => {
            const hT = parseInt(tabControl.querySelector('.activeTab').scrollHeight) + 35
            tab_container.style.height = `${hT}px`
        }
        tabHeader.querySelectorAll("button").forEach(tabsBtn => {
            tabsBtn.addEventListener('click', (e) => {
                e.preventDefault()
                tab_container.querySelectorAll('.tab-cItem').forEach(tab_cItem => {
                    tab_cItem.classList.remove('activeTab', 'relative')
                })
                tabHeader.querySelectorAll("button").forEach(tabs_Btn => { tabs_Btn.classList.remove('activeTabBtn')  })
                tabsBtn.classList.add('activeTabBtn')
                tab_container.querySelector(`#${tabsBtn.getAttribute('data-target')}`).classList.add('activeTab')
                let heightC = parseInt(tab_container.querySelector(`#${tabsBtn.getAttribute('data-target')}`).scrollHeight) + 35
                tab_container.style.height = `${heightC}px`
            })
        })
    </script>
@endsection
