<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Beranda - Lingkung Seni Janikrama') }}
        </h2>
    </x-slot>

    <!-- Hero Section -->
    <section class="py-16 bg-black">
        <div class="container mx-auto text-center text-white">
            <img src="{{ asset('img/LOGO.png') }}" alt="Lingkung Seni Janikrama" class="h-24 mx-auto mb-6">
            <h1 class="text-4xl font-bold mb-4">Selamat datang di Lingkung Seni Janikrama</h1>
            <p class="text-lg mb-8">
                Lingkung Seni Janikrama adalah tempat yang didedikasikan untuk melestarikan dan mengembangkan seni serta budaya tradisional. Kami menyediakan berbagai kegiatan dan pelatihan yang mencakup tari, musik, dan seni rupa. Bergabunglah dengan kami untuk mengeksplorasi keindahan seni dan budaya yang kaya.
            </p>
        </div>
    </section>

    <!-- Prestasi Kami Section -->
    <section class="py-16 bg-gray-200">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold text-black mb-4">Kegiatan Kami</h2>
            <p class="text-gray-700 text-lg mb-8">
                Berikut adalah beberapa pencapaian luar biasa yang telah diraih oleh Sanggar Seni Janikrama 
                dalam bidang seni dan budaya, baik di tingkat nasional maupun internasional.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <!-- Card 1 -->
                <div class="shadow-lg rounded-lg overflow-hidden bg-white">
                    <img src="{{ asset('img/prestasi1.jpg') }}" alt="Prestasi 1" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold text-black">Juara Tari Tradisional</h3>
                        <p class="text-gray-600 mt-2">
                            Meraih juara pertama dalam kompetisi tari tradisional tingkat nasional.
                        </p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="shadow-lg rounded-lg overflow-hidden bg-white">
                    <img src="{{ asset('img/prestasi2.jpg') }}" alt="Prestasi 2" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold text-black">Pameran Seni Internasional</h3>
                        <p class="text-gray-600 mt-2">
                            Berpartisipasi dalam pameran seni rupa internasional di Jepang.
                        </p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="shadow-lg rounded-lg overflow-hidden bg-white">
                    <img src="{{ asset('img/prestasi3.jpg') }}" alt="Prestasi 3" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold text-black">Pelatihan Budaya Lokal</h3>
                        <p class="text-gray-600 mt-2">
                            Mengadakan pelatihan seni budaya lokal untuk generasi muda.
                        </p>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="shadow-lg rounded-lg overflow-hidden bg-white">
                    <img src="{{ asset('img/prestasi4.jpg') }}" alt="Prestasi 4" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold text-black">Penghargaan Musik Tradisional</h3>
                        <p class="text-gray-600 mt-2">
                            Diberikan penghargaan atas dedikasi dalam melestarikan musik tradisional.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Prestasi Kami Section -->
    <section class="py-16 bg-gray-200">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold text-black mb-4">Prestasi Kami</h2>
            <p class="text-gray-700 text-lg mb-8">
                Berikut adalah beberapa pencapaian luar biasa yang telah diraih oleh Sanggar Seni Janikrama 
                dalam bidang seni dan budaya, baik di tingkat nasional maupun internasional.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <!-- Card 1 -->
                <div class="shadow-lg rounded-lg overflow-hidden bg-white">
                    <img src="{{ asset('img/prestasi1.jpg') }}" alt="Prestasi 1" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold text-black">Juara Tari Tradisional</h3>
                        <p class="text-gray-600 mt-2">
                            Meraih juara pertama dalam kompetisi tari tradisional tingkat nasional.
                        </p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="shadow-lg rounded-lg overflow-hidden bg-white">
                    <img src="{{ asset('img/prestasi2.jpg') }}" alt="Prestasi 2" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold text-black">Pameran Seni Internasional</h3>
                        <p class="text-gray-600 mt-2">
                            Berpartisipasi dalam pameran seni rupa internasional di Jepang.
                        </p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="shadow-lg rounded-lg overflow-hidden bg-white">
                    <img src="{{ asset('img/prestasi3.jpg') }}" alt="Prestasi 3" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold text-black">Pelatihan Budaya Lokal</h3>
                        <p class="text-gray-600 mt-2">
                            Mengadakan pelatihan seni budaya lokal untuk generasi muda.
                        </p>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="shadow-lg rounded-lg overflow-hidden bg-white">
                    <img src="{{ asset('img/prestasi4.jpg') }}" alt="Prestasi 4" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold text-black">Penghargaan Musik Tradisional</h3>
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

</x-app-layout>
