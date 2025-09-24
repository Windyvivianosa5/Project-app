    @component('layout')
    @include('navbar')
<section>
        <div class="w-full mx-auto mt-10">
            <div class="max-w-5xl m-auto justify-center">
                <h3 class="poppins-bold text-2xl text-[#282414]">Muara Takus Galeri</h3>
            </div>
            <div class="max-w-5xl grid grid-cols-4 gap-4 m-auto">
                <img class="col-span-2 row-span-2 w-[530px] h-[530px] rounded-xl" src="assets/img/galeri1.jpg"
                    alt="A large, prominent view of Muara Takus.">

                <img class="row-span-1 w-full h-full rounded-xl" src="assets/img/galeri1.jpg"
                    alt="Detail of the brickwork at Muara Takus.">
                <img class="row-span-1 w-full h-full rounded-xl" src="assets/img/galeri1.jpg"
                    alt="An aerial view of the temple complex.">
                <img class="row-span-1 w-full h-full rounded-xl" src="assets/img/galeri1.jpg"
                    alt="The main stupa at Muara Takus.">
                <img class="row-span-1 w-full h-full rounded-xl" src="assets/img/galeri1.jpg"
                    alt="Visitors exploring the site.">
            </div>
        </div>
    </section>

      <section>
    <div class="max-w-5xl mx-auto bg-white shadow-lg p-8">
        <header class="flex justify-between items-start mb-8">
            <div>
                <h1 class="text-3xl font-bold">Sonview Hotel</h1>
                <p class="text-sm text-gray-600">Jl. Pattimura No.40, Dumai Kota, Kec. Dumai Kota, Kota Dumai, Riau 28811</p>
            </div>
            <p class="text-xl font-semibold">Rp. 306.868</p>
        </header>

        <section class="mb-8">
            <h2 class="text-xl font-bold mb-4">Deskripsi</h2>
            <div class="grid grid-cols-2 gap-y-2 gap-x-12 text-gray-700">
                <div>
                    <p class="mb-1 font-semibold">Wi-Fi gratis</p>
                    <p class="mb-1 font-semibold">Sarapan gratis</p>
                    <p class="mb-1 font-semibold">Parkir gratis</p>
                    <p class="mb-1 font-semibold">Kolam renang</p>
                    <p class="mb-1 font-semibold">AC</p>
                    <p class="mb-1 font-semibold">Layanan binatu</p>
                    <p class="mb-1 font-semibold">Boleh bawa hewan</p>
                </div>
                <div>
                    <p class="mb-1 font-semibold">Layanan kamar</p>
                    <p class="mb-1 font-semibold">Restoran</p>
                    <p class="mb-1 font-semibold">Jemputan bandara</p>
                    <p class="mb-1 font-semibold">Bak air panas</p>
                    <p class="mb-1 font-semibold">Pusat kebugaran</p>
                    <p class="mb-1 font-semibold">Bebas asap rokok</p>
                </div>
            </div>
        </section>
  <section class="flex flex-col md:flex-row gap-8">
            <div class="w-full md:w-2/3">
                <h2 class="text-lg font-semibold text-gray-700 mb-2">LOCATION BY GMAPS</h2>
                <div class="w-full h-80 bg-gray-300 rounded-lg overflow-hidden border border-gray-400">
                    <img src="assets/img/maps.png" alt="G@component('layout')
@include('navbar')

<main class="max-w-5xl mx-auto py-8">
    <section class="mb-12">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="/storage/{{ $hotel->image }}"
                 alt="{{ $hotel->name }}"
                 class="w-full h-96 object-cover">

            <div class="p-6">
                <h1 class="text-3xl font-bold mb-4">{{ $hotel->name }}</h1>

                <div class="flex text-yellow-400 mb-4">
                    @for($i = 0; $i < $hotel->rating; $i++)
                        <i class="ph-fill ph-star"></i>
                    @endfor
                </div>

                <p class="text-gray-600 mb-2"><strong>Kota:</strong> {{ $hotel->kota }}</p>
                <p class="text-gray-600 mb-2"><strong>Provinsi:</strong> {{ $hotel->provinsi }}</p>
                <p class="text-gray-600 mb-4">{{ $hotel->deskripsi }}</p>

                <a href="{{ route('hotel.index') }}"
                   class="inline-block px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                   ← Kembali ke daftar hotel
                </a>
            </div>
        </div>
    </section>
</main>

@include('footer')
@endcomponent
oogle Maps location of the hotel" class="w-full h-full object-cover">
                </div>
            </div>

            <div class="w-full md:w-1/3">
                <h2 class="text-xl font-bold mb-4">Hotel Nearby</h2>
                <ul class="space-y-2 mb-4">
                    <li class="flex items-center">
                        <span class="text-lg">Nama Hotel</span>
                        <span class="ml-auto text-gray-600">Jarak (km)</span>
                    </li>
                    <li class="flex items-center">
                        <span class="text-lg">Nama Hotel</span>
                        <span class="ml-auto text-gray-600">Jarak (km)</span>
                    </li>
                    <li class="flex items-center">
                        <span class="text-lg">Nama Hotel</span>
                        <span class="ml-auto text-gray-600">Jarak (km)</span>
                    </li>
                    <li class="flex items-center">
                        <span class="text-lg">Nama Hotel</span>
                        <span class="ml-auto text-gray-600">Jarak (km)</span>
                    </li>
                </ul>
                <p class="text-sm italic text-gray-500 mt-4">
                    *Jarak di atas diukur berdasarkan garis lurus. Jarak perjalanan yang sebenarnya mungkin berbeda.
                </p>
            </div>
        </section>
            @include('footer')
    @endcomponent
