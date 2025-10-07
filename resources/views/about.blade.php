@include('layout.header')
<main>
    <!-- Hero Image Section -->
    <section class="relative w-full h-[400px] md:h-[500px] lg:h-[600px] overflow-hidden">
      <img 
        src="images/foto_3.png" 
        alt="SmartGarden Hero" 
        class="w-full h-full object-cover"
      />
      <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-[#0B1120]"></div>
      <div class="absolute inset-0 flex items-center justify-center">
      </div>
    </section>

    <!-- Description Section -->
    <section class="py-16 md:py-24 px-4">
      <div class="max-w-6xl mx-auto">
        <div class="space-y-6 text-center">
          <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-8 text-black">
            Tentang SmartGarden.ID
          </h2>
          <p class="text-lg md:text-xl leading-relaxed max-w-4xl mx-auto text-gray-600">
            SmartGarden.ID adalah startup agritech Indonesia yang mengintegrasikan teknologi, sensor IoT,
            kecerdasan buatan (AI), dan inovasi pertanian berkelanjutan untuk meningkatkan produktivitas
            tanaman tropis unggulan. Fokus utama kami adalah pada sistem irigasi pintar dan monitoring
            tanaman jambu air premium, guna membantu petani beralih menuju pertanian cerdas berbasis data.
            Dengan pendekatan yang ramah lingkungan, SmartGarden.ID berkomitmen mendorong ketahanan
            pangan dan kesejahteraan petani menuju masa depan hijau dan berkelanjutan.
          </p>
        </div>
      </div>
    </section>

    <!-- Vision & Mission Section -->
    <section class="py-16 md:py-24 px-4">
      <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
          
          <!-- Vision & Mission Content -->
          <div class="space-y-12 order-2 lg:order-1">
            <!-- Vision -->
            <div class="space-y-4">
              <div class="flex items-start space-x-3">
                <div class="w-12 h-12 flex-shrink-0 bg-gradient-to-br from-green-500 to-emerald-600 rounded-lg flex items-center justify-center">
                  <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                  </svg>
                </div>
                <h3 class="text-2xl md:text-3xl font-bold text-black pt-1">Visi Kami</h3>
              </div>
              <div class="ml-15">
                <p class="text-lg text-gray-500 leading-relaxed">
                  Mewujudkan ekosistem pertanian cerdas berbasis AI dan IoT untuk meningkatkan produktivitas,
                  keberlanjutan, dan kesejahteraan petani Indonesia.
                </p>
              </div>
            </div>

            <!-- Mission -->
            <div class="space-y-4">
              <div class="flex items-start space-x-3">
                <div class="w-12 h-12 flex-shrink-0 bg-gradient-to-br from-blue-500 to-cyan-600 rounded-lg flex items-center justify-center">
                  <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                  </svg>
                </div>
                <h3 class="text-2xl md:text-3xl font-bold text-black pt-1">Misi Kami</h3>
              </div>
              <div class="ml-15">
                <ul class="space-y-3">
                  <li class="flex items-start">
                    <span class="text-green-500 mr-3 mt-1 flex-shrink-0">✓</span>
                    <p class="text-lg text-gray-500 leading-relaxed">
                      Mengembangkan produk agritech seperti pupuk cair, bibit unggul, buah berkualitas premium dan sistem irigasi presisi.
                    </p>
                  </li>
                  <li class="flex items-start">
                    <span class="text-green-500 mr-3 mt-1 flex-shrink-0">✓</span>
                    <p class="text-lg text-gray-500 leading-relaxed">
                      Mengintegrasikan sensor IoT, AI analytics, dan platform digital untuk monitoring pertanian.
                    </p>
                  </li>
                  <li class="flex items-start">
                    <span class="text-green-500 mr-3 mt-1 flex-shrink-0">✓</span>
                    <p class="text-lg text-gray-500 leading-relaxed">
                      Memberdayakan petani dengan pelatihan berbasis data dan teknologi adaptif.
                    </p>
                  </li>
                  <li class="flex items-start">
                    <span class="text-green-500 mr-3 mt-1 flex-shrink-0">✓</span>
                    <p class="text-lg text-gray-500 leading-relaxed">
                      Mendukung ketahanan pangan dan ekspor komoditas tropis unggulan.
                    </p>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Image -->
          <div class="order-1 lg:order-2">
            <div class="relative rounded-2xl overflow-hidden shadow-2xl">
              <img 
                src="images/foto_1.png" 
                alt="SmartGarden Vision Mission" 
                class="w-full h-full object-cover"
              />
              <div class="absolute inset-0 bg-gradient-to-tr from-green-600/20 to-transparent"></div>
            </div>
          </div>

        </div>
      </div>
    </section>

  </main>
@include('layout.footer')