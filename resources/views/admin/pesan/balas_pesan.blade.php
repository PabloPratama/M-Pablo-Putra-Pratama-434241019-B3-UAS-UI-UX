@extends('admin.layouts.app')

@section('title', 'Balas Pesan')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>
    body, h1, h2, h3, h4, p, span, div, textarea, button { font-family: 'Poppins', sans-serif !important; }
    
    .btn-back-hover:hover { background-color: #7C3AED !important; border-color: #7C3AED !important;}
    .btn-back-hover:hover svg { stroke: white !important; }

    textarea::-webkit-scrollbar { width: 6px; }
    textarea::-webkit-scrollbar-track { background: #f1f1f1; border-radius: 4px; }
    textarea::-webkit-scrollbar-thumb { background: #d1d5db; border-radius: 4px; }
    textarea::-webkit-scrollbar-thumb:hover { background: #9ca3af; }
</style>

<div id="successToast" class="fixed -top-24 left-1/2 transform -translate-x-1/2 transition-all duration-500 z-50 flex items-center gap-3 bg-white border border-green-200 shadow-xl px-5 py-3.5 rounded-2xl">
    <div class="flex-shrink-0 w-8 h-8 flex items-center justify-center bg-green-100 text-green-600 rounded-full">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
        </svg>
    </div>
    <span class="text-sm font-bold text-gray-800">Komentar berhasil dikirim</span>
</div>

<div class="py-6 px-4 md:px-6 min-h-screen bg-gray-50">
    <div class="max-w-7xl mx-auto">
        
        <div class="flex items-center gap-4 mb-8">
            <a href="{{ route('admin.pesan.index') }}" class="btn-back-hover p-2 bg-white border border-gray-200 rounded-xl transition-all shadow-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7" /></svg>
            </a>
            <h1 class="text-xl md:text-2xl font-bold text-gray-800">Balas Pesan</h1>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
            
            <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm flex flex-col h-full">
                <h3 class="text-lg font-bold text-gray-800 mb-5">Isi Aduan</h3>
                
                <div class="flex flex-col flex-grow">
                    <p class="text-sm font-semibold text-gray-700 mb-2">Pesan</p>
                    <p id="dt-pesan-full" class="text-sm text-gray-600 leading-relaxed bg-gray-50 p-4 rounded-xl flex-grow border border-gray-100 whitespace-pre-wrap">
                        -
                    </p>
                    <div class="mt-4 flex items-center gap-1.5 text-xs text-gray-400 font-medium">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 relative -top-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        Dikirim pada <span id="dt-dikirim-pada">-</span>
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm flex flex-col h-full">
                <h3 class="text-lg font-bold text-gray-800 mb-5">Data Pengirim</h3>
                
                <div class="flex items-center gap-4 mb-6">
                    <div id="dt-bg-inisial" class="w-14 h-14 rounded-full text-white flex items-center justify-center text-xl font-bold flex-shrink-0 bg-gray-300 shadow-inner">
                        -
                    </div>
                    <div>
                        <h4 id="dt-nama" class="font-bold text-gray-800 text-base">-</h4>
                        <p id="dt-username" class="text-sm text-gray-500 mt-0.5">-</p>
                    </div>
                </div>

                <div class="space-y-4 text-sm mt-2 flex-grow">
                    <div class="flex justify-between items-start border-b border-gray-50 pb-3">
                        <span class="text-gray-500 w-1/3">Email</span>
                        <span id="dt-email" class="font-semibold text-gray-800 w-2/3 text-right break-words">-</span>
                    </div>
                    <div class="flex justify-between items-start border-b border-gray-50 pb-3">
                        <span class="text-gray-500 w-1/3">Bergabung Sejak</span>
                        <span id="dt-bergabung" class="font-semibold text-gray-800 w-2/3 text-right">-</span>
                    </div>
                    <div class="flex justify-between items-start border-b border-gray-50 pb-3">
                        <span class="text-gray-500 w-1/3">Terakhir Aktif</span>
                        <span id="dt-aktif" class="font-semibold text-gray-800 w-2/3 text-right">-</span>
                    </div>
                    <div class="flex justify-between items-start">
                        <span class="text-gray-500 w-1/3">Total Pesan</span>
                        <span id="dt-total" class="font-semibold text-gray-800 w-2/3 text-right">-</span>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
            <h3 class="text-lg font-bold text-gray-800 mb-5">Tulis Balasan</h3>
            
            <div class="mb-4 relative">
                <label for="balasanInput" class="block text-sm font-semibold text-gray-700 mb-2">Balasan Anda <span class="text-red-500">*</span></label>
                <textarea id="balasanInput" rows="5" class="w-full px-4 py-3 bg-white border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-purple-400 focus:border-transparent transition-all resize-y" placeholder="Tulis balasan untuk pengguna..."></textarea>
                
                <div id="warning-msg" class="hidden items-center gap-1.5 text-red-500 text-sm mt-2 transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                    </svg>
                    <span>Harap isi form diatas</span>
                </div>
            </div>

            <div class="bg-purple-50 text-purple-700 rounded-xl p-4 flex items-start gap-1.5 mb-6">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mt-0 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <p class="text-sm font-medium">Balasan akan dikirim ke email pengguna dan dapat dilihat oleh pengguna melalui halaman Pesan.</p>
            </div>

            <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
                <a href="{{ route('admin.pesan.index') }}" class="w-full sm:w-auto px-6 py-2.5 bg-white border border-gray-200 text-gray-700 font-semibold rounded-xl hover:bg-gray-50 transition-all text-center text-sm">
                    Batal
                </a>
                <button onclick="kirimBalasan()" class="w-full sm:w-auto px-6 py-2.5 bg-purple-600 border border-transparent text-white font-semibold rounded-xl hover:bg-purple-700 transition-all flex items-center justify-center gap-2 text-sm" style="background-color: #7C3AED;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transform -rotate-45 mb-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                    </svg>
                    Kirim via Email
                </button>
            </div>
        </div>

    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const msgDataStr = localStorage.getItem('selected_msg');
        
        if (msgDataStr) {
            const msg = JSON.parse(msgDataStr);
            const fullDateTime = `${msg.tanggal}, ${msg.waktu}`;

            // --- Info Aduan ---
            document.getElementById('dt-pesan-full').innerText = msg.pesan_full;
            document.getElementById('dt-dikirim-pada').innerText = fullDateTime;

            // --- Info Pengirim ---
            const inisialEl = document.getElementById('dt-bg-inisial');
            inisialEl.innerText = msg.inisial;
            inisialEl.className = `w-14 h-14 rounded-full text-white flex items-center justify-center text-xl font-bold flex-shrink-0 shadow-inner ${msg.bg_inisial}`;
            
            document.getElementById('dt-nama').innerText = msg.nama;
            document.getElementById('dt-username').innerText = msg.username;
            document.getElementById('dt-email').innerText = msg.email;
            document.getElementById('dt-bergabung').innerText = msg.bergabung;
            document.getElementById('dt-aktif').innerText = msg.aktif;
            document.getElementById('dt-total').innerText = msg.total;
        }
    });

    function kirimBalasan() {
        const textarea = document.getElementById('balasanInput');
        const warning = document.getElementById('warning-msg');
        const toast = document.getElementById('successToast');
        
        // Cek validasi
        if (textarea.value.trim() === '') {
            // Tampilkan warning
            warning.classList.remove('hidden');
            warning.classList.add('flex');
            
            // Hilangkan kembali dalam 3 detik
            setTimeout(() => {
                warning.classList.add('hidden');
                warning.classList.remove('flex');
            }, 3000);
        } else {
            // Hilangkan warning jika ada
            warning.classList.add('hidden');
            warning.classList.remove('flex');

            // Kosongkan textarea
            textarea.value = '';

            // Tampilkan toast
            toast.classList.remove('-top-24');
            toast.classList.add('top-6');

            // Sembunyikan toast setelah 3 detik 
            setTimeout(() => {
                toast.classList.remove('top-6');
                toast.classList.add('-top-24');
            }, 3000);
        }
    }
</script>
@endsection