<!-- Navbar -->
<nav
    class="w-full absolute top-0 z-50 bg-white dark:bg-gray-800 text-gray-800 dark:text-white shadow-lg px-8 py-5 transition-colors duration-300">
    <div class="flex items-center justify-between">
        <!-- Left: Logo + Time -->
        <div class="flex items-center gap-8">
            <div class="flex items-center gap-3">
                <img src="/images/logo.png" class="w-10 h-10" alt="Logo">
                <span class="font-bold text-2xl">MyApp</span>
            </div>
            |
            |
            <div class="hidden sm:block">
                <p class="text-sm text-gray-500 dark:text-gray-300">Waktu & Tanggal:</p>
                <p id="currentTime" class="text-lg font-mono">--:--:--</p>
            </div>
        </div>

        <!-- Right: Search + Icons -->
        <div class="flex items-center gap-6">
            <div class="relative w-60">
                <input type="text" placeholder="Search"
                    class="w-full pl-9 pr-4 py-2 rounded-full bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-white text-base placeholder-gray-500 dark:placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-cyan-400 transition">
                <i class="fa fa-search absolute left-3 top-2.5 text-gray-500 dark:text-white/80 text-base"></i>
            </div>

            <!-- Tombol Dark Mode dengan Icon -->
            <button @click="toggleDarkMode"
                class="px-3 py-2 rounded-full bg-gray-800 text-white dark:bg-white dark:text-gray-900 shadow transition"
                title="Toggle Dark Mode">
                <template x-if="!darkMode">
                    <i class="fas fa-moon"></i>
                </template>
                <template x-if="darkMode">
                    <i class="fas fa-sun"></i>
                </template>
            </button>

            <button class="hover:text-cyan-500 transition">
                <i class="fa fa-bell text-2xl"></i>
            </button>
            <button class="hover:text-cyan-500 transition">
                <i class="fa fa-calendar text-2xl"></i>
            </button>

            <!-- Profile Dropdown -->
            <div class="relative group">
                <button class="hover:text-cyan-500 focus:outline-none">
                    <i class="fa fa-user-circle text-3xl"></i>
                </button>
                <div
                    class="absolute right-0 mt-2 w-40 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-50">
                    <a href="#"
                        class="block px-4 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-800 dark:text-white transition">
                        Profile
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            class="w-full text-left px-4 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-700 text-red-500 dark:text-red-400 transition">
                            Logout
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</nav>
