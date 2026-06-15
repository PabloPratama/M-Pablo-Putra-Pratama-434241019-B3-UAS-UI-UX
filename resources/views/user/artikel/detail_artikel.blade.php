@extends('user.layouts.app')

@section('title', 'Detail_Artikel')

@section('content')
<main class="max-w-7xl mx-auto px-6 py-10 w-full flex-grow">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 items-start">
        
        {{-- KONTEN UTAMA LEBAR (KIRI) --}}
        <div class="lg:col-span-2 space-y-8">
            <div>
                <h1 class="font-serif-cormorant text-7xl font-bold leading-tight tracking-wide mb-4 text-white" style="font-family:'Cormorant Garamond', serif;">
                    Review : Jejak di Antara Bintang
                </h1>
                <p class="text-gray-300 text-lg max-w-2xl mb-4">
                    Adalah sebuah perjalanan luar biasa tentang tentang takdir, keberanian, dan cinta yang melintasi waktu.
                </p>
                <div class="flex items-center text-xs text-gray-400 space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <span>20 April 2026</span>
                </div>
            </div>

            <div class="bg-[#18092F] border border-[#8B5CF6]/30 rounded-xl p-6 w-full shadow-none hover:shadow-[0_10px_40px_rgba(124,58,237,0.3)] transition duration-300">
                <h2 class="font-serif-cormorant text-2xl font-bold mb-4 text-white">Daftar isi</h2>
                <ul class="space-y-2 text-sm text-gray-300 list-none pl-0">
                    <li><a href="#" class="hover:text-[#D17CE3] transition">Sinopsis Singkat</a></li>
                    <li><a href="#" class="hover:text-[#D17CE3] transition">Kelebihan Novel</a></li>
                    <li><a href="#" class="hover:text-[#D17CE3] transition">Kekurangan Novel</a></li>
                    <li><a href="#" class="hover:text-[#D17CE3] transition">Kesimpulan</a></li>
                    <li><a href="#" class="hover:text-[#D17CE3] transition">Untuk Siapa Novel Ini ?</a></li>
                </ul>
            </div>

            <hr class="border-[#37186F]">

            <div class="space-y-4">
                <h2 class="font-serif-cormorant text-3xl font-bold tracking-wide text-white">Sinopsis Singkat</h2>
                <p class="text-sm text-gray-300 leading-relaxed text-justify">
                    Jejak di Antara Bintang karya Mira Asteria adalah novel fiksi ilmiah romantis yang membawa pembaca ke petualangan melintasi galaksi. Berkisah tentang Lyra, seorang astronom muda yang secara tidak sengaja menemukan pesan misterius dari peradaban kuno yang telah punah. Pencarian kebenaran membawanya bertemu dengan seorang pilot pemberani bernama Arkan, dan bersama-sama mereka mengungkap rahasia besar yang dapat mengubah nasib semesta.
                </p>
            </div>

            <hr class="border-[#37186F]">

            <div class="space-y-4">
                <h2 class="font-serif-cormorant text-3xl font-bold tracking-wide text-white">Kelebihan Novel</h2>
                <ul class="space-y-4">
                    <li class="flex items-start space-x-3">
                        <span class="w-2 h-2 rounded-full bg-[#D17CE3] mt-2 flex-shrink-0"></span>
                        <div>
                            <h3 class="font-semibold text-sm text-white">World building yang memukau</h3>
                            <p class="text-xs text-gray-400 mt-1">Mira Asteria berhasil menciptakan dunia futuristik yang terasa hidup and detail.</p>
                        </div>
                    </li>
                    <li class="flex items-start space-x-3">
                        <span class="w-2 h-2 rounded-full bg-[#D17CE3] mt-2 flex-shrink-0"></span>
                        <div>
                            <h3 class="font-semibold text-sm text-white">Karakter yang kuat dan realistis</h3>
                            <p class="text-xs text-gray-400 mt-1">Lyra dan Arkan memiliki perkembangan karakter yang sangat baik dan emosional.</p>
                        </div>
                    </li>
                    <li class="flex items-start space-x-3">
                        <span class="w-2 h-2 rounded-full bg-[#D17CE3] mt-2 flex-shrink-0"></span>
                        <div>
                            <h3 class="font-semibold text-sm text-white">Alur cerita penuh kejutan</h3>
                            <p class="text-xs text-gray-400 mt-1">Setiap bab menghadirkan misteri baru yang membuat pembaca terus penasaran.</p>
                        </div>
                    </li>
                    <li class="flex items-start space-x-3">
                        <span class="w-2 h-2 rounded-full bg-[#D17CE3] mt-2 flex-shrink-0"></span>
                        <div>
                            <h3 class="font-semibold text-sm text-white">Tema mendalam</h3>
                            <p class="text-xs text-gray-400 mt-1">Novel ini mengeksplorasi tentang takdir, pilihan dan makna cinta yang tulus.</p>
                        </div>
                    </li>
                </ul>
            </div>

            <hr class="border-[#37186F]">

            <div class="space-y-4">
                <h2 class="font-serif-cormorant text-3xl font-bold tracking-wide text-white">Kekurangan Novel</h2>
                <ul class="space-y-4">
                    <li class="flex items-start space-x-3">
                        <span class="w-2 h-2 rounded-full bg-[#D17CE3] mt-2 flex-shrink-0"></span>
                        <div>
                            <h3 class="font-semibold text-sm text-white">Pacing di awal cukup lambat</h3>
                            <p class="text-xs text-gray-400 mt-1">Beberapa pembaca mungkin merasa bagian awal terlalu banyak penjelasan dunia.</p>
                        </div>
                    </li>
                    <li class="flex items-start space-x-3">
                        <span class="w-2 h-2 rounded-full bg-[#D17CE3] mt-2 flex-shrink-0"></span>
                        <div>
                            <h3 class="font-semibold text-sm text-white">Istilah ilmiah cukup banyak</h3>
                            <p class="text-xs text-gray-400 mt-1">Bagi pembaca awam, mungkin perlu adaptasi di beberapa bagian teknis</p>
                        </div>
                    </li>
                </ul>
            </div>

            <hr class="border-[#37186F]">

            <div class="space-y-4">
                <h2 class="font-serif-cormorant text-3xl font-bold tracking-wide text-white">Kesimpulan</h2>
                <p class="text-sm text-gray-300 leading-relaxed text-justify">
                    Secara keseluruhan, Jejak di Antara Bintang adalah novel yang luar biasa. Kombinasi antara petualangan, romansa, dan misteri membuatnya menjadi bacaan yang tidak terlupakan. Mira Asteria membuktikan dirinya sebagai penulis yang layak diperhitungkan di genre sci-fi.
                </p>
            </div>

            <hr class="border-[#37186F]">

            <div class="space-y-4">
                <h2 class="font-serif-cormorant text-3xl font-bold tracking-wide text-white">Untuk Siapa Novel Ini ?</h2>
                <p class="text-sm text-gray-300 leading-relaxed text-justify">
                    Novel ini cocok untuk kamu yang menyukai cerita bertema luar angkasa, petualangan epik, serta romansa yang manis tetapi tetap realistis.
                </p>
            </div>
        </div>

        {{-- SIDEBAR KANAN --}}
        <div class="lg:col-span-1 self-start w-full">
            <div class="bg-[#18092F] border border-[#8B5CF6]/30 rounded-2xl p-8 space-y-6">
                <h2  class="text-3xl font-bold tracking-wide text-white"  style="font-family:'Cormorant Garamond', serif;">Artikel Terbaru</h2>
                
                <div class="space-y-5">
                    
                    <div class="bg-[#120326] rounded-xl p-4 border border-[#37186F]/50 flex items-start space-x-4 transform hover:-translate-y-1 hover:border-[#D17CE3]/40 transition duration-300 shadow-none hover:shadow-[0_10px_40px_rgba(124,58,237,0.3)]">
                        <img src="{{ asset('images/As5.png') }}" alt="Rekomendasi Bacaan" class="w-20 h-20 object-cover rounded-lg flex-shrink-0 bg-[#190534]">
                        <div class="space-y-2">
                            <a href="#" class="text-sm font-semibold leading-snug line-clamp-2 text-white hover:text-[#D17CE3] transition block">
                                Rekomendasi Bacaan untuk Malam yang Tenang
                            </a>
                            <p class="text-xs text-gray-400">15 April 2026</p>
                        </div>
                    </div>

                    <div class="bg-[#120326] rounded-xl p-4 border border-[#37186F]/50 flex items-start space-x-4 transform hover:-translate-y-1 hover:border-[#D17CE3]/40 transition duration-300 shadow-none hover:shadow-[0_10px_40px_rgba(124,58,237,0.3)]">
                        <img src="{{ asset('images/As4.png') }}" alt="7 Novel Horor" class="w-20 h-20 object-cover rounded-lg flex-shrink-0 bg-[#190534]">
                        <div class="space-y-2">
                            <a href="#" class="text-sm font-semibold leading-snug line-clamp-2 text-white hover:text-[#D17CE3] transition block">
                                7 Novel Horor Indonesia yang Bikin Merinding
                            </a>
                            <p class="text-xs text-gray-400">3 April 2026</p>
                        </div>
                    </div>

                </div>

                <div class="pt-2 text-center">
                    <a href="{{ route('artikel') }}" class="text-sm text-gray-400 hover:text-[#D17CE3] transition inline-flex items-center space-x-1">
                    <span>Lihat Semua Artikel</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
                </a>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection