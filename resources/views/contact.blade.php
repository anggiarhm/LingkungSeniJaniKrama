<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
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

    <!-- Contact Section -->
    <section class="py-16 bg-gray-200">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold text-black mb-8">Hubungi Kami</h2>
            <p class="text-gray-700 text-lg mb-12">
                Kami senang mendengar dari Anda! Jika Anda memiliki pertanyaan atau ingin berbicara lebih lanjut, silakan hubungi kami menggunakan formulir di bawah ini.
            </p>

            <div class="flex justify-center">
                <div class="w-full max-w-2xl bg-white p-8 shadow-lg rounded-lg">
                    <form action="https://api.web3forms.com/submit" method="POST">
                        <div class="grid grid-cols-1 gap-6 mb-6">
                        <input type="hidden" name="access_key" value="7d443451-b9bc-4480-87dd-1cba18181c1f">
                            <!-- Name Input -->
                            <div>
                                <label for="name" class="block text-gray-700 font-semibold mb-2">Nama Lengkap</label>
                                <input type="text" id="name" name="name" class="w-full p-3 border border-gray-300 rounded-md" placeholder="Masukkan Nama Anda" required>
                            </div>

                            <!-- Email Input -->
                            <div>
                                <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                                <input type="email" id="email" name="email" class="w-full p-3 border border-gray-300 rounded-md" placeholder="Masukkan Email Anda" required>
                            </div>

                            <!-- Message Textarea -->
                            <div>
                                <label for="message" class="block text-gray-700 font-semibold mb-2">Pesan</label>
                                <textarea id="message" name="message" rows="4" class="w-full p-3 border border-gray-300 rounded-md" placeholder="Tulis pesan Anda di sini" required></textarea>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="mt-6">
                            <button type="submit" class="w-full bg-black text-white py-3 rounded-md hover:bg-gray-500 transition duration-300">Kirim Pesan</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="mt-16">
                <h3 class="text-3xl font-semibold text-black mb-6">Alamat Kami</h3>
                <p class="text-gray-700 text-lg mb-4">
                    JaniKrama Art Studio, Jl. Seni No.123, Jakarta, Indonesia
                </p>

                <h3 class="text-3xl font-semibold text-black mb-6">Telepon</h3>
                <p class="text-gray-700 text-lg mb-4">
                    +62 123 456 789
                </p>

                <h3 class="text-3xl font-semibold text-black mb-6">Email</h3>
                <p class="text-gray-700 text-lg mb-4">
                    info@janikrama.com
                </p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('footer')

</body>
</html>
