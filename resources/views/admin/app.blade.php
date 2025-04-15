<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title }}</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

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
    }" x-init="init()" class="relative">


        @include('admin.components.navbar-admin')

        <!-- Sidebar + Content Wrapper -->
        <div class="flex pt-20 mt-10"> <!-- pt-20 to make room for navbar -->

            @include('admin.components.sidebar-admin')

            @yield('contents-admin')

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

            const progressCircle = document.querySelector('.progress-ring');
            const radius = progressCircle.r.baseVal.value;
            const circumference = radius * 2 * Math.PI;
            const targetPercent = 4378 / 5000 * 100; // assume max 5000 visitors

            progressCircle.style.strokeDasharray = `${circumference}`;
            progressCircle.style.strokeDashoffset = `${circumference}`;

            function setProgress(percent) {
                const offset = circumference - (percent / 100) * circumference;
                progressCircle.style.strokeDashoffset = offset;
            }

            let progress = 0;
            const progressInterval = setInterval(() => {
                if (progress < targetPercent) {
                    progress += 1;
                    setProgress(progress);
                } else {
                    clearInterval(progressInterval);
                }
            }, 20);
        </script>

        <!-- JS Clock -->
        <script>
            function updateTime() {
                const now = new Date();
                const timeString = now.toLocaleTimeString();
                document.getElementById('currentTime').textContent = timeString;
            }
            setInterval(updateTime, 1000);
            updateTime();
        </script>

    </div>
</body>

</html>
