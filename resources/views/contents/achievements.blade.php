@extends('layouts.app')

@section('content')
    <div class="mt-20 p-8 lg:mt-0">
        <div data-aos="fade-up">
            <h1 class="text-2xl font-medium">Achievements</h1>
            <p class="mb-6 border-b border-dashed  border-neutral-600 pb-6 pt-2 text-neutral-600 dark:text-neutral-400">A
                collection of certificates and badges that I have earned throughout my professional journey.</p>
        </div>

        <section class="space-y-4">
            <div class="flex flex-col space-y-4">
                <div class="flex w-full flex-col items-center justify-between space-y-4 md:flex-row" data-aos="fade-down">
                    <div class="flex flex-col gap-4 md:flex-row md:items-center justify-between w-full">
                        <!-- Search Form -->
                        <div
                            class="flex flex-1 items-center gap-3 bg-neutral-50 dark:bg-neutral-900 p-3 rounded-lg outline outline-1 outline-neutral-300 dark:outline-neutral-700">
                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                                stroke-linecap="round" stroke-linejoin="round" class="text-neutral-500" height="20"
                                width="20" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg>

                            <form action="{{ route('achievements.index') }}" method="GET"
                                class="flex w-full items-center gap-2">
                                <input type="text" name="title" value="{{ request('title') }}"
                                    placeholder="Search achievement..."
                                    class="w-full bg-transparent text-sm outline-none placeholder:text-neutral-500" />

                                <button type="submit"
                                    class="px-3 py-1.5 text-sm text-white bg-green-500 rounded-lg hover:bg-green-600 transition-all">
                                    <i class="fa-solid fa-check"></i>
                                </button>

                                <a href="{{ route('achievements.index') }}"
                                    class="px-3 py-1.5 text-sm text-white bg-gray-500 rounded-lg hover:bg-gray-600 transition-all">
                                    <i class="fa-solid fa-rotate-right"></i>
                                </a>
                            </form>
                        </div>

                        <!-- Filter Button -->
                        <div x-data="{ open: false }" class="relative md:w-[230px] w-full">
                            <button @click="open = !open"
                                class="w-full flex items-center justify-between gap-2 bg-neutral-100 dark:bg-neutral-900 text-neutral-900 dark:text-neutral-400 p-3 rounded-lg outline outline-1 outline-neutral-300 dark:outline-neutral-700 hover:bg-neutral-200 dark:hover:bg-neutral-800 transition-all duration-300">
                                <span class="text-sm">Sort by</span>
                                <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                                    stroke-linecap="round" stroke-linejoin="round" class="transition duration-200"
                                    height="18" width="18">
                                    <path d="m7 15 5 5 5-5"></path>
                                    <path d="m7 9 5-5 5 5"></path>
                                </svg>
                            </button>

                            <!-- Dropdown Menu -->
                            <div x-show="open" @click.outside="open = false"
                                class="absolute mt-2 w-full bg-white dark:bg-neutral-800 shadow-lg rounded-lg z-50 p-4 space-y-3">
                                <a href="{{ route('achievements.index', ['sort' => 'newest', 'title' => request('title')]) }}"
                                    class="block text-sm hover:font-semibold text-neutral-700 dark:text-neutral-300">Newest</a>
                                <a href="{{ route('achievements.index', ['sort' => 'oldest', 'title' => request('title')]) }}"
                                    class="block text-sm hover:font-semibold text-neutral-700 dark:text-neutral-300">Oldest</a>
                            </div>
                        </div>


                        <!-- New Achievement Button -->
                        <div class="w-full md:w-auto">
                            <a href="{{ route('achievements.create') }}"
                                class="flex justify-center items-center gap-2 px-4 py-2 text-sm text-white bg-blue-500 hover:bg-blue-600 rounded-lg transition-all">
                                <i class="fas fa-plus"></i> New
                            </a>
                        </div>

                    </div>
                </div>

                <div class="ml-1 text-sm text-neutral-500 dark:text-neutral-400" data-aos="fade-up">Total: {{ $achievements->count() }}</div>

                <div class="grid grid-cols-1 gap-4 md:grid-cols-3">

                    @forelse ($achievements as $index => $achievement)
                        <div x-data="{ show: false }"
                        x-init="setTimeout(() => show = true, {{ $index * 100 }})"
                        x-show="show"
                        x-transition:enter="transition ease-in duration-500"
                        x-transition:enter-start="opacity-0 translate-y-4 scale-110"
                        x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                        class="transform transition duration-[0.7s] hover:scale-105 hover:shadow-lg " data-aos="zoom-in" data-aos-delay="100">

                            <a class="flex h-full" target="_blank" href="{{ $achievement->credential_url }}">
                                <div
                                    class="rounded-xl w-full border-[1.5px] border-neutral-300 p-1 shadow-sm dark:border-[#333333]">
                                    <div
                                        class="rounded-lg bg-gradient-to-b from-neutral-200 to-neutral-100 transition-all duration-300 hover:to-[#ffffff] dark:from-[#242424] dark:to-neutral-900 dark:hover:to-neutral-950 group flex h-full flex-col overflow-hidden">
                                        <div class="relative">
                                            <img alt="{{ $achievement->title }}" loading="lazy" width="500"
                                                height="200" decoding="async" data-nimg="1"
                                                class="min-h-[180px] w-full object-cover md:h-[170px]"
                                                src="{{ asset('storage/' . $achievement->image) }}"
                                                style="color: transparent;">
                                        </div>
                                        <div class="my-auto space-y-2 p-4">
                                            <p class="text-neutral-900 dark:text-neutral-50">{{ $achievement->title }}</p>
                                            <p class="text-sm text-neutral-500 dark:text-neutral-400">
                                                {{ $achievement->Company }}</p>
                                            <div class="space-y-1">
                                                <p class="text-xs text-neutral-400 dark:text-neutral-500">Issued on</p>
                                                <p class="text-sm text-neutral-500 dark:text-neutral-400">
                                                    {{ $achievement->publication_date->translatedFormat('F Y') }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @empty
                        <p class="text-neutral-500 dark:text-neutral-400" data-aos="zoom-in" data-aos-delay="100">No achievements found.</p>
                    @endforelse

                </div>

        </section>
    </div>
@endsection
