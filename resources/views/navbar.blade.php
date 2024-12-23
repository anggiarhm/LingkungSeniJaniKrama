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
<body class="bg-white">

    <!-- Navbar -->
    <nav class="bg-white text-black">
        <div class="container mx-auto px-6 py-4 flex items-center justify-between">
            <!-- Logo and Navigation Section -->
            <div class="flex items-center space-x-10">
                <!-- Logo Section -->
                <div class="flex items-center space-x-10">
                    <img src="{{ asset('img/LOGO.png') }}" alt="Logo" class="h-10 w-10">
                    <span class="text-2xl font-bold tracking-wide text-black">
                        Lingkun Seni <br> Jani Krama
                    </span>
                </div>

                <!-- Navigation Links -->
                <div class="flex items-center space-x-10">
                    <a href="{{ url('/') }}" class="text-black hover:text-gray-500 transition duration-300">Home</a>
                    <a href="{{ route('about') }}" class="text-black hover:text-gray-500 transition duration-300">About</a>
                    <a href="{{ route('contact') }}" class="text-black hover:text-gray-500 transition duration-300">Contact</a>
                </div>
            </div>

            <!-- Authentication Links -->
            @if (Route::has('login'))
                <div class="flex space-x-2">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="bg-black text-white px-4 py-2 rounded-md hover:bg-gray-800 transition duration-300 focus:outline-none font-bold">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="bg-black text-white px-4 py-2 rounded-md hover:bg-gray-800 transition duration-300 focus:outline-none font-bold">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="bg-black text-white px-4 py-2 rounded-md hover:bg-gray-800 transition duration-300 focus:outline-none font-bold">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </nav>

</body>
</html>
