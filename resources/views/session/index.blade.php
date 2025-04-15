@extends('layouts.app')

@section('login')
<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="w-full max-w-md bg-white border border-gray-300 rounded-lg p-6 shadow-md">
        <h1 class="text-2xl font-semibold text-center mb-6">Login</h1>

        <form action="/login/session" method="POST" class="space-y-5" x-data="{ password: '', strength: 0 }"
            x-effect="strength = checkStrength(password)">
            @csrf

            {{-- Email --}}
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input type="text" name="email" id="email" value="{{ old('email') }}"
                    class="w-full border px-4 py-2 rounded-md focus:outline-none focus:ring-2
                    {{ $errors->has('email') ? 'border-red-500 focus:ring-red-400' : 'border-gray-300 focus:ring-blue-500' }}">
                @error('email')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Password --}}
            <div x-data>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <input type="password" name="password" id="password" x-model="password"
                    class="w-full border px-4 py-2 rounded-md focus:outline-none focus:ring-2
                    {{ $errors->has('password') ? 'border-red-500 focus:ring-red-400' : 'border-gray-300 focus:ring-blue-500' }}">
                @error('password')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror

                {{-- Bar strength indicator --}}
                <div class="mt-2 h-2 rounded transition-all duration-500"
                    :class="{
                        'w-1/4 bg-red-500': strength === 1,
                        'w-1/2 bg-yellow-400': strength === 2,
                        'w-3/4 bg-blue-500': strength === 3,
                        'w-full bg-green-500': strength === 4
                    }">
                </div>

                {{-- Text indicator --}}
                <p class="text-sm mt-1" x-text="[
                    '', 'Weak 🔴', 'Medium 🟡', 'Strong 🔵', 'Good 🟢'
                ][strength]"
                :class="{
                    'text-red-600': strength === 1,
                    'text-yellow-600': strength === 2,
                    'text-blue-600': strength === 3,
                    'text-green-600': strength === 4
                }"></p>
            </div>

            <div>
                <button type="submit"
                    class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition duration-200">
                    Login
                </button>
            </div>
        </form>
    </div>
</div>

{{-- Script strength checker --}}
<script>
    function checkStrength(password) {
        let strength = 0;

        if (password.length >= 6) strength++;
        if (password.match(/[A-Z]/)) strength++;
        if (password.match(/[a-z]/) && password.match(/\d/)) strength++;
        if (password.match(/[\W_]/)) strength++;

        return strength;
    }
</script>
@endsection
