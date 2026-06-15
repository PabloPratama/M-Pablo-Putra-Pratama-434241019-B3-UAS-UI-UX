@extends('user.layouts.app')

@section('title', 'Katalog')

@section('content')

<div class="katalog-body">
    <div class="container-fluid px-5 py-4">

        <div class="katalog-banner">
            <div class="katalog-banner-content">
                <h1>Katalog</h1>
                <p>Temukan ribuan cerita terbaik dari berbagai genre.</p>
            </div>
        </div>

        <div class="bar-controls">
            <div class="search-container">
                <input type="text" id="searchNovel" class="search-input" placeholder="Cari judul novel atau penulis...">
                <i class="fas fa-search search-icon"></i>
            </div>

            <div class="pagination-custom">
                <div class="page-box arrow"><i class="fas fa-arrow-left"></i></div>
                <div class="page-box active">1</div>
                <div class="page-box">2</div>
                <div class="page-box">3</div>
                <div class="page-box arrow"><i class="fas fa-arrow-right"></i></div>
            </div>
        </div>

        <div class="katalog-grid-layout">
            
            <div class="sidebar-sticky">
                
                <div class="sidebar-card">
                    <h2>Genre</h2>
                    <div class="genre-list">
                        <div class="genre-item active" data-genre="semua">
                            <div class="genre-left">
                                <span class="genre-icon"><i class="fas fa-th-large"></i></span>
                                <span>Semua Genre</span>
                            </div>
                            <span class="genre-count">30.000</span>
                        </div>
                        <div class="genre-item" data-genre="romantis">
                            <div class="genre-left">
                                <span class="genre-icon"><i class="fas fa-heart"></i></span>
                                <span>Romantis</span>
                            </div>
                            <span class="genre-count">7.000</span>
                        </div>
                        <div class="genre-item" data-genre="fantasi">
                            <div class="genre-left">
                                <span class="genre-icon"><i class="fas fa-magic"></i></span>
                                <span>Fantasi</span>
                            </div>
                            <span class="genre-count">2.000</span>
                        </div>
                        <div class="genre-item" data-genre="horor">
                            <div class="genre-left">
                                <span class="genre-icon"><i class="fas fa-ghost"></i></span>
                                <span>Horor</span>
                            </div>
                            <span class="genre-count">6.000</span>
                        </div>
                        <div class="genre-item" data-genre="misteri">
                            <div class="genre-left">
                                <span class="genre-icon"><i class="fas fa-user-secret"></i></span>
                                <span>Misteri</span>
                            </div>
                            <span class="genre-count">3.000</span>
                        </div>
                        <div class="genre-item" data-genre="thriller">
                            <div class="genre-left">
                                <span class="genre-icon"><i class="fas fa-skull"></i></span>
                                <span>Thriller</span>
                            </div>
                            <span class="genre-count">1.000</span>
                        </div>
                        <div class="genre-item" data-genre="petualangan">
                            <div class="genre-left">
                                <span class="genre-icon"><i class="fas fa-mountain"></i></span>
                                <span>Petualangan</span>
                            </div>
                            <span class="genre-count">1.000</span>
                        </div>
                        <div class="genre-item" data-genre="sci-fi">
                            <div class="genre-left">
                                <span class="genre-icon"><i class="fas fa-rocket"></i></span>
                                <span>Sci-Fi</span>
                            </div>
                            <span class="genre-count">1.000</span>
                        </div>
                        <div class="genre-item" data-genre="drama">
                            <div class="genre-left">
                                <span class="genre-icon"><i class="fas fa-theater-masks"></i></span>
                                <span>Drama</span>
                            </div>
                            <span class="genre-count">5.000</span>
                        </div>
                        <div class="genre-item" data-genre="komedi">
                            <div class="genre-left">
                                <span class="genre-icon"><i class="fas fa-laugh-beam"></i></span>
                                <span>Komedi</span>
                            </div>
                            <span class="genre-count">4.000</span>
                        </div>
                    </div>
                </div>

                <div class="sidebar-card">
                    <h2>Filter Lainnya</h2>
                    
                    <div class="filter-group-title">Status</div>
                    <label class="checkbox-label">
                        <div class="checkbox-left">
                            <input type="checkbox" class="filter-status" value="semua" checked>
                            <span class="checkbox-custom"></span>
                            <span>Semua</span>
                        </div>
                    </label>
                    <label class="checkbox-label">
                        <div class="checkbox-left">
                            <input type="checkbox" class="filter-status" value="tamat">
                            <span class="checkbox-custom"></span>
                            <span>Tamat</span>
                        </div>
                    </label>
                    <label class="checkbox-label">
                        <div class="checkbox-left">
                            <input type="checkbox" class="filter-status" value="ongoing">
                            <span class="checkbox-custom"></span>
                            <span>Ongoing</span>
                        </div>
                    </label>

                    <div class="filter-group-title">Urutan</div>
                    <label class="checkbox-label">
                        <div class="checkbox-left">
                            <input type="checkbox" class="filter-urutan" value="semua" checked>
                            <span class="checkbox-custom"></span>
                            <span>Semua</span>
                        </div>
                    </label>
                    <label class="checkbox-label">
                        <div class="checkbox-left">
                            <input type="checkbox" class="filter-urutan" value="terbaru">
                            <span class="checkbox-custom"></span>
                            <span>Terbaru</span>
                        </div>
                    </label>
                    <label class="checkbox-label">
                        <div class="checkbox-left">
                            <input type="checkbox" class="filter-urutan" value="rating">
                            <span class="checkbox-custom"></span>
                            <span>Rating Tertinggi</span>
                        </div>
                    </label>
                    <label class="checkbox-label">
                        <div class="checkbox-left">
                            <input type="checkbox" class="filter-urutan" value="dibaca">
                            <span class="checkbox-custom"></span>
                            <span>Paling Banyak Dibaca</span>
                        </div>
                    </label>
                </div>

            </div>

            <div class="novel-grid" id="novelGrid">
                
                <a href="javascript:void(0)">
                    <div class="novel-card" data-title="Bayangan Masa Lalu" data-genre="romantis" data-status="tamat" data-urutan="rating dibaca">
                        <div class="novel-cover-wrapper">
                            <img src="{{ asset('images/As27.png') }}" class="novel-cover" alt="">
                        </div>
                        <div class="novel-info-bar">
                            <div class="novel-tag-container">
                                <span class="novel-tag-genre">Romantis</span>
                            </div>
                            <div class="novel-meta-bottom">
                                <span class="novel-stat"><i class="far fa-eye"></i> 163K</span>
                                <span class="novel-rating"><i class="fas fa-star"></i> 4.6</span>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="javascript:void(0)">
                    <div class="novel-card" data-title="Rumah Penunggu" data-genre="horor" data-status="ongoing" data-urutan="rating terbaru">
                        <div class="novel-cover-wrapper">
                            <img src="{{ asset('images/As7.png') }}" class="novel-cover" alt="">
                        </div>
                        <div class="novel-info-bar">
                            <div class="novel-tag-container">
                                <span class="novel-tag-genre">Horor</span>
                            </div>
                            <div class="novel-meta-bottom">
                                <span class="novel-stat"><i class="far fa-eye"></i> 207K</span>
                                <span class="novel-rating"><i class="fas fa-star"></i> 5.0</span>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="javascript:void(0)">
                    <div class="novel-card" data-title="Rekam Waktu Simpan Rasa" data-genre="drama" data-status="tamat" data-urutan="rating dibaca">
                        <div class="novel-cover-wrapper">
                            <img src="{{ asset('images/As8.png') }}" class="novel-cover" alt="">
                        </div>
                        <div class="novel-info-bar">
                            <div class="novel-tag-container">
                                <span class="novel-tag-genre">Drama</span>
                            </div>
                            <div class="novel-meta-bottom">
                                <span class="novel-stat"><i class="far fa-eye"></i> 236K</span>
                                <span class="novel-rating"><i class="fas fa-star"></i> 5.0</span>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="javascript:void(0)">
                    <div class="novel-card" data-title="Jejak Diantara Bintang" data-genre="romantis" data-status="ongoing" data-urutan="dibaca">
                        <div class="novel-cover-wrapper">
                            <img src="{{ asset('images/As10.png') }}" class="novel-cover" alt="">
                        </div>
                        <div class="novel-info-bar">
                            <div class="novel-tag-container">
                                <span class="novel-tag-genre">Romantis</span>
                            </div>
                            <div class="novel-meta-bottom">
                                <span class="novel-stat"><i class="far fa-eye"></i> 379K</span>
                                <span class="novel-rating"><i class="fas fa-star"></i> 5.0</span>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="javascript:void(0)">
                    <div class="novel-card" data-title="Topeng Yang sempurna" data-genre="thriller" data-status="tamat" data-urutan="rating terbaru">
                        <div class="novel-cover-wrapper">
                            <img src="{{ asset('images/As13.png') }}" class="novel-cover" alt="">
                        </div>
                        <div class="novel-info-bar">
                            <div class="novel-tag-container">
                                <span class="novel-tag-genre">Thriller</span>
                            </div>
                            <div class="novel-meta-bottom">
                                <span class="novel-stat"><i class="far fa-eye"></i> 490K</span>
                                <span class="novel-rating"><i class="fas fa-star"></i> 5.0</span>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="javascript:void(0)">
                    <div class="novel-card" data-title="Ketika Ketusuk Sarkasme Teman Sendiri" data-genre="romantis" data-status="ongoing" data-urutan="terbaru">
                        <div class="novel-cover-wrapper">
                            <img src="{{ asset('images/As14.png') }}" class="novel-cover" alt="">
                        </div>
                        <div class="novel-info-bar">
                            <div class="novel-tag-container">
                                <span class="novel-tag-genre">Romantis</span>
                            </div>
                            <div class="novel-meta-bottom">
                                <span class="novel-stat"><i class="far fa-eye"></i> 179K</span>
                                <span class="novel-rating"><i class="fas fa-star"></i> 4.9</span>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="javascript:void(0)">
                    <div class="novel-card" data-title="Operation Teman Seumur hidup" data-genre="komedi" data-status="tamat" data-urutan="dibaca">
                        <div class="novel-cover-wrapper">
                            <img src="{{ asset('images/As24.png') }}" class="novel-cover" alt="">
                        </div>
                        <div class="novel-info-bar">
                            <div class="novel-tag-container">
                                <span class="novel-tag-genre">Komedi</span>
                            </div>
                            <div class="novel-meta-bottom">
                                <span class="novel-stat"><i class="far fa-eye"></i> 199K</span>
                                <span class="novel-rating"><i class="fas fa-star"></i> 4.9</span>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="javascript:void(0)">
                    <div class="novel-card" data-title="Jejak Yang Hilang" data-genre="misteri" data-status="ongoing" data-urutan="terbaru">
                        <div class="novel-cover-wrapper">
                            <img src="{{ asset('images/As20.png') }}" class="novel-cover" alt="">
                        </div>
                        <div class="novel-info-bar">
                            <div class="novel-tag-container">
                                <span class="novel-tag-genre">Misteri</span>
                            </div>
                            <div class="novel-meta-bottom">
                                <span class="novel-stat"><i class="far fa-eye"></i> 211K</span>
                                <span class="novel-rating"><i class="fas fa-star"></i> 4.6</span>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="javascript:void(0)">
                    <div class="novel-card" data-title="Project Nova" data-genre="sci-fi" data-status="tamat" data-urutan="terbaru">
                        <div class="novel-cover-wrapper">
                            <img src="{{ asset('images/As21.png') }}" class="novel-cover" alt="">
                        </div>
                        <div class="novel-info-bar">
                            <div class="novel-tag-container">
                                <span class="novel-tag-genre">Sci-Fi</span>
                            </div>
                            <div class="novel-meta-bottom">
                                <span class="novel-stat"><i class="far fa-eye"></i> 98K</span>
                                <span class="novel-rating"><i class="fas fa-star"></i> 4.1</span>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="javascript:void(0)">
                    <div class="novel-card" data-title="Akademi Elysian" data-genre="fantasi" data-status="ongoing" data-urutan="rating">
                        <div class="novel-cover-wrapper">
                            <img src="{{ asset('images/As23.png') }}" class="novel-cover" alt="">
                        </div>
                        <div class="novel-info-bar">
                            <div class="novel-tag-container">
                                <span class="novel-tag-genre">Fantasi</span>
                            </div>
                            <div class="novel-meta-bottom">
                                <span class="novel-stat"><i class="far fa-eye"></i> 104K</span>
                                <span class="novel-rating"><i class="fas fa-star"></i> 4.4</span>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="javascript:void(0)">
                    <div class="novel-card" data-title="Parasit" data-genre="horor" data-status="tamat" data-urutan="dibaca">
                        <div class="novel-cover-wrapper">
                            <img src="{{ asset('images/As26.png') }}" class="novel-cover" alt="">
                        </div>
                        <div class="novel-info-bar">
                            <div class="novel-tag-container">
                                <span class="novel-tag-genre">Horor</span>
                            </div>
                            <div class="novel-meta-bottom">
                                <span class="novel-stat"><i class="far fa-eye"></i> 135K</span>
                                <span class="novel-rating"><i class="fas fa-star"></i> 4.7</span>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="javascript:void(0)">
                    <div class="novel-card" data-title="Untukmu Diantara kelas dan Waktu" data-genre="romantis" data-status="ongoing" data-urutan="rating dibaca">
                        <div class="novel-cover-wrapper">
                            <img src="{{ asset('images/As25.png') }}" class="novel-cover" alt="">
                        </div>
                        <div class="novel-info-bar">
                            <div class="novel-tag-container">
                                <span class="novel-tag-genre">Romantis</span>
                            </div>
                            <div class="novel-meta-bottom">
                                <span class="novel-stat"><i class="far fa-eye"></i> 327K</span>
                                <span class="novel-rating"><i class="fas fa-star"></i> 4.9</span>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="javascript:void(0)">
                    <div class="novel-card" data-title="Santet" data-genre="horor" data-status="tamat" data-urutan="rating dibaca">
                        <div class="novel-cover-wrapper">
                            <img src="{{ asset('images/As31.png') }}" class="novel-cover" alt="">
                        </div>
                        <div class="novel-info-bar">
                            <div class="novel-tag-container">
                                <span class="novel-tag-genre">Horor</span>
                            </div>
                            <div class="novel-meta-bottom">
                                <span class="novel-stat"><i class="far fa-eye"></i> 222K</span>
                                <span class="novel-rating"><i class="fas fa-star"></i> 4.8</span>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="javascript:void(0)">
                    <div class="novel-card" data-title="Antara Kita Yang Pernah Ada" data-genre="drama" data-status="ongoing" data-urutan="terbaru">
                        <div class="novel-cover-wrapper">
                            <img src="{{ asset('images/As29.png') }}" class="novel-cover" alt="">
                        </div>
                        <div class="novel-info-bar">
                            <div class="novel-tag-container">
                                <span class="novel-tag-genre">Drama</span>
                            </div>
                            <div class="novel-meta-bottom">
                                <span class="novel-stat"><i class="far fa-eye"></i> 80K</span>
                                <span class="novel-rating"><i class="fas fa-star"></i> 4.0</span>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="javascript:void(0)">
                    <div class="novel-card" data-title="Sangkala Di Tanah Nuswantara" data-genre="fantasi" data-status="tamat" data-urutan="rating">
                        <div class="novel-cover-wrapper">
                            <img src="{{ asset('images/As30.png') }}" class="novel-cover" alt="">
                        </div>
                        <div class="novel-info-bar">
                            <div class="novel-tag-container">
                                <span class="novel-tag-genre">Fantasi</span>
                            </div>
                            <div class="novel-meta-bottom">
                                <span class="novel-stat"><i class="far fa-eye"></i> 100K</span>
                                <span class="novel-rating"><i class="fas fa-star"></i> 4.5</span>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="javascript:void(0)">
                    <div class="novel-card" data-title="Di Antara Taring dan Tirai Darah" data-genre="thriller" data-status="ongoing" data-urutan="dibaca terbaru">
                        <div class="novel-cover-wrapper">
                            <img src="{{ asset('images/As28.png') }}" class="novel-cover" alt="">
                        </div>
                        <div class="novel-info-bar">
                            <div class="novel-tag-container">
                                <span class="novel-tag-genre">Thriller</span>
                            </div>
                            <div class="novel-meta-bottom">
                                <span class="novel-stat"><i class="far fa-eye"></i> 241K</span>
                                <span class="novel-rating"><i class="fas fa-star"></i> 4.8</span>
                            </div>
                        </div>
                    </div>
                </a>

                <div id="noNovelsMessage" style="display: none; text-align: center; grid-column: 1 / -1; padding: 50px 20px; color: #a0aec0;">
                    <i class="fas fa-search-minus" style="font-size: 3rem; margin-bottom: 15px; display: block; color: #53457A;"></i>
                    <span style="font-size: 1.1rem; font-weight: 500; display: block;">Tidak ada novel yang sesuai</span>
                    <span style="font-size: 0.9rem; opacity: 0.7;">Silakan coba ganti kata kunci atau kombinasi filter Anda.</span>
                </div>

            </div>
        </div>
    </div>
</div>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400&family=Poppins:wght@300;400;500;600;700&display=swap');

    .katalog-body {
        font-family: 'Poppins', sans-serif;
        color: #FFFFFF;
        min-height: 100vh;
        padding-bottom: 60px;
    }

    .katalog-banner {
        background: url("{{ asset('images/As18.png') }}") no-repeat center center;
        background-size: cover;
        border-radius: 16px;
        height: 280px;
        position: relative;
        padding: 50px 60px;
        margin-bottom: 30px;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
    }
    .katalog-banner::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background: linear-gradient(90deg, rgba(12,4,32,0.85) 0%, rgba(12,4,32,0.2) 100%);
        border-radius: 16px;
        z-index: 1;
    }
    .katalog-banner-content {
        position: relative;
        z-index: 2;
        max-width: 600px;
    }
    .katalog-banner h1 {
        font-family: 'Cormorant Garamond', serif;
        font-size: 64px; 
        font-weight: 700;
        margin: 0 0 10px 0;
        letter-spacing: 1px;
    }
    .katalog-banner p {
        font-size: 20px; 
        color: #E2D9F3;
        margin: 0;
        font-weight: 300;
    }

    .bar-controls {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
        gap: 20px;
    }
    .search-container {
        position: relative;
        width: 450px;
    }

    .search-input {
        width: 100%;
        background-color: #0C0420;
        border: 2px solid #2B0F52;
        border-radius: 12px;
        padding: 12px 45px 12px 20px; 
        color: #FFFFFF;
        font-family: 'Poppins', sans-serif;
        font-size: 14px;
        transition: all 0.3s ease;
    }
    .search-input::placeholder {
        color: #53457A;
    }
    .search-input:focus {
        outline: none;
        border-color: #D17CE3;
        box-shadow: 0px 10px 40px 0px rgba(124, 124, 237, 0.30);
    }
    .search-icon {
        position: absolute;
        right: 16px; 
        left: auto;
        top: 50%;
        transform: translateY(-50%);
        color: #D17CE3; 
        pointer-events: none;
    }

    .pagination-custom {
        display: flex;
        gap: 8px;
        align-items: center;
    }
    .page-box {
        width: 40px;
        height: 40px;
        background-color: #18092F;
        border: 1px solid #D17CE3;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #FFFFFF;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.2s ease;
        user-select: none;
    }
    .page-box:hover {
        background-color: #D17CE3;
        color: #18092F;
    }
    .page-box.active {
        background-color: #D17CE3 !important;
        color: #18092F !important;
    }
    .page-box.arrow:active {
        background-color: #D17CE3;
        color: #18092F;
    }

    .katalog-grid-layout {
        display: grid;
        grid-template-columns: 300px 1fr;
        gap: 30px;
        align-items: start;
        justify-content: center; 
    }

    .sidebar-sticky {
        position: static;
        display: flex;
        flex-direction: column;
        gap: 24px;
    }

    .sidebar-card {
        background-color: #22123F;
        border: 1px solid rgba(139, 92, 246, 0.30);
        border-radius: 16px;
        padding: 24px;
        box-shadow: 0px 10px 40px 0px rgba(124, 124, 237, 0.30);
    }
    .sidebar-card h2 {
        font-size: 20px;
        font-weight: 600;
        margin-top: 0;
        margin-bottom: 20px;
        letter-spacing: 0.5px;
    }

    .genre-list {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }
    .genre-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 12px 16px;
        border-radius: 8px;
        cursor: pointer;
        transition: all 0.2s ease;
        font-size: 14px;
        font-weight: 500;
    }
    .genre-left {
        display: flex;
        align-items: center;
        gap: 12px;
    }
    .genre-icon {
        width: 20px;
        text-align: center;
        font-size: 16px;
    }
    .genre-count {
        font-size: 13px;
        opacity: 0.8;
    }
    .genre-item.active, .genre-item:hover {
        background: linear-gradient(90deg, #B87BFF 0%, #833FB0 100%);
        color: #FFFFFF;
    }

    .filter-group-title {
        font-size: 15px;
        font-weight: 600;
        color: #FFFFFF;
        margin: 16px 0 12px 0;
    }
    .filter-group-title:first-of-type {
        margin-top: 0;
    }
    .checkbox-label {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 10px;
        cursor: pointer;
        font-size: 14px;
        font-weight: 500;
        user-select: none;
    }
    .checkbox-left {
        display: flex;
        align-items: center;
        gap: 12px;
    }
    .checkbox-custom {
        width: 20px;
        height: 20px;
        background-color: #18092F;
        border: 1px solid #D17CE3;
        border-radius: 4px;
        position: relative;
        transition: all 0.2s ease;
        display: inline-block;
    }
    .checkbox-label input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0; width: 0;
    }
    .checkbox-label input:checked ~ .checkbox-custom {
        background-color: #D17CE3;
    }
    .checkbox-label input:checked ~ .checkbox-custom::after {
        content: "";
        position: absolute;
        left: 6px;
        top: 2px;
        width: 6px;
        height: 11px;
        border: solid #18092F;
        border-width: 0 2px 2px 0;
        transform: rotate(45deg);
    }

    .novel-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
        gap: 20px;
        align-content: start;
    }

    .novel-grid > a {
        display: block;
        text-decoration: none;
        color: inherit;
        min-width: 0;
        height: 100%;
    }

    .novel-card {
        background-color: #18092F;
        border-radius: 12px;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        display: flex;
        flex-direction: column;
        height: 100%;
    }
    
    .novel-card[style*="display: none"] {
        display: none !important;
    }

    .novel-card:hover {
        transform: translateY(-8px);
        box-shadow: 0px 10px 40px 0px rgba(124, 124, 237, 0.40);
    }
    .novel-cover-wrapper {
        position: relative;
        width: 100%;
        padding-top: 140%;
        background-color: #22123F;
    }
    .novel-cover {
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%;
        object-fit: cover;
    }

    /* Bagian info bar ungu di bawah gambar novel */
    .novel-info-bar {
        background-color: #833FB0;
        padding: 12px 14px;
        display: flex;
        flex-direction: column;
        gap: 8px;
        margin-top: auto;
    }
    .novel-tag-container {
        display: flex;
        justify-content: flex-start;
    }
    .novel-tag-genre {
        font-size: 11px;
        font-weight: 500;
        background-color: rgba(24, 9, 47, 0.4);
        padding: 4px 10px;
        border-radius: 20px;
        color: #FFFFFF;
        text-transform: capitalize;
        white-space: nowrap;
    }
    .novel-meta-bottom {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
    }
    .novel-stat {
        display: flex;
        align-items: center;
        gap: 6px;
        font-size: 12px;
        opacity: 0.9;
        white-space: nowrap;
    }
    .novel-rating {
        display: flex;
        align-items: center;
        gap: 4px;
        color: #FFD700;
        font-size: 12px;
        font-weight: 600;
        white-space: nowrap;
    }

    @media (max-width: 1024px) {
        .katalog-grid-layout {
            grid-template-columns: 240px 1fr;
            gap: 20px;
        }
    }

    @media (max-width: 850px) {
        .katalog-grid-layout {
            grid-template-columns: 1fr;
        }
        .bar-controls {
            flex-direction: column;
            align-items: stretch;
        }
        .search-container {
            width: 100%;
        }
        .pagination-custom {
            justify-content: center;
        }
    }

    @media (max-width: 480px) {
        .container-fluid.px-5 {
            padding-left: 20px !important;
            padding-right: 20px !important;
        }
        .katalog-banner {
            height: auto;
            padding: 30px 20px;
        }
        .katalog-banner h1 {
            font-size: 40px;
        }
        .katalog-banner p {
            font-size: 16px;
        }
        .novel-grid {
            grid-template-columns: repeat(auto-fill, minmax(140px, 1fr)); 
            gap: 12px;
        }
        .novel-info-bar {
            padding: 10px;
            gap: 6px;
        }
    }
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    
    $('.pagination-custom .page-box').not('.arrow').click(function() {
        $('.pagination-custom .page-box').removeClass('active');
        $(this).addClass('active');
    });

    function filterNovels() {
        let searchQuery = $('#searchNovel').val().toLowerCase().trim();
        let selectedGenre = $('.genre-item.active').data('genre');

        let activeStatus = [];
        $('.filter-status:checked').each(function() {
            activeStatus.push($(this).val());
        });

        let activeUrutan = [];
        $('.filter-urutan:checked').each(function() {
            activeUrutan.push($(this).val());
        });

        let visibleCount = 0;

        $('.novel-card').each(function() {
            let card = $(this);
            let title = card.data('title').toLowerCase();
            let genre = card.data('genre');
            let status = card.data('status');
            let urutanAttr = card.data('urutan') || '';
            let urutanArray = urutanAttr.split(' ');

            let matchSearch = (title.indexOf(searchQuery) > -1);
            let matchGenre  = (selectedGenre === 'semua' || genre === selectedGenre);
            
            let matchStatus = false;
            if (activeStatus.includes('semua') || activeStatus.length === 0) {
                matchStatus = true;
            } else if (activeStatus.includes(status)) {
                matchStatus = true;
            }

            let matchUrutan = false;
            if (activeUrutan.includes('semua') || activeUrutan.length === 0) {
                matchUrutan = true;
            } else {
                matchUrutan = activeUrutan.some(val => urutanArray.includes(val));
            }

            if (matchSearch && matchGenre && matchStatus && matchUrutan) {
                card.closest('a').show();
                visibleCount++;
            } else {
                card.closest('a').hide();
            }
        });

        if (visibleCount === 0) {
            $('#noNovelsMessage').fadeIn(200);
        } else {
            $('#noNovelsMessage').hide();
        }
    }

    // EVENT LISTENERS
    $('#searchNovel').on('keyup', function() {
        filterNovels();
    });

    $('.genre-item').click(function() {
        $('.genre-item').removeClass('active');
        $(this).addClass('active');
        filterNovels();
    });

    $('.filter-status, .filter-urutan').change(function() {
        let val = $(this).val();
        let isChecked = $(this).is(':checked');
        let currentGroupClass = $(this).attr('class'); 

        if (val === 'semua' && isChecked) {
            $('.' + currentGroupClass).not(this).prop('checked', false);
        } else if (val !== 'semua' && isChecked) {
            $('.' + currentGroupClass + '[value="semua"]').prop('checked', false);
        }

        if ($('.' + currentGroupClass + ':checked').length === 0) {
            $('.' + currentGroupClass + '[value="semua"]').prop('checked', true);
        }

        filterNovels();
    });
});
</script>
@endsection