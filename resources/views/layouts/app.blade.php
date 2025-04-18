<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ request() }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Tailwind CSS -->
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}

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
        document.addEventListener('DOMContentLoaded', () => {
            AOS.init();
        });
    </script>

    <style>
        #loadingScreen {
            transition: opacity 0.5s ease-in-out;
        }
    </style>

</head>

<body>
    <!-- FULLSCREEN VIDEO LOADING SCREEN -->
    <div id="loadingScreen"
        class="fixed inset-0 z-[9999] bg-transparent flex items-center justify-center transition-opacity duration-100">
        <video id="loadingVideo" src="images/loading1.webm" autoplay muted playsinline
            class="w-full h-full object-cover" onended="hideLoading()"></video>

        <div class="absolute bottom-0 right-0 w-60 h-10 bg-white/100 z-10"></div>

    </div>

    @if (request()->is('login'))
        @yield('login')
    @else
        <div class="mx-auto max-w-7xl lg:px-12">
            <div class="flex flex-col lg:flex-row lg:gap-5 lg:py-4 mx-auto">
                @include('components.navbar')
                <div class="max-w-[854px] transition-all duration-300 lg:w-4/5">
                    @yield('content')
                </div>
            </div>
        </div>
    @endif

    <script>
        const loadingScreen = document.getElementById("loadingScreen");
        const video = document.getElementById("loadingVideo");

        function hideLoading() {
            loadingScreen.classList.add("opacity-0", "pointer-events-none");
            setTimeout(() => {
                loadingScreen.remove();
            }, 500);
        }

        document.addEventListener("DOMContentLoaded", () => {
            if (!localStorage.getItem("hasVisited")) {
                video.addEventListener("ended", () => {
                    hideLoading();
                    localStorage.setItem("hasVisited", "true");
                });
            } else {
                loadingScreen.remove();
            }
        });
    </script>




</body>

</html>
