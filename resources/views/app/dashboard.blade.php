<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME', 'Laravel') }} - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-blue-50">
    <!-- Navbar -->
    <nav class="bg-white border-b border-blue-200 fixed w-full z-30 lg:pl-64">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <button id="sidebarToggle" class="p-2 rounded-lg text-blue-600 hover:bg-blue-100 focus:outline-none focus:ring-2 focus:ring-blue-200 lg:hidden">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                    <a href="#" class="flex items-center space-x-3 px-2 lg:hidden">
                        <img src="https://www.svgrepo.com/show/499962/music.svg" class="h-8 w-8">
                        <span class="text-xl font-semibold text-blue-800">{{ env('APP_NAME', 'Laravel') }}</span>
                    </a>
                </div>
                <div class="flex items-center">
                    <div class="flex items-center space-x-3">
                        <button class="flex items-center space-x-2 p-2 rounded-lg text-blue-600 hover:bg-blue-100">
                            <img class="h-8 w-8 rounded-full" src="https://ui-avatars.com/api/?name=Admin" alt="Admin">
                            <span class="hidden md:block font-medium">Admin</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="flex pt-16">
        <!-- Sidebar -->
        <div id="sidebar" class="fixed lg:static w-64 bg-white h-[calc(100vh-4rem)] shadow-lg transition-all duration-300 -translate-x-full lg:translate-x-0 z-20 overflow-y-auto">
            <!-- App Logo for Desktop -->
            <div class="hidden lg:flex items-center space-x-3 p-4 border-b border-blue-100">
                <img src="https://www.svgrepo.com/show/499962/music.svg" class="h-8 w-8">
                <span class="text-xl font-semibold text-blue-800">{{ env('APP_NAME', 'Laravel') }}</span>
            </div>
            <div class="p-4">
                <ul class="space-y-1">
                    <li>
                        <a href="#" class="flex items-center p-3 text-blue-700 hover:bg-blue-100 rounded-lg transition-colors group">
                            <svg class="w-5 h-5 text-blue-500 group-hover:text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                            <span class="ml-3 font-medium">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-3 text-blue-700 hover:bg-blue-100 rounded-lg transition-colors group">
                            <svg class="w-5 h-5 text-blue-500 group-hover:text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                            </svg>
                            <span class="ml-3 font-medium">Users</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-3 text-blue-700 hover:bg-blue-100 rounded-lg transition-colors group">
                            <svg class="w-5 h-5 text-blue-500 group-hover:text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span class="ml-3 font-medium">Settings</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-4 lg:p-8 lg:ml-64">
            <div class="max-w-7xl mx-auto">
                <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                    <h1 class="text-2xl font-bold text-blue-800 mb-4">Dashboard</h1>
                    <p class="text-blue-600">Welcome to your dashboard! Here you can manage your application.</p>
                </div>
                <!-- Add your dashboard content here -->
            </div>
        </div>
    </div>

    <!-- Overlay for mobile sidebar -->
    <div id="overlay" class="fixed inset-0 bg-blue-900/50 hidden z-10 backdrop-blur-sm" onclick="closeSidebar()"></div>

    <script>
        const sidebarToggle = document.getElementById('sidebarToggle');
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('overlay');
        let sidebarOpen = false;

        function closeSidebar() {
            sidebarOpen = false;
            sidebar.classList.add('-translate-x-full');
            sidebar.classList.remove('translate-x-0');
            overlay.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        }

        sidebarToggle.addEventListener('click', () => {
            sidebarOpen = !sidebarOpen;
            if (sidebarOpen) {
                sidebar.classList.remove('-translate-x-full');
                sidebar.classList.add('translate-x-0');
                overlay.classList.remove('hidden');
                document.body.classList.add('overflow-hidden');
            } else {
                closeSidebar();
            }
        });

        // Close sidebar when screen size changes to large
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 1024) {
                closeSidebar();
                document.body.classList.remove('overflow-hidden');
            }
        });
    </script>
</body>
</html>
