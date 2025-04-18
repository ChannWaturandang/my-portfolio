@extends('layouts.app')

@section('content')

    <div class="mt-20 p-8 lg:mt-0 aos-init aos-animate">
        <h1 class="text-2xl font-medium">Projects</h1>
        <p class="mb-6 border-b border-dashed  border-neutral-600 pb-6 pt-2 text-neutral-600 dark:text-neutral-400">List
            of all my projects.</p>
        <section class="grid grid-cols-1 gap-6 md:grid-cols-2">
            @forelse ($projects as $project)
                <div style="opacity: 1; will-change: auto; transform: none;">
                    <a href="/projects/satriabahari-site">
                        <div class="rounded-xl w-full border-[1.5px] border-neutral-300 p-1 shadow-sm dark:border-[#333333]">
                            <div
                                class="rounded-lg bg-gradient-to-b from-neutral-200 to-neutral-100 transition-all duration-300 hover:to-[#ffffff] dark:from-[#242424] dark:to-neutral-900 dark:hover:to-neutral-950 group relative cursor-pointer">
                                @if ($project->featured == true)
                                    <div
                                        class="absolute right-0 top-0 z-10 flex items-center gap-x-1 rounded-bl-lg rounded-tr-lg bg-cyan-500 px-2 py-1 text-sm font-medium text-neutral-900">
                                        <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                                            stroke-linecap="round" stroke-linejoin="round" height="15" width="15"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M16 3a1 1 0 0 1 .117 1.993l-.117 .007v4.764l1.894 3.789a1 1 0 0 1 .1 .331l.006 .116v2a1 1 0 0 1 -.883 .993l-.117 .007h-4v4a1 1 0 0 1 -1.993 .117l-.007 -.117v-4h-4a1 1 0 0 1 -.993 -.883l-.007 -.117v-2a1 1 0 0 1 .06 -.34l.046 -.107l1.894 -3.791v-4.762a1 1 0 0 1 -.117 -1.993l.117 -.007h8z"
                                                stroke-width="0" fill="currentColor">
                                            </path>
                                        </svg>
                                        <span>Featured</span>
                                    </div>
                                @else
                                    <div class="relative">
                                        <img alt="satriabahari.site" fetchpriority="high" width="450" height="200"
                                            decoding="async" data-nimg="1"
                                            class="h-full w-full rounded-t-xl object-cover md:w-auto"
                                            src="{{ asset('images/' . $project->image) }}" style="color: transparent;">
                                        <div
                                            class="absolute left-0 top-0 flex h-full w-full items-center justify-center gap-1 rounded-t-xl bg-black text-sm font-medium text-neutral-50 opacity-0 transition-opacity duration-300 group-hover:opacity-80">
                                            <span>View Project</span>
                                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                                                aria-hidden="true" height="20" width="20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                            </svg>
                                        </div>
                                    </div>
                                @endif


                                <div class="space-y-2 p-5">

                                    <div>
                                        {{-- title --}}
                                        <h3
                                            class="cursor-pointer text-lg text-neutral-700 transition-all duration-300 group-hover:text-teal-500 dark:text-neutral-300 dark:group-hover:text-teal-400">
                                            {{ $project->title }}
                                        </h3>

                                        {{-- description --}}
                                        <p class="text-sm leading-relaxed text-neutral-700 dark:text-neutral-400">
                                            {{ Str::limit($project->description, 70) }}
                                        </p>

                                        {{-- icon --}}
                                        <div class="flex flex-wrap items-center gap-3 pt-2">
                                            @php
                                                // Pastikan tech adalah array
                                                $tech = is_array($project->tech)
                                                    ? $project->tech
                                                    : json_decode($project->tech, true);
                                            @endphp

                                            @foreach ($tech as $techItem)
                                                @foreach ($logos as $logo)
                                                    @if ($techItem === $logo['name'])
                                                        <!-- Cocokkan dengan nama teknologi -->
                                                        <div>
                                                            <img height="22" width="22" src="{{ $logo['divs'] }}"
                                                                alt="{{ $logo['name'] }}">
                                                        </div>
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                <p>No projects available.</p>
            @endforelse
        </section>
    </div>

@endsection
