@extends('user.layouts.app')

@section('title', 'Detail_Produk')

@section('content')
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,400&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    .font-cormorant {
        font-family: 'Cormorant Garamond', serif;
    }
    .font-poppins {
        font-family: 'Poppins', sans-serif;
    }
    /* Spesifikasi Drop Shadow Utama */
    .custom-shadow {
        box-shadow: 0px 10px 40px 0px rgba(124, 58, 237, 0.30);
    }
    .hover-recommend-shadow:hover {
        box-shadow: 0px 10px 40px 0px rgba(124, 58, 237, 0.30);
    }
    .scroll-container::-webkit-scrollbar {
        width: 6px;
    }
    .scroll-container::-webkit-scrollbar-track {
        background: #18092F;
        border-radius: 4px;
    }
    .scroll-container::-webkit-scrollbar-thumb {
        background: #5C287E;
        border-radius: 4px;
    }
</style>

<div class="max-w-6xl mx-auto space-y-4 text-white font-poppins antialiased pt-2 pb-6 px-4 md:px-0">
    
    {{-- Section Header Info Utama --}}
    <div class="flex flex-col lg:flex-row gap-6 items-start w-full">
        {{-- Card Novel Utama --}}
        <div class="flex flex-col md:flex-row gap-6 items-start flex-1 w-full">
            <div class="w-full md:w-52 h-72 flex-shrink-0 bg-[#18092F] rounded-lg overflow-hidden border border-[#8B5CF6]/20 shadow-xl">
                <img src="{{ asset('images/As27.png') }}" alt="Cover Bayangan Masa Lalu" class="w-full h-full object-cover">
            </div>

            <div class="flex-1 flex flex-col justify-between w-full h-auto md:h-72 py-1 gap-4 md:gap-0">
                <div>
                    <h1 class="text-3xl md:text-4xl font-bold font-cormorant tracking-wide">Bayangan Masa Lalu</h1>
                    <div class="flex items-center gap-1 mt-1 text-[#D17CE3]">
                        <span class="text-sm font-light">Nathania Putri</span>
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                    </div>

                    <div class="flex flex-wrap items-center gap-x-2 gap-y-2 text-sm text-gray-300 mt-6 font-light">
                        <div class="flex items-center gap-1.5">
                            <svg class="w-5 h-5 text-amber-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <span class="font-bold text-white text-base">4.6</span>
                        </div>
                        <span class="mx-2 md:mx-4 text-[#5C287E] font-bold text-base">|</span>
                        
                        <div class="flex items-center gap-1.5">
                            <svg class="w-5 h-5 text-gray-400 fill-none stroke-current" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                            <span>163K</span>
                        </div>
                        <span class="mx-2 md:mx-4 text-[#5C287E] font-bold text-base">|</span>
                        
                        <div class="flex items-center gap-1.5">
                            <svg class="w-5 h-5 text-gray-400 fill-none stroke-current" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 3V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 002-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            <span>12 januari 2025</span>
                        </div>
                        <span class="mx-2 md:mx-4 text-[#5C287E] font-bold text-base">|</span>
                        
                        <label class="flex items-center gap-1.5 cursor-pointer select-none">
                            <input type="checkbox" class="hidden peer">
                            <svg class="w-5 h-5 text-white peer-checked:text-[#D17CE3] peer-checked:fill-current fill-none stroke-current transition-colors duration-200" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"/>
                            </svg>
                            <span class="peer-checked:text-[#D17CE3] transition-colors duration-200">Simpan</span>
                        </label>
                    </div>
                </div>

                {{-- Card Harga --}}
                <div class="w-full bg-[#22123F] border border-[#8B5CF6]/20 rounded-xl px-6 py-7 md:py-9 flex flex-col md:flex-row items-center justify-between gap-5 md:gap-6 custom-shadow mt-4">
                    <div class="flex items-center gap-4">
                        <svg class="w-10 h-10 text-[#D17CE3] flex-shrink-0" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                        <div>
                            <p class="text-xs text-gray-400 uppercase tracking-wider font-poppins font-medium">Harga Novel</p>
                            <p class="text-2xl font-extrabold text-[#D17CE3] font-poppins mt-0.5">Rp 50.000</p>
                        </div>
                    </div>
                    
                    <div class="flex flex-col items-center justify-center gap-2 flex-1 max-w-xs md:max-w-sm w-full">
                        <a href="#" onclick="event.preventDefault();" class="bg-gradient-to-r from-[#D17CE3] to-[#B87BFF] text-white font-semibold text-sm px-8 py-3 rounded-[10px] shadow-lg hover:opacity-90 transition-opacity text-center whitespace-nowrap w-full max-w-[220px]">
                            Beli Sekarang
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section Sinopsis --}}
    <div class="bg-[#22123F] rounded-xl p-6 custom-shadow border border-[#8B5CF6]/20">
        <h2 class="text-2xl md:text-3xl font-bold font-cormorant tracking-wide text-[#D17CE3] mb-3">Sinopsis</h2>
        <div class="text-xs text-gray-300 leading-relaxed space-y-3 font-light">
            <p>Aurelia tidak pernah menyangka bahwa seseorang dari masa lalunya akan datang kembali ketika hidupnya mulai berjalan dengan tenang, laki-laki yang pernah menjadi luka paling dalam, kini hadir dengan alasan yang belum ia mengerti.</p>
            <p>Di antara rindu yang tak biasa ia bohongi dan dendam yang masih membekas, Aurelia harus memilih antara membuka hati atau tetap hidup dalam bayangan masa lalu.</p>
        </div>
    </div>

    {{-- Card Status & Spesifikasi --}}
    <div class="bg-[#22123F] border border-[#8B5CF6]/20 rounded-xl p-4 grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-0 custom-shadow">
        <div class="flex items-center gap-3 md:px-4 md:border-r border-[#5C287E]/30">
            <div class="p-2.5 bg-[#22123F] rounded-lg text-[#D17CE3]">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 00-3.7-3.7 48.678 48.678 0 00-7.324 0 4.006 4.006 0 00-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3l-3-3m-12 3c0 1.232.046 2.453.138 3.662a4.006 4.006 0 003.7 3.7 48.656 48.656 0 007.324 0 4.006 4.006 0 003.7-3.7c.017-.22.032-.441.046-.662M3.5 12l3 3m-3-3l-3 3" />
                </svg>
            </div>
            <div>
                <p class="text-[10px] text-gray-400">Status</p>
                <p class="text-sm font-semibold">Ongoing</p>
            </div>
        </div>
        
        <div class="flex items-center gap-3 md:px-6 md:border-r border-[#5C287E]/30">
            <div class="p-2.5 bg-[#22123F] rounded-lg text-[#D17CE3]">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </div>
            <div>
                <p class="text-[10px] text-gray-400">Diperbarui</p>
                <p class="text-sm font-semibold">2 jam yang lalu</p>
            </div>
        </div>
        
        <div class="flex items-center gap-3 md:px-6 md:border-r border-[#5C287E]/30">
            <div class="p-2.5 bg-[#22123F] rounded-lg text-[#D17CE3]">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
            </div>
            <div>
                <p class="text-[10px] text-gray-400">Bab Terbaru</p>
                <p class="text-sm font-semibold">Bab 50</p>
            </div>
        </div>
        
        <div class="flex items-center gap-3 md:px-6">
            <div class="p-2.5 bg-[#22123F] rounded-lg text-[#D17CE3]">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A8.959 8.959 0 013 12c0-.778.099 1.533.284-2.253" />
                </svg>
            </div>
            <div>
                <p class="text-[10px] text-gray-400">Bahasa</p>
                <p class="text-sm font-semibold">Indonesia</p>
            </div>
        </div>
    </div>

    {{-- Grid Bawah (Daftar Bab & Sidebar Penulis) --}}
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-start" x-data="{ babTerbuka: false }">
        
        {{-- Card Daftar Bab --}}
        <div class="bg-[#22123F] rounded-xl p-6 custom-shadow border border-[#8B5CF6]/20 lg:col-span-2 relative pb-16">
            <h2 class="text-2xl md:text-3xl font-bold font-cormorant tracking-wide text-[#D17CE3] mb-4">Daftar Bab</h2>
            
            {{-- Container Bab --}}
            <div class="scroll-container overflow-y-auto pr-2 space-y-3 transition-all duration-300"
                :class="babTerbuka ? 'max-h-[500px]' : 'max-h-[380px]'">
                
                @php
                    $bab_asli = [
                        1 => ['Pertemuan yang Tidak Diinginkan', '2 Feb 2025'],
                        2 => ['Luka yang Belum Sembuh', '3 Feb 2025'],
                        3 => ['Rindu yang Disembunyikan', '3 Feb 2025'],
                        4 => ['Kenangan yang Menghantui', '4 Feb 2025'],
                        5 => ['Alasan untuk Kembali', '4 Feb 2025'],
                        6 => ['Hati yang Ragu', '5 Feb 2025'],
                        7 => ['Rahasia yang Terungkap', '5 Feb 2025'],
                        8 => ['Pilihan yang Sulit', '6 Feb 2025'],
                        9 => ['Maaf yang Tak Sperfect', '6 Feb 2025'],
                    ];
                @endphp

                @foreach($bab_asli as $num => $data)
                <a href="#" onclick="event.preventDefault();" class="flex items-center justify-between text-xs py-2.5 border-b border-[#5C287E]/40 last:border-0 hover:text-[#D17CE3] cursor-pointer group transition-colors duration-200 block">
                    <div class="flex items-center gap-2">
                        <span class="font-medium text-white group-hover:text-[#D17CE3] transition-colors duration-200">Bab {{ $num }}</span>
                        <span class="text-gray-400 group-hover:text-[#D17CE3]/70">-</span>
                        <span class="text-gray-400 truncate max-w-[140px] sm:max-w-[180px] md:max-w-[340px] group-hover:text-[#D17CE3]/80 transition-colors duration-200">{{ $data[0] }}</span>
                    </div>
                    <span class="text-gray-500 text-[11px] font-light group-hover:text-[#D17CE3]/60 transition-colors duration-200">{{ $data[1] }}</span>
                </a>
                @endforeach

                {{-- Bab Tambahan 10-20 --}}
                <div x-show="babTerbuka" x-collapse class="space-y-3 pt-1">
                    @for($i = 10; $i <= 20; $i++)
                    <a href="#" onclick="event.preventDefault();" class="flex items-center justify-between text-xs py-2.5 border-b border-[#5C287E]/40 last:border-0 hover:text-[#D17CE3] cursor-pointer group transition-colors duration-200 block">
                        <div class="flex items-center gap-2">
                            <span class="font-medium text-white group-hover:text-[#D17CE3] transition-colors duration-200">Bab {{ $i }}</span>
                            <span class="text-gray-400 group-hover:text-[#D17CE3]/70">-</span>
                            <span class="text-gray-400 italic group-hover:text-[#D17CE3]/80 transition-colors duration-200">Judul Kisah Sambungan Kelanjutan {{ $i }}</span>
                        </div>
                        <span class="text-gray-500 text-[11px] font-light group-hover:text-[#D17CE3]/60 transition-colors duration-200">{{ $i }} Feb 2025</span>
                    </a>
                    @endfor
                </div>
            </div>

            <div class="absolute bottom-4 left-6" x-show="!babTerbuka">
                <button @click="babTerbuka = true" class="text-xs text-[#D17CE3] border border-[#D17CE3] px-5 py-2 rounded-[10px] hover:bg-[#D17CE3] hover:text-white transition-all duration-200 flex items-center gap-1.5 font-medium">
                    Lihat Semua 
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                </button>
            </div>
        </div>

        {{-- Sidebar Kolom Kanan --}}
        <div class="space-y-4 w-full" x-data="{ clickedNovel: null }">
            {{-- Card Tentang Penulis --}}
            <div class="bg-[#22123F] rounded-xl p-6 custom-shadow border border-[#8B5CF6]/20 transform scale-[1.01] origin-top">
                <h2 class="text-2xl font-bold font-cormorant tracking-wide text-[#D17CE3] mb-4">Tentang Penulis</h2>
                <div class="flex items-start gap-4">
                    <div class="w-16 h-16 flex-shrink-0 rounded-full overflow-hidden shadow-md">
                        <img src="{{ asset('images/As32.jpg') }}" alt="Nathania Putri" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <div class="flex items-center gap-1">
                            <h3 class="text-base font-bold text-white tracking-wide">Nathania Putri</h3>
                            <svg class="w-4 h-4 text-[#D17CE3] fill-current" viewBox="0 0 24 24"><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                        </div>
                        <p class="text-xs text-gray-300 mt-1.5 leading-relaxed font-light">Penulis fiksi romantis yang percaya bahwa setiap luka akan menemukan akhirnya secara indah.</p>
                    </div>
                </div>
            </div>

            {{-- Card Rekomendasi Untukmu --}}
            <div class="bg-[#22123F] rounded-xl p-6 custom-shadow border border-[#8B5CF6]/20 transform scale-[1.01] origin-top">
                <div class="flex flex-wrap gap-x-2 gap-y-1 items-baseline justify-between mb-5">
                    <h2 class="text-xl md:text-2xl font-bold font-cormorant tracking-wide text-[#D17CE3] whitespace-nowrap">Rekomendasi untukmu</h2>
                    <a href="#" onclick="event.preventDefault();" class="text-xs text-[#D17CE3] hover:underline flex items-center gap-0.5 flex-shrink-0">
                        Lihat Semua
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                    </a>
                </div>

                <div class="space-y-4">
                    {{-- CARD 1 --}}
                    <div class="flex gap-4 p-3 rounded-xl cursor-pointer bg-[#18092F] border border-[#8B5CF6]/20 transition-all duration-300 ease-out hover:-translate-y-1.5 hover:border-[#D17CE3] hover-recommend-shadow"
                        @click="clickedNovel = 'rumah'"
                        :class="clickedNovel === 'rumah' ? 'border-[#D17CE3]' : ''">
                        <img src="{{ asset('images/As7.png') }}" alt="Rumah Penunggu" class="w-20 h-28 object-cover rounded-lg bg-[#18092F] border border-[#8B5CF6]/20 shadow-md flex-shrink-0">
                        <div class="flex flex-col justify-center flex-1">
                            <h4 class="text-base font-semibold tracking-wide transition-colors duration-200"
                                :class="clickedNovel === 'rumah' ? 'text-[#D17CE3]' : 'text-white hover:text-[#D17CE3]'">Rumah Penunggu</h4>
                            {{-- REVISI SPACE: Mengubah mt-2 menjadi mt-4 untuk memberi jarak lebih lebar antara judul dan rating --}}
                            <div class="flex items-center gap-1 mt-4 text-sm text-amber-400">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <span class="text-gray-200 font-medium text-xs">5.0</span>
                            </div>
                        </div>
                    </div>

                    {{-- CARD 2 --}}
                    <div class="flex gap-4 p-3 rounded-xl cursor-pointer bg-[#18092F] border border-[#8B5CF6]/20 transition-all duration-300 ease-out hover:-translate-y-1.5 hover:border-[#D17CE3] hover-recommend-shadow"
                        @click="clickedNovel = 'bintang'"
                        :class="clickedNovel === 'bintang' ? 'border-[#D17CE3]' : ''">
                        <img src="{{ asset('images/As10.png') }}" alt="Jejak Diantara Bintang" class="w-20 h-28 object-cover rounded-lg bg-[#18092F] border border-[#8B5CF6]/20 shadow-md flex-shrink-0">
                        <div class="flex flex-col justify-center flex-1">
                            <h4 class="text-base font-semibold tracking-wide transition-colors duration-200"
                                :class="clickedNovel === 'bintang' ? 'text-[#D17CE3]' : 'text-white hover:text-[#D17CE3]'">Jejak Diantara Bintang</h4>
                            <div class="flex items-center gap-1 mt-4 text-sm text-amber-400">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <span class="text-gray-200 font-medium text-xs">5.0</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Card Rating & Komentar Pembaca --}}
    <div class="bg-[#22123F] rounded-xl p-6 custom-shadow border border-[#8B5CF6]/20 space-y-6 relative pb-16" x-data="{ komentarTerbuka: false }">
        
        {{-- Bagian Atas: Visualisasi Rating --}}
        <div class="flex flex-col md:flex-row gap-8 items-center pb-6 border-b border-[#5C287E]/30">
            <div class="text-center md:border-r border-[#5C287E]/40 md:pr-10">
                <p class="text-5xl font-bold font-poppins">4.6</p>
                <div class="flex justify-center text-amber-400 gap-0.5 my-1.5">
                    @for($i=0; $i<5; $i++)
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    @endfor
                </div>
                <p class="text-[10px] text-gray-400">6.324 Ulasan</p>
            </div>

            <div class="flex-1 w-full space-y-2 text-xs text-gray-400">
                <div class="flex items-center gap-3">
                    <span class="w-3 text-center flex items-center justify-center gap-0.5">5<span class="text-amber-400 text-[9px]">★</span></span>
                    <div class="flex-1 h-2 bg-[#18092F] rounded-full overflow-hidden">
                        <div class="h-full bg-gradient-to-r from-[#D17CE3] to-[#B87BFF] rounded-full" style="width: 75%"></div>
                    </div>
                    <span class="w-8 text-right text-[11px]">8.9K</span>
                </div>
                <div class="flex items-center gap-3">
                    <span class="w-3 text-center flex items-center justify-center gap-0.5">4<span class="text-amber-400 text-[9px]">★</span></span>
                    <div class="flex-1 h-2 bg-[#18092F] rounded-full overflow-hidden">
                        <div class="h-full bg-gradient-to-r from-[#D17CE3] to-[#B87BFF] rounded-full" style="width: 35%"></div>
                    </div>
                    <span class="w-8 text-right text-[11px]">2.4K</span>
                </div>
                <div class="flex items-center gap-3">
                    <span class="w-3 text-center flex items-center justify-center gap-0.5">3<span class="text-amber-400 text-[9px]">★</span></span>
                    <div class="flex-1 h-2 bg-[#18092F] rounded-full overflow-hidden">
                        <div class="h-full bg-gradient-to-r from-[#D17CE3] to-[#B87BFF] rounded-full" style="width: 15%"></div>
                    </div>
                    <span class="w-8 text-right text-[11px]">690</span>
                </div>
                <div class="flex items-center gap-3">
                    <span class="w-3 text-center flex items-center justify-center gap-0.5">2<span class="text-amber-400 text-[9px]">★</span></span>
                    <div class="flex-1 h-2 bg-[#18092F] rounded-full overflow-hidden">
                        <div class="h-full bg-gradient-to-r from-[#D17CE3] to-[#B87BFF] rounded-full" style="width: 8%"></div>
                    </div>
                    <span class="w-8 text-right text-[11px]">210</span>
                </div>
                <div class="flex items-center gap-3">
                    <span class="w-3 text-center flex items-center justify-center gap-0.5">1<span class="text-amber-400 text-[9px]">★</span></span>
                    <div class="flex-1 h-2 bg-[#18092F] rounded-full overflow-hidden">
                        <div class="h-full bg-gradient-to-r from-[#D17CE3] to-[#B87BFF] rounded-full" style="width: 4%"></div>
                    </div>
                    <span class="w-8 text-right text-[11px]">145</span>
                </div>
            </div>
        </div>

        {{-- Bagian Bawah: Konten Komentar Pembaca --}}
        <div>
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-2xl md:text-3xl font-bold font-cormorant tracking-wide text-[#D17CE3] -mt-2">Komentar Pembaca</h2>
                <a href="#" onclick="event.preventDefault();" class="bg-[#D17CE3] text-white text-sm font-medium px-6 py-2 rounded-lg hover:bg-opacity-90 transition-colors">
                    Tulis Komentar
                </a>
            </div>

            <div class="scroll-container overflow-y-auto pr-2 space-y-5 transition-all duration-300"
                :class="komentarTerbuka ? 'max-h-[550px]' : 'max-h-auto'">              
                {{-- Komentar 1 --}}
                <div class="grid grid-cols-1 md:grid-cols-[220px_1fr] gap-2 md:gap-4 items-start text-xs pb-4 border-b border-[#5C287E]/30">
                    <div class="flex items-start gap-3">
                        <div class="w-10 h-10 rounded-full bg-[#18092F] flex items-center justify-center text-gray-400 border border-[#8B5CF6]/30 flex-shrink-0">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5-4-8-4z"/></svg>
                        </div>
                        <div class="flex flex-col space-y-1">
                            <span class="font-semibold text-white text-sm">Anissa Putri</span>
                            <div class="flex items-center gap-2">
                                <div class="flex text-amber-400 text-[9px]">★★★★★</div>
                                <span class="text-[10px] text-gray-500 font-light">2 hari lalu</span>
                            </div>
                        </div>
                    </div>
                    <div class="pt-1">
                        <p class="text-gray-300 leading-relaxed font-light text-sm">Cerita yang menyentuh banget, setiap bab bikin penasaran dan karakter Aurelia tu relatable. Wajib baca sih.</p>
                    </div>
                </div>

                {{-- Komentar 2 --}}
                <div class="grid grid-cols-1 md:grid-cols-[220px_1fr] gap-2 md:gap-4 items-start text-xs pb-4 border-b border-[#5C287E]/30">
                    <div class="flex items-start gap-3">
                        <div class="w-10 h-10 rounded-full bg-[#18092F] flex items-center justify-center text-gray-400 border border-[#8B5CF6]/30 flex-shrink-0">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5-4-8-4z"/></svg>
                        </div>
                        <div class="flex flex-col space-y-1">
                            <span class="font-semibold text-white text-sm">Raka Pratama</span>
                            <div class="flex items-center gap-2">
                                <div class="flex text-amber-400 text-[9px]">★★★★★</div>
                                <span class="text-[10px] text-gray-500 font-light">3 hari lalu</span>
                            </div>
                        </div>
                    </div>
                    <div class="pt-1">
                        <p class="text-gray-300 leading-relaxed font-light text-sm">Plot twist-nya keren, bikin baper tapi juga mikir. Author nya jago banget bangun emosi pembaca.</p>
                    </div>
                </div>

                {{-- Komentar 3 --}}
                <div class="grid grid-cols-1 md:grid-cols-[220px_1fr] gap-2 md:gap-4 items-start text-xs pb-4 border-b border-[#5C287E]/30" :class="!komentarTerbuka ? 'last:border-0' : ''">
                    <div class="flex items-start gap-3">
                        <div class="w-10 h-10 rounded-full bg-[#18092F] flex items-center justify-center text-gray-400 border border-[#8B5CF6]/30 flex-shrink-0">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5-4-8-4z"/></svg>
                        </div>
                        <div class="flex flex-col space-y-1">
                            <span class="font-semibold text-white text-sm">Dewi Lestari</span>
                            <div class="flex items-center gap-2">
                                <div class="flex text-amber-400 text-[9px]">★★★★★</div>
                                <span class="text-[10px] text-gray-500 font-light">5 hari lalu</span>
                            </div>
                        </div>
                    </div>
                    <div class="pt-1">
                        <p class="text-gray-300 leading-relaxed font-light text-sm">Alurnya tidak gampang ditebak, konflikya dapet, suka banget sama chemistry Damar dan Aurelia</p>
                    </div>
                </div>

                {{-- Komentar Tambahan --}}
                <div x-show="komentarTerbuka" x-collapse class="space-y-5 pt-1">
                    {{-- Komentar 4 --}}
                    <div class="grid grid-cols-1 md:grid-cols-[220px_1fr] gap-2 md:gap-4 items-start text-xs pb-4 border-b border-[#5C287E]/30">
                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 rounded-full bg-[#18092F] flex items-center justify-center text-gray-400 border border-[#8B5CF6]/30 flex-shrink-0">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5-4-8-4z"/></svg>
                            </div>
                            <div class="flex flex-col space-y-1">
                                <span class="font-semibold text-white text-sm">Budi Setiawan</span>
                                <div class="flex items-center gap-2">
                                    <div class="flex text-amber-400 text-[9px]">★★★★☆</div>
                                    <span class="text-[10px] text-gray-500 font-light">1 minggu lalu</span>
                                </div>
                            </div>
                        </div>
                        <div class="pt-1">
                            <p class="text-gray-300 leading-relaxed font-light text-sm">Karakter pendukungnya juga punya porsi yang pas. Gaya bahasa penulis mengalir lancar dan rapi.</p>
                        </div>
                    </div>

                    {{-- Komentar 5 --}}
                    <div class="grid grid-cols-1 md:grid-cols-[220px_1fr] gap-2 md:gap-4 items-start text-xs pb-4 border-b border-[#5C287E]/30 last:border-0">
                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 rounded-full bg-[#18092F] flex items-center justify-center text-gray-400 border border-[#8B5CF6]/30 flex-shrink-0">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5-4-8-4z"/></svg>
                            </div>
                            <div class="flex flex-col space-y-1">
                                <span class="font-semibold text-white text-sm">Siti Aminah</span>
                                <div class="flex items-center gap-2">
                                    <div class="flex text-amber-400 text-[9px]">★★★★★</div>
                                    <span class="text-[10px] text-gray-500 font-light">1 minggu lalu</span>
                                </div>
                            </div>
                        </div>
                        <div class="pt-1">
                            <p class="text-gray-300 leading-relaxed font-light text-sm">Nangis banget baca bab pertengahan. Benar-benar kerasa perjuangan emosionalnya Aurelia di sini.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="absolute bottom-4 left-6" x-show="!komentarTerbuka">
                <button @click="komentarTerbuka = true" class="text-xs text-[#D17CE3] hover:text-[#B87BFF] transition-all duration-200 flex items-center gap-1.5 font-medium bg-transparent border-0 p-0">
                    Lihat Semua Komentar
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                </button>
            </div>
        </div>
    </div>

</div>
@endsection