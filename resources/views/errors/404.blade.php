@extends('layouts.error-page')

@section('404')
    <div class="relative min-h-screen flex items-center justify-center bg-gradient-to-br from-indigo-200 via-purple-200 to-pink-300 overflow-hidden">

        {{-- <!-- Bumi 3D Berputar -->
        <div class="absolute w-80 h-80 rounded-full overflow-hidden left-10 top-10 z-0 animate-earth-spin">
            <img src="{{ asset('assets/images/earth-3d.png') }}" alt="Planet Bumi" class="w-full h-full object-cover">
        </div> --}}

        <!-- Konten 404 -->
        <div class="text-center max-w-md p-10 bg-white/30 backdrop-blur-xl rounded-[2rem] shadow-[0_10px_40px_rgba(0,0,0,0.1)] border border-white/40 z-10 transform hover:scale-[1.02] transition duration-300 ease-in-out">
            <h1 class="text-7xl font-extrabold text-purple-700 drop-shadow-[0_2px_15px_rgba(147,51,234,0.7)] animate-bounce mb-4">
                404
            </h1>
            <p class="text-lg text-gray-700 mb-1">Oops! Halaman tidak ditemukan.</p>
            <p class="text-sm text-gray-600 mb-6">Kamu sepertinya tersesat 😊</p>

            <a href="{{ route('contents.home') }}"
                class="inline-block px-6 py-3 bg-gradient-to-tr from-purple-500 to-pink-500 text-white font-semibold rounded-xl shadow-lg hover:scale-105 transition duration-300">
                🚀 Ayo balik
            </a>
        </div>
    </div>

    <!-- Animasi CSS -->
    {{-- <style>
        @keyframes earth-spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .animate-earth-spin {
            animation: earth-spin 40s linear infinite;
        }
    </style> --}}
@endsection
