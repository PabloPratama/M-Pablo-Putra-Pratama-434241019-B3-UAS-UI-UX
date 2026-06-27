@extends('admin.layouts.app')

@section('title', 'Detail Novel')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>
    body, div, h1, h2, h3, h4, p, span, button, label { font-family: 'Poppins', sans-serif !important; }
    
    .text-main-purple { color: #7C3AED; }
    .bg-main-purple { background-color: #7C3AED; }
    .border-main-purple { border-color: #7C3AED; }
    
    .btn-back-hover:hover { background-color: #7C3AED !important; }
    .btn-back-hover:hover svg { stroke: white !important; }

    .btn-outline-primary { border: 1px solid #7C3AED !important; color: #7C3AED !important; background: transparent; }
    .btn-outline-primary:hover { background-color: #F3E8FF !important; }
</style>

<div class="pt-4 pb-12 px-4 md:px-6 min-h-screen bg-gray-50">
    <div class="max-w-7xl mx-auto space-y-6">
        
        <!-- Header -->
        <div class="flex items-center gap-4 mb-2">
            <a href="{{ route('admin.produk.index') }}" class="btn-back-hover p-2 bg-white border border-gray-200 rounded-xl transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg>
            </a>
            <h1 class="text-xl md:text-2xl font-bold text-gray-800">Detail Novel</h1>
        </div>

        <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">
            
            <!-- Kiri: Info Novel & Daftar Bab -->
            <div class="xl:col-span-2 space-y-6">
                
                <!-- Card Informasi Novel -->
                <div class="bg-white p-6 md:p-8 rounded-2xl border border-gray-100 shadow-sm">
                    <h2 class="text-lg font-bold text-gray-800 mb-6">Informasi Novel</h2>
                    
                    <div class="flex flex-col md:flex-row gap-8">
                        <!-- Cover Image -->
                        <div class="flex-shrink-0">
                            <img src="{{ asset('images/As20.png') }}" alt="Cover Novel" class="w-full md:w-48 h-auto object-cover rounded-xl shadow-md border border-gray-200">
                        </div>
                        
                        <!-- Detail Text -->
                        <div class="flex-1 grid grid-cols-1 sm:grid-cols-2 gap-y-5 gap-x-4">
                            <div class="sm:col-span-2">
                                <label class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-1">Judul Novel</label>
                                <p class="text-base font-semibold text-gray-800">Jejak yang hilang</p>
                            </div>

                            <div class="sm:col-span-2">
                                <label class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-1">Penulis</label>
                                <p class="text-base font-semibold text-gray-800">Theo Nirwana</p>
                            </div>

                            <div>
                                <label class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-1">Genre</label>
                                <p class="text-base font-semibold text-gray-800">Thriller</p>
                            </div>

                            <div>
                                <label class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-1">Status</label>
                                <div>
                                    <span class="inline-block px-3 py-1 text-xs font-bold bg-green-100 text-green-700 rounded-md">Published</span>
                                </div>
                            </div>

                            <div>
                                <label class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-1">Harga</label>
                                <p class="text-base font-semibold text-gray-800">Rp 50.000</p>
                            </div>

                            <div>
                                <label class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-1">Total Bab</label>
                                <p class="text-base font-semibold text-gray-800">26 Bab</p>
                            </div>
                        </div>
                    </div>

                    <!-- Sinopsis -->
                    <div class="mt-8 pt-6 border-t border-gray-100">
                        <label class="block text-sm font-bold text-gray-800 mb-3">Sinopsis</label>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Sebuah jejak kaki misterius ditemukan di ambang pintu rumah tua yang sudah lama ditinggalkan. Theo Nirwana merangkai kisah ketegangan psikologis yang membawa pembacanya menyelami pikiran seorang detektif yang kehilangan arah. Mampukah ia menemukan siapa yang bersembunyi di balik bayang-bayang sebelum semuanya terlambat?
                        </p>
                    </div>
                </div>

                <!-- Card Daftar Bab -->
                <div class="bg-white p-6 md:p-8 rounded-2xl border border-gray-100 shadow-sm">
                    <h2 class="text-lg font-bold text-gray-800 mb-4">Daftar Bab</h2>
                    
                    <ul id="chapterList" class="space-y-0 divide-y divide-gray-100 border-t border-b border-gray-100 mb-4">
                        <!-- 5 Bab Awal (Tampil) -->
                        <li class="py-4 flex items-center justify-between">
                            <span class="text-sm font-semibold text-gray-800">Bab 1 - Permulaan Gelap</span>
                        </li>
                        <li class="py-4 flex items-center justify-between">
                            <span class="text-sm font-semibold text-gray-800">Bab 2 - Surat Tanpa Nama</span>
                        </li>
                        <li class="py-4 flex items-center justify-between">
                            <span class="text-sm font-semibold text-gray-800">Bab 3 - Jejak Kaki di Teras</span>
                        </li>
                        <li class="py-4 flex items-center justify-between">
                            <span class="text-sm font-semibold text-gray-800">Bab 4 - Ingatan yang Hilang</span>
                        </li>
                        <li class="py-4 flex items-center justify-between">
                            <span class="text-sm font-semibold text-gray-800">Bab 5 - Saksi Bisu</span>
                        </li>
                        
                        <!-- 5 Bab Tambahan (Sembunyi) -->
                        <li class="py-4 flex items-center justify-between hidden extra-chapter">
                            <span class="text-sm font-semibold text-gray-800">Bab 6 - Rekaman Tersembunyi</span>
                        </li>
                        <li class="py-4 flex items-center justify-between hidden extra-chapter">
                            <span class="text-sm font-semibold text-gray-800">Bab 7 - Alibi yang Sempurna</span>
                        </li>
                        <li class="py-4 flex items-center justify-between hidden extra-chapter">
                            <span class="text-sm font-semibold text-gray-800">Bab 8 - Pengkhianatan Teman Dekat</span>
                        </li>
                        <li class="py-4 flex items-center justify-between hidden extra-chapter">
                            <span class="text-sm font-semibold text-gray-800">Bab 9 - Jejak Berdarah</span>
                        </li>
                        <li class="py-4 flex items-center justify-between hidden extra-chapter">
                            <span class="text-sm font-semibold text-gray-800">Bab 10 - Konfrontasi Malam Hari</span>
                        </li>
                    </ul>
                    
                    <!-- Tombol Lihat Semua Bab -->
                    <button type="button" id="btnToggleChapters" onclick="toggleChapters()" class="w-full py-2.5 font-bold text-sm text-[#7C3AED] bg-purple-50 hover:bg-purple-100 rounded-xl transition-all flex items-center justify-center">
                        <span id="textToggleChapters">Lihat Semua Bab</span>
                    </button>
                </div>
            </div>

            <!-- Kanan: Publikasi & Komentar -->
            <div class="space-y-6">
                
                <!-- Card Informasi Publikasi -->
                <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm space-y-5">
                    <h2 class="text-lg font-bold text-gray-800 mb-2">Informasi Publikasi</h2>
                    
                    <div>
                        <label class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-1">Dibaca</label>
                        <p class="text-sm font-semibold text-gray-800">76.543 kali</p>
                    </div>
                    
                    <div>
                        <label class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-1">Ditambahkan</label>
                        <p class="text-sm font-semibold text-gray-800">26 Mei 2024, 09:15 WIB</p>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-gray-400 uppercase tracking-wider mb-1">Terakhir Diupdate</label>
                        <p class="text-sm font-semibold text-gray-800">28 Mei 2024, 11:30 WIB</p>
                    </div>
                </div>

                <!-- Card Daftar Komentar -->
                <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
                    <h2 class="text-lg font-bold text-gray-800 mb-4">Daftar Komentar</h2>

                    <div class="space-y-5 mb-5">
                        <!-- Komentar 1-5 (Tampil) -->
                        <div class="border-b border-gray-100 pb-4">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 rounded-full bg-purple-100 text-purple-600 font-bold flex items-center justify-center text-xs">S</div>
                                    <div>
                                        <h4 class="text-sm font-bold text-gray-800">Sinta Amelia</h4>
                                        <p class="text-sm text-gray-400 mt-1 leading-none">28 Mei 2024, 14:20 WIB</p>
                                    </div>
                                </div>
                                <a href="{{ route('admin.produk.komentar') }}" 
                                class="text-xs font-bold text-[#7C3AED] border border-[#7C3AED] px-3 py-1 rounded-md transition-all hover:bg-purple-50 active:bg-purple-100 inline-block text-center">
                                Balas
                                </a>
                            </div>
                            <p class="text-sm text-gray-600 mt-1 pl-11">Cerita yang sangat menyentuh! Bikin penasaran di setiap babnya.</p>
                        </div>

                        <div class="border-b border-gray-100 pb-4">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 rounded-full bg-purple-100 text-purple-600 font-bold flex items-center justify-center text-xs">R</div>
                                    <div>
                                        <h4 class="text-sm font-bold text-gray-800">Rizky Pratama</h4>
                                        <p class="text-sm text-gray-400 mt-1 leading-none">27 Mei 2024, 21:15 WIB</p>
                                    </div>
                                </div>
                                <a href="{{ route('admin.produk.komentar') }}" 
                                class="text-xs font-bold text-[#7C3AED] border border-[#7C3AED] px-3 py-1 rounded-md transition-all hover:bg-purple-50 active:bg-purple-100 inline-block text-center">
                                Balas
                                </a>
                            </div>
                            <p class="text-sm text-gray-600 mt-1 pl-11">Plot twist-nya keren banget, tidak terduga!</p>
                        </div>

                        <div class="border-b border-gray-100 pb-4">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 rounded-full bg-purple-100 text-purple-600 font-bold flex items-center justify-center text-xs">D</div>
                                    <div>
                                        <h4 class="text-sm font-bold text-gray-800">Dewi Lestari</h4>
                                        <p class="text-sm text-gray-400 mt-1 leading-none">26 Mei 2024, 09:45 WIB</p>
                                    </div>
                                </div>
                                <a href="{{ route('admin.produk.komentar') }}" 
                                class="text-xs font-bold text-[#7C3AED] border border-[#7C3AED] px-3 py-1 rounded-md transition-all hover:bg-purple-50 active:bg-purple-100 inline-block text-center">
                                Balas
                                </a>
                            </div>
                            <p class="text-sm text-gray-600 mt-1 pl-11">Penulisnya jago banget merangkai kata. Suka ketegangannya!</p>
                        </div>

                        <div class="border-b border-gray-100 pb-4">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 rounded-full bg-purple-100 text-purple-600 font-bold flex items-center justify-center text-xs">A</div>
                                    <div>
                                        <h4 class="text-sm font-bold text-gray-800">Andi Maulana</h4>
                                        <p class="text-sm text-gray-400 mt-1 leading-none">25 Mei 2024, 17:30 WIB</p>
                                    </div>
                                </div>
                                <a href="{{ route('admin.produk.komentar') }}" 
                                class="text-xs font-bold text-[#7C3AED] border border-[#7C3AED] px-3 py-1 rounded-md transition-all hover:bg-purple-50 active:bg-purple-100 inline-block text-center">
                                Balas
                                </a>
                            </div>
                            <p class="text-sm text-gray-600 mt-1 pl-11">Ceritanya bagus, tapi beberapa bagian agak lambat pembawaannya.</p>
                        </div>

                        <div class="border-b border-gray-100 pb-4">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 rounded-full bg-purple-100 text-purple-600 font-bold flex items-center justify-center text-xs">M</div>
                                    <div>
                                        <h4 class="text-sm font-bold text-gray-800">Maya Anggraini</h4>
                                        <p class="text-sm text-gray-400 mt-1 leading-none">24 Mei 2024, 11:10 WIB</p>
                                    </div>
                                </div>
                                <a href="{{ route('admin.produk.komentar') }}" 
                                class="text-xs font-bold text-[#7C3AED] border border-[#7C3AED] px-3 py-1 rounded-md transition-all hover:bg-purple-50 active:bg-purple-100 inline-block text-center">
                                Balas
                                </a>
                            </div>
                            <p class="text-sm text-gray-600 mt-1 pl-11">Nggak sabar nunggu misteri selanjutnya terbongkar!</p>
                        </div>

                        <!-- 3 Komentar Tambahan (Sembunyi) -->
                        <div class="border-b border-gray-100 pb-4 hidden extra-comment">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 rounded-full bg-purple-100 text-purple-600 font-bold flex items-center justify-center text-xs">F</div>
                                    <div>
                                        <h4 class="text-sm font-bold text-gray-800">Faisal Rahman</h4>
                                        <p class="text-sm text-gray-400 mt-1 leading-none">23 Mei 2024, 08:20 WIB</p>
                                    </div>
                                </div>
                                <a href="{{ route('admin.produk.komentar') }}" 
                                class="text-xs font-bold text-[#7C3AED] border border-[#7C3AED] px-3 py-1 rounded-md transition-all hover:bg-purple-50 active:bg-purple-100 inline-block text-center">
                                Balas
                                </a>
                            </div>
                            <p class="text-sm text-gray-600 mt-1 pl-11">Detektifnya terlalu gegabah, tapi tetap seru dibaca.</p>
                        </div>

                        <div class="border-b border-gray-100 pb-4 hidden extra-comment">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 rounded-full bg-purple-100 text-purple-600 font-bold flex items-center justify-center text-xs">N</div>
                                    <div>
                                        <h4 class="text-sm font-bold text-gray-800">Nisa Paramita</h4>
                                        <p class="text-sm text-gray-400 mt-1 leading-none">22 Mei 2024, 19:45 WIB</p>
                                    </div>
                                </div>
                                <a href="{{ route('admin.produk.komentar') }}" 
                                class="text-xs font-bold text-[#7C3AED] border border-[#7C3AED] px-3 py-1 rounded-md transition-all hover:bg-purple-50 active:bg-purple-100 inline-block text-center">
                                Balas
                                </a>
                            </div>
                            <p class="text-sm text-gray-600 mt-1 pl-11">Bagus banget! Deskripsi latarnya bikin merinding.</p>
                        </div>

                        <div class="border-b border-gray-100 pb-4 hidden extra-comment">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 rounded-full bg-purple-100 text-purple-600 font-bold flex items-center justify-center text-xs">B</div>
                                    <div>
                                        <h4 class="text-sm font-bold text-gray-800">Budi Santoso</h4>
                                        <p class="text-sm text-gray-400 mt-1 leading-none">21 Mei 2024, 15:10 WIB</p>
                                    </div>
                                </div>
                                <a href="{{ route('admin.produk.komentar') }}" 
                                class="text-xs font-bold text-[#7C3AED] border border-[#7C3AED] px-3 py-1 rounded-md transition-all hover:bg-purple-50 active:bg-purple-100 inline-block text-center">
                                Balas
                                </a>
                            </div>
                            <p class="text-sm text-gray-600 mt-1 pl-11">Sangat merekomendasikan novel ini untuk pecinta thriller!</p>
                        </div>
                    </div>

                    <button type="button" id="btnToggleComments" onclick="toggleComments()" class="w-full py-2.5 font-bold text-sm text-[#7C3AED] bg-white border border-[#7C3AED] hover:bg-purple-50 rounded-xl transition-all flex items-center justify-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#7C3AED]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                        <span id="textToggleComments">Lihat Semua Komentar</span>
                    </button>
                </div>
            </div>
            
        </div>
    </div>
</div>

<script>
    let isChaptersExpanded = false;
    function toggleChapters() {
        const extraChapters = document.querySelectorAll('.extra-chapter');
        const btnText = document.getElementById('textToggleChapters');
        
        isChaptersExpanded = !isChaptersExpanded;
        
        extraChapters.forEach(el => {
            if (isChaptersExpanded) {
                el.classList.remove('hidden');
            } else {
                el.classList.add('hidden');
            }
        });
        
        btnText.innerText = isChaptersExpanded ? "Sembunyikan Bab" : "Lihat Semua Bab";
    }

    let isCommentsExpanded = false;
    function toggleComments() {
        const extraComments = document.querySelectorAll('.extra-comment');
        const btnText = document.getElementById('textToggleComments');
        
        isCommentsExpanded = !isCommentsExpanded;
        
        extraComments.forEach(el => {
            if (isCommentsExpanded) {
                el.classList.remove('hidden');
            } else {
                el.classList.add('hidden');
            }
        });
        
        btnText.innerText = isCommentsExpanded ? "Sembunyikan Komentar" : "Lihat Semua Komentar";
    }
</script>
@endsection