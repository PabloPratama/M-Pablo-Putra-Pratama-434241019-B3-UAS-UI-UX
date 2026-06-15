<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Lembar Novel')</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,650;1,400&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        cormorant: ['"Cormorant Garamond"', 'serif'],
                        poppins: ['Poppins', 'sans-serif'],
                    },
                    colors: {
                        brandNav: '#0C0420',
                        brandLine: '#37186F',
                    }
                }
            }
        }
    </script>

    <style>
        /* Menggunakan font dasar Poppins untuk seluruh aplikasi */
        body {
            font-family: 'Poppins', sans-serif;
        }
        /* Gradient Background Utama dari atas ke bawah */
        .bg-main-gradient {
            background: linear-gradient(to bottom, #18092F 0%, #2B0F52 100%);
        }
        /* Gradient Button dari kiri ke kanan dengan Corner Radius 15px */
        .btn-gradient {
            background: linear-gradient(to right, #D17CE3 0%, #B87BFF 100%);
        }
        /* Garis Halus Custom */
        .border-brand {
            border-color: #37186F;
        }
    </style>
</head>
<body class="bg-main-gradient min-h-full text-white flex flex-col antialiased">

    <nav class="bg-brandNav border-b border-brand sticky top-0 z-50">
        <div class="max-w-full mx-auto px-6 sm:px-10 lg:px-14">
            <div class="flex items-center justify-between h-20">
                
                <div class="flex items-center space-x-6">
                    <a href="javascript:history.back()" class="text-white hover:text-[#D17CE3] transition-colors text-xl">
                        <i class="fa-solid fa-arrow-left-long"></i>
                    </a>
                    
                    <a href="/" class="flex items-center space-x-2 group">
                        <span class="text-2xl text-[#B87BFF]"><i class="fa-solid fa-book-open"></i></span>
                        <span class="font-cormorant font-bold text-xl sm:text-2xl tracking-wide text-white">Lembar Novel</span>
                    </a>
                </div>

                <div class="hidden md:flex items-center space-x-4 lg:space-x-12 font-poppins text-sm font-medium">
                    <a href="/dashboard" class="text-white hover:text-[#D17CE3] transition-colors">Beranda</a>
                    <a href="/artikel" class="text-white hover:text-[#D17CE3] transition-colors">Artikel</a>
                    <a href="/katalog" class="text-[#D17CE3] transition-colors">Katalog</a>
                    <a href="/keranjang" class="text-white hover:text-[#D17CE3] transition-colors">Keranjang</a>
                    <a href="/profil" class="text-white hover:text-[#D17CE3] transition-colors">Profil</a>
                </div>

                <div class="hidden md:block">
                    <a href="/logout" class="btn-gradient font-poppins font-medium text-white px-4 lg:px-6 py-3 rounded-[15px] flex items-center space-x-2 shadow-lg transition-transform active:scale-95">
                        <i class="fa-solid fa-arrow-right-from-bracket rotate-180 text-sm"></i>
                        <span>Keluar</span>
                    </a>
                </div>

                <div class="flex md:hidden">
                    <button id="mobile-menu-button" type="button" class="text-white hover:text-[#D17CE3] focus:outline-none text-2xl">
                        <i class="fa-solid fa-bars" id="menu-icon"></i>
                    </button>
                </div>

            </div>
        </div>

        <div class="hidden md:hidden bg-brandNav/95 border-b border-brand" id="mobile-menu">
            <div class="px-6 pt-2 pb-4 space-y-3 font-poppins text-sm">
                <a href="/dashboard" class="block text-white hover:text-[#D17CE3] py-2">Beranda</a>
                <a href="/artikel" class="block text-white hover:text-[#D17CE3] py-2">Artikel</a>
                <a href="/katalog" class="block text-[#D17CE3] font-semibold py-2">Katalog</a>
                <a href="/keranjang" class="block text-white hover:text-[#D17CE3] py-2">Keranjang</a>
                <a href="/profil" class="block text-white hover:text-[#D17CE3] py-2">Profil</a>
                <div class="pt-2 border-t border-brand">
                    <a href="/logout" class="btn-gradient w-full text-center font-medium text-white py-2 rounded-[15px] flex items-center justify-center space-x-2">
                        <i class="fa-solid fa-arrow-right-from-bracket rotate-180"></i>
                        <span>Keluar</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <main class="flex-grow max-w-full w-full mx-auto px-6 sm:px-10 lg:px-14 py-8">
        @yield('content')
    </main>

    <footer class="bg-transparent border-t border-brand font-poppins mt-auto">
        <div class="max-w-full mx-auto px-6 sm:px-10 lg:px-14 py-12 lg:py-16">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-10 md:gap-4 lg:gap-8">
                
                <div class="md:col-span-7 space-y-5">
                    <div class="flex items-center space-x-2">
                        <span class="text-2xl text-[#B87BFF]"><i class="fa-solid fa-book-open"></i></span>
                        <span class="font-cormorant font-bold text-2xl tracking-wide text-white">Lembar Novel</span>
                    </div>
                    <p class="text-white text-sm max-w-sm leading-relaxed opacity-90">
                        Platform e-novel untuk semua pecinta cerita.<br>
                        Find ribuan kisah menarik dan rasakan<br>
                        pengalaman menjelajahi dunia baru.
                    </p>
                    <div class="flex space-x-3 pt-2">
                        <a href="#" class="w-9 h-9 rounded-full bg-[#833FB0]/40 flex items-center justify-center text-white hover:bg-[#D17CE3] transition-all"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="w-9 h-9 rounded-full bg-[#833FB0]/40 flex items-center justify-center text-white hover:bg-[#D17CE3] transition-all"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="w-9 h-9 rounded-full bg-[#833FB0]/40 flex items-center justify-center text-white hover:bg-[#D17CE3] transition-all"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="#" class="w-9 h-9 rounded-full bg-[#833FB0]/40 flex items-center justify-center text-white hover:bg-[#D17CE3] transition-all"><i class="fa-brands fa-tiktok"></i></a>
                    </div>
                </div>

                <div class="md:col-span-2 space-y-4 md:pl-4">
                    <h4 class="font-semibold text-white tracking-wide text-base">Navigasi</h4>
                    <ul class="space-y-2.5 text-sm text-white opacity-90">
                        <li><a href="/dashboard" class="hover:text-[#D17CE3] transition-colors">Beranda</a></li>
                        <li><a href="/artikel" class="hover:text-[#D17CE3] transition-colors">Artikel</a></li>
                        <li><a href="/katalog" class="hover:text-[#D17CE3] transition-colors">Katalog</a></li>
                        <li><a href="/about" class="hover:text-[#D17CE3] transition-colors">Tentang Kami</a></li>
                        <li><a href="/profil" class="hover:text-[#D17CE3] transition-colors">Profil</a></li>
                    </ul>
                </div>

                <div class="md:col-span-3 space-y-4 md:pl-8">
                    <h4 class="font-semibold text-white tracking-wide text-base">Bantuan</h4>
                    <ul class="space-y-2.5 text-sm text-white opacity-90">
                        <li><a href="/faq" class="hover:text-[#D17CE3] transition-colors">FAQ</a></li>
                        <li><a href="/about" class="hover:text-[#D17CE3] transition-colors">Tentang Kami</a></li>
                        <li><a href="/privacy" class="hover:text-[#D17CE3] transition-colors">Kebijakan Privasi</a></li>
                        <li><a href="/terms" class="hover:text-[#D17CE3] transition-colors">Syarat & Ketentuan</a></li>
                        <li><a href="/contact" class="hover:text-[#D17CE3] transition-colors">Kontak</a></li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="bg-[#0C0420] py-5 text-center text-xs text-gray-500 flex items-center justify-center space-x-1 select-none">
            <span>&copy;</span>
            <span class="font-poppins">Lembar Novel. All rights reserved</span>
        </div>
    </footer>

    <script>
        const btn = document.getElementById('mobile-menu-button');
        const menu = document.getElementById('mobile-menu');
        const icon = document.getElementById('menu-icon');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
            if(menu.classList.contains('hidden')) {
                icon.className = "fa-solid fa-bars";
            } else {
                icon.className = "fa-solid fa-xmark";
            }
        });
    </script>
</body>
</html>