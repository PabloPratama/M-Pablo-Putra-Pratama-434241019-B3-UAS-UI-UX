@extends('user.layouts.app')

@section('title', 'Detail Transaksi')

@section('content')
<div class="container-detail-page">
    <div class="header-transaksi">
        <h1>Detail Transaksi</h1>
        <p>Informasi lengkap transaksi pembelianmu.</p>
    </div>

    <div class="card-utama">
        
        <div class="section-novel">
            <div class="wrapper-cover">
                <img src="{{ asset('images/As27.png') }}" alt="Bayangan Masa Lalu" class="card-novel-cover">
            </div>
            
            <div class="detail-novel-info">
                <h2>Bayangan Masa Lalu</h2>
                <p class="author-name">Nathania Putri</p>
                
                <div class="wrapper-badge">
                    <span class="badge-romantis">Romantis</span>
                </div>
                
                <div class="meta-list-items">
                    <div class="meta-item">
                        <i class="bi bi-journal-text"></i>
                        <span>50 Bab</span>
                    </div>
                    <div class="meta-item">
                        <i class="bi bi-globe"></i>
                        <span>Indonesia</span>
                    </div>
                    <div class="meta-item">
                        <i class="bi bi-file-earmark-text"></i>
                        <span>INV-20260512-143512</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-tabel-detail">
            <div class="detail-row">
                <div class="label-col">Tanggal Transaksi</div>
                <div class="value-col value-muted">12 Mei 2026</div>
            </div>
            <div class="garis-pemisah"></div>
            
            <div class="detail-row">
                <div class="label-col">Waktu</div>
                <div class="value-col value-muted">14:35 WIB</div>
            </div>
            <div class="garis-pemisah"></div>
            
            <div class="detail-row">
                <div class="label-col">Metode Pembayaran</div>
                <div class="value-col value-muted">QRIS</div>
            </div>
            <div class="garis-pemisah"></div>
            
            <div class="detail-row">
                <div class="label-col">Status</div>
                <div class="value-col status-berhasil">Berhasil</div>
            </div>
            <div class="garis-pemisah"></div>
            
            <div class="detail-row row-total">
                <div class="label-col total-label">Total Pembayaran</div>
                <div class="value-col total-harga">Rp 50.000</div>
            </div>
        </div>

        <div class="wrapper-action-button">
            <a href="{{ route('profil') }}" class="btn-kembali-profil">
                Kembali ke Profil
            </a>
        </div>

    </div>
</div>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@600;700&family=Poppins:wght@300;400;500;600;700&display=swap');
    @import url('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css');

    .container-detail-page {
        max-width: 1000px;
        margin: 0 auto;
        padding: 0.5rem 1.5rem 4rem 1.5rem; 
    }

    .header-transaksi {
        margin-bottom: 0px; 
        color: #ffffff;
    }
    .header-transaksi h1 {
        font-family: 'Cormorant Garamond', serif;
        font-size: 58px;
        font-weight: 700;
        margin-bottom: 8px;
    }
    .header-transaksi p {
        font-family: 'Poppins', sans-serif;
        font-size: 18px;
        color: #9CA3AF;
        margin-bottom: 30px;
        font-weight: 300;
    }

    .card-utama {
        background-color: #22123F;
        border: 1px solid rgba(139, 92, 246, 0.30);
        border-radius: 12px;
        padding: 3.5rem;
        box-shadow: 0px 10px 40px 0px rgba(124, 122, 237, 0.30);
    }

    .section-novel {
        display: flex;
        gap: 1.5rem;
        align-items: flex-start;
        margin-bottom: 2rem;
    }
    .wrapper-cover {
        flex-shrink: 0;
    }
    
    .card-novel-cover {
        width: 165px;
        height: auto;
        object-fit: cover;
        border-radius: 8px;
        border: 1px solid rgba(139, 92, 246, 0.30);
    }

    .detail-novel-info {
        font-family: 'Poppins', sans-serif;
        color: #ffffff;
    }
    .detail-novel-info h2 {
        font-size: 1.8rem;
        font-weight: 600;
        margin: 0 0 0.4rem 0;
    }
    
    .detail-novel-info .author-name {
        font-size: 1rem;
        color: #cbd5e0;
        margin: 0 0 8px 0; 
    }
    
    .wrapper-badge {
        margin-top: 1px; 
        margin-bottom: 22px;
    }
    
    .badge-romantis {
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        background-color: rgba(184, 123, 255, 0.15); 
        color: #B87BFF;
        padding: 0.2rem 0.8rem;
        border-radius: 5px;
        font-size: 0.7rem;
    }

    .meta-list-items {
        display: flex;
        flex-direction: column;
        gap: 0.6rem;
        font-size: 0.9rem;
        color: #e2e8f0;
    }
    .meta-item {
        display: flex;
        align-items: center;
        gap: 0.8rem;
        line-height: 1;
        margin-bottom: 3px;
    }
    .meta-item i {
        color: #ffffff;
        font-size: 1.1rem;
        display: inline-flex;
        align-items: center;
    }

    .meta-item i::before {
        position: relative;
        top: -1px;
    }

    .garis-pemisah {
        border-bottom: 1px solid rgba(92, 40, 126, 0.30);
        width: 100%;
    }

    .section-tabel-detail {
        font-family: 'Poppins', sans-serif;
        margin: 2rem 0;
    }
    .detail-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1.2rem 0;
        color: #ffffff;
        font-size: 1rem;
    }
    .label-col {
        font-weight: 400;
        color: #ffffff;
    }
    .value-col {
        font-weight: 400;
        text-align: right;
    }

    .value-muted {
        color: rgba(255, 255, 255, 0.5) !important;
    }
    
    .status-berhasil {
        color: #22c55e;
        font-weight: 500;
    }
    .row-total {
        padding-top: 1.5rem;
        padding-bottom: 0.5rem;
    }
    .total-label {
        font-size: 1.1rem;
    }
    .total-harga {
        color: #d17ce3;
        font-size: 1.8rem;
        font-weight: 700;
    }

    .wrapper-action-button {
        display: flex;
        justify-content: center;
        margin-top: 2.5rem;
    }
    .btn-kembali-profil {
        font-family: 'Poppins', sans-serif;
        display: inline-block;
        width: 100%;
        max-width: 340px;
        padding: 0.85rem 0;
        text-align: center;
        background: linear-gradient(to right, #D17CE3, #B87BFF);
        color: #ffffff !important;
        text-decoration: none !important;
        font-weight: 500;
        font-size: 1rem;
        border-radius: 8px;
        transition: opacity 0.2s ease, transform 0.1s ease;
        box-sizing: border-box;
    }
    .btn-kembali-profil:hover {
        opacity: 0.9;
    }
    .btn-kembali-profil:active {
        transform: scale(0.98);
    }

    @media (max-width: 768px) {
        .card-utama {
            padding: 2.5rem;
        }
        .header-transaksi h1 {
            font-size: 3rem;
        }
    }

    @media (max-width: 576px) {
        .container-detail-page {
            padding: 0.5rem 1rem;
        }
        .header-transaksi h1 {
            font-size: 2.3rem;
        }
        .header-transaksi p {
            font-size: 15px;
        }
        .section-novel {
            flex-direction: column;
            align-items: center;
            text-align: center;
            gap: 1.2rem;
        }
        .meta-list-items {
            align-items: center;
        }
        .detail-row {
            font-size: 0.95rem;
        }
        .total-harga {
            font-size: 1.5rem;
        }
        .btn-kembali-profil {
            max-width: 100%;
        }
    }
</style>
@endsection