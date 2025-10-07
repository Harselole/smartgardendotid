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
          <div class="animate_left xc gn gg jn/2 i">
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

        <!-- Contoh Slide -->
        <div class="swiper-slide">
          <a href="detail-berita.html" class="block group">
            <div class="bg-white rounded-2xl shadow-md overflow-hidden transition-transform duration-300 hover:-translate-y-1">
              <img src="https://picsum.photos/id/1011/400/250" alt="Gambar 1" class="w-full h-48 object-cover">
              <div class="p-5">
                <h3 class="text-lg font-semibold text-gray-800 group-hover:text-green-600 transition-colors duration-300">
                  Mengenal Asem-Aseman pada Padi dan Cara Mengatasinya
                </h3>
                <p class="text-sm text-gray-500 mt-2">Masalah umum dalam tanaman padi yang bisa dihindari...</p>
                <span class="mt-4 inline-block bg-green-500 text-white text-sm font-medium px-4 py-2 rounded-md transition-colors duration-300 group-hover:bg-green-600">
                  Read More →
                </span>
              </div>
            </div>
          </a>
        </div>

        <div class="swiper-slide">
          <a href="detail-berita.html" class="block group">
            <div class="bg-white rounded-2xl shadow-md overflow-hidden transition-transform duration-300 hover:-translate-y-1">
              <img src="https://picsum.photos/id/1012/400/250" alt="Gambar 2" class="w-full h-48 object-cover">
              <div class="p-5">
                <h3 class="text-lg font-semibold text-gray-800 group-hover:text-green-600 transition-colors duration-300">
                  Maksimalkan Hasil! 5 Faktor Penting Produksi Kelapa Sawit
                </h3>
                <p class="text-sm text-gray-500 mt-2">Tingkatkan produktivitas dengan langkah sederhana...</p>
                <span class="mt-4 inline-block bg-green-500 text-white text-sm font-medium px-4 py-2 rounded-md transition-colors duration-300 group-hover:bg-green-600">
                  Read More →
                </span>
              </div>
            </div>
          </a>
        </div>

        <div class="swiper-slide">
          <a href="detail-berita.html" class="block group">
            <div class="bg-white rounded-2xl shadow-md overflow-hidden transition-transform duration-300 hover:-translate-y-1">
              <img src="https://picsum.photos/id/1013/400/250" alt="Gambar 3" class="w-full h-48 object-cover">
              <div class="p-5">
                <h3 class="text-lg font-semibold text-gray-800 group-hover:text-green-600 transition-colors duration-300">
                  Kelapa Sawit: Tanaman Tanpa Limbah
                </h3>
                <p class="text-sm text-gray-500 mt-2">Setiap bagian dari kelapa sawit dapat dimanfaatkan...</p>
                <span class="mt-4 inline-block bg-green-500 text-white text-sm font-medium px-4 py-2 rounded-md transition-colors duration-300 group-hover:bg-green-600">
                  Read More →
                </span>
              </div>
            </div>
          </a>
        </div>

        <div class="swiper-slide">
          <a href="detail-berita.html" class="block group">
            <div class="bg-white rounded-2xl shadow-md overflow-hidden transition-transform duration-300 hover:-translate-y-1">
              <img src="https://picsum.photos/id/1014/400/250" alt="Gambar 4" class="w-full h-48 object-cover">
              <div class="p-5">
                <h3 class="text-lg font-semibold text-gray-800 group-hover:text-green-600 transition-colors duration-300">
                  Tips Merawat Tanaman di Musim Hujan
                </h3>
                <p class="text-sm text-gray-500 mt-2">Cara mencegah tanaman busuk dan berjamur...</p>
                <span class="mt-4 inline-block bg-green-500 text-white text-sm font-medium px-4 py-2 rounded-md transition-colors duration-300 group-hover:bg-green-600">
                  Read More →
                </span>
              </div>
            </div>
          </a>
        </div>

        <div class="swiper-slide">
          <a href="detail-berita.html" class="block group">
            <div class="bg-white rounded-2xl shadow-md overflow-hidden transition-transform duration-300 hover:-translate-y-1">
              <img src="https://picsum.photos/id/1015/400/250" alt="Gambar 5" class="w-full h-48 object-cover">
              <div class="p-5">
                <h3 class="text-lg font-semibold text-gray-800 group-hover:text-green-600 transition-colors duration-300">
                  Pertanian Organik, Solusi Masa Depan
                </h3>
                <p class="text-sm text-gray-500 mt-2">Kenali keuntungan sistem pertanian tanpa bahan kimia...</p>
                <span class="mt-4 inline-block bg-green-500 text-white text-sm font-medium px-4 py-2 rounded-md transition-colors duration-300 group-hover:bg-green-600">
                  Read More →
                </span>
              </div>
            </div>
          </a>
        </div>

        <div class="swiper-slide">
          <a href="detail-berita.html" class="block group">
            <div class="bg-white rounded-2xl shadow-md overflow-hidden transition-transform duration-300 hover:-translate-y-1">
              <img src="https://picsum.photos/id/1016/400/250" alt="Gambar 6" class="w-full h-48 object-cover">
              <div class="p-5">
                <h3 class="text-lg font-semibold text-gray-800 group-hover:text-green-600 transition-colors duration-300">
                  Efisiensi Air untuk Pertanian Modern
                </h3>
                <p class="text-sm text-gray-500 mt-2">Teknologi baru dalam irigasi hemat air...</p>
                <span class="mt-4 inline-block bg-green-500 text-white text-sm font-medium px-4 py-2 rounded-md transition-colors duration-300 group-hover:bg-green-600">
                  Read More →
                </span>
              </div>
            </div>
          </a>
        </div>

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
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      1024: { slidesPerView: 3 },
      768: { slidesPerView: 2 },
      480: { slidesPerView: 1 },
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
</style>



    
  </main>
  @include('layout.footer')