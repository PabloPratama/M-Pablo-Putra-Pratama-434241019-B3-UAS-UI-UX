@extends('admin.layouts.app')

@section('title', 'Komentar Detail')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>
    body, div, h1, h2, h3, h4, h5, p, span, button, label, input, textarea { font-family: 'Poppins', sans-serif !important; }
    
    .text-main-purple { color: #7C3AED; }
    .bg-main-purple { background-color: #7C3AED; }
    .border-main-purple { border-color: #7C3AED; }
    
    .btn-back-hover:hover { background-color: #7C3AED !important; }
    .btn-back-hover:hover svg { stroke: white !important; }

    /* Custom Scrollbar for Textarea */
    textarea::-webkit-scrollbar { width: 6px; }
    textarea::-webkit-scrollbar-track { background: #f1f1f1; border-radius: 4px; }
    textarea::-webkit-scrollbar-thumb { background: #d1d5db; border-radius: 4px; }
    textarea::-webkit-scrollbar-thumb:hover { background: #9ca3af; }
</style>

<!-- Notifikasi Sukses -->
<div id="successToast" class="fixed -top-24 left-1/2 transform -translate-x-1/2 transition-all duration-500 z-50 flex items-center gap-3 bg-white border border-green-200 shadow-xl px-5 py-3.5 rounded-2xl">
    <div class="flex-shrink-0 w-8 h-8 flex items-center justify-center bg-green-100 text-green-600 rounded-full">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
        </svg>
    </div>
    <span class="text-sm font-bold text-gray-800">Komentar berhasil dikirim</span>
</div>

<div class="pt-4 pb-12 px-4 md:px-6 min-h-screen bg-gray-50">
    <div class="max-w-7xl mx-auto space-y-6">
        
        <!-- Header -->
        <div class="flex items-center gap-4 mb-2">
            <a href="{{ route('admin.produk.detail') }}" class="btn-back-hover p-2 bg-white border border-gray-200 rounded-xl transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg>
            </a>
            <h1 class="text-xl md:text-2xl font-bold text-gray-800">Komentar Detail</h1>
        </div>

        <!-- Layout Grid Responsif -->
        <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">
            
            <!-- Kiri: Isi Komentar & Form Balas -->
            <div class="xl:col-span-2 space-y-6">
                
                <!-- Card Isi Komentar -->
                <div class="bg-white p-6 md:p-8 rounded-2xl border border-gray-100 shadow-sm">
                    <h2 class="text-lg font-bold text-gray-900 mb-6">Isi Komentar</h2>
                    
                    <!-- Profil & Bintang -->
                    <div class="flex flex-col md:flex-row md:items-start justify-between gap-4 mb-6">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-purple-100 text-main-purple font-bold flex items-center justify-center text-xl shadow-sm">S</div>
                            <div>
                                <h3 class="text-base font-bold text-gray-800">Sinta Amelia</h3>
                                <div class="flex items-center text-xs text-gray-400 mt-1 gap-1.5">
                                    <!-- Ikon Kalender Sejajar -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 -mt-0.5 relative bottom-[1px]" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                                    <span>28 Mei 2024, 14:20 WIB</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center gap-1 text-yellow-400">
                            <!-- Bintang 5 -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                        </div>
                    </div>

                    <!-- Pada Novel Section -->
                    <div class="mb-6">
                        <label class="block text-sm font-bold text-gray-800 mb-3">Pada Novel</label>
                        <div class="flex flex-wrap items-center justify-between gap-4 p-4 bg-white border border-gray-200 rounded-xl shadow-sm">
                            <div class="flex items-center gap-4">
                                <img src="{{ asset('images/As20.png') }}" alt="Cover Novel" class="w-14 h-20 object-cover rounded-lg shadow-sm">
                                <div>
                                    <h4 class="text-sm font-bold text-gray-900 mb-1">Bayangan Masa Lalu</h4>
                                    <p class="text-xs text-gray-500">oleh Nathania Putri</p>
                                </div>
                            </div>
                            <span class="inline-block px-3 py-1 bg-purple-50 text-main-purple text-xs font-bold rounded-lg">Romantis</span>
                        </div>
                    </div>

                    <!-- Teks Komentar -->
                    <div class="text-sm text-gray-600 leading-relaxed space-y-3">
                        <p>Cerita yang sangat menyentuh! Bikin baper di setiap babnya.</p>
                        <p>Alur ceritanya rapi dan karakter-karakternya terasa hidup.</p>
                        <p>Penulis berhasil membuat saya ikut merasakan setiap emosi yang ada di novel ini.</p>
                        <p>Sangat rekomendasi untuk dibaca!</p>
                    </div>
                </div>

                <!-- Card Balas Komentar -->
                <div class="bg-white p-6 md:p-8 rounded-2xl border border-gray-100 shadow-sm">
                    <h2 class="text-lg font-bold text-gray-900 mb-5">Balas Komentar</h2>
                    
                    <!-- Banner Informasi Sejajar -->
                    <div class="bg-purple-50 px-4 py-3.5 rounded-xl flex items-center gap-3 mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 -mt-0.3  text-main-purple flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        <p class="text-sm text-main-purple leading-snug">Berikan balasan yang sopan dan membangun. Balasan Anda akan terlihat oleh pengguna.</p>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-bold text-gray-800 mb-2">
                            Tulis Balasan <span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <textarea id="replyContent" rows="5" placeholder="Tulis balasan komentar di sini..." class="w-full p-4 border border-gray-300 rounded-xl text-sm focus:ring-2 focus:ring-purple-400 focus:border-purple-400 outline-none transition-all resize-y" onkeyup="updateCharCount(this)"></textarea>
                            <div class="absolute bottom-3 right-4 text-xs font-medium text-gray-400">
                                <span id="charCount">0</span> / 1000
                            </div>
                        </div>
                        <!-- Peringatan Kosong -->
                        <div id="emptyWarning" class="hidden flex items-center gap-1.5 mt-2 text-red-500 transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                            <span class="text-xs font-medium">Mohon isi komentar diatas</span>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row items-center gap-3 mt-8">
                        <a href="{{ route('admin.produk.detail') }}" class="w-full sm:w-auto px-6 py-2.5 text-sm font-bold text-gray-700 bg-white border border-gray-300 rounded-xl hover:bg-gray-100 hover:text-gray-900 transition-all text-center">
                            Batal
                        </a>
                        <button type="button" onclick="submitReply()" class="w-full sm:w-auto px-6 py-2.5 text-sm font-bold text-white bg-main-purple rounded-xl hover:bg-[#6D28D9] transition-all flex items-center justify-center gap-2">
                            <!-- Ikon Pesawat Naik Dikit -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 -mt-0.5 relative bottom-[1px]" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" /></svg>
                            Kirim Komentar
                        </button>
                    </div>
                </div>
            </div>

            <!-- Kanan: Sidebars -->
            <div class="space-y-6">
                
                <!-- Card Informasi Komentar -->
                <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
                    <h2 class="text-base font-bold text-gray-900 mb-5">Informasi Komentar</h2>
                    
                    <ul class="space-y-4">
                        <li class="flex items-center justify-between pb-4 border-b border-gray-50">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-purple-50 flex items-center justify-center text-main-purple">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14" /></svg>
                                </div>
                                <span class="text-sm font-semibold text-gray-800">ID Komentar</span>
                            </div>
                            <span class="text-sm font-medium text-gray-500">#KMT-20240528-0001</span>
                        </li>
                        
                        <li class="flex items-center justify-between pt-1">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-purple-50 flex items-center justify-center text-main-purple">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                                </div>
                                <span class="text-sm font-semibold text-gray-800">Dibuat Pada</span>
                            </div>
                            <span class="text-sm font-medium text-gray-500">28 Mei 2024, 14:20 WIB</span>
                        </li>
                    </ul>
                </div>

                <!-- Card Informasi Pengguna -->
                <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
                    <h2 class="text-base font-bold text-gray-900 mb-5">Informasi Pengguna</h2>
                    
                    <ul class="space-y-4">
                        <li class="flex items-center justify-between pb-4 border-b border-gray-50">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-purple-50 flex items-center justify-center text-main-purple">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                                </div>
                                <span class="text-sm font-semibold text-gray-800">Nama</span>
                            </div>
                            <span class="text-sm font-medium text-gray-500">Sinta Amelia</span>
                        </li>

                        <li class="flex items-center justify-between pb-4 border-b border-gray-50">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-purple-50 flex items-center justify-center text-main-purple">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                                </div>
                                <span class="text-sm font-semibold text-gray-800">Email</span>
                            </div>
                            <span class="text-sm font-medium text-gray-500 truncate w-24 sm:w-32 text-right">sinta.amelia@example.com</span>
                        </li>

                        <li class="flex items-center justify-between pb-4 border-b border-gray-50">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-purple-50 flex items-center justify-center text-main-purple">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                                </div>
                                <span class="text-sm font-semibold text-gray-800">Bergabung Sejak</span>
                            </div>
                            <span class="text-sm font-medium text-gray-500">12 Maret 2024</span>
                        </li>

                        <li class="flex items-center justify-between pt-1">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-purple-50 flex items-center justify-center text-main-purple">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" /></svg>
                                </div>
                                <span class="text-sm font-semibold text-gray-800">Total Komentar</span>
                            </div>
                            <span class="text-sm font-medium text-gray-500">7 komentar</span>
                        </li>
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
</div>

<script>
    // Menghitung karakter textarea
    function updateCharCount(val) {
        let len = val.value.length;
        if (len > 1000) {
            val.value = val.value.substring(0, 1000);
            len = 1000;
        }
        document.getElementById('charCount').textContent = len;
        
        // Sembunyikan pesan peringatan jika pengguna mulai mengetik
        if (len > 0) {
            document.getElementById('emptyWarning').classList.add('hidden');
        }
    }

    // Menangani pengiriman balasan
    function submitReply() {
        const content = document.getElementById('replyContent').value;
        const toast = document.getElementById('successToast');
        const warning = document.getElementById('emptyWarning');
        
        // Validasi jika kosong
        if(content.trim() === '') {
            warning.classList.remove('hidden');
            
            // Sembunyikan pesan peringatan secara otomatis setelah 4 detik
            setTimeout(() => {
                warning.classList.add('hidden');
            }, 4000);
            return;
        }

        // Jika berhasil, pastikan peringatan disembunyikan
        warning.classList.add('hidden');

        // Tampilkan Toast hijau dari atas
        toast.classList.remove('-top-24');
        toast.classList.add('top-6');

        // Kosongkan textarea setelah kirim
        document.getElementById('replyContent').value = '';
        document.getElementById('charCount').textContent = '0';

        // Sembunyikan Toast secara otomatis setelah 3 detik
        setTimeout(() => {
            toast.classList.remove('top-6');
            toast.classList.add('-top-24');
        }, 3000);
    }
</script>
@endsection