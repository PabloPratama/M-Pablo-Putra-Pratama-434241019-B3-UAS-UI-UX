@extends('user.layouts.app')

@section('title', 'Artikel')

@section('content')
<div class="artikel-page">

    {{-- HERO / HEADER SECTION --}}
    <header class="artikel-hero">
        <div class="hero-overlay">
            <h1 class="hero-title">
                Jelajahi <span>Wawasan,</span><br>
                Perluas <span>Imajinasi Anda.</span>
            </h1>
            <p class="hero-description">
                Temukan berbagai artikel menarik, tips menulis, bedah genre, dan kabar terbaru seputar dunia literasi digital hanya di Lembar Novel.
            </p>
        </div>
    </header>

    {{-- SEARCH BAR (SEKARANG DI BAWAH GAMBAR HERO) --}}
    <div class="search-section-wrapper">
        <div class="search-container">
            <input type="text" id="articleSearch" placeholder="Cari judul artikel di sini...">
            <i class="fa-solid fa-magnifying-glass search-icon"></i>
        </div>
    </div>

    {{-- ARTICLES SECTION --}}
    <section class="articles-section">
        <div class="section-header">
            <h2 class="section-title">Artikel <span>Terbaru</span></h2>
            <p class="section-subtitle">Kumpulan info dan bacaan edukatif untuk menemani harimu</p>
        </div>

        {{-- GRID UTAMA ARTIKEL --}}
        <div class="articles-grid" id="articlesGrid">
            
            {{-- BLOK 1: 6 ARTIKEL ASLI SESUAI SCREENSHOT --}}
            {{-- Card 1 --}}
            <div class="article-card" data-title="Novel Baru “The Reborn Prince” Resmi Rilis Minggu Ini">
                <div class="card-cover-placeholder">
                    <img src="{{ asset('images/As6.png') }}" alt="Cover Artikel" onerror="this.style.display='none';">
                </div>
                <div class="card-body">
                    <h3 class="card-title">Novel Baru “The Reborn Prince” Resmi Rilis Minggu Ini</h3>
                    <p class="card-excerpt">Karya terbaru dari penulis Miko Argantara yang telah dinantikan oleh para penggemar fantasy.</p>
                    <div class="card-footer">
                        <span class="article-date">19 Mei 2026</span>
                        <a href="{{ route('artikel.detail') }}" class="read-more-btn">
                            Baca Selengkapnya <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Card 2 --}}
            <div class="article-card" data-title="Review : Jejak di Antara Bintang">
                <div class="card-cover-placeholder">
                    <img src="{{ asset('images/As3.png') }}" alt="Cover Artikel" onerror="this.style.display='none';">
                </div>
                <div class="card-body">
                    <h3 class="card-title">Review : Jejak di Antara Bintang</h3>
                    <p class="card-excerpt">Sebuah perjalanan luar biasa tentang tentang takdir, keberanian, dan cinta yang melintasi waktu.</p>
                    <div class="card-footer">
                        <span class="article-date">20 April 2026</span>
                        <a href="{{ route('artikel.detail') }}" class="read-more-btn">
                            Baca Selengkapnya <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Card 3 --}}
            <div class="article-card" data-title="Rekomendasi Bacaan untuk Malam yang Tenang">
                <div class="card-cover-placeholder">
                    <img src="{{ asset('images/As5.png') }}" alt="Cover Artikel" onerror="this.style.display='none';">
                </div>
                <div class="card-body">
                    <h3 class="card-title">Rekomendasi Bacaan untuk Malam yang Tenang</h3>
                    <p class="card-excerpt">Novel-novel hanyat yang cocok menemani malam santai kamu.</p>
                    <div class="card-footer">
                        <span class="article-date">15 April 2026</span>
                        <a href="{{ route('artikel.detail') }}" class="read-more-btn">
                            Baca Selengkapnya <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Card 4 --}}
            <div class="article-card" data-title="7 Novel Horor Indonesia yang Bikin Merinding">
                <div class="card-cover-placeholder">
                    <img src="{{ asset('images/As4.png') }}" alt="Cover Artikel" onerror="this.style.display='none';">
                </div>
                <div class="card-body">
                    <h3 class="card-title">7 Novel Horor Indonesia yang Bikin Merinding</h3>
                    <p class="card-excerpt">Kumpulan novel horor lokal dengan cerita yang menegangkan dan mencekam.</p>
                    <div class="card-footer">
                        <span class="article-date">3 April 2026</span>
                        <a href="{{ route('artikel.detail') }}" class="read-more-btn">
                            Baca Selengkapnya <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Card 5 --}}
            <div class="article-card" data-title="Review : Rahasia di Balik Topeng">
                <div class="card-cover-placeholder">
                    <img src="{{ asset('images/As2.png') }}" alt="Cover Artikel" onerror="this.style.display='none';">
                </div>
                <div class="card-body">
                    <h3 class="card-title">Review : Rahasia di Balik Topeng</h3>
                    <p class="card-excerpt">Intik, misteri, dan rahasia keluarga membuat novel ini sulit untuk dilewatkan.</p>
                    <div class="card-footer">
                        <span class="article-date">30 Maret 2026</span>
                        <a href="{{ route('artikel.detail') }}" class="read-more-btn">
                            Baca Selengkapnya <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Card 6 --}}
            <div class="article-card" data-title="Dunia Dalam Novel Fantasi yang Paling Memukau">
                <div class="card-cover-placeholder">
                    <img src="{{ asset('images/As1.png') }}" alt="Cover Artikel" onerror="this.style.display='none';">
                </div>
                <div class="card-body">
                    <h3 class="card-title">Dunia Dalam Novel Fantasi yang Paling Memukau</h3>
                    <p class="card-excerpt">Bahas dunia fantasi terbaik dalam novel yang penuh keajaiban dan petualangan.</p>
                    <div class="card-footer">
                        <span class="article-date">22 Maret 2026</span>
                        <a href="{{ route('artikel.detail') }}" class="read-more-btn">
                            Baca Selengkapnya <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            {{-- BLOK 2: COPY DATA (Card 7 s.d 12) --}}
            <div class="article-card" data-title="Novel Baru “The Reborn Prince” Resmi Rilis Minggu Ini">
                <div class="card-cover-placeholder">
                    <img src="{{ asset('images/As6.png') }}" alt="Cover Artikel" onerror="this.style.display='none';">
                </div>
                <div class="card-body">
                    <h3 class="card-title">Novel Baru “The Reborn Prince” Resmi Rilis Minggu Ini</h3>
                    <p class="card-excerpt">Karya terbaru dari penulis Miko Argantara yang telah dinantikan oleh para penggemar fantasy.</p>
                    <div class="card-footer">
                        <span class="article-date">19 Mei 2026</span>
                        <a href="{{ route('artikel.detail') }}" class="read-more-btn">Baca Selengkapnya <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="article-card" data-title="Review : Jejak di Antara Bintang">
                <div class="card-cover-placeholder">
                    <img src="{{ asset('images/As3.png') }}" alt="Cover Artikel" onerror="this.style.display='none';">
                </div>
                <div class="card-body">
                    <h3 class="card-title">Review : Jejak di Antara Bintang</h3>
                    <p class="card-excerpt">Sebuah perjalanan luar biasa tentang tentang takdir, keberanian, dan cinta yang melintasi waktu.</p>
                    <div class="card-footer">
                        <span class="article-date">20 April 2026</span>
                        <a href="{{ route('artikel.detail') }}" class="read-more-btn">Baca Selengkapnya <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="article-card" data-title="Rekomendasi Bacaan untuk Malam yang Tenang">
                <div class="card-cover-placeholder">
                    <img src="{{ asset('images/As5.png') }}" alt="Cover Artikel" onerror="this.style.display='none';">
                </div>
                <div class="card-body">
                    <h3 class="card-title">Rekomendasi Bacaan untuk Malam yang Tenang</h3>
                    <p class="card-excerpt">Novel-novel hanyat yang cocok menemani malam santai kamu.</p>
                    <div class="card-footer">
                        <span class="article-date">15 April 2026</span>
                        <a href="{{ route('artikel.detail') }}" class="read-more-btn">Baca Selengkapnya <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="article-card" data-title="7 Novel Horor Indonesia yang Bikin Merinding">
                <div class="card-cover-placeholder">
                    <img src="{{ asset('images/As4.png') }}" alt="Cover Artikel" onerror="this.style.display='none';">
                </div>
                <div class="card-body">
                    <h3 class="card-title">7 Novel Horor Indonesia yang Bikin Merinding</h3>
                    <p class="card-excerpt">Kumpulan novel horor lokal dengan cerita yang menegangkan dan mencekam.</p>
                    <div class="card-footer">
                        <span class="article-date">3 April 2026</span>
                        <a href="{{ route('artikel.detail') }}" class="read-more-btn">Baca Selengkapnya <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="article-card" data-title="Review : Rahasia di Balik Topeng">
                <div class="card-cover-placeholder">
                    <img src="{{ asset('images/As2.png') }}" alt="Cover Artikel" onerror="this.style.display='none';">
                </div>
                <div class="card-body">
                    <h3 class="card-title">Review : Rahasia di Balik Topeng</h3>
                    <p class="card-excerpt">Intik, misteri, dan rahasia keluarga membuat novel ini sulit untuk dilewatkan.</p>
                    <div class="card-footer">
                        <span class="article-date">30 Maret 2026</span>
                        <a href="{{ route('artikel.detail') }}" class="read-more-btn">Baca Selengkapnya <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="article-card" data-title="Dunia Dalam Novel Fantasi yang Paling Memukau">
                <div class="card-cover-placeholder">
                    <img src="{{ asset('images/As1.png') }}" alt="Cover Artikel" onerror="this.style.display='none';">
                </div>
                <div class="card-body">
                    <h3 class="card-title">Dunia Dalam Novel Fantasi yang Paling Memukau</h3>
                    <p class="card-excerpt">Bahas dunia fantasi terbaik dalam novel yang penuh keajaiban dan petualangan.</p>
                    <div class="card-footer">
                        <span class="article-date">22 Maret 2026</span>
                        <a href="{{ route('artikel.detail') }}" class="read-more-btn">Baca Selengkapnya <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            {{-- BLOK 3: COPY DATA (Card 13 s.d 18) --}}
            <div class="article-card" data-title="Novel Baru “The Reborn Prince” Resmi Rilis Minggu Ini">
                <div class="card-cover-placeholder">
                    <img src="{{ asset('images/As6.png') }}" alt="Cover Artikel" onerror="this.style.display='none';">
                </div>
                <div class="card-body">
                    <h3 class="card-title">Novel Baru “The Reborn Prince” Resmi Rilis Minggu Ini</h3>
                    <p class="card-excerpt">Karya terbaru dari penulis Miko Argantara yang telah dinantikan oleh para penggemar fantasy.</p>
                    <div class="card-footer">
                        <span class="article-date">19 Mei 2026</span>
                        <a href="{{ route('artikel.detail') }}" class="read-more-btn">Baca Selengkapnya <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="article-card" data-title="Review : Jejak di Antara Bintang">
                <div class="card-cover-placeholder">
                    <img src="{{ asset('images/As3.png') }}" alt="Cover Artikel" onerror="this.style.display='none';">
                </div>
                <div class="card-body">
                    <h3 class="card-title">Review : Jejak di Antara Bintang</h3>
                    <p class="card-excerpt">Sebuah perjalanan luar biasa tentang tentang takdir, keberanian, dan cinta yang melintasi waktu.</p>
                    <div class="card-footer">
                        <span class="article-date">20 April 2026</span>
                        <a href="{{ route('artikel.detail') }}" class="read-more-btn">Baca Selengkapnya <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="article-card" data-title="Rekomendasi Bacaan untuk Malam yang Tenang">
                <div class="card-cover-placeholder">
                    <img src="{{ asset('images/As5.png') }}" alt="Cover Artikel" onerror="this.style.display='none';">
                </div>
                <div class="card-body">
                    <h3 class="card-title">Rekomendasi Bacaan untuk Malam yang Tenang</h3>
                    <p class="card-excerpt">Novel-novel hanyat yang cocok menemani malam santai kamu.</p>
                    <div class="card-footer">
                        <span class="article-date">15 April 2026</span>
                        <a href="{{ route('artikel.detail') }}" class="read-more-btn">Baca Selengkapnya <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="article-card" data-title="7 Novel Horor Indonesia yang Bikin Merinding">
                <div class="card-cover-placeholder">
                    <img src="{{ asset('images/As4.png') }}" alt="Cover Artikel" onerror="this.style.display='none';">
                </div>
                <div class="card-body">
                    <h3 class="card-title">7 Novel Horor Indonesia yang Bikin Merinding</h3>
                    <p class="card-excerpt">Kumpulan novel horor lokal dengan cerita yang menegangkan dan mencekam.</p>
                    <div class="card-footer">
                        <span class="article-date">3 April 2026</span>
                        <a href="{{ route('artikel.detail') }}" class="read-more-btn">Baca Selengkapnya <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="article-card" data-title="Review : Rahasia di Balik Topeng">
                <div class="card-cover-placeholder">
                    <img src="{{ asset('images/As2.png') }}" alt="Cover Artikel" onerror="this.style.display='none';">
                </div>
                <div class="card-body">
                    <h3 class="card-title">Review : Rahasia di Balik Topeng</h3>
                    <p class="card-excerpt">Intik, misteri, dan rahasia keluarga membuat novel ini sulit untuk dilewatkan.</p>
                    <div class="card-footer">
                        <span class="article-date">30 Maret 2026</span>
                        <a href="{{ route('artikel.detail') }}" class="read-more-btn">Baca Selengkapnya <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="article-card" data-title="Dunia Dalam Novel Fantasi yang Paling Memukau">
                <div class="card-cover-placeholder">
                    <img src="{{ asset('images/As1.png') }}" alt="Cover Artikel" onerror="this.style.display='none';">
                </div>
                <div class="card-body">
                    <h3 class="card-title">Dunia Dalam Novel Fantasi yang Paling Memukau</h3>
                    <p class="card-excerpt">Bahas dunia fantasi terbaik dalam novel yang penuh keajaiban dan petualangan.</p>
                    <div class="card-footer">
                        <span class="article-date">22 Maret 2026</span>
                        <a href="{{ route('artikel.detail') }}" class="read-more-btn">Baca Selengkapnya <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

        </div>

        {{-- NOT FOUND MESSAGE --}}
        <div id="noArticleMessage" class="not-found-message" style="display: none;">
            Tidak ada artikel yang sesuai
        </div>

        {{-- PAGINATION CONTAINER --}}
        <div class="pagination-wrapper">
            <button type="button" class="page-box page-arrow" id="prevPage" title="Halaman Sebelumnya">
                <i class="fa-solid fa-chevron-left"></i>
            </button>
            
            <button type="button" class="page-box page-num active" data-page="1">1</button>
            <button type="button" class="page-box page-num" data-page="2">2</button>
            <button type="button" class="page-box page-num" data-page="3">3</button>
            
            <button type="button" class="page-box page-arrow" id="nextPage" title="Halaman Selanjutnya">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
        </div>

    </section>
</div>

{{-- STYLING COMPONENT --}}
<style>
    .artikel-page {
        display: flex;
        flex-direction: column;
        gap: 40px;
        font-family: 'Poppins', sans-serif;
        padding: 0 4%;
        box-sizing: border-box;
    }

    .artikel-hero {
        min-height: 400px;
        background-image:
            linear-gradient(
                90deg,
                rgba(9,0,25,.95) 0%,
                rgba(9,0,25,.80) 40%,
                rgba(9,0,25,.30) 70%,
                rgba(9,0,25,0) 100%
            ),
            url('{{ asset("images/As19.png") }}');
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
        max-width: 650px;
        width: 100%;
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .hero-title {
        font-family: 'Cormorant Garamond', serif;
        font-size: clamp(2.3rem, 3.8vw, 3.8rem);
        line-height: 1.15;
        font-weight: 700;
        color: #ffffff;
        margin: 0;
    }

    .hero-title span {
        color: #D17CE3;
    }

    .hero-description {
        font-size: 1rem;
        line-height: 1.7;
        color: #E9E9E9;
        margin: 0;
    }

    .search-section-wrapper {
        display: flex;
        justify-content: flex-start;
        width: 100%;
        padding: 10px 0;
    }

    .search-container {
        position: relative;
        max-width: 600px; 
        width: 100%;
        display: flex;
        flex-direction: row-reverse;
        align-items: center;
    }

    .search-container #articleSearch {
        width: 100%;
        height: 60px; 
        background: #0C0420;
        border: 1px solid #2B0F52;
        border-radius: 14px; 
        padding: 0 60px 0 24px; 
        color: #ffffff;
        font-family: 'Poppins', sans-serif;
        font-size: 1.1rem; 
        box-sizing: border-box;
        outline: none;
        transition: all 0.3s ease;
    }

    .search-container #articleSearch:focus {
        border-color: #D17CE3;
        box-shadow: 0 0 15px rgba(209, 124, 227, 0.3);
    }

    .search-icon {
        position: absolute;
        right: 22px; 
        color: #D17CE3;
        font-size: 1.3rem; 
        pointer-events: none;
    }

    .articles-section {
        display: flex;
        flex-direction: column;
        gap: 40px;
        box-sizing: border-box;
    }

    .section-header {
        text-align: left;
    }

    .section-title {
        font-family: 'Cormorant Garamond', serif;
        font-size: 3.5rem; 
        font-weight: 700;
        color: #ffffff;
        margin: 0;
    }

    .section-title span {
        color: #D17CE3;
    }

    .section-subtitle {
        margin-top: 10px;
        margin-bottom: 0;
        color: #ffffff; 
        font-size: 1.1rem; 
    }

    .articles-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
    }

    .article-card {
        background: #22123F;
        border: 1px solid rgba(139, 92, 246, 0.3);
        border-radius: 18px;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        height: 100%;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        box-sizing: border-box;
    }

    .article-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 25px rgba(139, 92, 246, 0.2);
    }

    .card-cover-placeholder {
        height: 200px;
        background-color: #18092F;
        width: 100%;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        border-bottom: 1px solid rgba(139, 92, 246, 0.2);
    }

    .card-cover-placeholder img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        position: absolute;
        top: 0;
        left: 0;
    }

    .cover-text {
        font-size: 0.75rem;
        color: rgba(209, 124, 227, 0.6);
        padding: 10px;
        text-align: center;
        z-index: 1;
    }

    .card-body {
        padding: 24px;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
        gap: 16px;
    }

    .card-title {
        font-family: 'Poppins', sans-serif;
        color: #ffffff;
        font-size: 1.15rem;
        font-weight: 600;
        line-height: 1.4;
        margin: 0;
        height: 2.8em; 
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .card-excerpt {
        font-size: 0.88rem;
        color: #E9E9E9;
        line-height: 1.6;
        margin: 0;
        height: 4.8em; 
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .card-footer {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-top: auto;
        width: 100%;
        padding-top: 10px;
    }

    .article-date {
        font-size: 0.85rem;
        color: rgba(255, 255, 255, 0.5);
        font-weight: 400;
    }

    .read-more-btn {
        text-decoration: none;
        color: #D17CE3;
        font-weight: 600;
        font-size: 0.9rem;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: gap 0.2s ease;
    }

    .read-more-btn i {
        color: #D17CE3;
        font-size: 0.85rem;
        transition: transform 0.2s ease;
    }

    .read-more-btn:hover i {
        transform: translateX(5px);
    }

    .not-found-message {
        text-align: center;
        color: #B87BFF;
        font-size: 1.2rem;
        padding: 40px 0;
        font-style: italic;
    }

    .pagination-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 16px; 
        margin-top: 40px;
        margin-bottom: 50px;
        width: 100%;
    }

    .page-box {
        background: #18092F;
        border: 1px solid #D17CE3;
        border-radius: 12px; 
        min-width: 56px; 
        height: 56px;    
        color: #ffffff;
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        font-size: 1.15rem; 
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background-color 0.2s ease, color 0.2s ease, border-color 0.2s ease;
        box-sizing: border-box;
    }

    .page-box i {
        font-size: 1.1rem;
    }

    .page-box:hover {
        background-color: #D17CE3;
        color: #18092F;
        border-color: #D17CE3;
    }

    .page-box.active {
        background-color: #D17CE3;
        color: #18092F;
        border-color: #D17CE3;
    }

    @media (max-width: 1200px) {
        .articles-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
        }
    }

    @media (max-width: 992px) {
        .artikel-hero {
            padding: 40px;
        }
        .hero-overlay {
            max-width: 100%;
        }
        .search-section-wrapper {
            justify-content: center;
        }
    }

    @media (max-width: 768px) {
        .articles-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }
        .section-title {
            font-size: 2.8rem; 
        }
        .card-title, .card-excerpt {
            height: auto;
        }
    }

    @media (max-width: 576px) {
        .articles-grid {
            grid-template-columns: 1fr;
        }
        .artikel-hero {
            padding: 30px 20px;
        }
        .card-footer {
            flex-direction: row;
            align-items: center;
        }
    }
</style>
{{-- INTERACTIVE JAVASCRIPT --}}
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const cardsPerPage = 6;
        let currentPage = 1;
        let activeSearchQuery = "";

        // Elements
        const searchInput = document.getElementById("articleSearch");
        const allCards = Array.from(document.querySelectorAll(".article-card"));
        const pageButtons = document.querySelectorAll(".page-num");
        const prevButton = document.getElementById("prevPage");
        const nextButton = document.getElementById("nextPage");
        const noArticleMessage = document.getElementById("noArticleMessage");
        const paginationWrapper = document.querySelector(".pagination-wrapper");

        function renderPage() {
            const filteredCards = allCards.filter(card => {
                const title = card.getAttribute("data-title").toLowerCase();
                return title.includes(activeSearchQuery.toLowerCase());
            });

            if (filteredCards.length === 0) {
                noArticleMessage.style.display = "block";
                paginationWrapper.style.display = "none";
                allCards.forEach(card => card.style.display = "none");
                return;
            } else {
                noArticleMessage.style.display = "none";
                paginationWrapper.style.display = (activeSearchQuery === "") ? "flex" : "none";
            }

            if (activeSearchQuery !== "") {
                allCards.forEach(card => {
                    if (filteredCards.includes(card)) {
                        card.style.display = "flex";
                    } else {
                        card.style.display = "none";
                    }
                });
                return;
            }

            const startIndex = (currentPage - 1) * cardsPerPage;
            const endIndex = startIndex + cardsPerPage;

            allCards.forEach((card, index) => {
                if (index >= startIndex && index < endIndex) {
                    card.style.display = "flex";
                } else {
                    card.style.display = "none";
                }
            });

            pageButtons.forEach(btn => {
                if (parseInt(btn.getAttribute("data-page")) === currentPage) {
                    btn.classList.add("active");
                } else {
                    btn.classList.remove("active");
                }
            });
        }

        pageButtons.forEach(button => {
            button.addEventListener("click", function() {
                currentPage = parseInt(this.getAttribute("data-page"));
                renderPage();
            });
        });

        prevButton.addEventListener("click", function() {
            this.style.backgroundColor = "#D17CE3";
            this.style.color = "#18092F";
            setTimeout(() => {
                this.style.backgroundColor = "#18092F";
                this.style.color = "#ffffff";
            }, 150);

            if (currentPage > 1) {
                currentPage--;
                renderPage();
            }
        });

        nextButton.addEventListener("click", function() {
            this.style.backgroundColor = "#D17CE3";
            this.style.color = "#18092F";
            setTimeout(() => {
                this.style.backgroundColor = "#18092F";
                this.style.color = "#ffffff";
            }, 150);

            if (currentPage < 3) {
                currentPage++;
                renderPage();
            }
        });

        searchInput.addEventListener("input", function(e) {
            activeSearchQuery = e.target.value.trim();
            currentPage = 1;
            renderPage();
        });

        renderPage();
    });
</script>
@endsection