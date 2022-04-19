@extends('layouts.auth')

@section('title', "Creation des comptes")

@section('content')
    <div class="bg-white w-11/12 sm:w-80 rounded-xl px-4 sm:px-6 py-8 sm:py-10 shadow-lg shadow-purple-200 flex flex-col">
        <h1 class="text-center text-xl font-semibold text-gray-700 pb-4">Inscrivez-vous</h1>
        <div class="flex justify-center pb-6">
            <img src="{{ asset('app/images/logo.png') }}" alt="logoApp" class="block h-14 max-h-14">
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="list-unstyled">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('register') }}" class="flex w-full flex-col gap-4">
            @csrf
            <div class="relative">
                <input
                    type="text"
                    class="relative peer transition-all focus:border-purple-600 border-[3px] border-gray-200 outline-none rounded-xl px-4 py-3 w-full text-sm text-gray-400 placeholder-transparent"
                    id="name"
                    placeholder="Nom de l'utilisateur"
                    name="name"
                    value="{{ old('name') }}"
                    autocomplete="name"
                    autofocus
                    required>
                <label for="name" class="absolute text-sm bg-white left-4 transition-all text-gray-400 peer-placeholder-shown:text-sm peer-focus:text-sm -top-3 peer-placeholder-shown:top-3.5 peer-focus:text-purple-600 peer-focus:px-1 peer-focus:-top-3">
                    Nom
                </label>
            </div>
            <div class="relative">
                <input
                    type="email"
                    class="relative peer transition-all focus:border-purple-600 border-[3px] border-gray-200 outline-none rounded-xl px-4 py-3 w-full text-sm text-gray-400 placeholder-transparent"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    autocomplete="email"
                    autofocus
                    placeholder="Adresse email de l'utilisateur"
                    required>
                <label for="email" class="absolute text-sm bg-white left-4 transition-all text-gray-400 peer-placeholder-shown:text-sm peer-focus:text-sm -top-3 peer-placeholder-shown:top-3.5 peer-focus:text-purple-600 peer-focus:px-1 peer-focus:-top-3">
                    Email
                </label>
            </div>
            <div class="relative">
                <input
                    type="password"
                    class="relative peer transition-all focus:border-purple-600 border-[3px] border-gray-200 outline-none rounded-xl px-4 py-3 w-full text-sm text-gray-400 placeholder-transparent"
                    id="password"
                    placeholder="Enter your password"
                    name="password"
                    autocomplete="new-password"
                    required>
                <label for="password" class="absolute text-sm bg-white left-4 transition-all text-gray-400 peer-placeholder-shown:text-sm peer-focus:text-sm -top-3 peer-placeholder-shown:top-3.5 peer-focus:text-purple-600 peer-focus:px-1 peer-focus:-top-3">
                    Mot de passe
                </label>
            </div>
            <div class="relative">
                <input
                    type="password"
                    class="relative peer transition-all focus:border-purple-600 border-[3px] border-gray-200 outline-none rounded-xl px-4 py-3 w-full text-sm text-gray-400 placeholder-transparent"
                    id="password_confirmation"
                    placeholder="confirm your password"
                    name="password_confirmation"
                    autocomplete="password_confirmation"
                    required>
                <label for="password_confirmation" class="absolute text-sm bg-white left-4 transition-all text-gray-400 peer-placeholder-shown:text-sm peer-focus:text-sm -top-3 peer-placeholder-shown:top-3.5 peer-focus:text-purple-600 peer-focus:px-1 peer-focus:-top-3">
                    Mot de passe (Confirmation)
                </label>
            </div>
            <div class="w-full">
                <button type="submit" class="bg-gradient-to-tr from-green-400 to-purple-600 text-white px-5 py-3 rounded-xl text-sm text-center w-full hover:from-purple-600 hover:to-green-400 transition">S'inscrire</button>
            </div>
            <div class="flex justify-center">
                <a href="{{ route('login') }}" class="text-base transition text-gray-600 hover:text-purple-600 underline">Se connecter</a>
            </div>
        </form>
    </div>
@endsection
