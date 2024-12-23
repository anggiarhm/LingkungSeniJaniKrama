<!-- resources/views/galeri.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Galeri-Sanggar Seni Janikrama') }}
        </h2>
    </x-slot>

    <!-- Galeri Section -->
    <section class="py-16 bg-gray-200">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold text-black mb-4">Galeri Kami</h2>
            <p class="text-gray-700 text-lg mb-8">
                Berikut adalah koleksi foto dan video dari berbagai kegiatan yang telah kami lakukan di Lingkung Seni Janikrama. Nikmati dokumentasi seni dan budaya kami!
            </p>

            <!-- Foto Section -->
            <h3 class="text-xl font-semibold text-left text-black mb-4 ml-8">Foto Kegiatan</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <!-- Foto 1 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="{{ asset('img/foto1.jpg') }}" alt="Foto 1" class="w-full h-64 object-cover">
                </div>
                <!-- Foto 2 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="{{ asset('img/foto2.jpg') }}" alt="Foto 2" class="w-full h-64 object-cover">
                </div>
                <!-- Foto 3 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="{{ asset('img/foto3.jpg') }}" alt="Foto 3" class="w-full h-64 object-cover">
                </div>
                <!-- Foto 4 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="{{ asset('img/foto4.jpg') }}" alt="Foto 4" class="w-full h-64 object-cover">
                </div>
                <!-- Foto 5 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="{{ asset('img/foto5.jpg') }}" alt="Foto 5" class="w-full h-64 object-cover">
                </div>
                <!-- Foto 6 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="{{ asset('img/foto6.jpg') }}" alt="Foto 6" class="w-full h-64 object-cover">
                </div>
            </div>

            <!-- Video Section -->
            <h3 class="text-xl font-semibold text-left text-black mb-4 ml-8">Video Kegiatan</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Video 1 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/video_id_1" title="Video 1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <!-- Video 2 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/video_id_2" title="Video 2" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <!-- Video 3 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/video_id_3" title="Video 3" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <!-- Video 4 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/video_id_4" title="Video 4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <!-- Video 5 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/video_id_5" title="Video 5" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <!-- Video 6 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/video_id_6" title="Video 6" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('footer')
</x-app-layout>
