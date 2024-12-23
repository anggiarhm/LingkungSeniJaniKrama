<!-- resources/views/penyewaan.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Penyewaan-Sanggar Seni Janikrama') }}
        </h2>
    </x-slot>

    <!-- Penyewaan Section -->
    <section class="py-16 bg-gray-200">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold text-black mb-4">Penyewaan Kami</h2>
            <p class="text-gray-700 text-lg mb-8">
                Lingkung Seni Janikrama menyediakan berbagai layanan penyewaan untuk mendukung kegiatan seni dan budaya, termasuk penyewaan tempat dan alat musik.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Penyewaan 1: Penyewaan Ruangan -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="{{ asset('img/kostum.jpg') }}" alt="Penyewaan Kostum Tari Tradisional" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold text-black mb-4">Penyewaan Kostum Tari Tradisional</h3>
                        <p class="text-gray-600 mb-4">
                            Kami menyediakan kostum yang nyaman dan luas untuk berbagai kegiatan seni dan budaya, seperti latihan, pertunjukan, dan seminar.
                        </p>
                        <a href="#" class="text-blue-500 hover:underline">Form Penyewaan Kostum Tari Tradisional</a>
                    </div>
                </div>

                <!-- Penyewaan 2: Penyewaan Alat Musik -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="{{ asset('img/alat-musik.jpg') }}" alt="Penyewaan Kostum Pengantin" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold text-black mb-4">Penyewaan Kostum Pengantin</h3>
                        <p class="text-gray-600 mb-4">
                            Kami juga menyediakan penyewaan alat musik tradisional seperti gamelan, angklung, dan alat musik lainnya untuk mendukung acara seni Anda.
                        </p>
                        <a href="#" class="text-blue-500 hover:underline">Form Penyewaan Alat Musik</a>
                    </div>
                </div>

                <!-- Penyewaan 3: Penyewaan Panggung -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="{{ asset('img/panggung.jpg') }}" alt="Penyewaan Kostum Gamelan" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold text-black mb-4">Penyewaan Kostum Gamelan</h3>
                        <p class="text-gray-600 mb-4">
                            Untuk acara besar, kami menyediakan penyewaan panggung yang lengkap dengan perlengkapannya untuk mendukung pertunjukan seni Anda.
                        </p>
                        <a href="#" class="text-blue-500 hover:underline">Form Penyewaan Kostum Gamelan</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('footer')
</x-app-layout>
