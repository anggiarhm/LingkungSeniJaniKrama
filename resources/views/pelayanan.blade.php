<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pelayanan-Sanggar Seni Janikrama') }}
        </h2>
    </x-slot>

    <!-- Pelayanan Section -->
    <section class="py-16 bg-gray-200">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold text-black mb-4">Pelayanan Kami</h2>
            <p class="text-gray-700 text-lg mb-8">
                Kami menyediakan berbagai pelayanan dalam pengembangan seni dan budaya tradisional. Berikut adalah beberapa pelayanan yang kami tawarkan.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Pelayanan 1 -->
                <div class="bg-white p-6 shadow-lg rounded-lg">
                    <h3 class="text-2xl font-semibold text-black mb-4">Pelatihan Seni Tari</h3>
                    <p class="text-gray-600 mb-4">
                        Kami menawarkan pelatihan seni tari tradisional untuk semua usia. Belajar gerakan tari yang indah sambil mempelajari nilai budaya yang mendalam.
                    </p>
                    <a href="https://wa.me/yourwhatsapplink" class="text-blue-500 hover:underline">Hubungi Kami di WhatsApp</a>
                </div>
                <!-- Pelayanan 2 -->
                <div class="bg-white p-6 shadow-lg rounded-lg">
                    <h3 class="text-2xl font-semibold text-black mb-4">Pelatihan Musik Tradisional</h3>
                    <p class="text-gray-600 mb-4">
                        Kami juga menyediakan pelatihan untuk alat musik tradisional seperti gamelan, angklung, dan lainnya untuk para pecinta musik.
                    </p>
                    <a href="https://wa.me/yourwhatsapplink" class="text-blue-500 hover:underline">Hubungi Kami di WhatsApp</a>
                </div>
                <!-- Pelayanan 3 -->
                <div class="bg-white p-6 shadow-lg rounded-lg">
                    <h3 class="text-2xl font-semibold text-black mb-4">Workshop Seni Rupa</h3>
                    <p class="text-gray-600 mb-4">
                        Dapatkan keterampilan seni rupa melalui workshop yang kami selenggarakan. Belajar melukis, membuat patung, dan lebih banyak lagi.
                    </p>
                    <a href="https://wa.me/yourwhatsapplink" class="text-blue-500 hover:underline">Hubungi Kami di WhatsApp</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('footer')
</x-app-layout>
