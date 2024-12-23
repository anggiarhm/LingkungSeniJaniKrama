<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
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
    @include('navbar');

     <!-- Section About -->
     <section class="py-16 bg-gray-200">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-black">Tentang Lingkung Seni Jani Krama</h2>
                <p class="text-lg text-gray-700 mt-4">Kami adalah sebuah komunitas seni yang berfokus pada pelestarian budaya dan pengembangan seni tradisional. Di Lingkung Seni Jani Krama, kami mengajak masyarakat untuk lebih dekat dengan seni tradisional dan mengenal lebih dalam tentang warisan budaya lokal.</p>
            </div>

            <div class="flex flex-wrap justify-center gap-12">
                <!-- Sejarah -->
                <div class="max-w-xs bg-white shadow-lg rounded-lg p-6 text-center">
                    <img src="{{ asset('img/sejarah.jpg') }}" alt="Sejarah" class="w-full h-48 object-cover rounded-md">
                    <h3 class="text-2xl font-semibold mt-4 text-black">Sejarah Kami</h3>
                    <p class="text-gray-600 mt-2">Lingkung Seni Jani Krama didirikan dengan tujuan untuk melestarikan seni tradisional dan mengedukasi generasi muda tentang pentingnya budaya lokal.</p>
                </div>

                <!-- Visi dan Misi -->
                <div class="max-w-xs bg-white shadow-lg rounded-lg p-6 text-center">
                    <img src="{{ asset('img/visi-misi.jpg') }}" alt="Visi Misi" class="w-full h-48 object-cover rounded-md">
                    <h3 class="text-2xl font-semibold mt-4 text-black">Visi dan Misi</h3>
                    <p class="text-gray-600 mt-2">Visi kami adalah menciptakan lingkungan yang mendukung pengembangan seni budaya. Misi kami adalah untuk menyediakan wadah bagi pelaku seni dan masyarakat dalam berkarya bersama.</p>
                </div>

                <!-- Program dan Kegiatan -->
                <div class="max-w-xs bg-white shadow-lg rounded-lg p-6 text-center">
                    <img src="{{ asset('img/program.jpg') }}" alt="Program dan Kegiatan" class="w-full h-48 object-cover rounded-md">
                    <h3 class="text-2xl font-semibold mt-4 text-black">Program dan Kegiatan</h3>
                    <p class="text-gray-600 mt-2">Kami menyelenggarakan berbagai program, mulai dari pelatihan seni, pameran, hingga pertunjukan yang melibatkan masyarakat secara langsung.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    @include('footer')

</body>
</html>
