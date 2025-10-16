<!-- Modal Buku Tamu -->
<div id="modalBukuTamu" 
     class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black/40 backdrop-blur-sm p-4 transition-all">
    
    <div class="bg-white rounded-2xl shadow-2xl max-w-md w-full overflow-hidden transform scale-95 animate-fadeIn border border-gray-100">
        
        <!-- Header -->
        <div class="px-6 py-5 border-b border-gray-100 flex items-center justify-between bg-white">
            <h3 class="text-xl font-semibold text-gray-800">Hubungi Kami</h3>
            <button onclick="closeModal()" 
                    class="text-gray-400 hover:text-gray-600 transition">
                <svg xmlns="http://www.w3.org/2000/svg" 
                     fill="none" viewBox="0 0 24 24" 
                     stroke-width="2" stroke="currentColor" 
                     class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Body -->
        <form action="{{ route('buku-tamu.store') }}" method="POST" class="p-6 space-y-5 bg-gray-50/40">
            @csrf
            <input type="hidden" name="produk" id="produkInput" value="{{ $produk }}">

            <!-- Produk -->
            <div class="bg-green-50 border border-green-200 rounded-xl p-4">
                <p class="text-sm text-green-700 font-medium">Produk yang dipilih:</p>
                <p class="text-lg font-semibold text-green-900">{{ $produk }}</p>
            </div>

            <!-- Nama -->
            <div>
                <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">
                    Nama Lengkap <span class="text-red-500">*</span>
                </label>
                <input type="text" id="nama" name="nama" required
                       placeholder="Masukkan nama lengkap Anda"
                       class="w-full px-4 py-3 bg-white border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all placeholder-gray-400">
            </div>

            <!-- Kontak -->
            <div>
                <label for="kontak" class="block text-sm font-medium text-gray-700 mb-1">
                    Nomor Telepon / Email <span class="text-red-500">*</span>
                </label>
                <input type="text" id="kontak" name="kontak" required
                       placeholder="08xxxx atau email@example.com"
                       class="w-full px-4 py-3 bg-white border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all placeholder-gray-400">
            </div>

            <!-- Pesan -->
            <div>
                <label for="pesan" class="block text-sm font-medium text-gray-700 mb-1">
                    Pesan <span class="text-red-500">*</span>
                </label>
                <textarea id="pesan" name="pesan" rows="4" required
                          placeholder="Tulis pesan atau pertanyaan Anda di sini..."
                          class="w-full px-4 py-3 bg-white border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all placeholder-gray-400 resize-none"></textarea>
            </div>

            <!-- Tombol -->
            <div class="flex gap-3 pt-2">
                <button type="button" 
                        onclick="closeModal()"
                        class="flex-1 px-6 py-3 border border-gray-300 text-gray-700 font-semibold rounded-lg hover:bg-gray-100 transition">
                    Batal
                </button>
                <button type="submit"
                        class="flex-1 px-6 py-3 bg-green-600 hover:bg-green-700 text-white font-semibold rounded-lg shadow-md hover:shadow-lg transition">
                    Kirim Pesan
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Animasi -->
<style>
@keyframes fadeIn {
  0% { opacity: 0; transform: scale(0.95); }
  100% { opacity: 1; transform: scale(1); }
}
.animate-fadeIn {
  animation: fadeIn 0.25s ease-out forwards;
}
</style>

<script>
function openModal() {
    const modal = document.getElementById('modalBukuTamu');
    modal.classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function closeModal() {
    const modal = document.getElementById('modalBukuTamu');
    modal.classList.add('hidden');
    document.body.style.overflow = 'auto';
}

document.getElementById('modalBukuTamu').addEventListener('click', e => {
    if (e.target === e.currentTarget) closeModal();
});

document.addEventListener('keydown', e => {
    if (e.key === 'Escape') closeModal();
});
</script>
