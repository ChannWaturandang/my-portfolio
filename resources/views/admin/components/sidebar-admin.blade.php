<!-- Sidebar (lebih kecil dan ramping) -->
<aside class="w-[20%] bg-gray-100 dark:bg-gray-800 min-h-screen p-4 shadow-xl text-gray-800 dark:text-white py-10">
    <div class="flex flex-col items-center">
        <img src="{{ asset('images/profile1.jpeg') }}"
            class="w-32 h-32 rounded-full border-2 border-cyan-400" />
        <h2 class="mt-2 font-semibold text-sm text-center">chan Waturandang</h2>
    </div>
    <nav class="mt-4 space-y-2 text-sm">
        <a href="{{ route('admin.dashboard') }}" class="block px-3 py-2 rounded-lg hover:bg-cyan-600 transition"><i
                class="fa fa-home mr-2"></i>Dashboard</a>
        <a href="#" class="block px-3 py-2 rounded-lg hover:bg-cyan-600 transition"><i
                class="fa fa-database mr-2"></i>Data</a>
        <a href="#" class="block px-3 py-2 rounded-lg hover:bg-cyan-600 transition"><i
                class="fa fa-cogs mr-2"></i>Setting</a>

        <!-- New Buttons -->
        <a href="#" class="block px-3 py-2 rounded-lg hover:bg-cyan-600 transition"><i
                class="fa fa-briefcase mr-2"></i>Career</a>
        <a href="{{ route('admin.achievements') }}" class="block px-3 py-2 rounded-lg hover:bg-cyan-600 transition"><i
                class="fa fa-trophy mr-2"></i>Achievements</a>
        <a href="#" class="block px-3 py-2 rounded-lg hover:bg-cyan-600 transition"><i
                class="fa fa-graduation-cap mr-2"></i>Education</a>
        <a href="#" class="block px-3 py-2 rounded-lg hover:bg-cyan-600 transition"><i
                class="fa fa-user-shield mr-2"></i>Role</a>
    </nav>
</aside>