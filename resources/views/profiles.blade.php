<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profil-Sanggar Seni Janikrama') }}
        </h2>
    </x-slot>


    <!-- Profile Pendiri Section -->
    <section class="py-16 bg-gray-200">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold text-black mb-4">Profil Pendiri</h2>
            <p class="text-gray-700 text-lg mb-8">
                Berikut adalah profil dari pendiri Lingkung Seni Janikrama yang telah berkontribusi besar dalam pelestarian seni dan budaya tradisional Indonesia.
            </p>
            <div class="flex justify-center">
                <!-- Card Profil Pendiri -->
                <div class="w-full max-w-lg bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="{{ asset('img/pendiri.jpg') }}" alt="Pendiri" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold text-black">Nama Pendiri</h3>
                        <p class="text-gray-600 mt-4">
                            Nama Pendiri adalah seorang praktisi seni dan budaya yang memiliki dedikasi luar biasa dalam melestarikan seni tradisional Indonesia. Beliau telah mengabdi di dunia seni sejak usia muda dan memiliki visi untuk mengembangkan seni tradisional di berbagai kalangan masyarakat.
                        </p>
                        <p class="text-gray-600 mt-4">
                            Dengan pengalaman dan pengetahuan mendalam dalam seni tari, musik, dan seni rupa, Pendiri kami berkomitmen untuk melahirkan generasi penerus yang mencintai dan melestarikan seni budaya Indonesia.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Visi dan Misi Section -->
    <section class="py-16 bg-gray-200">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold text-black mb-4">Visi dan Misi</h2>
            <p class="text-gray-700 text-lg mb-8">
                Visi dan misi Lingkung Seni Janikrama adalah untuk memperkenalkan dan melestarikan seni budaya tradisional Indonesia kepada masyarakat luas, serta memberikan wadah untuk mengembangkan bakat seni generasi muda.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white p-6 shadow-lg rounded-lg">
                    <h3 class="text-xl font-semibold text-black mb-4">Visi</h3>
                    <p class="text-gray-600">
                        Menjadi pusat seni dan budaya tradisional yang terkemuka di Indonesia, serta menjadi pelopor dalam pengembangan dan pelestarian seni budaya tradisional.
                    </p>
                </div>
                <div class="bg-white p-6 shadow-lg rounded-lg">
                    <h3 class="text-xl font-semibold text-black mb-4">Misi</h3>
                    <ul class="list-disc list-inside text-gray-600">
                        <li>Melaksanakan berbagai kegiatan seni dan budaya untuk masyarakat.</li>
                        <li>Menyelenggarakan pelatihan seni untuk anak-anak dan remaja.</li>
                        <li>Melestarikan seni tradisional Indonesia dengan cara yang kreatif.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('footer')
</x-app-layout>
