<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modern Navbar</title>
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
<body>
    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-10">
    <div class="container mx-auto px-6">
        <!-- Footer Content -->
        <div class="flex flex-col md:flex-row justify-between items-center space-y-6 md:space-y-0">
            <!-- Logo and Description -->
            <div class="flex flex-col items-center md:items-start">
                <img src="{{ asset('img/LOGO.png') }}" alt="Logo" class="h-12 mb-4">
                <p class="text-center md:text-left text-white">
                    Sanggar Seni Janikrama adalah wadah kreativitas untuk melestarikan seni dan budaya lokal. 
                    Kami berkomitmen untuk terus menginspirasi generasi muda.
                </p>
            </div>

            <!-- Quick Links -->
            <div class="flex flex-col text-center md:text-left">
                <h4 class="text-lg font-semibold mb-4 text-white">Tautan Cepat</h4>
                <ul class="space-y-2">
                    <li><a href="{{ url('/') }}" class="hover:text-black">Home</a></li>
                    <li><a href="{{ url('/about') }}" class="hover:text-black">About</a></li>
                    <li><a href="{{ url('/contact') }}" class="hover:text-black">Contact</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="flex flex-col text-center md:text-left">
                <h4 class="text-lg font-semibold mb-4 text-white">Hubungi Kami</h4>
                <ul class="space-y-2">
                    <li><span class="text-white">Alamat: Jl. Raya Seni No. 45, Kota Budaya</span></li>
                    <li><span class="text-white">Telepon: (021) 1234-5678</span></li>
                    <li><span class="text-white">Email: info@janikrama.com</span></li>
                </ul>
            </div>
        </div>

        <!-- Social Media Links -->
        <div class="flex justify-center mt-8 space-x-6">
            <a href="#" class="hover:text-black"><i class="fab fa-facebook fa-lg"></i> Facebook</a>
            <a href="#" class="hover:text-black"><i class="fab fa-twitter fa-lg"></i> Twitter</a>
            <a href="#" class="hover:text-black"><i class="fab fa-instagram fa-lg"></i> Instagram</a>
            <a href="#" class="hover:text-black"><i class="fab fa-youtube fa-lg"></i> YouTube</a>
        </div>

        <!-- Footer Bottom -->
        <div class="text-center text-white mt-6">
            &copy; 2024 Sanggar Seni Janikrama. All rights reserved.
        </div>
    </div>
</footer>

</body>
</html>
