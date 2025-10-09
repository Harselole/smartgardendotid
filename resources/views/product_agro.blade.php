@include('layout.header')

<!-- Hero Section -->
<section class="pt-32 pb-16 bg-gray-50">
  <div class="container mx-auto px-4 max-w-7xl">
    
    <!-- Title Section -->
    <div class="text-center mb-12">
      <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 text-gray-900">
        SmartGarden.ID Agro
      </h1>
      <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
        Solusi agritech terpadu untuk pertanian modern Indonesia. Kami menghadirkan pupuk cair berkualitas tinggi, 
        bibit unggul pilihan, dan buah premium yang dihasilkan melalui teknologi pertanian berkelanjutan untuk 
        meningkatkan produktivitas dan kualitas hasil panen Anda.
      </p>
    </div>

    <!-- Large Product Image -->
    <div class="mb-16">
      <div class="rounded-2xl overflow-hidden shadow-2xl max-w-5xl mx-auto">
        <img 
          src="{{ asset('images/agro-main-product.jpg') }}" 
          alt="SmartGarden Agro Products" 
          class="w-full h-auto object-cover"
          style="max-height: 600px; object-fit: cover;"
        />
      </div>
    </div>

    <!-- Detailed Description Section -->
    <div class="mb-16 max-w-5xl mx-auto">
      <h2 class="text-3xl md:text-4xl font-bold mb-8 text-center text-gray-900">
        Keunggulan Produk Kami
      </h2>
      <div class="space-y-6 text-gray-700 leading-relaxed bg-white p-8 rounded-xl shadow-lg">
        <p class="text-base md:text-lg">
          <strong class="text-gray-900">SmartGarden.ID Agro</strong> hadir sebagai mitra terpercaya petani Indonesia 
          dalam menghadapi tantangan pertanian modern. Produk kami dirancang khusus dengan mempertimbangkan kondisi 
          iklim tropis dan karakteristik tanah di Indonesia.
        </p>
        
        <p class="text-base md:text-lg">
          <strong class="text-gray-900">Pupuk Cair Organik</strong> kami diformulasikan dengan teknologi nano-partikel 
          yang memungkinkan penyerapan nutrisi hingga 95% lebih efisien. Mengandung NPK seimbang, mikroorganisme 
          menguntungkan, dan mineral esensial yang dibutuhkan tanaman dalam setiap fase pertumbuhan. Ramah lingkungan 
          dan aman untuk ekosistem pertanian berkelanjutan.
        </p>
        
        <p class="text-base md:text-lg">
          <strong class="text-gray-900">Bibit Unggul Bersertifikat</strong> yang kami tawarkan telah melalui proses 
          seleksi ketat dan pemuliaan tanaman secara ilmiah. Setiap bibit dijamin bebas dari penyakit, memiliki tingkat 
          pertumbuhan optimal, dan resistensi tinggi terhadap hama. Kami menyediakan berbagai varietas tanaman hortikultura, 
          buah-buahan tropis, dan tanaman produktif lainnya.
        </p>
        
        <p class="text-base md:text-lg">
          <strong class="text-gray-900">Buah Premium</strong> hasil dari penerapan teknologi pertanian presisi. 
          Setiap buah dipantau kualitasnya mulai dari proses penanaman hingga panen menggunakan sensor IoT dan analisis 
          data real-time. Hasilnya adalah buah dengan kandungan nutrisi tinggi, rasa superior, tekstur sempurna, 
          dan masa simpan lebih panjang tanpa bahan pengawet kimia.
        </p>

        <p class="text-base md:text-lg">
          Dengan <strong class="text-gray-900">SmartGarden.ID Agro</strong>, petani dapat meningkatkan hasil panen 
          hingga 40%, mengurangi biaya produksi hingga 30%, dan menghasilkan produk pertanian berkualitas ekspor. 
          Kami berkomitmen mendukung ketahanan pangan nasional melalui inovasi teknologi pertanian yang accessible 
          dan sustainable.
        </p>
      </div>
    </div>

    <!-- Three Product Images -->
    <div class="mb-16">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8 max-w-6xl mx-auto">
        
        <!-- Image 1 - Pupuk Cair -->
        <div class="rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-shadow duration-300 bg-white">
          <img 
            src="{{ asset('images/agro-pupuk.jpg') }}" 
            alt="Pupuk Cair Organik" 
            class="w-full h-64 object-cover"
          />
          <div class="p-6">
            <h3 class="font-bold text-xl mb-2 text-gray-900">Pupuk Cair Organik</h3>
            <p class="text-gray-600">Formulasi khusus untuk nutrisi optimal tanaman</p>
          </div>
        </div>

        <!-- Image 2 - Bibit -->
        <div class="rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-shadow duration-300 bg-white">
          <img 
            src="{{ asset('images/agro-bibit.jpg') }}" 
            alt="Bibit Unggul" 
            class="w-full h-64 object-cover"
          />
          <div class="p-6">
            <h3 class="font-bold text-xl mb-2 text-gray-900">Bibit Unggul</h3>
            <p class="text-gray-600">Bersertifikat dengan tingkat pertumbuhan terbaik</p>
          </div>
        </div>

        <!-- Image 3 - Buah Premium -->
        <div class="rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-shadow duration-300 bg-white">
          <img 
            src="{{ asset('images/agro-fruit.jpg') }}" 
            alt="Buah Premium" 
            class="w-full h-64 object-cover"
          />
          <div class="p-6">
            <h3 class="font-bold text-xl mb-2 text-gray-900">Buah Premium</h3>
            <p class="text-gray-600">Kualitas ekspor dengan teknologi presisi</p>
          </div>
        </div>
        
      </div>
    </div>

    <!-- Call to Action -->
    <div class="text-center">
      <a 
        href="/contact" 
        class="inline-block bg-green-600 hover:bg-green-700 text-white font-bold py-4 px-8 rounded-lg text-lg transition-colors duration-300 shadow-lg hover:shadow-xl"
      >
        Hubungi Kami Untuk Informasi Lebih Lanjut
      </a>
    </div>

  </div>
</section>

@include('layout.footer')