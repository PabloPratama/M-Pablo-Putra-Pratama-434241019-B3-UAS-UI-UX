<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'LembarNovel Admin Panel')</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        :root {
            --primary-color: #7C3AED;      
            --primary-hover: rgba(255, 255, 255, 0.15);
            --primary-active: rgba(255, 255, 255, 0.25);
            --bg-content: #F9FAFB;         
            --text-main: #1F2937;          
            --text-muted: #6B7280;         
            --sidebar-width: 260px;
        }

        body {
            background-color: var(--bg-content);
            color: var(--text-main);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .app-container {
            display: flex;
            flex: 1;
            position: relative;
        }

        .sidebar {
            width: var(--sidebar-width);
            background-color: var(--primary-color);
            color: #FFFFFF;
            display: flex;
            flex-direction: column;
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 100;
            transition: all 0.3s ease;
            box-shadow: 4px 0 12px rgba(124, 58, 237, 0.1);
        }

        .sidebar-brand {
            padding: 24px;
            display: flex;
            flex-direction: column;
            gap: 4px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .brand-title {
            font-size: 20px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .brand-subtitle {
            font-size: 12px;
            color: rgba(255, 255, 255, 0.7);
            font-weight: 300;
            letter-spacing: 0.5px;
        }

        .sidebar-menu {
            list-style: none;
            padding: 24px 16px;
            display: flex;
            flex-direction: column;
            gap: 8px;
            flex: 1;
            overflow-y: auto;
        }

        .menu-item a {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 12px 16px;
            color: rgba(255, 255, 255, 0.82);
            text-decoration: none;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.2s ease;
        }

        .menu-item a i {
            font-size: 18px;
            width: 24px;
            text-align: center;
            opacity: 0.9;
        }

        .menu-item a:hover {
            background-color: var(--primary-hover);
            color: #FFFFFF;
        }

        .menu-item.active a {
            background-color: var(--primary-active);
            color: #FFFFFF;
            font-weight: 600;
        }

        .sidebar-footer {
            padding: 16px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            background-color: rgba(0, 0, 0, 0.08);
        }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 14px; 
            padding: 10px 6px;
        }

        .user-avatar {
            width: 46px;  
            height: 46px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 18px; 
            flex-shrink: 0;
        }

        .user-info {
            flex: 1;
            display: flex;
            flex-direction: column;
            overflow: hidden;
            gap: 2px;
        }

        .user-name {
            font-size: 16px; 
            font-weight: 600; 
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .user-email {
            font-size: 11.5px; 
            color: rgba(255, 255, 255, 0.75);
            white-space: normal;
            word-break: break-all;
        }

        .logout-btn {
            display: flex;
            align-items: center;
            gap: 12px;
            width: 100%;
            padding: 12px;
            margin-top: 8px;
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            border-radius: 8px;
            transition: all 0.2s;
        }

        .logout-btn:hover {
            background-color: rgba(239, 68, 68, 0.2);
            color: #FCA5A5;
        }

        .mobile-header {
            display: none;
            background-color: #FFFFFF;
            padding: 16px 24px;
            border-bottom: 1px solid #E5E7EB;
            align-items: center;
            justify-content: space-between;
            position: sticky;
            top: 0;
            z-index: 90;
        }

        .mobile-brand {
            color: var(--primary-color);
            font-size: 18px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .menu-toggle {
            background: none;
            border: none;
            color: var(--text-main);
            font-size: 20px;
            cursor: pointer;
        }

        .main-wrapper {
            flex: 1;
            margin-left: var(--sidebar-width);
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            transition: all 0.3s ease;
            min-width: 0;
            width: 100%;
        }

        .content-body {
            padding: 40px;
            flex: 1;
        }

        .footer {
            background-color: #FFFFFF;
            border-top: 1px solid #E5E7EB;
            padding: 40px 40px 0 40px;
            color: var(--text-main);
            margin-top: auto;
        }

        .footer-top {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 40px;
            padding-bottom: 40px;
        }

        .footer-brand-section {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .footer-logo {
            font-size: 22px;
            font-weight: 700;
            color: var(--primary-color);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .footer-desc {
            font-size: 14px;
            color: var(--text-muted);
            line-height: 1.6;
            max-width: 320px;
        }

        .social-links {
            display: flex;
            gap: 12px;
            margin-top: 8px;
        }

        .social-icon {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background-color: #F3E8FF;
            color: var(--primary-color);
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            font-size: 16px;
            transition: all 0.2s ease;
        }

        .social-icon .fa-instagram {
            font-size: 19px; 
        }

        .social-icon:hover {
            background-color: var(--primary-color);
            color: #FFFFFF;
            transform: translateY(-2px);
        }

        .footer-column {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .footer-column h4 {
            font-size: 15px;
            font-weight: 600;
            color: var(--text-main);
            position: relative;
            padding-bottom: 8px;
        }

        .footer-column h4::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 24px;
            height: 2px;
            background-color: var(--primary-color);
            border-radius: 2px;
        }

        .footer-links {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .footer-links a {
            font-size: 13px;
            color: var(--text-muted);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: color 0.2s;
        }

        .footer-links a:hover {
            color: var(--primary-color);
        }

        .footer-bottom {
            background-color: #0F172A;
            margin-left: -40px;
            margin-right: -40px;
            padding: 20px 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #94A3B8;
            font-size: 13px;
            gap: 20px;
        }

        .footer-divider {
            width: 1px;
            height: 16px;
            background-color: rgba(148, 163, 184, 0.3);
        }

        .heart-icon {
            color: #EC4899;
        }

        .sidebar-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.4);
            z-index: 95;
            backdrop-filter: blur(2px);
        }

        @media (max-width: 1024px) {
            :root {
                --sidebar-width: 240px;
            }
            .footer-top {
                grid-template-columns: 1fr 1fr;
                gap: 32px;
            }
        }

        @media (max-width: 768px) {
            .mobile-header {
                display: flex;
            }

            .sidebar {
                left: calc(-1 * var(--sidebar-width));
            }

            .sidebar.open {
                left: 0;
            }

            .sidebar-overlay.show {
                display: block;
            }

            .main-wrapper {
                margin-left: 0;
                min-height: calc(100vh - 61px);
            }

            .content-body {
                padding: 24px;
            }

            .footer {
                padding: 32px 24px 0 24px;
            }

            .footer-top {
                grid-template-columns: 1fr;
                gap: 32px;
            }

            .footer-bottom {
                margin-left: -24px;
                margin-right: -24px;
                padding: 20px 24px;
                flex-direction: column;
                gap: 8px;
                text-align: center;
            }

            .footer-divider {
                display: none;
            }
        }
    </style>
</head>
<body>

    <header class="mobile-header">
        <div class="mobile-brand">
            <i class="fa-solid fa-book-open"></i> Lembar Novel
        </div>
        <button class="menu-toggle" id="menuToggle">
            <i class="fa-solid fa-bars"></i>
        </button>
    </header>

    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <div class="app-container">
        
        <aside class="sidebar" id="sidebar">
            <div class="sidebar-brand">
                <span class="brand-title">
                    <i class="fa-solid fa-book-open"></i> Lembar Novel
                </span>
                <span class="brand-subtitle">Admin Panel</span>
            </div>
            
            <ul class="sidebar-menu">
                <li class="menu-item {{ Request::is('admin/dashboard') ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}"><i class="fa-solid fa-house"></i> Dashboard</a>
                </li>
                <li class="menu-item {{ Request::is('admin/artikel*') ? 'active' : '' }}">
                    <a href="{{ route('admin.artikel.index') }}"><i class="fa-solid fa-file-lines"></i> Kelola Artikel</a>
                </li>
                <li class="menu-item {{ Request::is('admin/produk*') ? 'active' : '' }}">
                    <a href="{{ route('admin.produk.index') }}"><i class="fa-solid fa-book"></i> Kelola Produk</a>
                </li>
                <li class="menu-item {{ Request::is('admin/pengguna*') ? 'active' : '' }}">
                    <a href="{{ route('admin.pengguna.index') }}"><i class="fa-solid fa-users"></i> Kelola Pengguna</a>
                </li>
                <li class="menu-item {{ Request::is('admin/transaksi*') ? 'active' : '' }}">
                    <a href="{{ route('admin.transaksi.index') }}"><i class="fa-solid fa-credit-card"></i> Kelola Transaksi</a>
                </li>
                <li class="menu-item {{ Request::is('admin/pesan*') ? 'active' : '' }}">
                    <a href="{{ route('admin.pesan.index') }}"><i class="fa-solid fa-envelope"></i> Kelola Pesan</a>
                </li>
            </ul>

            <div class="sidebar-footer">
                <div class="user-profile">
                    <div class="user-avatar">A</div>
                    <div class="user-info">
                        <span class="user-name">Admin Utama</span>
                        <span class="user-email">admin@lembarnovel.com</span>
                    </div>
                </div>
                
                <a href="{{ route('admin.login') }}" class="logout-btn">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i> Keluar
                </a>
            </div>
        </aside>

        <div class="main-wrapper">
            
            <main class="content-body">
                @yield('content')
            </main>

            <footer class="footer">
                <div class="footer-top">
                    <div class="footer-brand-section">
                        <div class="footer-logo">
                            <i class="fa-solid fa-book-open"></i> Lembar Novel
                        </div>
                        <p class="footer-desc">
                            Platform e-novel untuk semua pecinta cerita. Temukan ribuan kisah dan rasakan dunia baru.
                        </p>
                        <div class="social-links">
                            <a href="#" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#" class="social-icon"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#" class="social-icon"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#" class="social-icon"><i class="fa-brands fa-tiktok"></i></a>
                        </div>
                    </div>

                    <div class="footer-column">
                        <h4>Navigasi</h4>
                        <ul class="footer-links">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Kelola Artikel</a></li>
                            <li><a href="#">Kelola Produk</a></li>
                            <li><a href="#">Kelola Pengguna</a></li>
                            <li><a href="#">Kelola Transaksi</a></li>
                        </ul>
                    </div>

                    <div class="footer-column">
                        <h4>Bantuan</h4>
                        <ul class="footer-links">
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Panduan Penggunaan</a></li>
                            <li><a href="#">Kebijakan Privasi</a></li>
                            <li><a href="#">Syarat & Ketentuan</a></li>
                            <li><a href="#">Kontak Kami</a></li>
                        </ul>
                    </div>

                    <div class="footer-column">
                        <h4>Legal</h4>
                        <ul class="footer-links">
                            <li><a href="#">Kebijakan Privasi</a></li>
                            <li><a href="#">Syarat & Ketentuan</a></li>
                            <li><a href="#">Kebijakan Refund</a></li>
                            <li><a href="#">DMCA</a></li>
                            <li><a href="#">Tentang Kami</a></li>
                        </ul>
                    </div>
                </div>

                <div class="footer-bottom">
                    <div>
                        &copy; 2024 LembarNovel. All rights reserved.
                    </div>
                    <div class="footer-divider"></div>
                    <div>
                        Dibuat dengan <i class="fa-solid fa-heart heart-icon mx-2 text-red-500"></i> untuk para pembaca.
                    </div>
                </div>
            </footer>

        </div>
    </div>

    <script>
        const menuToggle = document.getElementById('menuToggle');
        const sidebar = document.getElementById('sidebar');
        const sidebarOverlay = document.getElementById('sidebarOverlay');

        function toggleMenu() {
            sidebar.classList.toggle('open');
            sidebarOverlay.classList.toggle('show');
        }

        menuToggle.addEventListener('click', toggleMenu);
        sidebarOverlay.addEventListener('click', toggleMenu);
    </script>
</body>
</html>