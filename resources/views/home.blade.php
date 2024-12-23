<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JaniKrama</title>
    <!-- Tambahkan link Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Tambahkan link CSS framework (Tailwind CSS) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Figtree', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-200">

    <!-- Navbar -->
    @include('navbar')

    <!-- Selamat Datang Section -->
    <section class="py-16 bg-gray-200">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold text-black mb-4">Selamat datang di Sanggar Seni Janikrama</h1> <!-- Ganti text-yellow-500 dengan text-black -->
            <p class="text-gray-700 text-lg mb-8">
                Sanggar Seni Janikrama adalah tempat di mana seni dan kreativitas bersatu. 
                Kami menyediakan berbagai kelas seni, mulai dari tari tradisional hingga seni rupa modern. 
                Bergabunglah bersama kami untuk mengeksplorasi keindahan seni dan budaya.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div class="relative shadow-lg rounded-lg overflow-hidden">
                    <img src="{{ asset('img/art1.jpg') }}" alt="Karya Seni 1" class="w-full h-64 object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                        <span class="text-white text-lg font-semibold">Karya Seni Tari Tradisional</span>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="relative shadow-lg rounded-lg overflow-hidden">
                    <img src="{{ asset('img/art2.jpg') }}" alt="Karya Seni 2" class="w-full h-64 object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                        <span class="text-white text-lg font-semibold">Pameran Seni Rupa</span>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="relative shadow-lg rounded-lg overflow-hidden">
                    <img src="{{ asset('img/art3.jpg') }}" alt="Karya Seni 3" class="w-full h-64 object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                        <span class="text-white text-lg font-semibold">Pelatihan Musik Tradisional</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Prestasi Kami Section -->
    <section class="py-16 bg-gray-200">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold text-black mb-4">Prestasi Kami</h2> <!-- Ganti text-yellow-500 dengan text-black -->
            <p class="text-gray-700 text-lg mb-8">
                Berikut adalah beberapa pencapaian luar biasa yang telah diraih oleh Sanggar Seni Janikrama 
                dalam bidang seni dan budaya, baik di tingkat nasional maupun internasional.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <!-- Card 1 -->
                <div class="shadow-lg rounded-lg overflow-hidden bg-white">
                    <img src="{{ asset('img/prestasi1.jpg') }}" alt="Prestasi 1" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold text-yellow-500">Juara Tari Tradisional</h3>
                        <p class="text-gray-600 mt-2">
                            Meraih juara pertama dalam kompetisi tari tradisional tingkat nasional.
                        </p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="shadow-lg rounded-lg overflow-hidden bg-white">
                    <img src="{{ asset('img/prestasi2.jpg') }}" alt="Prestasi 2" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold text-yellow-500">Pameran Seni Internasional</h3>
                        <p class="text-gray-600 mt-2">
                            Berpartisipasi dalam pameran seni rupa internasional di Jepang.
                        </p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="shadow-lg rounded-lg overflow-hidden bg-white">
                    <img src="{{ asset('img/prestasi3.jpg') }}" alt="Prestasi 3" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold text-yellow-500">Pelatihan Budaya Lokal</h3>
                        <p class="text-gray-600 mt-2">
                            Mengadakan pelatihan seni budaya lokal untuk generasi muda.
                        </p>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="shadow-lg rounded-lg overflow-hidden bg-white">
                    <img src="{{ asset('img/prestasi4.jpg') }}" alt="Prestasi 4" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold text-yellow-500">Penghargaan Musik Tradisional</h3>
                        <p class="text-gray-600 mt-2">
                            Diberikan penghargaan atas dedikasi dalam melestarikan musik tradisional.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('footer')

</body>
</html>
