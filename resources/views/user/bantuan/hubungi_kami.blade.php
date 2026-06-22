@extends('user.layouts.app')

@section('title', 'Hubungi Kami')

@section('content')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@600;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

<style>
    .font-cormorant {
        font-family: 'Cormorant Garamond', serif;
    }
    .font-poppins {
        font-family: 'Poppins', sans-serif;
    }
    .custom-shadow {
        box-shadow: 0px 10px 40px 0px rgba(124, 90, 237, 0.30);
    }
    .btn-gradient {
        background: linear-gradient(90deg, #D17CE3 0%, #B87BFF 100%);
    }
    /* Smooth Notification Animation */
    @keyframes slideDown {
        0% { transform: translate(-50%, -100%); opacity: 0; }
        15% { transform: translate(-50%, 20px); opacity: 1; }
        85% { transform: translate(-50%, 20px); opacity: 1; }
        100% { transform: translate(-50%, -100%); opacity: 0; }
    }
    .animate-notification {
        animation: slideDown 4s ease-in-out forwards;
    }
</style>

<div class="relative min-h-screen font-poppins text-white px-4 pt-2 md:pt-4 pb-12 md:pb-20 flex flex-col items-center justify-start">
    <div id="success-notification" class="hidden fixed top-0 left-1/2 -translate-x-1/2 z-50 w-11/12 max-w-md bg-emerald-600 text-white px-6 py-4 rounded-xl shadow-xl flex items-center space-x-3 border border-emerald-500/30 animate-notification">
        <svg class="w-6 h-6 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>
        <span class="font-medium">Pesan telah terkirim! Terima kasih telah menghubungi kami.</span>
    </div>

    <div class="w-full max-w-6xl flex flex-col gap-8">
        <div class="text-left w-full max-w-2xl">
            <h1 class="font-cormorant text-4xl md:text-5xl lg:text-6xl font-bold mb-4 tracking-wide text-white">Hubungi Kami</h1>
            <p class="text-base md:text-lg text-gray-400 font-Medium leading-relaxed">
                Butuh bantuan ? Tim Lembar Novel siap membantu kendala akun, pembayaran dan lainnya.
            </p>
        </div>

        <div class="w-full grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch">
            
            <div class="lg:col-span-5 flex flex-col gap-6">
                
                <div class="bg-[#22123F] border border-[#8B5CF6]/30 custom-shadow rounded-2xl p-6 md:p-8 flex flex-col justify-center space-y-6 h-fit">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 rounded-xl bg-[#D17CE3]/20 flex items-center justify-center flex-shrink-0">
                            <svg class="w-7 h-7 text-[#D17CE3]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 002-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div class="overflow-hidden">
                            <h4 class="text-base font-semibold text-white">Email</h4>
                            <p class="text-sm md:text-base text-[#D17CE3] truncate">lembarnovel@gmail.com</p>
                        </div>
                    </div>

                    <hr class="border-[#5C287E]/30">

                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 rounded-xl bg-[#D17CE3]/20 flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-[#D17CE3]" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L0 24l6.335-1.662c1.746.953 3.71 1.454 5.709 1.455h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-base font-semibold text-white">WhatsApp</h4>
                            <p class="text-sm md:text-base text-[#D17CE3]">+62 812-3456-7890</p>
                        </div>
                    </div>

                    <hr class="border-[#5C287E]/30">

                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 rounded-xl bg-[#D17CE3]/20 flex items-center justify-center flex-shrink-0">
                            <svg class="w-7 h-7 text-[#D17CE3]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-base font-semibold text-white">Jam Operasional</h4>
                            <p class="text-sm md:text-base text-[#D17CE3]">08.00 - 23.00 WIB</p>
                        </div>
                    </div>
                </div>

                <div class="bg-[#22123F] border border-[#8B5CF6]/30 custom-shadow rounded-2xl p-6 md:p-8 flex flex-col justify-between items-start gap-6">
                    <div>
                        <h3 class="font-cormorant text-2xl md:text-3xl font-bold text-white mb-2">Pertanyaan umum</h3>
                        <p class="text-sm md:text-base text-gray-400 font-normal">Temukan jawaban dari pertanyaan yang sering ditanyakan.</p>
                    </div>
                    <a href="{{ route('bantuan.faq') }}" class="w-full text-center font-poppins text-sm font-semibold btn-gradient text-white hover:opacity-90 transition-all duration-300 py-3.5 px-5 rounded-xl shadow-md">
                    Lihat Semua FAQ
                    </a>
                </div>

            </div>

            <div class="lg:col-span-7 bg-[#22123F] border border-[#8B5CF6]/30 custom-shadow rounded-2xl p-6 md:p-8">
                <h2 class="font-cormorant text-2xl md:text-3xl font-semibold mb-2">Kirim Pesan</h2>
                <p class="text-sm md:text-base text-gray-400 font-light mb-8">Sampaikan kendalamu melalui form di bawah ini.</p>

                <form id="contact-form" class="space-y-5">
                    @csrf
                    <div class="flex flex-col space-y-2">
                        <label for="nama_lengkap" class="text-sm font-medium tracking-wide text-gray-200">Nama Lengkap</label>
                        <input type="text" id="nama_lengkap" name="nama_lengkap" required placeholder="Masukkan nama lengkap"
                            class="w-full bg-[#0C0420] border border-[#2B0F52] text-sm md:text-base text-white placeholder-gray-600 rounded-xl px-4 py-3.5 focus:outline-none focus:border-[#8B5CF6]/60 transition-colors">
                    </div>

                    <div class="flex flex-col space-y-2">
                        <label for="email" class="text-sm font-medium tracking-wide text-gray-200">Email</label>
                        <input type="email" id="email" name="email" required placeholder="Masukkan email aktif"
                            class="w-full bg-[#0C0420] border border-[#2B0F52] text-sm md:text-base text-white placeholder-gray-600 rounded-xl px-4 py-3.5 focus:outline-none focus:border-[#8B5CF6]/60 transition-colors">
                    </div>

                    <div class="flex flex-col space-y-2">
                        <label for="pesan" class="text-sm font-medium tracking-wide text-gray-200">Pesan</label>
                        <textarea id="pesan" name="pesan" rows="5" required placeholder="Tulis pesan atau kendalamu disini"
                            class="w-full bg-[#0C0420] border border-[#2B0F52] text-sm md:text-base text-white placeholder-gray-600 rounded-xl px-4 py-3.5 focus:outline-none focus:border-[#8B5CF6]/60 transition-colors resize-none"></textarea>
                    </div>

                    <button type="submit" class="w-full btn-gradient hover:opacity-90 active:scale-[0.99] transition-all duration-300 text-sm md:text-base font-semibold text-white py-4 rounded-xl flex items-center justify-center space-x-2 shadow-lg mt-4">
                        <svg class="w-5 h-5 transform rotate-45 -translate-y-0.5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                        </svg>
                        <span>Kirim Pesan</span>
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>

<script>
    document.getElementById('contact-form').addEventListener('submit', function(e) {
        e.preventDefault();

        const form = this;
        const notification = document.getElementById('success-notification');

        form.reset();

        notification.classList.remove('hidden');

        setTimeout(() => {
            notification.classList.add('hidden');
        }, 4000);
    });
</script>
@endsection