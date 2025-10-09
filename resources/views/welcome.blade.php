@include('layout.header')
  <main>
    <!-- ===== Hero Start ===== -->
    <section class="gj do ir hj sp jr i pg">
      <!-- Hero Images -->
      <div class="xc fn zd/2 2xl:ud-w-187.5 bd 2xl:ud-h-171.5 h q r">
        <img src="images/shape-01.svg" alt="shape" class="xc 2xl:ud-block h t -ud-left-[10%] ua" />
        <img src="images/shape-02.svg" alt="shape" class="xc 2xl:ud-block h u p va" />
        <img src="images/shape-03.svg" alt="shape" class="xc 2xl:ud-block h v w va" />
        <img src="images/shape-04.svg" alt="shape" class="h q r" />
        <img src="images/foto_1.png" alt="Woman" class="h q r ua" />
      </div>

      <!-- Hero Content -->
      <div class="bb ze ki xn 2xl:ud-px-0">
        <div class="tc _o">
          <div class="animate_left jn/2">
            <h1 class="fk vj zp or kk wm wb">Smart Agriculture for a Smarter Indonesia</h1>
            <p class="fq">
              SmartGarden.ID memadukan teknologi dan kecerdasan buatan untuk menghadirkan pertanian
              tropis berbasis data yang cerdas, efisien, dan berkelanjutan; dari irigasi pintar hingga panen buah
              premium.
            </p>

            <div class="tc tf yo zf mb">
              <a href="#!" class="ek jk lk gh gi hi rg ml il vc _d _l">Hubungi Kami</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ===== Hero End ===== -->

    {{-- <!-- ===== Small Features Start ===== -->
    <section id="features">
      <div class="bb ze ki yn 2xl:ud-px-12.5">
        <div class="tc uf zo xf ap zf bp mq">
          <!-- Small Features Item -->
          <div class="animate_top kn to/3 tc cg oq">
            <div class="tc wf xf cf ae cd rg mh">
              <img src="images/icon-01.svg" alt="Icon" />
            </div>
            <div>
              <h4 class="ek yj go kk wm xb">24/7 Support</h4>
              <p>Lorem ipsum dolor sit amet conse adipiscing elit.</p>
            </div>
          </div>

          <!-- Small Features Item -->
          <div class="animate_top kn to/3 tc cg oq">
            <div class="tc wf xf cf ae cd rg nh">
              <img src="images/icon-02.svg" alt="Icon" />
            </div>
            <div>
              <h4 class="ek yj go kk wm xb">Take Ownership</h4>
              <p>Lorem ipsum dolor sit amet conse adipiscing elit.</p>
            </div>
          </div>

          <!-- Small Features Item -->
          <div class="animate_top kn to/3 tc cg oq">
            <div class="tc wf xf cf ae cd rg oh">
              <img src="images/icon-03.svg" alt="Icon" />
            </div>
            <div>
              <h4 class="ek yj go kk wm xb">Team Work</h4>
              <p>Lorem ipsum dolor sit amet conse adipiscing elit.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ===== Small Features End ===== --> --}}

    <!-- ===== About Start ===== -->
    <section class="ji gp uq 2xl:ud-py-35 pg">
      <div class="bb ze ki xn wq">
        <div class="tc wf gg qq">
          <!-- About Images -->
          <div class="animate_left xc gn gg jn/2 i rounded-2xl shadow-2xl">
            <iframe width="625" height="350"
              src="https://www.youtube.com/embed/RAEwTFN3h8M?si=9LUGLKx8lJZtfcbI"
              title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              allowfullscreen>
            </iframe>
          </div>

          <!-- About Content -->
          <div class="animate_right jn/2">
            <h2 class="fk vj zp pr kk wm qb">Kenapa Memilih Kami</h2>
            <p class="uo">Kami mewujudkan ekosistem pertanian cerdas berbasis AI dan IoT untuk meningkatkan produktivitas,
            keberlanjutan, dan kesejahteraan petani Indonesia.</p>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- ===== About End ===== -->

    <!-- ===== Blog Start ===== -->
<section class="ji gp uq">

  <!-- ===== Title Area (terpisah) ===== -->
  <div x-data="{ sectionTitle: `Berita & Artikel Terbaru`, sectionTitleText: `Informasi seputar pertanian dan perkebunan` }">
    <div class="animate_top bb ze rj ki xn vq text-center">
      <h2 x-text="sectionTitle" class="fk vj pr kk wm on/5 gq/2 bb _b"></h2>
      <p x-text="sectionTitleText" class="bb on/5 wo/5 hq mt-2"></p>
    </div>
  </div>

  <!-- ===== Carousel Area ===== -->
  <div class="mt-10 relative">
    <div class="swiper mySwiper px-6">
      <div class="swiper-wrapper">

        @forelse($beritas as $berita)
        <!-- Slide Berita Dinamis -->
        <div class="swiper-slide">
          <a href="{{ route('news.show', $berita->slug) }}" class="block group h-full">
            <div class="bg-white rounded-2xl shadow-md overflow-hidden transition-transform duration-300 hover:-translate-y-1 h-full flex flex-col">
              <!-- Gambar dengan tinggi tetap -->
              <div class="w-full h-48 overflow-hidden">
                <img src="{{ $berita->gambar1_url }}" alt="{{ $berita->judul }}" class="w-full h-full object-cover">
              </div>
              
              <!-- Content dengan tinggi tetap -->
              <div class="p-5 flex flex-col flex-grow">
                <h3 class="text-lg font-semibold text-gray-800 group-hover:text-green-600 transition-colors duration-300 line-clamp-2 min-h-[3.5rem]">
                  {{ \Illuminate\Support\Str::words(strip_tags($berita->judul), 8, '...') }}
                </h3>
                
                <p class="text-sm text-gray-500 mt-2 line-clamp-3 flex-grow">
                  {{ \Illuminate\Support\Str::words(strip_tags($berita->excerpt), 15, '...') }}
                </p>
                
                <!-- Info tanggal dan kota -->
                <div class="mt-3 flex items-center text-xs text-gray-400">
                  <svg class="w-4 h-4 mr-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                  </svg>
                  <span class="truncate">{{ $berita->formatted_date }}</span>
                  
                  @if($berita->kota)
                  <span class="mx-2">•</span>
                  <svg class="w-4 h-4 mr-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                  </svg>
                  <span class="truncate">{{ $berita->kota }}</span>
                  @endif
                </div>
                
                <!-- Button dengan posisi tetap di bawah -->
                <div class="mt-4 pt-3 border-t border-gray-100">
                  <span class="inline-block bg-green-500 text-white text-sm font-medium px-4 py-2 rounded-md transition-colors duration-300 group-hover:bg-green-600 w-full text-center">
                    Baca Selengkapnya →
                  </span>
                </div>
              </div>
            </div>
          </a>
        </div>
        @empty
        <!-- Fallback jika tidak ada berita -->
        <div class="swiper-slide">
          <div class="bg-white rounded-2xl shadow-md overflow-hidden h-full flex flex-col">
            <div class="w-full h-48 overflow-hidden">
              <img src="{{ asset('images/blog-default.png') }}" alt="Default Image" class="w-full h-full object-cover">
            </div>
            <div class="p-5 flex flex-col flex-grow">
              <h3 class="text-lg font-semibold text-gray-800 line-clamp-2 min-h-[3.5rem]">
                Belum Ada Berita
              </h3>
              <p class="text-sm text-gray-500 mt-2 flex-grow">Berita akan segera tersedia</p>
              <div class="mt-4 pt-3 border-t border-gray-100">
                <span class="inline-block bg-gray-400 text-white text-sm font-medium px-4 py-2 rounded-md w-full text-center">
                  Tidak Tersedia
                </span>
              </div>
            </div>
          </div>
        </div>
        @endforelse

      </div>

      <!-- Tombol Navigasi -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
  </div>
</section>

<!-- Swiper CSS & JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 24,
    loop: {{ $beritas->count() > 1 ? 'true' : 'false' }},
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      1024: { 
        slidesPerView: 3,
        spaceBetween: 24
      },
      768: { 
        slidesPerView: 2,
        spaceBetween: 20
      },
      480: { 
        slidesPerView: 1,
        spaceBetween: 16
      },
    },
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
  });
</script>

<style>
  .mySwiper {
    padding-bottom: 50px;
    max-width: 1200px;
    margin: 0 auto;
  }

  .swiper-slide {
    height: auto !important;
  }

  .swiper-slide > a,
  .swiper-slide > div {
    height: 100%;
  }

  .swiper-button-next,
  .swiper-button-prev {
    color: #16a34a;
    background: white;
    border-radius: 9999px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
    width: 40px;
    height: 40px;
  }

  .swiper-button-next::after,
  .swiper-button-prev::after {
    font-size: 16px;
    font-weight: bold;
  }

  /* Untuk memastikan line clamp bekerja */
  .line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
  }

  .line-clamp-3 {
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
  }

  /* Pastikan semua card memiliki tinggi yang sama */
  .swiper-wrapper {
    align-items: stretch;
  }
</style>



    
  </main>
  @include('layout.footer')