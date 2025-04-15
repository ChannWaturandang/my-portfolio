@extends('layouts.app')

@section('content')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <section class="space-y-6 p-6">
        <h1 class="text-4xl font-extrabold bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 bg-clip-text text-transparent">
            Hi, I'm Chan Waturandang
        </h1>
        <ul class="flex flex-col md:flex-row gap-x-10 gap-y-2 text-neutral-700 dark:text-neutral-400">
            <li>📍 Based in Timika, Indonesia 🇮🇩</li>
            <li>💼 Onsite</li>
        </ul>
        <p class="leading-loose text-neutral-600 dark:text-neutral-300">
            Passionate and seasoned Web Developer focused on Fullstack Web Development. Proficient in PHP and JavaScript,
            with strong knowledge of web technologies. Dedicated to creating efficient, scalable, and beautiful applications.
        </p>
    </section>

    <div class="border-t border-neutral-300 dark:border-neutral-700 my-8"></div>

    <!-- Skills -->
    <section class="p-6">
        <div class="text-xl font-semibold text-neutral-800 dark:text-neutral-300 flex items-center gap-2 mb-2">
            <i class="fas fa-tools"></i>
            <span>Skills</span>
        </div>
        <p class="text-neutral-600 dark:text-neutral-400 mb-6">My professional skills.</p>

        <!-- Top Row - Scroll Left -->
        <div class="relative overflow-hidden w-full bg-white dark:bg-gray-800 py-3 mb-4">
            <div class="marquee-track-left flex gap-6">
                @for ($i = 0; $i < 2; $i++)
                    @foreach ([
                        'Laravel' => 'text-red-500',
                        'PHP' => 'text-blue-600',
                        'JavaScript' => 'text-yellow-500',
                        'React' => 'text-blue-400',
                        'Tailwind CSS' => 'text-teal-500',
                        'Python' => 'text-green-500',
                        'Docker' => 'text-blue-500',
                        'Node-js' => 'text-green-600',
                        'Github' => 'text-gray-800',
                        'AWS' => 'text-orange-500'
                    ] as $skill => $color)
                        <div class="flex items-center px-4 py-2 border rounded-md shadow-md bg-gray-100 dark:bg-gray-700 text-lg transition transform hover:scale-105 hover:shadow-lg duration-300 whitespace-nowrap">
                            <i class="fab fa-{{ strtolower(str_replace([' ', '-'], '', $skill)) }} {{ $color }} text-2xl"></i>
                            <span class="ml-2 font-medium">{{ $skill }}</span>
                        </div>
                    @endforeach
                @endfor
            </div>
        </div>

        <!-- Bottom Row - Scroll Right -->
        <div class="relative overflow-hidden w-full bg-white dark:bg-gray-800 py-3">
            <div class="marquee-track-right flex gap-6">
                @for ($i = 0; $i < 2; $i++)
                    @foreach ([
                        'MySQL' => 'text-blue-700',
                        'VueJS' => 'text-green-400',
                        'Redis' => 'text-red-400',
                        'Figma' => 'text-purple-500',
                        'PostgreSQL' => 'text-indigo-600',
                        'jQuery' => 'text-blue-500',
                        'Sass' => 'text-pink-400',
                        'NextJS' => 'text-black',
                        'Bootstrap' => 'text-indigo-500',
                        'Nginx' => 'text-green-700'
                    ] as $skill => $color)
                        <div class="flex items-center px-4 py-2 border rounded-md shadow-md bg-gray-100 dark:bg-gray-700 text-lg transition transform hover:scale-105 hover:shadow-lg duration-300 whitespace-nowrap">
                            <i class="fab fa-{{ strtolower(str_replace([' ', '-'], '', $skill)) }} {{ $color }} text-2xl"></i>
                            <span class="ml-2 font-medium">{{ $skill }}</span>
                        </div>
                    @endforeach
                @endfor
            </div>
        </div>
    </section>

    <div class="border-t border-neutral-300 dark:border-neutral-700 my-8"></div>

    <!-- Contact -->
    <section class="text-center mb-20">
        <h2 class="text-2xl font-bold mb-4 text-neutral-800 dark:text-white">📬 Let's work together!</h2>
        <a href="mailto:chan@example.com" class="inline-block px-6 py-3 bg-indigo-600 text-white rounded-lg shadow hover:bg-indigo-700 transition">
            Contact Me
        </a>
    </section>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init();</script>

    <!-- Custom Marquee Style -->
    <style>
        .marquee-track-left {
            width: max-content;
            animation: marquee-left 30s linear infinite;
        }
        .marquee-track-right {
            width: max-content;
            animation: marquee-right 30s linear infinite;
        }

        @keyframes marquee-left {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }

        @keyframes marquee-right {
            0% { transform: translateX(-50%); }
            100% { transform: translateX(0); }
        }
    </style>
@endsection
