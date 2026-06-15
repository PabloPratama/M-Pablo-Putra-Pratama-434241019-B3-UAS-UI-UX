@extends('user.layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="dashboard-page">

    {{-- HERO SECTION --}}
    <header class="hero-section">
        <div class="hero-overlay">
            <h1 class="hero-title">
                Temukan <span>Cerita,</span><br>
                Rasakan <span>Dunia Baru.</span>
            </h1>
            <p class="hero-description">
                Lembar Novel adalah platform e-novel untuk menemani
                setiap waktu luangmu dengan cerita terbaik dari
                berbagai penulis.
            </p>
            <button type="button" class="hero-btn" onclick="window.location.href='{{ route('katalog') }}'">
                Mulai Membaca
                <i class="fa-solid fa-arrow-right"></i>
            </button>
        </div>
    </header>

    {{-- NOVEL TERPOPULER --}}
    <section class="popular-section">
        <div class="section-header">
            <div>
                <h2 class="section-title">
                    Pilih Novel <span>Terpopuler</span>
                </h2>
                <p class="section-subtitle">
                    Kisah-kisah favorit para pembaca Lembar Novel
                </p>
            </div>
            {{-- Tombol "Lihat Semua" telah dihapus dari sini --}}
        </div>

        <div class="novel-grid">
            {{-- CARD NOVEL 1 --}}
            <a href="javascript:void(0);" class="novel-card-link" title="Detail Novel">
                <div class="novel-card">
                    <div class="novel-cover" style="background-image: url('{{ asset('images/As7.png') }}');"></div>
                    <div class="novel-body">
                        <span class="genre-tag">Horor</span>
                        <div class="novel-meta">
                            <span><i class="fa-solid fa-eye"></i> 207K</span>
                            <span class="rating-box"><i class="fa-solid fa-star icon-star"></i> 5.0</span>
                        </div>
                    </div>
                </div>
            </a>

            {{-- CARD NOVEL 2 --}}
            <a href="javascript:void(0);" class="novel-card-link" title="Detail Novel">
                <div class="novel-card">
                    <div class="novel-cover" style="background-image: url('{{ asset('images/As8.png') }}');"></div>
                    <div class="novel-body">
                        <span class="genre-tag">Drama</span>
                        <div class="novel-meta">
                            <span><i class="fa-solid fa-eye"></i> 236K</span>
                            <span class="rating-box"><i class="fa-solid fa-star icon-star"></i> 5.0</span>
                        </div>
                    </div>
                </div>
            </a>

            {{-- CARD NOVEL 3 --}}
            <a href="javascript:void(0);" class="novel-card-link" title="Detail Novel">
                <div class="novel-card">
                    <div class="novel-cover" style="background-image: url('{{ asset('images/As10.png') }}');"></div>
                    <div class="novel-body">
                        <span class="genre-tag">Romantis</span>
                        <div class="novel-meta">
                            <span><i class="fa-solid fa-eye"></i> 379K</span>
                            <span class="rating-box"><i class="fa-solid fa-star icon-star"></i> 5.0</span>
                        </div>
                    </div>
                </div>
            </a>

            {{-- CARD NOVEL 4 --}}
            <a href="javascript:void(0);" class="novel-card-link" title="Detail Novel">
                <div class="novel-card">
                    <div class="novel-cover" style="background-image: url('{{ asset('images/As13.png') }}');"></div>
                    <div class="novel-body">
                        <span class="genre-tag">Thriller</span>
                        <div class="novel-meta">
                            <span><i class="fa-solid fa-eye"></i> 490K</span>
                            <span class="rating-box"><i class="fa-solid fa-star icon-star"></i> 5.0</span>
                        </div>
                    </div>
                </div>
            </a>

            {{-- CARD NOVEL 5 --}}
            <a href="javascript:void(0);" class="novel-card-link" title="Detail Novel">
                <div class="novel-card">
                    <div class="novel-cover" style="background-image: url('{{ asset('images/As14.png') }}');"></div>
                    <div class="novel-body">
                        <span class="genre-tag">Romantis</span>
                        <div class="novel-meta">
                            <span><i class="fa-solid fa-eye"></i> 179K</span>
                            <span class="rating-box"><i class="fa-solid fa-star icon-star"></i> 4.9</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </section>

    {{-- SECTION FITUR & STATS --}}
    <section class="features-wrapper">
        <h2 class="why-title">
            Kenapa Pilih <span>Lembar Novel ?</span>
        </h2>

        <div class="feature-grid">
            <div class="feature-card">
                <i class="fa-solid fa-book-open feature-icon"></i>
                <h3>Baca Kapan Saja</h3>
                <p>Akses ribuan novel kapan saja dan dimana saja.</p>
            </div>

            <div class="feature-card">
                <i class="fa-regular fa-bookmark feature-icon"></i>
                <h3>Simpan Favoritmu</h3>
                <p>Simpan novel favorit dan lanjutkan bacaan dengan mudah.</p>
            </div>

            <div class="feature-card">
                <i class="fa-solid fa-shield-halved feature-icon"></i>
                <h3>Aman & Nyaman</h3>
                <p>Transaksi aman dan pengalaman membaca yang nyaman.</p>
            </div>

            <div class="feature-card">
                <i class="fa-regular fa-star feature-icon"></i>
                <h3>Banyak Pilihan</h3>
                <p>Beragam genre dan penulis untuk setiap selera.</p>
            </div>

            <div class="feature-card">
                <i class="fa-regular fa-heart feature-icon"></i>
                <h3>Dukung Penulis</h3>
                <p>Dukung penulis kesayanganmu dengan membaca karya mereka.</p>
            </div>
        </div>

        {{-- STATS CARD PERSEGI PANJANG --}}
        <div class="stats-card">
            <div class="stat-item">
                <i class="fa-solid fa-book stat-icon"></i>
                <div class="stat-content">
                    <h3>30K+</h3>
                    <p>Koleksi Novel</p>
                </div>
            </div>

            <div class="stat-item">
                <i class="fa-solid fa-users stat-icon"></i>
                <div class="stat-content">
                    <h3>600K+</h3>
                    <p>Pembaca Setia</p>
                </div>
            </div>

            <div class="stat-item">
                <i class="fa-solid fa-pen-nib stat-icon"></i>
                <div class="stat-content">
                    <h3>4K+</h3>
                    <p>Penulis Bergabung</p>
                </div>
            </div>
        </div>
    </section>

</div>

<style>
    .dashboard-page {
        display: flex;
        flex-direction: column;
        gap: 80px;
        font-family: 'Poppins', sans-serif;
        padding: 0 4%;
        box-sizing: border-box;
    }

    .hero-section {
        min-height: 520px;
        background-image:
            linear-gradient(
                90deg,
                rgba(9,0,25,.95) 0%,
                rgba(9,0,25,.75) 35%,
                rgba(9,0,25,.15) 65%,
                rgba(9,0,25,0) 100%
            ),
            url('{{ asset("images/As16.png") }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        display: flex;
        align-items: center;
        padding: 60px;
        width: 100%;
        border-radius: 24px;
        box-sizing: border-box;
        margin-top: 20px;
    }

    .hero-overlay {
        max-width: 550px;
        width: 100%;
    }

    .hero-title {
        font-family: 'Cormorant Garamond', serif;
        font-size: clamp(2.5rem, 4vw, 4.2rem);
        line-height: 1.1;
        font-weight: 700;
        color: #ffffff;
    }

    .hero-title span {
        color: #D17CE3;
    }

    .hero-description {
        margin-top: 20px;
        font-size: 1rem;
        line-height: 1.7;
        color: #E9E9E9;
    }

    .hero-btn {
        margin-top: 30px;
        border: none;
        height: 50px;
        padding: 0 30px;
        border-radius: 12px;
        background: linear-gradient(90deg, #D17CE3, #B87BFF);
        color: #ffffff;
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        font-size: 0.95rem;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 12px;
        box-shadow: 0 8px 24px rgba(184, 123, 255, 0.35);
        transition: all 0.3s ease;
    }

    .hero-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 12px 28px rgba(184, 123, 255, 0.45);
    }

    .hero-btn i {
        transition: transform 0.3s ease;
    }

    .hero-btn:hover i {
        transform: translateX(4px);
    }

    .popular-section {
        background: #ffffff;
        color: #111111;
        border-radius: 24px;
        padding: 40px;
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
        gap: 35px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.02);
    }

    .section-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 20px;
    }

    .section-title {
        font-family: 'Cormorant Garamond', serif;
        font-size: 2.4rem;
        font-weight: 700;
        color: #111111;
        margin: 0;
    }

    .section-title span {
        color: #D17CE3;
    }

    .section-subtitle {
        margin-top: 8px;
        margin-bottom: 0;
        color: #555555;
    }

    .novel-grid {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 20px;
    }

    .novel-card-link {
        text-decoration: none;
        color: inherit;
        display: block;
    }

    .novel-card {
        background: #ffffff;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
        border: 1px solid #f0f0f0;
    }

    .novel-card-link:hover .novel-card {
        transform: translateY(-6px);
        box-shadow: 0 15px 30px rgba(139, 92, 246, 0.15);
    }

    .novel-cover {
        height: 260px;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-color: #37186F;
        width: 100%;
    }

    .novel-body {
        padding: 16px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .genre-tag {
        display: inline-block;
        align-self: flex-start;
        padding: 4px 12px;
        border-radius: 999px;
        background: #E8D7F5;
        color: #7D3FB1;
        font-size: 0.75rem;
        font-weight: 600;
    }

    .novel-meta {
        margin-top: 15px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 0.85rem;
        color: #777777;
    }

    .novel-meta span {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        line-height: 1;
    }

    .novel-meta .rating-box {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 4px; 
        line-height: 1; 
    }

    .novel-meta .icon-star {
    color: #FFC107;
    font-size: 0.85rem;
    display: inline-block;
    vertical-align: middle;

    position: relative;
    top: -2px;
}

    .features-wrapper {
        display: flex;
        flex-direction: column;
        gap: 40px;
        margin-bottom: 40px;
        box-sizing: border-box;
    }

    .why-title {
        text-align: center;
        color: #ffffff;
        font-family: 'Cormorant Garamond', serif;
        font-size: 2.6rem;
        font-weight: 700;
        margin: 0;
    }

    .why-title span {
        color: #D17CE3;
    }

    .feature-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
    }

    .feature-card {
        background: #22123F;
        border: 1px solid rgba(139, 92, 246, 0.3);
        border-radius: 18px;
        height: 255px;
        padding: 32px 24px;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        box-shadow:
            0 12px 24px rgba(0,0,0,.18),
            0 0 30px rgba(139,92,246,.08);
        transition: all .3s ease;
    }

    .feature-card:hover {
        transform: translateY(-5px);
        border-color: #8B5CF6;
        box-shadow: 0 15px 30px rgba(139, 92, 246, 0.3);
    }
    .feature-icon {
        font-size: 48px;
        color: #D17CE3;
        margin-bottom: 20px;
    }

    .feature-card h3 {
        color: #FFFFFF;
        font-size: 1.15rem;
        font-weight: 600;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 0 12px;
    }
    .feature-card p {
        font-size: 0.92rem;
        color: #E9E9E9;
        line-height: 1.7;
        margin: 0;
    }

    .stats-card {
        background: #18092F;
        border: 1px solid rgba(139, 92, 246, 0.3);
        border-radius: 16px;
        padding: 30px;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    }

    .stat-item {
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        gap: 12px;
    }

    .stat-item:not(:last-child)::after {
        content: '';
        position: absolute;
        right: -10px;
        top: 50%;
        transform: translateY(-50%);
        width: 1px;
        height: 60px;
        background: rgba(139, 92, 246, 0.2);
    }

    .stat-icon {
        font-size: 40px;
        color: #D17CE3;
    }

    .stat-content {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .stat-item h3 {
        color: #A855F7;
        font-size: 2.2rem;
        margin: 0;
        font-weight: 700;
    }

    .stat-item p {
        color: #E9E9E9;
        font-size: 0.9rem;
        margin: 0;
    }

    @media (max-width: 1200px) {
        .novel-grid {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media (max-width: 992px) {
        .hero-section {
            padding: 40px;
            background-image:
                linear-gradient(
                    180deg,
                    rgba(9,0,25,.95) 0%,
                    rgba(9,0,25,.85) 60%,
                    rgba(9,0,25,.4) 100%
                ),
                url('{{ asset("images/As16.png") }}');
        }

        .hero-overlay {
            text-align: center;
            max-width: 100%;
        }
    }

    @media (max-width: 768px) {
        .novel-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .section-header {
            flex-direction: column;
            align-items: flex-start;
            gap: 15px;
        }

        .stats-card {
            grid-template-columns: 1fr;
            gap: 30px;
        }

        .stat-item:not(:last-child)::after {
            display: none;
        }
    }

    @media (max-width: 480px) {
        .novel-grid {
            grid-template-columns: 1fr;
        }
    }
</style>
@endsection