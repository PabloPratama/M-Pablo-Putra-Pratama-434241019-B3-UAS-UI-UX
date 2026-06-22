@extends('user.layouts.app')

@section('title', 'Qris')

@section('content')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght=600;700&family=Poppins:wght=400;500;600;700&display=swap" rel="stylesheet">

<style>
    .font-cormorant {
        font-family: 'Cormorant Garamond', serif;
    }
    .font-poppins {
        font-family: 'Poppins', sans-serif;
    }

    .figma-shadow {
        box-shadow: 0px 10px 40px 0px rgba(124, 58, 237, 0.30);
    }

    .custom-divider {
        border: 0;
        height: 1px;
        background-color: rgba(92, 40, 126, 0.50);
    }

    .btn-gradient {
        background: linear-gradient(90deg, #D17CE3 0%, #B87BFF 100%);
        transition: opacity 0.2s ease-in-out;
    }
    .btn-gradient:hover {
        opacity: 0.9;
    }

    .method-card {
        background-color: #18092F;
        border: 1px solid transparent;
        cursor: pointer;
        min-height: 84px;
        transition: background-color 0.2s ease, border-color 0.2s ease;
    }
    .method-card:hover {
        background-color: rgba(209, 124, 227, 0.30);
        border-color: rgba(139, 92, 246, 0.90);
    }

    .custom-radio {
        width: 22px;
        height: 22px;
        border: 2px solid #D17CE3;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        background: transparent;
        flex-shrink: 0;
    }
    .custom-radio-inner {
        width: 10px;
        height: 10px;
        background-color: transparent;
        border-radius: 50%;
        transition: background-color 0.1s ease;
    }
    
    input[type="radio"]:checked + .custom-radio .custom-radio-inner {
        background-color: #FFFFFF;
    }
    input[type="radio"]:checked + .custom-radio {
        background-color: #D17CE3;
    }
</style>

<div class="font-poppins text-white min-h-screen pt-2 pb-8 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
    
    <div class="mb-8">
        <h1 class="font-cormorant text-4xl sm:text-5xl font-bold tracking-wide mb-2">Pembayaran dengan Qris</h1>
        <p class="text-gray-400 text-base sm:text-lg max-w-xl">
            Scan kode QR di bawah menggunakan aplikasi e-wallet atau mobile banking kamu.
        </p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
        
        <div class="lg:col-span-2 bg-[#22123F] rounded-xl p-6 sm:p-8 figma-shadow" style="border: 1px solid rgba(139, 92, 246, 0.30);">
            
            <div class="text-center mb-6">
                <h2 class="font-cormorant text-3xl sm:text-4xl font-semibold mb-2">Scan QR Code untuk Membayar</h2>
                <p class="text-sm sm:text-base text-gray-400">Gunakan aplikasi e-wallet atau mobile banking yang mendukung QRIS.</p>
            </div>

            <div class="flex justify-center mb-6">
                <div class="bg-white p-6 sm:p-7 rounded-xl text-black text-center max-w-sm w-full shadow-lg">
                    <img src="{{ asset('images/As46.png') }}" alt="QRIS Code" class="w-full h-auto object-contain mx-auto mb-4">
                    <h4 class="font-poppins font-bold text-xl sm:text-2xl mb-1 text-[#18092F]">Lembar Novel</h4>
                    <p class="text-sm sm:text-base text-gray-600 font-semibold mb-1">NMID : ID1020234567890</p>
                    <p class="text-sm sm:text-base text-gray-500 font-bold tracking-wider">A01</p>
                </div>
            </div>

            <div class="text-center mb-6">
                <p class="text-xs sm:text-sm text-gray-400 mb-1">Sisa Waktu Pembayaran</p>
                <div class="flex justify-center items-center gap-4 text-[#D17CE3]">
                    <div>
                        <span id="hours" class="text-3xl sm:text-4xl font-bold tracking-wider">23</span>
                        <p class="text-[10px] text-gray-400 mt-0.5">Jam</p>
                    </div>
                    <span class="text-3xl font-bold mb-4">:</span>
                    <div>
                        <span id="minutes" class="text-3xl sm:text-4xl font-bold tracking-wider">59</span>
                        <p class="text-[10px] text-gray-400 mt-0.5">Menit</p>
                    </div>
                    <span class="text-3xl font-bold mb-4">:</span>
                    <div>
                        <span id="seconds" class="text-3xl sm:text-4xl font-bold tracking-wider">59</span>
                        <p class="text-[10px] text-gray-400 mt-0.5">Detik</p>
                    </div>
                </div>
            </div>

            <div class="flex justify-center mb-8">
                <div class="rounded-xl p-5 sm:p-6 flex items-center justify-center text-center gap-4 max-w-md w-full" style="background-color: rgba(55, 24, 111, 0.90);">
                    <div class="flex-shrink-0">
                        <svg class="w-10 h-10 text-[#D17CE3]" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                        </svg>
                    </div>
                    <div class="text-left">
                        <h5 class="text-sm sm:text-base font-bold text-[#D17CE3] mb-0.5">Pesanan akan otomatis dibatalkan</h5>
                        <p class="text-xs sm:text-sm font-medium text-[#D17CE3] leading-normal">Jika pembayaran tidak dilakukan dalam waktu yang ditentukan.</p>
                    </div>
                </div>
            </div>

            <div class="space-y-2">
            <h3 class="font-cormorant text-2xl sm:text-3xl font-semibold mb-3">Cara Pembayaran</h3>
            <div class="space-y-3.5 text-sm sm:text-base">
            <div class="flex gap-3">
            <span class="font-bold text-white">1.</span>
            <div>
                <p class="font-semibold text-gray-200">Buka aplikasi</p>
                <p class="text-xs sm:text-sm text-gray-400 mt-0.5">Buka e-wallet atau mobile banking kamu.</p>
            </div>
            </div>
            <div class="flex gap-3">
                <span class="font-bold text-white">2.</span>
                <div>
                    <p class="font-semibold text-gray-200">Scan QR Code</p>
                    <p class="text-xs sm:text-sm text-gray-400 mt-0.5">Arahkan kamera ke QR code di atas.</p>
                </div>
            </div>
            <div class="flex gap-3">
                <span class="font-bold text-white">3.</span>
                <div>
                    <p class="font-semibold text-gray-200">Selesaikan Pembayaran</p>
                    <p class="text-xs sm:text-sm text-gray-400 mt-0.5">Konfirmasi pembayaran di aplikasi kamu.</p>
                </div>
            </div>
        </div>
    </div>

        </div>

        <div class="space-y-6">
            
            <div class="bg-[#22123F] rounded-xl p-6 figma-shadow" style="border: 1px solid rgba(139, 92, 246, 0.30);">
                <h2 class="font-cormorant text-2xl font-semibold mb-4">Ringkasan Pesanan</h2>
                
                <div class="flex gap-4 items-start mb-6">
                    <img src="{{ asset('images/As27.png') }}" alt="Bayangan Masa Lalu" class="w-24 h-35 object-cover rounded-md flex-shrink-0" style="border: 1px solid rgba(139, 92, 246, 0.30);">
                    
                    <div class="space-y-1.5 w-full">
                        <h3 class="font-cormorant text-xl sm:text-2xl font-bold leading-tight tracking-wide">Bayangan Masa Lalu</h3>
                        
                        <div class="text-[11px] sm:text-xs text-gray-300 flex items-center gap-1 leading-none">
                            <span class="break-words">Nathania Putri</span>
                            <svg class="w-3.5 h-3.5 flex-shrink-0" style="color: #D17CE3;" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                        <span class="inline-block text-[10px] font-semibold px-1.5 py-0.5 rounded mb-[3px]" style="background-color: rgba(184, 123, 255, 0.15); color: #B87BFF;">
                            Romantis
                        </span>
                        </div>
                        <div class="text-[11px] text-gray-400 space-y-2 pt-0.5">
                            <div class="flex items-center gap-1.5 leading-none">
                                <svg class="w-3.5 h-3.5 text-gray-400 flex-shrink-0 mb-[2px]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                                <span>50 Bab</span>
                            </div>
                            <div class="flex items-center gap-1.5 leading-none">
                                <svg class="w-3.5 h-3.5 text-gray-400 flex-shrink-0 mb-[2px]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 002 2h2.945M11 21a9 9 0 1110.158-11.237A9.003 9.003 0 0111 21z"></path>
                                </svg>
                                <span>Indonesia</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="space-y-3 text-sm mb-6">
                    <div class="flex justify-between text-gray-300">
                        <span>Total Item</span>
                        <span class="font-semibold text-white">1</span>
                    </div>
                    <div class="flex justify-between items-center text-gray-300">
                        <span>Total Harga</span>
                        <span class="text-base font-bold text-white">Rp 50.000</span>
                    </div>
                </div>

                <hr class="custom-divider mb-4">

                <div class="space-y-3 mb-6">
                    <div class="flex items-center gap-2">
                        <div class="flex-shrink-0 mb-[1px]">
                            <svg class="w-6 h-6" style="color: #B87BFF;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                        </div>
                        <span class="text-xs sm:text-sm font-semibold text-gray-200">Kenapa transaksi aman ?</span>
                    </div>
                    <div class="space-y-2.5 pl-7 text-xs text-gray-300">
                        <div class="flex items-center gap-2">
                            <svg class="w-3.5 h-3.5 flex-shrink-0" style="color: #B87BFF;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Enkripsi data tingkat tinggi</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-3.5 h-3.5 flex-shrink-0" style="color: #B87BFF;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Pembayaran 100% aman</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-3.5 h-3.5 flex-shrink-0" style="color: #B87BFF;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Privasi terjamin</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-3.5 h-3.5 flex-shrink-0" style="color: #B87BFF;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Dukungan 24/7</span>
                        </div>
                    </div>
                </div>
                <a href="{{ route('transaksi.pembayaran_berhasil') }}" class="w-full inline-block text-center py-2.5 rounded-lg text-white font-semibold text-sm tracking-wide btn-gradient">
                    Konfirmasi Pembayaran
                </a>
            </div>

            <div class="bg-[#22123F] rounded-xl p-6 figma-shadow text-center" style="border: 1px solid rgba(139, 92, 246, 0.30);">
                <h3 class="font-cormorant text-2xl font-semibold mb-1 text-left">Butuh Bantuan ?</h3>
                <p class="text-[13px] text-gray-400 text-left mb-4">
                    Hubungi tim kami jika kamu mengalami kendala.
                </p>
                
                <a href="{{ route('bantuan.hubungi_kami') }}" class="w-full py-2.5 rounded-lg text-white font-semibold text-sm tracking-wide btn-gradient inline-flex items-center justify-center gap-2">
                <svg class="w-6 h-6 text-white flex-shrink-0 mb-[2px]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
            </svg>
            <span>Hubungi Kami</span>
            </a>
            </div>

        </div>

    </div>
</div>

<script>
    let totalSeconds = (23 * 3600) + (59 * 60) + 59;

    function updateTimer() {
        if (totalSeconds <= 0) {
            clearInterval(timerInterval);
            document.getElementById('hours').textContent = "00";
            document.getElementById('minutes').textContent = "00";
            document.getElementById('seconds').textContent = "00";
            return;
        }

        let hrs = Math.floor(totalSeconds / 3600);
        let mins = Math.floor((totalSeconds % 3600) / 60);
        let secs = totalSeconds % 60;

        document.getElementById('hours').textContent = hrs < 10 ? "0" + hrs : hrs;
        document.getElementById('minutes').textContent = mins < 10 ? "0" + mins : mins;
        document.getElementById('seconds').textContent = secs < 10 ? "0" + secs : secs;

        totalSeconds--;
    }

    const timerInterval = setInterval(updateTimer, 1000);
    updateTimer();
</script>
@endsection