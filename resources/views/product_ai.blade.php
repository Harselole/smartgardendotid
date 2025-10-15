@include('layout.header')

<!-- Alert Success -->
@if(session('success'))
<div id="successAlert" class="fixed top-20 right-6 z-50 bg-green-500 text-white px-6 py-4 rounded-xl shadow-2xl flex items-center gap-3 animate-slide-in">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
    </svg>
    <span class="font-semibold">{{ session('success') }}</span>
</div>
@endif

<!-- Hero Section -->
<section class="relative pt-32 pb-20 bg-gradient-to-b from-green-50 to-white overflow-hidden">
    <div class="container mx-auto px-6 lg:px-8 max-w-7xl">
        @if (!$ai)
            <div class="text-center text-gray-500 py-20">
                <h2 class="text-3xl font-semibold mb-4">Belum ada data ai</h2>
                <p>Silakan tambahkan data dari dashboard admin Filament.</p>
            </div>
        @else
            <!-- Title + Hero -->
            <div class="text-center mb-16">
                <h1 class="text-5xl lg:text-6xl font-bold text-gray-900 mb-6 tracking-tight">
                    {{ $ai->judul }}
                </h1>
                <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    {{ $ai->deskripsi }}
                </p>

                @if ($ai->gambar)
                    <div class="mt-12 relative max-w-5xl mx-auto">
                        <div class="absolute inset-0 bg-green-600 opacity-10 blur-3xl rounded-3xl"></div>
                        <img src="{{ asset('storage/' . $ai->gambar) }}" alt="Gambar Utama"
                            class="w-full h-[500px] object-cover rounded-3xl shadow-2xl border border-green-100 relative z-10" />
                    </div>
                @endif
            </div>

            <!-- Subjudul & Deskripsi -->
            @if ($ai->subjudul)
                <section class="mb-20">
                    <div class="text-center mb-10">
                        <h2 class="text-4xl md:text-5xl font-extrabold text-green-700 mb-6 tracking-tight">
                            {{ $ai->subjudul }}
                        </h2>
                    </div>

                    <div
                        class="max-w-5xl mx-auto bg-white shadow-lg rounded-3xl p-10 text-gray-700 leading-relaxed text-lg prose prose-green prose-lg">
                        {!! $ai->subdeskripsi !!}
                    </div>
                </section>
            @endif


            <!-- Produk Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 max-w-6xl mx-auto">
                @foreach ([1, 2, 3] as $i)
                    @php
                        $gambar = 'gambarproduk' . $i;
                        $nama = 'namaproduk' . $i;
                        $desk = 'deskripsiproduk' . $i;
                    @endphp

                    @if (!empty($ai->$nama))
                        <div
                            class="group bg-white rounded-3xl shadow-md hover:shadow-2xl transition-all duration-300 border border-gray-100 overflow-hidden">
                            @if (!empty($ai->$gambar))
                                <div class="overflow-hidden">
                                    <img src="{{ asset('storage/' . $ai->$gambar) }}" alt="{{ $ai->$nama }}"
                                        class="w-full h-64 object-cover transform group-hover:scale-105 transition-transform duration-500">
                                </div>
                            @endif
                            <div class="p-6 text-center">
                                <h3 class="font-bold text-2xl text-green-700 mb-2">{{ $ai->$nama }}</h3>
                                <p class="text-gray-600 leading-relaxed text-base">{{ $ai->$desk }}</p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            <!-- Call to Action -->
            <div class="text-center mt-20">
                <button onclick="openModal()"
                    class="inline-flex items-center gap-2 bg-green-600 hover:bg-green-700 text-white font-semibold py-4 px-10 rounded-full text-lg transition-all duration-300 shadow-lg hover:shadow-xl">
                    Hubungi Kami
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </button>
            </div>
        @endif
    </div>
</section>

<!-- Include Modal Buku Tamu -->
@include('components.modal-buku-tamu', ['produk' => 'Smartgarden AI'])

@include('layout.footer')