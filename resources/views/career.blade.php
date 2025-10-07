@include('layout.header')
<br><br><br>
<main>
    <!-- Hero Section with Video -->
    <section class="py-16 md:py-24 px-4">
      <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
          
          <!-- Recruitment Message -->
          <div class="space-y-6 order-2 lg:order-1">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-black leading-tight">
              Jadilah Bagian dari Kami
            </h1>
            <p class="text-lg md:text-xl text-gray-500 leading-relaxed">
              Bergabunglah dengan tim SmartGarden.ID dan wujudkan revolusi pertanian pintar Indonesia. 
              Kami mencari individu passionate yang siap berinovasi dan memberikan dampak nyata untuk 
              masa depan agrikultur Indonesia.
            </p>
            <p class="text-lg md:text-xl text-gray-500 leading-relaxed">
              Di SmartGarden.ID, Anda akan berkesempatan untuk bekerja dengan teknologi terdepan, 
              belajar dari para ahli, dan berkontribusi langsung dalam transformasi sektor pertanian 
              melalui AI dan IoT.
            </p>
            <div class="flex flex-wrap gap-4 pt-4">
              <div class="flex items-center space-x-2">
                <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                <span class="text-gray-500">Lingkungan Kerja Inovatif</span>
              </div>
              <div class="flex items-center space-x-2">
                <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                <span class="text-gray-500">Pengembangan Karir</span>
              </div>
              <div class="flex items-center space-x-2">
                <div class="w-2 h-2 bg-cyan-500 rounded-full"></div>
                <span class="text-gray-500">Tim Profesional</span>
              </div>
            </div>
          </div>

          <!-- YouTube Video -->
          <div class="order-1 lg:order-2">
            <div class="relative rounded-2xl overflow-hidden shadow-2xl">
              <iframe 
                class="w-full aspect-video"
                src="https://www.youtube.com/embed/RAEwTFN3h8M?si=9LUGLKx8lJZtfcbI"
                title="SmartGarden.ID Career Video"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen>
              </iframe>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- Internship Opportunities Section -->
    <section class="py-16 md:py-24 px-4">
      <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
          
          <!-- Slideshow Images -->
          <div class="order-1">
            <div class="swiper internshipSwiper rounded-2xl overflow-hidden shadow-2xl">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img 
                    src="images/foto_1.png" 
                    alt="Team Working 1" 
                    class="w-full h-[400px] object-cover"
                  />
                </div>
                <div class="swiper-slide">
                  <img 
                    src="images/blog-01.png" 
                    alt="Team Working 2" 
                    class="w-full h-[400px] object-cover"
                  />
                </div>
                <div class="swiper-slide">
                  <img 
                    src="images/blog-02.png" 
                    alt="Team Working 3" 
                    class="w-full h-[400px] object-cover"
                  />
                </div>
              </div>
              <div class="swiper-pagination"></div>
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
            </div>
          </div>

          <!-- Internship Details -->
          <div class="space-y-6 order-2">
            <div class="mb-12">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-black mb-4">
                    Internship di SmartGarden.ID
                </h2>
                <p class="text-lg text-gray-500 max-w-3xl mx-auto">
                    Kami membuka kesempatan magang untuk mahasiswa dan fresh graduate yang ingin 
                    mengembangkan skill di bidang agritech dan teknologi pertanian modern
                </p>
            </div>
          </div>

        </div>
      </div>
    </section>

  </main>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    // Initialize Swiper
    const swiper = new Swiper('.internshipSwiper', {
      slidesPerView: 1,
      spaceBetween: 0,
      loop: true,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>

@include('layout.footer')