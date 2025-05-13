@extends('layouts.app')

@section('content')
<header class="absolute top-0 left-0 w-full bg-black bg-opacity-80 py-4 px-6 flex justify-between items-center z-10">
    <h2 class="text-2xl font-bold text-orange-600">SEPEDAKU</h2>
</header>
<div class="min-h-screen w-full flex items-center justify-center bg-orange-500">
    <div class="flex flex-col md:flex-row bg-white rounded-lg shadow-lg overflow-hidden w-full mx-6 md:mx-12">
        <div class="md:w-1/2 hidden md:block">
            <img src="{{ asset('images/sepeda2.jpg') }}" alt="Register Sepedaku" class="h-full w-full object-cover">
        </div>
        <div class="md:w-1/2 p-8 flex flex-col justify-center">
            <div class="text-center mb-6">
                <img src="{{ asset('images/logo.png') }}" alt="Sepedaku Logo" class="mx-auto h-36">
                <h2 class="text-2xl font-bold mt-4 text-gray-800">Selamat Datang di Sepedaku</h2>
                <p class="text-sm text-gray-500">Bergabung dan temukan sepeda terbaik untukmu</p>
            </div>
            <form method="POST" action="{{ route('login') }}" class="space-y-4">
                @csrf

                <div>
                    <label class="block mb-1 text-sm font-medium text-gray-700">Username / Email</label>
                    <input type="text" name="username" required
                           class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-orange-500">
                    @error('login')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block mb-1 text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password" required
                           class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-orange-500">
                </div>

                <button type="submit"
                class="w-full bg-yellow-500 text-white font-semibold py-2 rounded hover:bg-orange-600 transition">
                Masuk
                </button>
                </form>

            <div class="text-center mt-4 text-sm text-gray-600">
                Belum punya akun?
                <a href="{{ route('register') }}" class="text-blue-600 font-medium hover:underline">Daftar</a>
            </div>
        </div>
    </div>
</div>
@endsection
