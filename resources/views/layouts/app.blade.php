<!DOCTYPE html>
<html lang="en">

<head>
    @vite(['resources/css/app.css'])
    @livewireStyles
    @livewireScripts
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- information about web --}}
    <meta name="description" content="Protofolio">
    <meta name="author" content="Chan Waturandang">
    <meta name="keywords" content="Portofolio Web">
    <meta name="creator" content="Chan Waturandang">
    <meta property="og:title" content="Projects | Chan Waturandang">
    <meta property="og:description" content="Portofolio web ideas">



    <title>{{ $title }}</title>

    <!-- Font Awesome (untuk ikon seperti fa-check, fa-plus, fa-rotate-right) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-...your-integrity..." crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Swiper CSS (di dalam <head>) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- Alpine.js (untuk x-data, x-show, dan interaktivitas ringan) -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- AOS (Animate On Scroll) -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 800, // Durasi animasi
                once: false, // Biar animasi bisa berulang setiap scroll
                delay: 100, // Delay awal animasi
            });
        });
    </script>

    {{-- scrollbar overflow hidden --}}
    <style>
        /* Menyembunyikan scrollbar tetapi tetap memungkinkan scroll */
        .hidden-scrollbar {
            overflow: scroll; /* Atau auto, jika ingin scroll muncul hanya ketika diperlukan */
        }

        .hidden-scrollbar::-webkit-scrollbar {
            width: 0px;  /* Menyembunyikan scrollbar horizontal */
            height: 0px; /* Menyembunyikan scrollbar vertikal */
        }

        .hidden-scrollbar::-webkit-scrollbar-thumb {
            background: transparent; /* Menghapus warna thumb */
        }
    </style>

</head>

<body class="__className_9c35c3 overflow-hidden" cz-shortcut-listen="true" data-aos-easing="ease" data-aos-duration="800"
    data-aos-delay="50">
    <style>
        #nprogress {
            pointer-events: none
        }

        #nprogress .bar {
            background: #05b6d3;
            position: fixed;
            z-index: 1600;
            top: 0;
            left: 0;
            width: 100%;
            height: 3px
        }

        #nprogress .peg {
            display: block;
            position: absolute;
            right: 0;
            width: 100px;
            height: 100%;
            box-shadow: 0 0 10px #05b6d3, 0 0 5px #45c6c0;
            opacity: 1;
            -webkit-transform: rotate(3deg) translate(0px, -4px);
            -ms-transform: rotate(3deg) translate(0px, -4px);
            transform: rotate(3deg) translate(0px, -4px)
        }

        #nprogress .spinner {
            display: block;
            position: fixed;
            z-index: 1600;
            top: 15px;
            right: 15px
        }

        #nprogress .spinner-icon {
            width: 18px;
            height: 18px;
            box-sizing: border-box;
            border: 2px solid transparent;
            border-top-color: #05b6d3;
            border-left-color: #05b6d3;
            border-radius: 50%;
            -webkit-animation: nprogress-spinner 400ms linear infinite;
            animation: nprogress-spinner 400ms linear infinite
        }

        .nprogress-custom-parent {
            overflow: hidden;
            position: relative
        }

        .nprogress-custom-parent #nprogress .bar,
        .nprogress-custom-parent #nprogress .spinner {
            position: absolute
        }

        @-webkit-keyframes nprogress-spinner {
            0% {
                -webkit-transform: rotate(0deg)
            }

            100% {
                -webkit-transform: rotate(360deg)
            }
        }

        @keyframes nprogress-spinner {
            0% {
                transform: rotate(0deg)
            }

            100% {
                transform: rotate(360deg)
            }
        }
    </style>

    <div x-data="{
        darkMode: false,
        init() {
            // Cek apakah ada preferensi tersimpan
            const stored = localStorage.getItem('darkMode');

            if (stored === null) {
                // Auto switch by time
                const hour = new Date().getHours();
                this.darkMode = (hour < 6 || hour >= 18); // malam = darkMode true
            } else {
                this.darkMode = JSON.parse(stored);
            }

            this.applyMode();
        },
        toggleDarkMode() {
            this.darkMode = !this.darkMode;
            localStorage.setItem('darkMode', this.darkMode);
            this.applyMode();
        },
        applyMode() {
            // Menambahkan atau menghapus class 'dark' pada elemen <html>
            document.documentElement.classList.toggle('dark', this.darkMode);

            // Mengatur background warna untuk dark mode
            if (this.darkMode) {
                document.documentElement.style.backgroundColor = '#121212'; // Dark mode bg
            } else {
                document.documentElement.style.backgroundColor = ''; // Mengembalikan ke default (light mode)
            }
        }
    }" x-init="init()">

        <div class="dark:bg-[#121212] dark:text-neutral-100 w-full h-full">
            @if (request()->is('login'))
                @yield('login')
            @else
                <div class="mx-auto max-w-7xl lg:px-12">
                    <div class="flex flex-col lg:flex-row lg:gap-5 lg:py-4 mx-auto">
                        {{-- sidebar --}}
                        @include('components.navbar')
                        <div class="max-w-[854px] hidden-scrollbar transition-all duration-300 overflow-y-auto h-screen mr-2 lg:w-4/5">
                            {{-- content --}}
                            @yield('content')
                        </div>
                    </div>
                </div>
            @endif
        </div>

    </div>
</body>

</html>
