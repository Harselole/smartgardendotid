@include('layout.header')

<main>
    <!-- ===== Blog Single Start ===== -->
    <section class="gj qp gr hj rp hr">
        <div class="bb ze ki xn 2xl:ud-px-0">
            <div class="tc sf yo zf kq">
                <div class="ro">
                    <div
                        class="animate_top rounded-md shadow-solid-13 bg-white dark:bg-blacksection border border-stroke dark:border-strokedark p-7.5 md:p-10">
                        
                        <!-- Gambar Utama (gambar1) -->
                        <img src="{{ $berita->gambar1_url }}" alt="{{ $berita->judul }}" class="w-full rounded-md mb-6" />

                        <!-- Judul Berita -->
                        <h2 class="ek vj 2xl:ud-text-title-lg kk wm nb gb">{{ $berita->judul }}</h2>

                        <!-- Informasi Publikasi -->
                        <ul class="tc uf cg 2xl:ud-gap-15 fb">
                            <li><span class="rc kk wm">Dipublikasi: </span> {{ $berita->formatted_date }}</li>
                            @if($berita->kota)
                            <li>
                                <span class="rc kk wm">Kota: </span> {{ $berita->kota }}
                            </li>
                            @endif
                            @if($berita->created_by)
                            <li>
                                <span class="rc kk wm">Oleh: </span> {{ $berita->created_by }}
                            </li>
                            @endif
                        </ul>

                        <!-- Deskripsi Berita (Bagian Pertama) -->
                        <div class="mt-6">
                            {!! $berita->deskripsi !!}
                        </div>

                        <!-- Gambar Tambahan (gambar2 dan gambar3) -->
                        @if($berita->gambar2 || $berita->gambar3)
                        <div class="wc qf pn dg cb my-8">
                            @if($berita->gambar2)
                            <img src="{{ $berita->gambar2_url }}" alt="{{ $berita->judul }}" class="rounded-md" />
                            @endif
                            @if($berita->gambar3)
                            <img src="{{ $berita->gambar3_url }}" alt="{{ $berita->judul }}" class="rounded-md" />
                            @endif
                        </div>
                        @endif

                    </div>
                </div>

                <!-- Sidebar Berita Lainnya -->
                <div class="jn/2 so">
                    <div class="animate_top">
                        <h4 class="tj kk wm qb">Lainnya</h4>

                        <div>
                            @forelse($relatedBeritas as $related)
                            <div class="tc fg 2xl:ud-gap-6 {{ !$loop->last ? 'qb' : '' }}">
                                <img src="{{ $related->gambar1_url }}" alt="{{ $related->judul }}" class="w-20 h-20 object-cover rounded" />
                                <h5 class="wj kk wm xl bn ml il">
                                    <a href="{{ route('news.show', $related->slug) }}" class="hover:text-blue-600 transition-colors">
                                        {{ \Illuminate\Support\Str::words(strip_tags($related->judul), 8, '...') }}
                                    </a>
                                </h5>
                            </div>
                            @empty
                            <p class="text-gray-500">Belum ada berita lainnya</p>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===== Blog Single End ===== -->
</main>

@include('layout.footer')