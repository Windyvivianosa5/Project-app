@component('layout')
    @include('navbar')
   <main class="max-w-5xl mx-auto py-8">
        <!-- Tourism Section -->
        <section class="mb-12">
            <h2 class="text-2xl text-center text-gray-800">Wisata dan Liburan ke Riau</h2>

            <!-- Bridge Image -->
            <div class="mb-10">
                <div class="bg-white overflow-hidden shadow-lg">
                    <img src="assets/img/poto1.webp" alt="Jembatan Siak Sri Indrapura" class="w-full h-150 object-cover">
                </div>
            </div>
        </section>
<section class="bg-gray-100">
      <div class="max-w-5xl mx-auto flex flex-col lg:flex-row items-center lg:space-x-12">
        <div class="w-full ">
          <h2 class="text-3xl font-bold text-gray-800 mb-4">CARI TAHU KAMI</h2>
          <p class="text-gray-600 leading-relaxed">
            Pulau Semut, sebuah destinasi wisata baru di Pekanbaru, kini resmi diperkenalkan sebagai tujuan wisata unggulan. Berlokasi di Jalan Limbungan, Kelurahan Limbungan, Rumbai Timur, kawasan ini menawarkan keindahan alam yang berpadu dengan nuansa khas Melayu. Pulau ini memiliki daya tarik utama berupa pemandangan sungai yang memukau dan kehidupan masyarakat lokal yang masih asri. Tidak hanya itu, buah-buahan segar seperti rambutan yang tumbuh subur di kawasan ini memberikan pengalaman berbeda bagi pengunjung.
          </p>
        </div>
        <div class="w-full lg:w-2/5 mt-8 lg:mt-0">
          <img src="img/g5.png" alt="Jembatan kayu di Pulau Semut" class="w-400 h-80 rounded-lg shadow-lg" />
        </div>
      </div>
    </section>


    </main>

    @include('footer')
@endcomponent
