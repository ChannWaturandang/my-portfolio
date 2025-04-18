<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    <!-- Animation & Count Script -->
    <style>
        @keyframes fade-in-up {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fade-in-down {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-up {
            animation: fade-in-up 0.6s ease-out both;
        }

        .animate-fade-in-down {
            animation: fade-in-down 0.6s ease-out both;
        }
    </style>

    <!-- Optional: Custom Tailwind Config -->
    <script>
        tailwind.config = {
            darkMode: 'class', // penting!
            theme: {
                extend: {
                    colors: {
                        primary: '#06b6d4',
                    }
                }
            }
        }
    </script>
</head>

<body>

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
            document.documentElement.classList.toggle('dark', this.darkMode);
        }
    }" x-init="init()">

        <div class="antialiased bg-gray-50 dark:bg-gray-900">
            @include('admin.components.navbar-admin')
            @include('admin.components.sidebar-admin')

            <main class="p-6 md:ml-64 pt-20 min-h-screen bg-gray-50 dark:bg-gray-900 transition-colors duration-300">
                <div class="animate-fade-in-up">
                    @yield('contents-admin')
                </div>
            </main>
        </div>

    </div>

    <script>
        document.querySelectorAll('.count-up').forEach(counter => {
            const updateCount = () => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;
                const increment = target / 200;

                if (count < target) {
                    counter.innerText = Math.ceil(count + increment);
                    setTimeout(updateCount, 10);
                } else {
                    counter.innerText = target;
                }
            };
            updateCount();
        });
</body>

</html>
