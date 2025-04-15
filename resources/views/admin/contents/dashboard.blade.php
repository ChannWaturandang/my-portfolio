@extends('admin.app')

@section('contents-admin')
    <main class="flex-1 bg-white dark:bg-gray-900 p-10 space-y-8">
        <!-- Dashboard Header -->
        <h1 class="text-4xl font-extrabold text-red-500 dark:text-cyan-400 mb-4 animate-fade-in-down">🚀 Dashboard Overview</h1>

        <!-- Cards Section with Animate Count & Hover Pop -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div
                class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg transform hover:scale-105 transition-all duration-300 animate-fade-in-up">
                <h2 class="text-xl font-semibold mb-1"><i class="fa fa-users mr-2"></i>Total Users</h2>
                <p class="text-4xl font-bold text-red-500 dark:text-cyan-400 count-up" data-target="1250">0</p>
            </div>
            <div
                class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg transform hover:scale-105 transition-all duration-300 animate-fade-in-up delay-100">
                <h2 class="text-xl font-semibold mb-1"><i class="fa fa-dollar-sign mr-2"></i>Sales</h2>
                <p class="text-4xl font-bold text-red-500 dark:text-cyan-400 count-up" data-target="9420">0</p>
            </div>
            <div
                class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg transform hover:scale-105 transition-all duration-300 animate-fade-in-up delay-200">
                <h2 class="text-xl font-semibold mb-1"><i class="fa fa-shopping-cart mr-2"></i>New Orders</h2>
                <p class="text-4xl font-bold text-red-500 dark:text-cyan-400 count-up" data-target="312">0</p>
            </div>
            <div
                class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg transform hover:scale-105 transition-all duration-300 animate-fade-in-up delay-300">
                <h2 class="text-xl font-semibold mb-1"><i class="fa fa-envelope mr-2"></i>Messages</h2>
                <p class="text-4xl font-bold text-red-500 dark:text-cyan-400 count-up" data-target="27">0</p>
            </div>
        </div>

        <!-- Visitors Progress Ring -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center animate-fade-in-up">
            <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-lg">
                <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white"><i class="fa fa-chart-pie mr-2"></i>Visitors</h2>
                <div class="flex items-center justify-center">
                    <svg class="w-40 h-40">
                        <circle class="text-gray-700" stroke-width="10" stroke="currentColor" fill="transparent" r="70"
                            cx="80" cy="80" />
                        <circle class="text-red-500 dark:text-cyan-400 progress-ring" stroke-width="10" stroke-linecap="round"
                            stroke="currentColor" fill="transparent" r="70" cx="80" cy="80"
                            stroke-dasharray="440" stroke-dashoffset="440" />
                    </svg>
                    <div class="absolute text-center text-black dark:text-white">
                        <p class="text-2xl font-bold count-up" data-target="4378">0</p>
                        <span>Total Visitors</span>
                    </div>
                </div>
            </div>

            <!-- Recent Activity -->
            <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-lg animate-fade-in-up">
                <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white"><i class="fa fa-history mr-2"></i>Recent
                    Activity</h2>
                <ul class="space-y-3 text-gray-700 dark:text-gray-300">
                    <li class="border-b border-gray-700 pb-2">🔔 User <strong>john_doe</strong> signed in.</li>
                    <li class="border-b border-gray-700 pb-2">📦 New order <strong>#12345</strong> placed.</li>
                    <li class="border-b border-gray-700 pb-2">🛠 System updated successfully.</li>
                    <li class="border-b border-gray-700 pb-2">💬 You have 2 new messages.</li>
                </ul>
            </div>
        </div>
    </main>
@endsection
