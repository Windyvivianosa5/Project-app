@component('layout')
@include('navbar')

<!-- Breadcrumb -->
<section class="max-w-6xl mx-auto px-4 mb-6 pt-6">
  <div class="mb-2">
    <ul class="flex flex-wrap items-center gap-2 text-sm text-gray-600">
      <li><a href="#" class="hover:underline">Indonesia</a></li>
      <li>/</li>
      <li><a href="#" class="hover:underline">Hal yang dapat dilakukan</a></li>
      <li>/</li>
      <li><a href="#" class="hover:underline">Wisata</a></li>
    </ul>
  </div>
  <hr class="my-3">
  <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-3">
    <ul class="flex flex-wrap gap-2 text-sm text-gray-600">
      <li><a href="#" class="hover:underline">Indonesia</a></li>
      <li>/</li>
      <li><a href="#" class="hover:underline">Riau</a></li>
      <li>/</li>
      <li><a href="#" class="hover:underline">Istana Siak Sri Indrapura</a></li>
    </ul>
    <p class="text-sm md:text-base font-medium">Wisata dan Liburan ke Riau</p>
  </div>
</section>

<!-- Hero -->
<section class="max-w-6xl mx-auto px-4">
  <img src="assets/img/istana.jpg" alt="Istana Siak" class="w-full h-80 md:h-[28rem] rounded-xl object-cover shadow">
</section>

<!-- Tombol Simpan -->
<div class="max-w-6xl mx-auto flex justify-center py-6">
  <button class="flex items-center gap-2 border border-gray-700 rounded-full px-5 py-2 text-sm md:text-base hover:bg-gray-100 transition">
    <i class="ph ph-heart text-lg"></i> Simpan
  </button>
</div>

<!-- Jelajahi Riau -->
<section class="max-w-6xl mx-auto px-4">
  <h1 class="text-2xl sm:text-3xl md:text-6xl font-bold mb-2">Jelajahi Riau</h1>
  <p class="text-sm md:text-base text-gray-700 mb-5">
    Yang wajib di Riau <br>Pilih kategori untuk menyaring rekomendasi Anda
  </p>
  <ul class="flex flex-wrap gap-3 mb-6 text-sm">
    <li class="border border-gray-600 rounded-full px-4 py-2 hover:bg-gray-200 cursor-pointer">Wajib</li>
    <li class="border border-gray-600 rounded-full px-4 py-2 hover:bg-gray-200 cursor-pointer">Keluarga</li>
    <li class="border border-gray-600 rounded-full px-4 py-2 hover:bg-gray-200 cursor-pointer">Belum Populer</li>
    <li class="border border-gray-600 rounded-full px-4 py-2 hover:bg-gray-200 cursor-pointer">Museum</li>
  </ul>
</section>

<!-- Hal yang dapat dilakukan -->
<section class="max-w-6xl mx-auto px-4">
  <h4 class="font-bold text-lg mb-4">Hal yang dapat dilakukan</h4>
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
    @foreach ($todoPosts as $todoPost)
    <div class="flex flex-col p-5 shadow-md rounded-xl bg-white hover:shadow-lg transition space-y-3">
      <p class="font-semibold text-gray-800">{{$todoPost->title}}</p>
      <img src="{{ asset('storage/' . $todoPost->image) }}" alt="{{$todoPost->title}}" class="w-full h-48 object-cover rounded-md">
      <p class="text-sm text-gray-600">{{$todoPost->description}}</p>
    </div>
    @endforeach
  </div>
</section>

<!-- Koleksi -->
<section class="max-w-6xl mx-auto px-4 mt-10">
  <h4 class="font-bold text-lg mb-4">Telusuri Koleksi</h4>
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
    @foreach ($koleksiPosts as $koleksiPost)
    <div class="flex flex-col p-5 shadow-md rounded-xl bg-white hover:shadow-lg transition space-y-3">
      <p class="font-semibold text-gray-800">{{$koleksiPost->title}}</p>
      <img src="{{ asset('storage/' . $koleksiPost->image) }}" alt="{{$koleksiPost->title}}" class="w-full h-60 object-cover rounded-md">
      <p class="text-sm text-gray-600">{{$koleksiPost->description}}</p>
    </div>
    @endforeach
  </div>
</section>

<!-- Cerita terkait -->
<div class="max-w-xl mx-auto flex justify-center my-10">
  <p class="border border-gray-700 rounded-full px-6 py-2 text-sm hover:bg-gray-100 cursor-pointer">Cerita terkait</p>
</div>

<!-- Sejarah -->
<section class="max-w-6xl mx-auto px-4">
  <div class="grid md:grid-cols-2 gap-8 items-center">
    <div class="bg-gray-100 rounded-xl p-6 shadow">
      <p class="text-sm md:text-base text-gray-700 leading-relaxed">
        Kerajaan Siak Sri Indrapura adalah Kesultanan Melayu Islam yang berdiri di Riau pada tahun 1723
        oleh Raja Kecil (Sultan Abdul Jalil Rahmat Syah), setelah perebutan tahta Kesultanan Johor.
      </p>
    </div>
    <img src="assets/img/siak.jpeg" alt="Siak" class="w-full h-72 object-cover rounded-xl shadow">
  </div>
</section>

<!-- Wisata terbaik -->
<section class="max-w-6xl mx-auto px-4 my-12">
  <h4 class="font-bold text-lg mb-4">Wisata terbaik untuk dikunjungi di Riau</h4>
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
    @foreach ($wisatas as $wisata)
    <div class="flex flex-col items-center p-5 shadow-md rounded-xl bg-white hover:shadow-lg transition space-y-3">
      <p class="font-semibold text-gray-800">{{$wisata->title}}</p>
      <img src="{{ asset('storage/' . $wisata->image) }}" alt="{{$wisata->title}}" class="w-full h-60 object-cover rounded-md">
    </div>
    @endforeach
  </div>
</section>

@include('footer')
@endcomponent
