@component('layout')
    @include('navbar')
   <main class="max-w-6xl mx-auto py-12 px-4">
        <!-- Tourism Hero Section -->
        <section class="mb-16">
            <div class="text-center mb-8">
                <h2 class="text-3xl md:text-3xl font-bold text-gray-800 mb-3">
                    Wisata dan Liburan ke Riau
                </h2>
                <p class="text-gray-600 max-w-2xl mx-auto mb-4">
                    Jelajahi keindahan alam, kekayaan budaya, dan warisan sejarah Provinsi Riau yang memukau
                </p>
                <div class="w-20 h-0.5 bg-gray-300 mx-auto"></div>
            </div>

            <!-- Bridge Image -->
            <div class="mb-16 group relative overflow-hidden rounded-lg shadow-lg">
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent z-10"></div>
                <img src="assets/img/hero3.jpg" alt="Jembatan Siak Sri Indrapura" class="w-full h-[450px] object-cover transition-transform duration-500 group-hover:scale-105">
                <div class="absolute bottom-6 left-6 z-20 text-white">
                    <h3 class="text-2xl font-semibold mb-1">Jembatan Siak Sri Indrapura</h3>
                    <p class="text-sm opacity-90">Ikon Kebanggaan Riau</p>
                </div>
            </div>
        </section>

        <!-- Sejarah Section -->
        <section class="py-16 bg-gray-50 px-4 mb-16 rounded-lg">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-12">
                    <span class="inline-block bg-gray-100 text-gray-700 px-4 py-1.5 rounded-full text-sm font-medium mb-4">
                        🏛️ Warisan Sejarah
                    </span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-3">
                        Kerajaan Siak Sri Indrapura
                    </h2>
                    <div class="w-20 h-0.5 bg-gray-300 mx-auto"></div>
                </div>

                <div class="flex flex-col lg:flex-row items-center gap-12">
                    <!-- Image Column -->
                    <div class="w-full lg:w-1/2">
                        <div class="relative group">
                            <div class="bg-white p-3 rounded-lg shadow-md">
                                <img src="assets/img/siak.jpeg" alt="Istana Siak Sri Indrapura" class="w-full h-[400px] object-cover rounded-lg transition-transform duration-300 group-hover:scale-[1.02]" />
                            </div>

                            <!-- Stats Badge -->
                            <div class="absolute -bottom-4 -right-4 bg-white rounded-lg shadow-md p-3 border border-gray-100">
                                <div class="text-center">
                                    <div class="text-2xl font-bold text-gray-700">1723</div>
                                    <div class="text-xs text-gray-500">Tahun Berdiri</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Column -->
                    <div class="w-full lg:w-1/2">
                        <div class="inline-flex items-center bg-white rounded-full px-5 py-2 shadow-sm border border-gray-200 mb-6">
                            <div class="w-2 h-2 bg-gray-600 rounded-full mr-3"></div>
                            <span class="text-gray-700 font-semibold text-sm">1723 - Sekarang</span>
                        </div>

                        <h3 class="text-2xl md:text-3xl font-bold text-gray-800 mb-5">
                            Kesultanan Melayu Islam
                        </h3>

                        <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-100 mb-6">
                            <p class="text-gray-600 leading-relaxed mb-4">
                                <span class="font-semibold text-gray-800">Kerajaan Siak Sri Indrapura</span> adalah Kesultanan Melayu Islam yang berdiri di Riau, Indonesia, pada tahun <span class="font-semibold text-gray-700">1723</span> oleh <span class="font-semibold text-gray-700">Raja Kecil (Sultan Abdul Jalil Rahmat Syah)</span>, setelah terlibat dalam perebutan takhta Kesultanan Johor.
                            </p>
                            <p class="text-gray-600 leading-relaxed">
                                Kesultanan ini merupakan salah satu kerajaan Islam terpenting di Riau yang memainkan peran strategis dalam perdagangan maritim dan penyebaran Islam di wilayah Sumatera bagian timur. Istana Siak yang megah hingga kini menjadi saksi bisu kejayaan masa lampau dan menjadi destinasi wisata sejarah yang populer.
                            </p>
                        </div>

                        <!-- Key Facts -->
                        <div class="grid grid-cols-2 gap-3">
                            <div class="bg-white p-4 rounded-lg border border-gray-100 hover:border-gray-200 transition-colors duration-200">
                                <div class="text-2xl mb-2">👑</div>
                                <div class="font-semibold text-gray-800 text-sm">Pendiri</div>
                                <div class="text-xs text-gray-500 mt-1">Raja Kecil</div>
                            </div>
                            <div class="bg-white p-4 rounded-lg border border-gray-100 hover:border-gray-200 transition-colors duration-200">
                                <div class="text-2xl mb-2">🕌</div>
                                <div class="font-semibold text-gray-800 text-sm">Agama</div>
                                <div class="text-xs text-gray-500 mt-1">Islam</div>
                            </div>
                            <div class="bg-white p-4 rounded-lg border border-gray-100 hover:border-gray-200 transition-colors duration-200">
                                <div class="text-2xl mb-2">🏰</div>
                                <div class="font-semibold text-gray-800 text-sm">Warisan</div>
                                <div class="text-xs text-gray-500 mt-1">Istana Megah</div>
                            </div>
                            <div class="bg-white p-4 rounded-lg border border-gray-100 hover:border-gray-200 transition-colors duration-200">
                                <div class="text-2xl mb-2">📜</div>
                                <div class="font-semibold text-gray-800 text-sm">Usia</div>
                                <div class="text-xs text-gray-500 mt-1">300+ Tahun</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Additional Info Section -->
        <section class="py-12 bg-gray-50 px-4 rounded-lg mt-16">
            <div class="max-w-4xl mx-auto text-center">
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Kenapa Mengunjungi Riau?</h3>
                <p class="text-gray-600 leading-relaxed mb-8">
                    Riau menawarkan pengalaman wisata yang lengkap, mulai dari sejarah kerajaan yang megah, keindahan alam yang memukau, hingga kekayaan budaya Melayu yang masih terjaga. Setiap sudut Riau menyimpan cerita dan keindahan yang siap memperkaya perjalanan wisata Anda.
                </p>
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                        <div class="text-3xl mb-3">🏛️</div>
                        <h4 class="font-semibold text-gray-800 mb-2">Sejarah Kaya</h4>
                        <p class="text-sm text-gray-600">Warisan Kesultanan Melayu yang berusia ratusan tahun</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                        <div class="text-3xl mb-3">🌴</div>
                        <h4 class="font-semibold text-gray-800 mb-2">Alam Indah</h4>
                        <p class="text-sm text-gray-600">Sungai, hutan, dan pemandangan tropis yang memesona</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                        <div class="text-3xl mb-3">🎭</div>
                        <h4 class="font-semibold text-gray-800 mb-2">Budaya Hidup</h4>
                        <p class="text-sm text-gray-600">Tradisi Melayu yang masih dijaga dengan baik</p>
                    </div>
                </div>
            </div>
        </section>

    </main>

    @include('footer')
@endcomponent
