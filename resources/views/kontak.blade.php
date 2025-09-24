@component('layout')
    @include('navbar')
        <h1 class="flex justify-center text-2xl mb-6 mt-5">Wisata dan Liburan ke Riau</h1>
        <section class="max-w-5xl m-auto">
            <div class="relative">
                <img src="assets/img/istana.jpg" alt="">
            </div>
            <section class="mb-12 bg-white py-16">
                <div class="container mx-auto px-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                        <!-- Contact Information -->
                        <div class="space-y-8">
                            <!-- Phone -->
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0">
                                    <i class="ph ph-phone text-green-600 text-2xl"></i>
                                </div>
                                <div>
                                    <h4 class="text-sm text-gray-500 mb-1">Requesting A Call:</h4>
                                    <p class="text-lg font-semibold text-gray-900">(629) 555-0129</p>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0">
                                    <i class="ph ph-envelope text-green-600 text-2xl"></i>
                                </div>
                                <div>
                                    <h4 class="text-sm text-gray-500 mb-1">E-mail</h4>
                                    <p class="text-lg font-semibold text-gray-900">plusemut@example.com</p>
                                </div>
                            </div>

                            <!-- Location -->
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0">
                                    <i class="ph ph-map-pin text-green-600 text-2xl"></i>
                                </div>
                                <div>
                                    <h4 class="text-sm text-gray-500 mb-1">Location</h4>
                                <p class="text-lg font-semibold text-gray-900">Jl. Limbungan, Kel. Limbungan</p>
                            </div>
                        </div>

                        <!-- Hours -->
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <i class="ph ph-clock text-green-600 text-2xl"></i>
                            </div>
                            <div>
                                <h4 class="text-sm text-gray-500 mb-1">Setiap Hari</h4>
                                <p class="text-lg font-semibold text-gray-900">08.00 - 18.00 WIB</p>
                            </div>
                        </div>
                    </div>

                    <!-- Map -->
                    <div class="bg-gray-300 rounded-lg h-80 flex items-center justify-center">
                        <div class="text-center">
                            <i class="ph ph-map-trifold text-gray-500 text-6xl mb-4"></i>
                            <p class="text-gray-600">Map akan ditampilkan di sini</p>
                            <p class="text-sm text-gray-500 mt-2">Google Maps atau peta interaktif lainnya</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </section>
    @include('footer')
@endcomponent
