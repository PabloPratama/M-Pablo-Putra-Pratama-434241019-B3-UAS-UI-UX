@extends('user.layouts.app')

@section('title', 'Va_Lanjutan')

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
        <h1 class="font-cormorant text-4xl sm:text-5xl font-bold tracking-wide mb-2">Pembayaran via BCA Virtual Account</h1>
        <p class="text-gray-400 text-base sm:text-lg max-w-xl">
            Ikuti langkah berikut untuk menyelesaikan pembayaranmu.
        </p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
        
        <div class="lg:col-span-2 bg-[#22123F] rounded-xl p-6 sm:p-8 figma-shadow" style="border: 1px solid rgba(139, 92, 246, 0.30);">
            <h2 class="font-cormorant text-2xl sm:text-3xl font-semibold mb-6">Instruksi Pembayaran</h2>
            
            <div class="space-y-6 mb-6">
                <div class="flex items-start gap-4">
                    <div class="flex items-center justify-center w-8 h-8 rounded-full font-bold text-sm flex-shrink-0 text-white" style="background-color: #B87BFF;">1</div>
                    <div>
                        <h4 class="text-base font-semibold text-white leading-tight mb-1">Salin nomor Virtual Account di bawah ini</h4>
                        <p class="text-sm text-gray-400">Nomor VA bersifat unik dan hanya berlaku untuk transaksi ini.</p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <div class="flex items-center justify-center w-8 h-8 rounded-full font-bold text-sm flex-shrink-0 text-white" style="background-color: #B87BFF;">2</div>
                    <div>
                        <h4 class="text-base font-semibold text-white leading-tight mb-1">Buka aplikasi BCA Mobile atau ATM BCA</h4>
                        <p class="text-sm text-gray-400">Pilih menu Virtual Account.</p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <div class="flex items-center justify-center w-8 h-8 rounded-full font-bold text-sm flex-shrink-0 text-white" style="background-color: #B87BFF;">3</div>
                    <div>
                        <h4 class="text-base font-semibold text-white leading-tight mb-1">Masukkan nomor Virtual Account</h4>
                        <p class="text-sm text-gray-400">Pastikan nomor sudah benar.</p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <div class="flex items-center justify-center w-8 h-8 rounded-full font-bold text-sm flex-shrink-0 text-white" style="background-color: #B87BFF;">4</div>
                    <div>
                        <h4 class="text-base font-semibold text-white leading-tight mb-1">Periksa detail pembayaran, lalu selesaikan</h4>
                        <p class="text-sm text-gray-400">Pembayaran akan otomatis terverifikasi.</p>
                    </div>
                </div>
            </div>

            <div class="mb-5">
                <span class="text-sm text-gray-400 block mb-2">Nomor Virtual Account BCA</span>
                <div class="flex items-center justify-between p-4 rounded-lg bg-[#18092F]" style="border: 1px solid rgba(139, 92, 246, 0.30);">
                    <span id="va_number" class="text-lg sm:text-xl font-bold tracking-wider text-white">3901 1234 5678 9012</span>
                    <button onclick="copyVaNumber()" class="focus:outline-none hover:opacity-80 transition-opacity" title="Salin Nomor VA">
                        <svg class="w-7 h-7" style="color: #D17CE3;" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <div class="rounded-lg p-4 mb-6 flex items-start gap-3 bg-[#37186F] bg-opacity-90">
                <div class="flex-shrink-0 mt-0.5">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                    </svg>
                </div>
                <div class="text-sm text-white leading-relaxed">
                    Nomor VA ini berlaku selama <span id="countdown" class="font-bold" style="color: #D17CE3;">23:59:59</span>
                    <p class="text-xs text-gray-300 mt-0.5">pembayaran akan dibatalkan saat waktu yang ditentukan berakhir.</p>
                </div>
            </div>

            <hr class="custom-divider mb-6">

            <div class="flex items-center gap-4">
                <div class="flex-shrink-0 mt-[-9px]">
                    <svg class="w-8 h-8" style="color: #B87BFF;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <div>
                    <h4 class="text-sm sm:text-base font-semibold mb-0.5 leading-none">Transaksi aman & terenkripsi</h4>
                    <p class="text-xs sm:text-sm text-gray-400 leading-relaxed mt-1">
                        Data dan pembayaranmu dilindungi dengan enkripsi tingkat tinggi.
                    </p>
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

                <a href="{{ route('transaksi.pembayaran_gagal') }}" class="w-full inline-block text-center py-2.5 rounded-lg text-white font-semibold text-sm tracking-wide btn-gradient">
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
    // Fungsi Menyalin Nomor Virtual Account
    function copyVaNumber() {
        const vaText = document.getElementById('va_number').innerText.replace(/\s/g, '');
        navigator.clipboard.writeText(vaText).then(() => {
            alert('Nomor Virtual Account berhasil disalin: ' + vaText);
        }).catch(err => {
            console.error('Gagal menyalin text: ', err);
        });
    }

    // Sistem Hitung Mundur Otomatis diatur mulai dari 23:59:59 saat halaman dimuat/refresh
    let totalSeconds = (23 * 3600) + (59 * 60) + 59; 

    const countdownElement = document.getElementById('countdown');

    function updateCountdown() {
        if (totalSeconds <= 0) {
            countdownElement.innerText = "00:00:00";
            clearInterval(timerInterval);
            return;
        }

        totalSeconds--;

        let hours = Math.floor(totalSeconds / 3600);
        let minutes = Math.floor((totalSeconds % 3600) / 60);
        let seconds = totalSeconds % 60;

        // Formatting leading zero (01, 02, dst)
        hours = hours < 10 ? "0" + hours : hours;
        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        countdownElement.innerText = `${hours}:${minutes}:${seconds}`;
    }

    // Jalankan timer setiap 1 detik
    const timerInterval = setInterval(updateCountdown, 1000);
</script>
@endsection