@component('layout')
@include('navbar')

<main class="max-w-5xl mx-auto py-8">
    <section class="mb-12">
        <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">Jelajahi Hotel Populer Kami</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @foreach($hotels as $hotel)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="/storage/{{$hotel->image }}" alt="{{ $hotel->name }}" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <a href="{{ route('detail_hotel', $hotel->id) }}" class="text-xl font-bo`ld mb-2">
                            {{ $hotel->name }}
                        </a>
                        <div class="flex text-yellow-400 mb-2">
                            @for($i = 0; $i < $hotel->rating; $i++)
                                <i class="ph-fill ph-star"></i>
                            @endfor
                        </div>
                        <p class="text-gray-600">{{ $hotel->kota }}</p>
                        <p class="text-gray-600">{{ $hotel->provinsi }}</p>
                        <p class="text-gray-600">{{ $hotel->deskripsi }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</main>

@include('footer')
@endcomponent
