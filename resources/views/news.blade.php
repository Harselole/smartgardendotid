@include('layout.header')

<main>
    <!-- ===== Hero Slideshow Start ===== -->
    <section class="relative w-full h-[500px] md:h-[600px] lg:h-[700px] overflow-hidden">
        <div class="swiper mySwiper h-full">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide relative">
                    <img src="{{ asset('images/slide1.jpg') }}" alt="Slide 1" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
                        <h2 class="text-white text-3xl md:text-5xl font-bold">Selamat Datang di Berita Kami</h2>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide relative">
                    <img src="{{ asset('images/slide2.jpg') }}" alt="Slide 2" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
                        <h2 class="text-white text-3xl md:text-5xl font-bold">Informasi Terbaru & Artikel Menarik</h2>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide relative">
                    <img src="{{ asset('images/slide3.jpg') }}" alt="Slide 3" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
                        <h2 class="text-white text-3xl md:text-5xl font-bold">Update Seputar Kesehatan & Teknologi</h2>
                    </div>
                </div>
            </div>

            <!-- Navigation buttons -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

            <!-- Pagination dots -->
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!-- ===== Hero Slideshow End ===== -->

    <!-- ===== Blog Grid Start ===== -->
    <section class="ji gp uq">
        <div class="bb ye ki xn vq jb jo">
            @if($beritas->count() > 0)
                <div class="wc qf pn xo zf iq">
                    @foreach($beritas as $berita)
                        <!-- Blog Item -->
                        <div class="animate_top sg vk rm xm">
                            <div class="c rc i z-1 pg">
                                <img class="w-full" src="{{ $berita->gambar1_url }}" alt="{{ $berita->judul }}" />

                                <div class="im h r s df vd yc wg tc wf xf al hh/20 nl il z-10">
                                    <a href="{{ route('news.show', $berita->slug) }}" 
                                       class="vc ek rg lk gh sl ml il gi hi">
                                        Selengkapnya
                                    </a>
                                </div>
                            </div>

                            <div class="yh">
                                <div class="tc uf wf ag jq">
                                    <div class="tc wf ag">
                                        <img src="{{ asset('images/icon-calender.svg') }}" alt="Calender" />
                                        <p>{{ $berita->formatted_date }}</p>
                                    </div>
                                    @if($berita->kota)
                                        <div class="tc wf ag">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                            </svg>
                                            <p>{{ $berita->kota }}</p>
                                        </div>
                                    @endif
                                </div>
                                <h4 class="ek tj ml il kk wm xl eq lb">
                                    <a href="{{ route('news.show', $berita->slug) }}">
                                        {{ $berita->judul }}
                                    </a>
                                </h4>
                                <p class="mt-2 text-gray-600">{{ $berita->excerpt }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                @if($beritas->hasPages())
                    <div class="mb lo bq i ua">
                        <nav>
                            <ul class="tc wf xf bg">
                                {{-- Previous Page Link --}}
                                @if ($beritas->onFirstPage())
                                    <li>
                                        <span class="c tc wf xf wd in zc hn rg uj fo wk xm ml il hh rm tl zm yl an opacity-50 cursor-not-allowed">
                                            <svg class="th lm ml il" width="8" height="14" viewBox="0 0 8 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.93884 6.99999L7.88884 11.95L6.47484 13.364L0.11084 6.99999L6.47484 0.635986L7.88884 2.04999L2.93884 6.99999Z" />
                                            </svg>
                                        </span>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{ $beritas->previousPageUrl() }}" class="c tc wf xf wd in zc hn rg uj fo wk xm ml il hh rm tl zm yl an">
                                            <svg class="th lm ml il" width="8" height="14" viewBox="0 0 8 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.93884 6.99999L7.88884 11.95L6.47484 13.364L0.11084 6.99999L6.47484 0.635986L7.88884 2.04999L2.93884 6.99999Z" />
                                            </svg>
                                        </a>
                                    </li>
                                @endif

                                {{-- Pagination Elements --}}
                                @foreach ($beritas->getUrlRange(1, $beritas->lastPage()) as $page => $url)
                                    @if ($page == $beritas->currentPage())
                                        <li>
                                            <span class="c tc wf xf wd in zc hn rg uj fo wk xm ml il hh rm tl zm yl an bg-blue-500 text-white">
                                                {{ $page }}
                                            </span>
                                        </li>
                                    @else
                                        @if ($page == 1 || $page == $beritas->lastPage() || abs($page - $beritas->currentPage()) < 3)
                                            <li>
                                                <a href="{{ $url }}" class="c tc wf xf wd in zc hn rg uj fo wk xm ml il hh rm tl zm yl an">
                                                    {{ $page }}
                                                </a>
                                            </li>
                                        @elseif (abs($page - $beritas->currentPage()) == 3)
                                            <li>
                                                <span class="c tc wf xf wd in zc hn rg uj fo wk xm ml il hh rm tl zm yl an">
                                                    ...
                                                </span>
                                            </li>
                                        @endif
                                    @endif
                                @endforeach

                                {{-- Next Page Link --}}
                                @if ($beritas->hasMorePages())
                                    <li>
                                        <a href="{{ $beritas->nextPageUrl() }}" class="c tc wf xf wd in zc hn rg uj fo wk xm ml il hh rm tl zm yl an">
                                            <svg class="th lm ml il" width="8" height="14" viewBox="0 0 8 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.06067 7.00001L0.110671 2.05001L1.52467 0.636014L7.88867 7.00001L1.52467 13.364L0.110672 11.95L5.06067 7.00001Z" />
                                            </svg>
                                        </a>
                                    </li>
                                @else
                                    <li>
                                        <span class="c tc wf xf wd in zc hn rg uj fo wk xm ml il hh rm tl zm yl an opacity-50 cursor-not-allowed">
                                            <svg class="th lm ml il" width="8" height="14" viewBox="0 0 8 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.06067 7.00001L0.110671 2.05001L1.52467 0.636014L7.88867 7.00001L1.52467 13.364L0.110672 11.95L5.06067 7.00001Z" />
                                            </svg>
                                        </span>
                                    </li>
                                @endif
                            </ul>
                        </nav>
                    </div>
                @endif
                <!-- Pagination End -->
            @else
                <!-- No Data Message -->
                <div class="text-center py-16">
                    <svg class="mx-auto h-16 w-16 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                    </svg>
                    <h3 class="mt-4 text-xl font-medium text-gray-900">Belum Ada Berita</h3>
                    <p class="mt-2 text-gray-500">Berita akan ditampilkan di sini setelah dipublikasikan.</p>
                </div>
            @endif
        </div>
    </section>
    <!-- ===== Blog Grid End ===== -->
</main>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const swiper = new Swiper(".mySwiper", {
            loop: true,
            speed: 800,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
                dynamicBullets: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            grabCursor: true,
            keyboard: {
                enabled: true,
            },
            mousewheel: false,
            effect: 'slide',
        });
    });
</script>

@include('layout.footer')