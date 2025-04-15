@php
    $isEdit = isset($achievement); // Cek apakah sedang edit
@endphp

@extends('layouts.app')

@section('content')
<div class="relative min-h-screen bg-gray-100 flex items-center justify-center px-4 py-6">
    <!-- Back Button -->
    <a href="{{ route('achievements.index') }}"
        class="absolute top-6 left-6 flex items-center text-indigo-600 hover:text-indigo-800 transition-all group">
        <svg class="w-5 h-5 mr-2 group-hover:-translate-x-1 transition-transform duration-200" fill="none"
            stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
        </svg>
        <span class="font-medium">Back</span>
    </a>

    <!-- Error Alert -->
    @if ($errors->any())
        <div class="absolute top-20 bg-red-100 text-red-800 px-4 py-2 rounded shadow mb-4 animate-fade-in">
            <ul class="list-disc list-inside text-sm space-y-1">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Success Alert -->
    @if (session('success'))
        <div class="absolute top-32 bg-green-100 text-green-800 px-4 py-2 rounded shadow mb-4 animate-fade-in">
            {{ session('success') }}
        </div>
    @endif

    <!-- Form -->
    <form
        action="{{ $isEdit ? route('achievements.update', $achievement->id) : route('achievements.store') }}"
        method="post"
        enctype="multipart/form-data"
        class="w-full max-w-xl bg-white shadow-md rounded-xl p-10 space-y-6 transition-all duration-300 animate-fade-in"
    >
        @csrf
        @if ($isEdit)
            @method('PUT')
        @endif

        <h2 class="text-2xl font-bold text-center text-gray-800 animate-slide-in-down">
            {{ $isEdit ? 'Edit Achievement' : 'Add Achievement' }}
        </h2>

        <div class="space-y-4">
            <!-- Title -->
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" name="title" id="title" placeholder="e.g., Software Engineer"
                    value="{{ old('title', $isEdit ? $achievement->title : '') }}"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 transition duration-200" />
            </div>

            <!-- Company -->
            <div>
                <label for="company" class="block text-sm font-medium text-gray-700">Company</label>
                <input type="text" name="company" id="company" placeholder="e.g., Google Inc."
                    value="{{ old('company', $isEdit ? $achievement->company : '') }}"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 transition duration-200" />
            </div>

            <!-- Dates -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="publication_date" class="block text-sm font-medium text-gray-700">Publication Date</label>
                    <div class="relative">
                        <input type="text" name="publication_date" id="publication_date"
                            value="{{ old('publication_date', $isEdit ? $achievement->publication_date : '') }}"
                            placeholder="Select date"
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 transition duration-200 bg-white text-gray-900" />
                        <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 4h10M5 11h14M5 17h14M5 23h14" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div>
                    <label for="expiration_date" class="block text-sm font-medium text-gray-700">Expiration Date (Optional)</label>
                    <div class="relative">
                        <input type="text" name="expiration_date" id="expiration_date"
                            value="{{ old('expiration_date', $isEdit ? $achievement->expiration_date : '') }}"
                            placeholder="Select date"
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 transition duration-200 bg-white text-gray-900" />
                        <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 4h10M5 11h14M5 17h14M5 23h14" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- URL -->
            <div>
                <label for="credential_url" class="block text-sm font-medium text-gray-700">Credential URL</label>
                <input type="url" name="credential_url" id="credential_url" placeholder="https://example.com"
                    value="{{ old('credential_url', $isEdit ? $achievement->credential_url : '') }}"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 transition duration-200" />
            </div>

            <!-- Image -->
            <div>
                <label for="image" class="block text-sm font-medium text-gray-700">Upload Image (Optional)</label>
                <input type="file" name="image" id="image" accept="image/*"
                    class="mt-1 block w-full text-sm text-gray-700 file:bg-indigo-600 file:cursor-pointer file:text-white file:rounded-md file:px-4 file:py-2 file:border-none hover:file:bg-indigo-700 transition duration-200" />
            </div>
        </div>

        <button type="submit"
            class="w-full bg-indigo-600 text-white font-medium py-2.5 rounded-lg hover:bg-indigo-700 transition-all duration-300 shadow-md hover:shadow-lg">
            {{ $isEdit ? 'Update' : 'Add' }}
        </button>


    </form>
</div>

<style>
    @keyframes fade-in {
        0% { opacity: 0; transform: scale(0.95); }
        100% { opacity: 1; transform: scale(1); }
    }

    @keyframes slide-in-down {
        0% { opacity: 0; transform: translateY(-20px); }
        100% { opacity: 1; transform: translateY(0); }
    }

    .animate-fade-in { animation: fade-in 0.6s ease-out both; }
    .animate-slide-in-down { animation: slide-in-down 0.5s ease-out both; }
</style>
@endsection
