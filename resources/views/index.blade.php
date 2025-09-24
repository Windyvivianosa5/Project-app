<?php
$todo_Post = [
  [
    'title' => 'Jembatan Tengku Agung Sultanah',
    'image' => 'Jembatan.jpg',
    'desc' => 'Jembatan ini menjadi ikon modern Kota Siak.
            Bentuknya megah dan pada malam hari dihiasi lampu warna-warni.'
  ],
  [
    'title' => 'Masjid Raya Syahabuddin',
    'image' => 'mesjid.jpg',
    'desc' => 'Masjid tertua di Siak yang masih berdiri kokoh hingga kini. Selain tempat ibadah, masjid ini juga menjadi bagian penting dari sejarah perkembangan Islam di Riau.'
  ],
  [
    'title' => 'Kursi Singgana Kerajaan',
    'image' => 'kursi.jpeg',
    'desc' => 'Kursi ini melambangkan kemegahan dan legitimasi kekuasaan Sultan Siak.'
  ],
];

$koleksi_post = [
  [
    'title' => 'Mahkota Sultan Siak',
    'image' => 'mahkota.png',
    'desc' => 'lambang kekuasaan dan kejayaan Melayu.'
  ],
  [
    'title' => 'Cermin Kristal Ratu Austria',
    'image' => 'cermin.jpg',
    'desc' => 'salah satu koleksi paling menarik di Istana Siak Sri Indrapura.'
  ],
  [
    'title' => 'Baju Rompi',
    'image' => 'rompi.jpg',
    'desc' => 'dikenal sebagai rompi kebal (anti peluru).'
  ],
];

$wisata = [
  [
    'title' => 'Mesjid Raya An-Nur, Kota Pekanbaru',
    'image' => 'poto1.webp',
  ],
  [
    'title' => 'Candi Muara Takus, Kabupaten Kampar',
    'image' => 'poto2.webp',
  ],
  [
    'title' => 'Ulu Kasok, Kabupaten Kampar Riau',
    'image' => 'kasok.jpg',
  ],
];
?>


{{-- <!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Web Istana Siak Sri Indrapura </title>
  <link href='assets/style/style.css' rel='stylesheet'>
  <link rel="stylesheet" type="text/css"
    href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/regular/style.css" />
  <link rel="stylesheet" type="text/css"
    href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/fill/style.css" />
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head> --}}

{{-- <body> --}}
    @component('layout')

    @include('navbar')
    <section class="max-w-5xl m-auto mb-3">
        <div class="mb-1">
            <ul class="flex items-center justify-between w-90">
                <li><a href="#"
                    class="no-underline text-black hover:text-[#676767] transition duration-150 ease-in-out">Indonesia</a></li>
                    <li><a href="#" class="no-underline text-black hover:text-[#676767] transition duration-150 ease-in-out">Hal
                        yang dapat dilakukan</a></li>
                        <li><a href="#"
                            class="no-underline text-black hover:text-[#676767] transition duration-150 ease-in-out">Wisata</a></li>
                        </ul>
                    </div>
                    <hr>
                    <div class="flex items-center justify-between mt-1">
                        <ul class="flex items-center justify-between w-80">
                            <li><a href=""
                                class="no-underline text-black hover:text-[#676767] transition duration-150 ease-in-out">Indonesia</a></li>
                                <li><a href="" class="no-underline text-black hover:text-[#676767] transition duration-150 ease-in-out">Riau</a>
                                </li>
                                <li><a href="" class="no-underline text-black hover:text-[#676767] transition duration-150 ease-in-out">Istana
                                    Siak Sri Indrapura </a></li>
                                </ul>
                                <p class=" flex justify-end">Wisata dan Liburan ke Riau</p>
                            </div>
                        </section>
                        <section class="max-w-5xl m-auto">
                            <div class="relative">
                                <img src="assets/img/istana.jpg" alt="">
                            </div>
                        </section>


                        <div class="max-w-5xl mx-auto flex justify-center p-5 ">
                            <button
                            class="border border-black rounded-full px-3 py-2 hover:bg-gray-200 cursor-pointer hover:scale-96 duration-150"><i
                            class="ph ph-heart "></i> Simpan
                        </button>
                    </div>

                    <section class="max-w-5xl m-auto">
                        <div class="justify-between mb-3">
                            <h1 class="text-5xl font-bold ">Jelajahi Riau</h1>
                        </div>
                        <div class="flex items-center justify-between mt-1 mb-5">
                            <h4>Yang wajib di riau <br>
                                Pilih kategori untuk menyaring rekomendasi Anda </h4>
                            </div>
                            <div>
                                <ul class="flex items-center justify-between w-200 mb-5">
                                    <li
                                    class="border border-black rounded-full px-3 py-2 hover:bg-gray-200 cursor-pointer hover:scale-96 duration-150">
                                    wajib</li>
                                    <li
          class="border border-black rounded-full px-3 py-2 hover:bg-gray-200 cursor-pointer hover:scale-96 duration-150">
          sesuai untuk keluarga</li>
          <li
          class="border border-black rounded-full px-3 py-2 hover:bg-gray-200 cursor-pointer hover:scale-96 duration-150">
          tempat yang belum populer</li>
          <li
          class="border border-black rounded-full px-3 py-2 hover:bg-gray-200 cursor-pointer hover:scale-96 duration-150">
          museum</li>
          <li
          class="border border-black rounded-full px-3 py-2 hover:bg-gray-200 cursor-pointer hover:scale-96 duration-150">
          aktivitas luar ruangan</li>
        </ul>
    </div>
</div>
</section>
<section class="max-w-5xl m-auto">
    <div>
        <h4 class="font-bold mb-1">Hal yang dapat dilakukan</h4>
        <div class="grid grid-cols-3 gap-15">

            @foreach ($todoPosts as $todoPost )

            <div class=" flex-col items-center p-5 shadow-xl/20 rounded-xl space-y-5">
                <p>{{$todoPost->title}}</p>
                <img src="assets/img/{{$todoPost->image}}" alt="" class="w-full h-50 objek-cover rounded-md">
                <p>{{$todoPost->description}}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
<section class="max-w-5xl m-auto">
    <div>
        <h4 class="font-bold mb-1 mt-5">Telusuri Koleksi</h4>
        <div class="grid grid-cols-3 gap-15">

            @foreach ($koleksiPosts as $koleksiPost)

            <div class=" flex-col items-center p-5 shadow-xl/20  rounded-xl space-y-5">
                <p>{{$koleksiPost->title}}</p>
                <img src="assets/img/{{$koleksiPost->image}}" alt="" class="w-full h-60 object-cover rounded-md">
                <p>{{$koleksiPost->description}}</p>
            </div>
            @endforeach

        </div>
    </div>

</section>

<div class="max-w-5xl mx-auto flex rounded-xl justify-center items-center h-10 w-40 mt-15">
    <p class="border border-black rounded-full px-3 py-2 hover:bg-gray-200 cursor-pointer hover:scale-96 duration-150">
        cerita terkait</p>
    </div>

    <section>
        <div class="max-w-5xl m-auto">
            <div class="relative grid-cols-2 py-8">
                <div class="absolute bg-gray-200 rounded-xl text-xl h-fit p-5 w-110 shadow-xl/20 top-50">
                    <p> Kerajaan Siak Sri Indrapura
                        adalah Kesultanan Melayu Islam yang berdiri di Riau, Indonesia, pada tahun 1723
                        oleh Raja Kecil (Sultan Abdul Jalil Rahmat Syah), setelah terlibat dalam perebutan tahta Kesultanan Johor.
                    </p>
                </div>
            </div>
            <div class="flex justify-end ">
                <img src="assets/img/siak.jpeg" alt="" class=" shadow-xl/20 rounded-xl mb-5">
            </div>
        </div>

    </section>
    <section class="max-w-5xl m-auto mb-5">
        <div>
            <h4 class="font-bold mb-3 mt-2">Wisata terbaik untuk dikunjungi di Riau </h4>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">

                @foreach ($wisatas as $wisata)

                <div class="flex flex-col items-center p-5 shadow-xl/20 rounded-xl space-y-5">
                    <p class="h-12">{{$wisata->title}}</p>
                    <img src="assets/img/{{$wisata->image}}" alt="Mesjid Raya An-Nur" class="w-full h-60 object-cover rounded-md">
                </div>
                @endforeach
            </div>
        </div>
    </section>

    @include('footer')
    @endcomponent
    {{-- </body>

    </html> --}}
