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
