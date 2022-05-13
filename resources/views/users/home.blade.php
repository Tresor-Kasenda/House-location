@extends('layouts.app')

@section('title', "Users profiles")

@section('content')
    <section class="lg:px-28 md:px-12 px-6 pt-8">
        <div class="container mx-auto">
            @include('users.shared.update')
            <div class="md:grid md:grid-cols-3 gap-4">
                <div class="lg:block lg:col-span-1">
                    <div class="lg:sticky top-16">
                        <div class="w-full">
                            <div class="lg:sticky col-span-1">
                                <div class="flex flex-col gap-2">
                                    <div class="relative flex justify-center p-6 pb-3">
                                        <div class="z-20 absolute top-0 left-0 w-full h-1/2 bg-gray-500 rounded-xl overflow-hidden">
                                            <img
                                                src="{{ asset('storage/'.auth()->user()->images) }}"
                                                alt="image background"
                                                class="w-full h-full object-cover">
                                        </div>
                                        <div class="absolute flex items-center justify-center right-2.5 top-2.5 w-10 h-10 z-40 rounded-full  bg-white shadow-2xl">
                                            <button id="editProfile" class="outline-none w-full h-full rounded-md flex items-center justify-center bg-gradient-to-tr from-green-400 to-purple-600 text-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                    <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="relative block p-1 bg-white rounded-full z-50">
                                            @if(auth()->user()->images !== null)
                                                <img src="{{ asset('storage/'.auth()->user()->images) }}" alt="avatar" class="min-h-[8rem] min-w-[8rem] z-50 w-32 h-32 object-cover sm:w-32 sm:h-32 rounded-full">
                                                <div class="absolute flex items-center justify-center right-0 bottom-6 w-10 h-10 rounded-full  bg-white shadow-2xl">
                                                    <button id="editImage" class="outline-none w-full h-full rounded-full flex items-center justify-center text-purple-600 transition-all duration-300 hover:bg-gradient-to-tr hover:from-green-400 hover:to-purple-600 hover:text-white">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="QM15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            @else
                                                <img src="{{ asset('images/profile.jpg') }}" alt="avatar" class="min-h-[8rem] min-w-[8rem] z-50 w-32 h-32 object-cover sm:w-32 sm:h-32 rounded-full">
                                                <div class="absolute flex items-center justify-center right-0 bottom-6 w-10 h-10 rounded-full  bg-white shadow-2xl">
                                                    <button id="editImage" class="outline-none w-full h-full rounded-full flex items-center justify-center text-purple-600 transition-all duration-300 hover:bg-gradient-to-tr hover:from-green-400 hover:to-purple-600 hover:text-white">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="QM15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="flex justify-center flex-col gap-3">
                                        <span class="text-1xl font-medium">{{ auth()->user()->name }}  {{ auth()->user()->lastName }}</span>
                                        <span class="text-1xl font-light">{{ auth()->user()->phone_number }}</span>
                                        <span class="text-1xl font-light ">{{ auth()->user()->email }}</span>
                                        <div class="flex w-full rounded-md">
                                            <table class="w-full overflow-hidden table-fixed bg-gray-100 rounded-md">
                                                <tbody>
                                                <tr>
                                                    <td class="p-2 bg-gray-200 text-gray-700">Loué</td>
                                                    <td class="p-2 rounded">
                                                        {{ \App\Models\Reservation::query()->where('user_id', '=', auth()->id())->where('status', '=', true)->count() }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-2 bg-gray-200 text-gray-700">En attente</td>
                                                    <td class="p-2 rounded">
                                                        {{ \App\Models\Reservation::query()->where('user_id', '=', auth()->id())->where('status', '=', false)->count() }}
                                                    </td>
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
                    <div class="grid grid-cols-3 gap-3">
                        @foreach($reservations as $reservation)
                            <div class="col-span-1 rounded-lg bg-white p-4 grid gap-4 border hover:shadow-lg hover:rounded-2xl hover:border-transparent group transition duration-200">
                                <div class="h-32 max-h-32 md:h-44 md:max-h-44">
                                    <img
                                        src="{{ asset('storage/'.$reservation->house->images) }}"
                                         class="w-full h-full rounded-lg object-cover"
                                        alt="{{ $reservation->house->commune }}">
                                </div>
                                <div class="flex justify-between">
                                    <h1 class="text-lg font-semibold text-gray-600">
                                        {{ $reservation->house->address }}
                                    </h1>
                                    <span class="text-gray-400">{{ $reservation->house->guarantees }}$ garantie</span>
                                </div>
                                <div class="">
                                    @if($reservation->status)
                                        <a href="" target="_blank"  class="w-full flex justify-between items-center text-center text-sm px-5 gap-2 py-3 rounded-lg bg-green-600 text-white">
                                            <span>Telecharger la facture</span>
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-file-earmark-pdf w-6 h-6" viewBox="0 0 16 16">
                                                    <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z" />
                                                    <path d="M4.603 14.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.697 19.697 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.188-.012.396-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.066.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.712 5.712 0 0 1-.911-.95 11.651 11.651 0 0 0-1.997.406 11.307 11.307 0 0 1-1.02 1.51c-.292.35-.609.656-.927.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.266.266 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.71 12.71 0 0 1 1.01-.193 11.744 11.744 0 0 1-.51-.858 20.801 20.801 0 0 1-.5 1.05zm2.446.45c.15.163.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.876 3.876 0 0 0-.612-.053zM8.078 7.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z" />
                                                </svg>
                                            </span>
                                        </a>
                                    @else
                                        <form action="{{ route('users.reservation.cancel', $reservation->key) }}" method="POST" onsubmit="return confirm('Voulez vous supprimer');">
                                            @method('DELETE')
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button class="w-full flex justify-between items-center text-center text-sm px-5 gap-2 py-3 rounded-lg bg-orange-600 text-white">
                                                <span>Annuller la reserveration</span>
                                            </button>
                                        </form>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="flex flex-col gap-4 mt-16">
                        <div class="flex justify-center">
                            {{ $reservations->links('users.component._pagination') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
