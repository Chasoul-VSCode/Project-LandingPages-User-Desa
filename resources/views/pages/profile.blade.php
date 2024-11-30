<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME', 'Laravel') }} - Profil Desa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-blue-50">
    @include('layouts.navbar')

    <div class="flex pt-16">
        @include('layouts.sidebar')

        <!-- Main Content -->
        <div class="flex-1 p-4 lg:p-8 lg:ml-64">
            <div class="max-w-7xl mx-auto">
                <!-- Profile Header -->
                <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                    <h1 class="text-2xl font-bold text-blue-800 mb-4">Profil Desa</h1>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <img src="https://via.placeholder.com/600x400" alt="Foto Desa" class="w-full h-64 object-cover rounded-lg">
                        </div>
                        <div>
                            <h2 class="text-xl font-semibold text-blue-700 mb-3">Desa [Nama Desa]</h2>
                            <p class="text-gray-600 mb-4">
                                Selamat datang di Desa [Nama Desa]. Desa kami terletak di [lokasi] dan memiliki keunikan serta potensi yang luar biasa.
                            </p>
                            <div class="space-y-2">
                                <div class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                    <span>Kecamatan [Nama], Kabupaten [Nama]</span>
                                </div>
                                <div class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                    </svg>
                                    <span>Jumlah Penduduk: [Jumlah] Jiwa</span>
                                </div>
                                <div class="flex items-center text-gray-600">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                    </svg>
                                    <span>Luas Wilayah: [Luas] km²</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Visi Misi -->
                <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                    <h2 class="text-xl font-semibold text-blue-700 mb-4">Visi & Misi</h2>
                    <div class="space-y-4">
                        <div>
                            <h3 class="font-medium text-blue-600 mb-2">Visi</h3>
                            <p class="text-gray-600">
                                "[Tuliskan visi desa di sini]"
                            </p>
                        </div>
                        <div>
                            <h3 class="font-medium text-blue-600 mb-2">Misi</h3>
                            <ul class="list-disc list-inside text-gray-600 space-y-1">
                                <li>Misi 1</li>
                                <li>Misi 2</li>
                                <li>Misi 3</li>
                                <li>Misi 4</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Potensi Desa -->
                <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                    <h2 class="text-xl font-semibold text-blue-700 mb-4">Potensi Desa</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="p-4 border border-blue-100 rounded-lg">
                            <h3 class="font-medium text-blue-600 mb-2">Pertanian</h3>
                            <p class="text-gray-600">Deskripsi potensi pertanian desa</p>
                        </div>
                        <div class="p-4 border border-blue-100 rounded-lg">
                            <h3 class="font-medium text-blue-600 mb-2">Pariwisata</h3>
                            <p class="text-gray-600">Deskripsi potensi pariwisata desa</p>
                        </div>
                        <div class="p-4 border border-blue-100 rounded-lg">
                            <h3 class="font-medium text-blue-600 mb-2">UMKM</h3>
                            <p class="text-gray-600">Deskripsi potensi UMKM desa</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Sidebar toggle script from layout
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

        window.addEventListener('resize', () => {
            if (window.innerWidth >= 1024) {
                closeSidebar();
                document.body.classList.remove('overflow-hidden');
            }
        });
    </script>
</body>
</html>
