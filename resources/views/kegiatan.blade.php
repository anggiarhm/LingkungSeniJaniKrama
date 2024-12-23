<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kegiatan-Sanggar Seni Janikrama') }}
        </h2>
    </x-slot>

    <!-- Kegiatan Section -->
    <section class="py-16 bg-gray-200">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold text-black mb-4">Dokumentasi Kegiatan Kami</h2>
            <p class="text-gray-700 text-lg mb-8">
                Lingkung Seni Janikrama telah menyelenggarakan berbagai kegiatan seni budaya yang bertujuan untuk melestarikan dan mengembangkan seni tradisional Indonesia. Berikut adalah beberapa dokumentasi dari kegiatan yang telah kami laksanakan.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Kegiatan 1 -->
                <div class="bg-white p-6 shadow-lg rounded-lg">
                    <h3 class="text-2xl font-semibold text-black mb-4">Festival Tari Tradisional</h3>
                    <p class="text-gray-600 mb-4">
                        Setiap tahun, kami mengadakan festival tari tradisional yang diikuti oleh berbagai komunitas seni. Acara ini bertujuan untuk memperkenalkan dan melestarikan tari-tari tradisional Indonesia.
                    </p>
                    <img src="{{ asset('img/festival_tari.jpg') }}" alt="Festival Tari Tradisional" class="w-full h-64 object-cover rounded-lg mb-4">
                    <p class="text-gray-600">
                        Dokumentasi acara Festival Tari Tradisional kami, yang melibatkan berbagai kelompok tari dari seluruh Indonesia.
                    </p>
                </div>
                <!-- Kegiatan 2 -->
                <div class="bg-white p-6 shadow-lg rounded-lg">
                    <h3 class="text-2xl font-semibold text-black mb-4">Workshop Musik Tradisional</h3>
                    <p class="text-gray-600 mb-4">
                        Kami menyelenggarakan workshop musik tradisional yang mengajarkan cara memainkan alat musik seperti gamelan, angklung, dan lainnya. Semua orang dari berbagai usia dapat bergabung!
                    </p>
                    <img src="{{ asset('img/workshop_musik.jpg') }}" alt="Workshop Musik Tradisional" class="w-full h-64 object-cover rounded-lg mb-4">
                    <p class="text-gray-600">
                        Dokumentasi kegiatan workshop musik tradisional yang berlangsung selama 3 hari, dengan peserta dari berbagai daerah.
                    </p>
                </div>
                <!-- Kegiatan 3 -->
                <div class="bg-white p-6 shadow-lg rounded-lg">
                    <h3 class="text-2xl font-semibold text-black mb-4">Pameran Seni Rupa</h3>
                    <p class="text-gray-600 mb-4">
                        Kami rutin mengadakan pameran seni rupa yang menampilkan karya seni tradisional dan kontemporer. Pameran ini menjadi wadah bagi seniman muda untuk berkarya.
                    </p>
                    <img src="{{ asset('img/pameran_seni.jpg') }}" alt="Pameran Seni Rupa" class="w-full h-64 object-cover rounded-lg mb-4">
                    <p class="text-gray-600">
                        Dokumentasi dari pameran seni rupa yang menampilkan berbagai karya seni kontemporer dan tradisional.
                    </p>
                </div>

                <!-- Kegiatan 4 -->
                <div class="bg-white p-6 shadow-lg rounded-lg">
                    <h3 class="text-2xl font-semibold text-black mb-4">Lomba Tari Remaja</h3>
                    <p class="text-gray-600 mb-4">
                        Lomba Tari Remaja adalah acara tahunan yang kami adakan untuk mempromosikan seni tari kepada generasi muda. Acara ini bertujuan untuk mencari talenta baru dalam dunia tari tradisional.
                    </p>
                    <img src="{{ asset('img/lomba_tari.jpg') }}" alt="Lomba Tari Remaja" class="w-full h-64 object-cover rounded-lg mb-4">
                    <p class="text-gray-600">
                        Dokumentasi lomba tari remaja yang melibatkan peserta dari berbagai daerah, yang memeriahkan acara dengan penampilan tari-tari kreatif.
                    </p>
                </div>

                <!-- Kegiatan 5 -->
                <div class="bg-white p-6 shadow-lg rounded-lg">
                    <h3 class="text-2xl font-semibold text-black mb-4">Pelatihan Alat Musik Tradisional</h3>
                    <p class="text-gray-600 mb-4">
                        Kami juga menyelenggarakan pelatihan intensif untuk mengajarkan cara memainkan alat musik tradisional Indonesia, seperti gamelan dan angklung. Pelatihan ini terbuka untuk berbagai kalangan.
                    </p>
                    <img src="{{ asset('img/pelatihan_alat_musik.jpg') }}" alt="Pelatihan Alat Musik Tradisional" class="w-full h-64 object-cover rounded-lg mb-4">
                    <p class="text-gray-600">
                        Dokumentasi kegiatan pelatihan alat musik tradisional yang diikuti oleh peserta dari berbagai kalangan usia.
                    </p>
                </div>

                <!-- Kegiatan 6 -->
                <div class="bg-white p-6 shadow-lg rounded-lg">
                    <h3 class="text-2xl font-semibold text-black mb-4">Pentas Seni Budaya</h3>
                    <p class="text-gray-600 mb-4">
                        Pentas seni budaya kami adalah sebuah acara besar yang menampilkan berbagai macam seni tradisional dari seluruh Indonesia, yang diikuti oleh peserta lokal maupun internasional.
                    </p>
                    <img src="{{ asset('img/pentas_seni.jpg') }}" alt="Pentas Seni Budaya" class="w-full h-64 object-cover rounded-lg mb-4">
                    <p class="text-gray-600">
                        Dokumentasi pentas seni budaya yang menampilkan seni tari, musik, dan seni rupa dari berbagai daerah di Indonesia.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('footer')
</x-app-layout>
