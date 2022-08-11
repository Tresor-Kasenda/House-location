@extends('frontend.layouts.app')

@section('title')
    Profile Utilisateur
@endsection

@section('content')
    @include('users.component._update')

    <div
        id="editeUserPictures"
         class="fixed -translate-y-full flex items-center justify-center top-0 left-0 w-full h-full transition-all duration-500 z-[1006]">
        <div class="bg-white px-8 py-10 rounded-md shadow-2xl w-11/12 sm:w-96">
            <form action="" class="flex flex-col gap-6">
                <div class="flex justify-between items-center">
                    <h1 class="text-xl font-semibold text-gray-500">Changer votre photo de profile</h1>
                    <button
                        id="closeProfile"
                        class="rounded-md outline-none flex p-2 transition-all duration-300 hover:bg-red-600 hover:text-white bg-gray-100 text-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
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
                            placeholder="johnkat@gmail.com"required>
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
                            class="relative peer transition-all focus:border-purple-600 border-[3px] border-gray-200 outline-none rounded-xl px-4 py-3 w-full text-sm text-gray-400 placeholder-transparent">
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
                        <button class="bg-gradient-to-tr from-green-400 to-purple-600 text-white px-5 py-3 rounded-xl text-sm text-center w-full hover:from-purple-600 hover:to-green-400 transition">Sauvergarder</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="w-full flex justify-center overflow-hidden">
        <div class="w-full max-w-screen-lg lg:max-w-screen-2xl px-4 xs:px-6 sm:px-10 lg:px-12 xl:px-16">
            <div class="flex pt-20 lg:min-h-screen gap-5 lg:flex-row">
                <div class="w-full flex lg:flex-row flex-col min-h-screen">
                    <div
                        class="sticky top-0 lg:w-56 lg:min-w-[16rem] w-full lg:h-screen h-14 overflow-hidden lg:border-r lg:pr-3 lg:border-gray-200 border-b border-b-gray-200 lg:border-b-0">
                        <ul class="flex w-full lg:flex-col flex-row gap-4 lg:pt-5 overflow-x-auto lg:overflow-hidden">
                            <li>
                                <a
                                    href="#"
                                    class="isActiveLinkProfile flex lg:w-full lg:px-4 py-2 relative after:absolute after:w-full after:h-1 after:rounded-t-full after:bottom-0 after:left-0 lg:after:top-1/2 lg:after:-translate-y-1/2 lg:after:rounded-r-full lg:after:rounded-bl-none lg:rounded-tl-none text-sm min-w-max lg:after:w-1 lg:after:h-full">
                                    Tout
                                </a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="flex lg:w-full lg:px-4 py-2 relative after:absolute after:w-full after:h-1 after:rounded-t-full after:bottom-0 after:left-0 lg:after:top-1/2 lg:after:-translate-y-1/2 lg:after:rounded-r-full lg:after:rounded-bl-none lg:rounded-tl-none text-sm min-w-max lg:after:w-1 lg:after:h-full">
                                    Reservations effectuees
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                   class="flex lg:w-full lg:px-4 py-2 relative after:absolute after:w-full after:h-1 after:rounded-t-full after:bottom-0 after:left-0 lg:after:top-1/2 lg:after:-translate-y-1/2 lg:after:rounded-r-full lg:after:rounded-bl-none lg:rounded-tl-none text-sm min-w-max lg:after:w-1 lg:after:h-full">
                                    Reservations en attente
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="flex flex-col gap-10 w-full h-full min-h-screen py-4 lg:px-5 md:pr-5">
                        <div class="flex flex-col gap-6">
                            <div class="flex">
                                <h2 class="text-xl font-semibold ">Vos reservation</h2>
                            </div>
                            <div class="grid sm:grid-cols-2 lg:grid-cols-1 xl:grid-cols-2 gap-2">
                                <div class="col-span-1 bg-white p-4 grid gap-4 rounded-xl border hover:shadow-lg hover:rounded-2xl hover:border-transparent group transition duration-200">
                                    <div class="h-32 max-h-32 md:h-44 md:max-h-44">
                                        <img src="../../public/images/houses/3.jpg"
                                             class="w-full h-full rounded-lg object-cover" alt="">
                                    </div>
                                    <div class="flex justify-between">
                                        <h1 class="text-lg font-semibold text-gray-600">Lubumbashi, Haut-katanga</h1>
                                        <span class="text-gray-400">500$ garantie</span>
                                    </div>
                                    <div class="">
                                        <button
                                            class="w-full flex justify-between items-center text-center text-sm px-5 gap-2 py-3 rounded-lg bg-green-600 text-white">
                                            <span>Telecharger la facture</span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                       class="bi bi-file-earmark-pdf w-6 h-6" viewBox="0 0 16 16">
                                                    <path
                                                        d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z" />
                                                    <path
                                                        d="M4.603 14.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.697 19.697 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.188-.012.396-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.066.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.712 5.712 0 0 1-.911-.95 11.651 11.651 0 0 0-1.997.406 11.307 11.307 0 0 1-1.02 1.51c-.292.35-.609.656-.927.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.266.266 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.71 12.71 0 0 1 1.01-.193 11.744 11.744 0 0 1-.51-.858 20.801 20.801 0 0 1-.5 1.05zm2.446.45c.15.163.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.876 3.876 0 0 0-.612-.053zM8.078 7.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z" />
                                                </svg></span>
                                        </button>
                                    </div>
                                </div>

                                <div class="col-span-1 bg-white p-4 grid gap-4 rounded-xl border hover:shadow-lg hover:rounded-2xl hover:border-transparent group transition duration-200">
                                    <div class="h-32 max-h-32 md:h-44 md:max-h-44">
                                        <img src="../../public/images/houses/3.jpg"
                                             class="w-full h-full rounded-lg object-cover" alt="">
                                    </div>
                                    <div class="flex justify-between">
                                        <h1 class="text-lg font-semibold text-gray-600">Lubumbashi, Haut-katanga</h1>
                                        <span class="text-gray-400">500$ garantie</span>
                                    </div>
                                    <div class="">
                                        <button
                                            class="w-full flex justify-between items-center text-center text-sm px-5 gap-2 py-3 rounded-lg bg-green-600 text-white">
                                            <span>Telecharger la facture</span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                       class="bi bi-file-earmark-pdf w-6 h-6" viewBox="0 0 16 16">
                                                    <path
                                                        d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z" />
                                                    <path
                                                        d="M4.603 14.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.697 19.697 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.188-.012.396-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.066.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.712 5.712 0 0 1-.911-.95 11.651 11.651 0 0 0-1.997.406 11.307 11.307 0 0 1-1.02 1.51c-.292.35-.609.656-.927.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.266.266 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.71 12.71 0 0 1 1.01-.193 11.744 11.744 0 0 1-.51-.858 20.801 20.801 0 0 1-.5 1.05zm2.446.45c.15.163.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.876 3.876 0 0 0-.612-.053zM8.078 7.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z" />
                                                </svg></span>
                                        </button>
                                    </div>
                                </div>

                                <div class="col-span-1 bg-white p-4 grid gap-4 rounded-xl border hover:shadow-lg hover:rounded-2xl hover:border-transparent group transition duration-200">
                                    <div class="h-32 max-h-32 md:h-44 md:max-h-44">
                                        <img src="../../public/images/houses/3.jpg"
                                             class="w-full h-full rounded-lg object-cover" alt="">
                                    </div>
                                    <div class="flex justify-between">
                                        <h1 class="text-lg font-semibold text-gray-600">Lubumbashi, Haut-katanga</h1>
                                        <span class="text-gray-400">500$ garantie</span>
                                    </div>
                                    <div class="w-full flex">
                                        <span class="w-full block text-center text-sm px-5 py-3 rounded-lg bg-orange-600 text-white">En
                                            attente</span>
                                    </div>
                                </div>

                                <div class="col-span-1 bg-white p-4 grid gap-4 rounded-xl border hover:shadow-lg hover:rounded-2xl hover:border-transparent group transition duration-200">
                                    <div class="h-32 max-h-32 md:h-44 md:max-h-44">
                                        <img src="../../public/images/houses/3.jpg"
                                             class="w-full h-full rounded-lg object-cover" alt="">
                                    </div>
                                    <div class="flex justify-between">
                                        <h1 class="text-lg font-semibold text-gray-600">Lubumbashi, Haut-katanga</h1>
                                        <span class="text-gray-400">500$ garantie</span>
                                    </div>
                                    <div class="w-full flex">
                                        <span class="w-full block text-center text-sm px-5 py-3 rounded-lg bg-orange-600 text-white">En
                                            attente</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sticky top-0 lg:w-56 md:min-w-[16rem] w-full md:border-l md:border-l-gray-200 md:pl-3 h-screen max-h-screen">
                    <div class="pt-4 flex flex-col">
                        <div class="flex flex-col gap-2 z-40">
                            <div class="relative flex justify-center p-6 pb-3 z-40">

                                <div
                                    class="absolute flex items-center justify-center right-2.5 top-2.5 w-10 h-10 z-40 rounded-full  bg-white shadow-2xl">
                                    <button id="editProfile"
                                            class="outline-none w-full h-full rounded-md flex items-center justify-center bg-gradient-to-tr from-green-400 to-purple-600 text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                             fill="currentColor">
                                            <path
                                                d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                            <path fill-rule="evenodd"
                                                  d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                  clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="relative block p-1 bg-white rounded-full z-50">
                                    <img src="../../public/images/johnkat.jfif" alt="avatar"
                                         class="min-h-[8rem] min-w-[8rem] w-32 h-32 object-cover sm:w-32 sm:h-32 rounded-full z-10">
                                    <div
                                        class="absolute z-30 flex items-center justify-center right-0 bottom-6 w-10 h-10 rounded-full  bg-white shadow-2xl">
                                        <button id="editImage"
                                                class="outline-none w-full z-30 h-full rounded-full flex items-center justify-center text-purple-600 transition-all duration-300 hover:bg-gradient-to-tr hover:from-green-400 hover:to-purple-600 hover:text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                                 fill="currentColor">
                                                <path fill-rule="evenodd"
                                                      d="M4 5a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V7a2 2 0 00-2-2h-1.586a1 1 0 01-.707-.293l-1.121-1.121A2 2 0 0011.172 3H8.828a2 2 0 00-1.414.586L6.293 4.707A1 1 0 015.586 5H4zm6 9a3 3 0 100-6 3 3 0 000 6z"
                                                      clip-rule="evenodd" />
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
    </div>

@endsection

@section("scripts")
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
    </script>
@endsection
