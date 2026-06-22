@extends('user.layouts.app')

@section('title', 'Pembayaran Gagal')

@section('content')
<div class="min-h-screen flex items-start justify-center font-['Poppins'] px-4 pt-2 md:pt-4 pb-16">
    
    <div class="w-full max-w-3xl flex flex-col items-center">
        
        <div class="relative flex items-center justify-center w-40 h-40 md:w-52 md:h-52 mb-6">
            <div class="absolute inset-0 bg-[#F24A4A] bg-opacity-10 rounded-full animate-ping opacity-75"></div>
            <div class="absolute inset-0 bg-[#F24A4A] bg-opacity-10 rounded-full"></div>
            
            <div class="relative bg-[#F24A4A] w-32 h-32 md:w-40 md:h-40 rounded-full flex items-center justify-center shadow-lg">
                <svg class="w-20 h-20 md:w-26 md:h-26 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </div>
        </div>

        <h1 class="font-['Cormorant_Garamond'] text-4xl md:text-5xl lg:text-6xl font-bold text-white text-center mb-3 tracking-wide">
            Pembayaran Gagal
        </h1>
        <p class="text-base md:text-lg text-gray-300 text-center mb-10 font-light max-w-xl px-2">
            Pembayaran kamu tidak dapat di proses.<br class="hidden sm:inline"> Silahkan coba lagi atau gunakan metode pembayaran lain.
        </p>

        <div class="w-full rounded-2xl p-8 md:p-14 border transition-all duration-300"
            style="
                background-color: #22123F; 
                border-color: rgba(139, 92, 246, 0.3); 
                box-shadow: 0px 10px 40px 0px rgba(124, 58, 237, 0.3);
            ">
            
            <h2 class="text-xl md:text-2xl font-semibold text-white mb-8 tracking-wide">
                Detail Transaksi
            </h2>

            <div class="space-y-6">
                
                <div class="flex items-center justify-between py-1">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0" style="background-color: rgba(209, 124, 227, 0.2);">
                            <i class="fas fa-book text-lg" style="color: #D17CE3;"></i>
                        </div>
                        <span class="text-sm md:text-base text-gray-300 font-medium">Nama Novel</span>
                    </div>
                    <span class="text-sm md:text-base text-white font-semibold text-right pl-4">Bayangan masa lalu</span>
                </div>
                
                <hr style="border-color: rgba(92, 40, 126, 0.3);" />

                <div class="flex items-center justify-between py-1">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0" style="background-color: rgba(14, 237, 6, 0.2);">
                            <i class="fas fa-money-bill-wave text-lg" style="color: #0EED06;"></i>
                        </div>
                        <span class="text-sm md:text-base text-gray-300 font-medium">Total Pembayaran</span>
                    </div>
                    <span class="text-sm md:text-base text-white font-semibold text-right pl-4">Rp 50.000</span>
                </div>

                <hr style="border-color: rgba(92, 40, 126, 0.3);" />

                <div class="flex items-center justify-between py-1">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0" style="background-color: rgba(255, 230, 0, 0.2);">
                            <i class="fas fa-calendar-alt text-lg" style="color: #FFE600;"></i>
                        </div>
                        <span class="text-sm md:text-base text-gray-300 font-medium">Tanggal dan Waktu</span>
                    </div>
                    <span class="text-sm md:text-base text-white font-semibold text-right pl-4">12 Mei 2026, 14:35 WIB</span>
                </div>

                <hr style="border-color: rgba(92, 40, 126, 0.3);" />

                <div class="flex items-center justify-between py-1">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0" style="background-color: rgba(0, 144, 255, 0.2);">
                            <i class="fas fa-credit-card text-lg" style="color: #0090FF;"></i>
                        </div>
                        <span class="text-sm md:text-base text-gray-300 font-medium">Metode Pembayaran</span>
                    </div>
                    <span class="text-sm md:text-base text-white font-semibold text-right pl-4">QRIS</span>
                </div>

                <hr style="border-color: rgba(92, 40, 126, 0.3);" />

                <div class="flex items-center justify-between py-1">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0" style="background-color: rgba(170, 0, 255, 0.2);">
                            <i class="fas fa-receipt text-lg" style="color: #AA00FF;"></i>
                        </div>
                        <span class="text-sm md:text-base text-gray-300 font-medium">ID Transaksi</span>
                    </div>
                    <span class="text-sm md:text-base text-white font-semibold text-right pl-4 tracking-tight">INV-20260512-143512</span>
                </div>

            </div>

            <div class="mt-12 flex justify-center">
            <a href="{{ route('transaksi.pembayaran') }}" 
            class="w-[272px] sm:w-[272px] text-center py-4 rounded-xl font-semibold text-white text-base shadow-lg transition-all duration-200 hover:brightness-90"
            style="background: linear-gradient(to right, #D17CE3, #B87BFF);">
                Coba Lagi
            </a>
        </div>
        </div>
    </div>
</div>
@endsection