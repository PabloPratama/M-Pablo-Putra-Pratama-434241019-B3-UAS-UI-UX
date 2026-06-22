@extends('user.layouts.app')

@section('title', 'Profil')

@section('content')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght=600;700&family=Poppins:wght=400;500;600&display=swap');

    .profil-container {
        font-family: 'Poppins', sans-serif;
        color: #FFFFFF;
        max-width: 1200px;
        margin: 0 auto;
        padding: 5px 20px 40px 20px;
    }

    .profil-title {
        font-family: 'Cormorant Garamond', serif;
        font-size: 58px;
        font-weight: 700;
        margin-bottom: 8px;
        color: #FFFFFF;
    }

    .profil-subtitle {
        font-size: 18px;
        color: #9CA3AF;
        margin-bottom: 30px;
    }

    .main-card {
        background-color: #22123F;
        border: 1px solid rgba(139, 92, 246, 0.3);
        border-radius: 16px;
        padding: 30px;
        margin-bottom: 30px;
        box-shadow: 0px 10px 40px rgba(124, 58, 237, 0.3); 
        position: relative;
    }

    @media (max-width: 767px) {
        .profil-title { font-size: 38px; }
        .profil-subtitle { font-size: 14px; margin-bottom: 20px; }
        .main-card { padding: 20px 15px; margin-bottom: 20px; }
    }

    .profile-header-divider {
        border-bottom: 1px solid rgba(92, 40, 126, 0.3);
        padding-bottom: 35px;
        margin-bottom: 25px;
    }

    @media (max-width: 767px) {
        .profile-header-divider { padding-bottom: 25px; margin-bottom: 20px; }
    }

    .profile-header-wrapper {
        display: flex;
        flex-direction: column;
        align-items: center; 
        gap: 20px;           
        position: relative;
    }

    @media(min-width: 768px) {
        .profile-header-wrapper {
            flex-direction: row;
            align-items: flex-start;
            gap: 0;
        }
    }

    .profile-info-block {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        gap: 28px;
        width: 100%;
    }

    @media(min-width: 768px) {
        .profile-info-block {
            flex-direction: row;
            text-align: left;
            align-items: center;
        }
    }

    .profile-avatar {
        width: 140px;
        height: 140px;
        border-radius: 50%;
        object-fit: cover;
        border: none;
    }

    .profile-name {
        font-size: 32px;
        font-weight: 600;
        margin-bottom: 6px;
    }

    .profile-email {
        font-size: 18px;
        color: #B87BFF;
        margin-bottom: 10px;
    }

    .profile-joined {
        font-size: 14px;
        color: #9CA3AF;
        display: flex;
        align-items: center;
        gap: 8px;
        justify-content: center;
    }

    @media(min-width: 768px) {
        .profile-joined {
            justify-content: flex-start;
        }
    }

    .btn-edit-profile {
        position: static; 
        background: transparent;
        border: 1px solid #D17CE3;
        color: #D17CE3;
        font-size: 14px;
        padding: 8px 20px;
        border-radius: 8px;
        font-weight: 500;
        cursor: pointer;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        transition: background 0.2s;
    }

    @media(min-width: 768px) {
        .btn-edit-profile {
            position: absolute; 
            top: 0;
            right: 0;
        }
    }

    .btn-edit-profile:hover {
        background: rgba(209, 124, 227, 0.1);
    }

    .profile-stats-grid {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        gap: 60px;
        margin: 10px auto 0 auto;
        width: 100%;
    }

    @media (max-width: 767px) {
        .profile-stats-grid {
            gap: 20px 30px; 
            justify-content: space-around;
        }
        .stat-box {
            flex-direction: column;
            text-align: center;
            gap: 6px !important;
        }
        .stat-number { font-size: 22px; }
        .stat-label { font-size: 11px; }
    }

    .stat-box {
        display: flex;
        align-items: center;
        gap: 14px;
        background: transparent;
        border: none;
        padding: 0;
    }

    .stat-icon-svg {
        width: 34px;
        height: 34px;
    }

    .stat-number {
        font-size: 26px;
        font-weight: 600;
        line-height: 1;
    }

    .stat-label {
        font-size: 12px;
        color: #9CA3AF;
        margin-top: 2px;
    }

    .pink-icon {
        color: #D17CE3;
        fill: none;
        stroke: #D17CE3;
    }

    .section-header {
        display: flex;
        justify-content: space-between;
        align-items: baseline;
        margin-bottom: 20px;
    }

    @media (max-width: 767px) {
        .section-header {
            align-items: flex-start; 
            gap: 16px;              
        }
        .link-see-all {
            white-space: nowrap;    
            margin-top: 5px;        
        }
    }

    .section-title {
        font-family: 'Cormorant Garamond', serif;
        font-size: 30px;
        font-weight: 600;
    }

    .section-desc {
        font-size: 16px;
        color: #9CA3AF;
        margin-top: 4px;
    }

    .link-see-all {
        color: rgba(209, 124, 227, 0.7); 
        font-size: 15px;
        text-decoration: none;
        font-weight: 500;
        transition: color 0.3s;
    }

    .link-see-all:hover {
        color: rgba(209, 124, 227, 0.7);
    }

    .novel-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 15px;
    }

    @media(min-width: 992px) {
        .novel-grid {
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }
    }

    .novel-card {
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .novel-cover-wrapper {
        position: relative;
        aspect-ratio: 3/4;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0,0,0,0.3);
    }

    .novel-cover {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .btn-view-novel {
        display: block;
        text-align: center;
        background-color: rgba(209, 124, 227, 0.1); 
        color: #D17CE3;
        border: 1px solid rgba(209, 124, 227, 0.2);
        padding: 10px 0;
        border-radius: 6px;
        font-size: 12px;
        text-decoration: none;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .btn-view-novel:hover {
        background-color: rgba(209, 124, 227, 0.2);
        border-color: #D17CE3;
    }

    .table-responsive-wrapper {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }

    .transaction-table {
        width: 100%;
        border-collapse: collapse;
        text-align: left;
        font-size: 13px;
    }

    .transaction-table th {
        background-color: #0C0420;
        color: #9CA3AF;
        font-weight: 500;
        padding: 14px 16px;
        white-space: nowrap;
    }

    .transaction-table td {
        padding: 16px;
        border-bottom: 1px solid rgba(92, 40, 126, 0.3);
        vertical-align: middle;
    }

    .transaction-table tbody tr:last-child td {
        border-bottom: none; 
    }

    @media (max-width: 767px) {
        .transaction-table th, .transaction-table td {
            padding: 12px 10px;
        }
    }

    .product-cell {
        display: flex;
        align-items: center;
        gap: 12px;
        min-width: 200px;
    }

    .product-img {
        width: 44px;
        height: 60px;
        object-fit: cover;
        border-radius: 4px;
        image-rendering: -webkit-optimize-contrast;
        image-rendering: auto;
    }

    .product-title {
        font-weight: 500;
        font-size: 14px;
        margin-bottom: 2px;
    }

    .product-chapter {
        font-size: 11px;
        color: #9CA3AF;
    }

    .badge-success-custom {
        display: inline-block;
        background-color: rgba(26, 255, 0, 0.1);
        color: #1AFF00;
        border: 1px solid rgba(26, 255, 0, 0.7); 
        padding: 4px 12px;
        border-radius: 6px;
        font-size: 12px;
        font-weight: 600;
    }

    .action-cell-btn {
        color: #9CA3AF;
        background: transparent;
        border: none;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 8px;
        transition: color 0.3s, transform 0.2s;
    }

    .action-cell-btn svg {
        width: 20px;
        height: 20px;
        stroke: currentColor;
        fill: none;
        transform: translateY(-1px);
    }

    .action-cell-btn:hover {
        color: #D17CE3;
        transform: scale(1.15);
    }

    .pagination-container {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 8px;
        margin-top: 30px;
    }

    .pagination-box {
        width: 38px;
        height: 38px;
        background-color: #18092F;
        border: 1px solid rgba(139, 92, 246, 0.2);
        color: #FFFFFF;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 6px;
        font-size: 14px;
        cursor: pointer;
        user-select: none;
        transition: all 0.2s ease;
    }

    .pagination-box svg {
        width: 16px;
        height: 16px;
        stroke: currentColor;
        fill: none;
    }

    .pagination-box:hover {
        background-color: #B87BFF !important;
        color: #0C0420;
        font-weight: 600;
    }

    .pagination-box:active {
        background-color: #B87BFF !important;
        color: #0C0420 !important;
    }

    .pagination-box.active-page {
        background-color: #B87BFF;
        color: #0C0420;
        font-weight: 600;
    }
</style>

<div class="profil-container">
    <h1 class="profil-title">Profil Saya</h1>
    <p class="profil-subtitle">Kelola informasi akun dan lihat aktivitasmu di Lembar Novel.</p>

    <div class="main-card">
        <div class="profile-header-wrapper profile-header-divider">
            <div class="profile-info-block">
                @if(auth()->check() && auth()->user()->avatar)
                    <img id="user-profile-avatar" src="{{ asset('storage/' . auth()->user()->avatar) }}" alt="Foto Profil" class="profile-avatar">
                @else
                    <img id="user-profile-avatar" src="{{ asset('images/As33.jpg') }}" alt="Foto Profil" class="profile-avatar">
                @endif
                <div>
                    <h2 id="user-profile-name" class="profile-name">{{ auth()->check() ? auth()->user()->name : 'Leo Argantara' }}</h2>
                    <div class="profile-email">{{ auth()->check() ? auth()->user()->email : 'leoargantara@gmail.com' }}</div>
                    <div class="profile-joined">
                        <svg class="pink-icon" width="14" height="14" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                        Bergabung sejak {{ auth()->check() ? auth()->user()->created_at->translatedFormat('d F Y') : '12 Januari 2025' }}
                    </div>
                </div>
            </div>
            <a href="{{ route('profil.edit') }}" class="btn-edit-profile">Edit Profil</a>
        </div>

        <div class="profile-stats-grid">
            <div class="stat-box">
                <div class="stat-icon">
                    <svg class="pink-icon stat-icon-svg" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                </div>
                <div>
                    <div class="stat-number">15</div>
                    <div class="stat-label">Novel Dimiliki</div>
                </div>
            </div>
            <div class="stat-box">
                <div class="stat-icon">
                    <svg class="pink-icon stat-icon-svg" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path></svg>
                </div>
                <div>
                    <div class="stat-number">10</div>
                    <div class="stat-label">Novel Disimpan</div>
                </div>
            </div>
            <div class="stat-box">
                <div class="stat-icon">
                    <svg class="pink-icon stat-icon-svg" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                </div>
                <div>
                    <div class="stat-number">21</div>
                    <div class="stat-label">Bab Dibaca</div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-card">
        <div class="section-header">
            <div>
                <h2 class="section-title">Novel Saya</h2>
                <div class="section-desc">Novel yang sudah kamu beli.</div>
            </div>
            <a href="#" onclick="event.preventDefault();" class="link-see-all">Lihat Semua &gt;</a>
        </div>
        
        <div class="novel-grid">
            <div class="novel-card">
                <div class="novel-cover-wrapper"><img src="{{ asset('images/As27.png') }}" alt="Novel 1" class="novel-cover"></div>
                <a href="{{ route('katalog.detail') }}" class="btn-view-novel">Lihat Novel</a>
            </div>
            <div class="novel-card">
                <div class="novel-cover-wrapper"><img src="{{ asset('images/As8.png') }}" alt="Novel 2" class="novel-cover"></div>
                <a href="{{ route('katalog.detail') }}" class="btn-view-novel">Lihat Novel</a>
            </div>
            <div class="novel-card">
                <div class="novel-cover-wrapper"><img src="{{ asset('images/As21.png') }}" alt="Novel 3" class="novel-cover"></div>
                <a href="{{ route('katalog.detail') }}" class="btn-view-novel">Lihat Novel</a>
            </div>
            <div class="novel-card">
                <div class="novel-cover-wrapper"><img src="{{ asset('images/As24.png') }}" alt="Novel 4" class="novel-cover"></div>
                <a href="{{ route('katalog.detail') }}" class="btn-view-novel">Lihat Novel</a>
            </div>
        </div>
    </div>

    <div class="main-card">
        <div class="section-header">
            <div>
                <h2 class="section-title">Novel Disimpan</h2>
                <div class="section-desc">Novel yang kamu tandai untuk disimpan.</div>
            </div>
            <a href="#" onclick="event.preventDefault();" class="link-see-all">Lihat Semua &gt;</a>
        </div>

        <div class="novel-grid">
            <div class="novel-card">
                <div class="novel-cover-wrapper"><img src="{{ asset('images/As27.png') }}" alt="Novel 1" class="novel-cover"></div>
                <a href="{{ route('katalog.detail') }}" class="btn-view-novel">Lihat Novel</a>
            </div>
            <div class="novel-card">
                <div class="novel-cover-wrapper"><img src="{{ asset('images/As8.png') }}" alt="Novel 2" class="novel-cover"></div>
                <a href="{{ route('katalog.detail') }}" class="btn-view-novel">Lihat Novel</a>
            </div>
            <div class="novel-card">
                <div class="novel-cover-wrapper"><img src="{{ asset('images/As21.png') }}" alt="Novel 3" class="novel-cover"></div>
                <a href="{{ route('katalog.detail') }}" class="btn-view-novel">Lihat Novel</a>
            </div>
            <div class="novel-card">
                <div class="novel-cover-wrapper"><img src="{{ asset('images/As24.png') }}" alt="Novel 4" class="novel-cover"></div>
                <a href="{{ route('katalog.detail') }}" class="btn-view-novel">Lihat Novel</a>
            </div>
        </div>
    </div>

    <div class="main-card">
        <div class="section-header" style="margin-bottom: 15px;">
            <div>
                <h2 class="section-title">Riwayat Transaksi</h2>
                <div class="section-desc">Semua transaksi pembelian novel dan paket yang pernah kamu lakukan.</div>
            </div>
        </div>

        <div class="table-responsive-wrapper">
            <table class="transaction-table">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Produk</th>
                        <th>Metode Pembayaran</th>
                        <th>Status</th>
                        <th>Total</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="white-space: nowrap;">12 Mei 2026</td>
                        <td>
                            <div class="product-cell">
                                <img src="{{ asset('images/As27.png') }}" alt="Bayangan Masa Lalu" class="product-img">
                                <div>
                                    <div class="product-title">Bayangan Masa Lalu</div>
                                    <div class="product-chapter">Bab 50</div>
                                </div>
                            </div>
                        </td>
                        <td>QRIS</td>
                        <td><span class="badge-success-custom">Berhasil</span></td>
                        <td style="font-weight: 500;">Rp 50.000</td>
                        <td style="text-align: right;">
                            <a href="{{ route('transaksi.detail') }}" class="action-cell-btn">
                                <svg viewBox="0 0 24 24" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td style="white-space: nowrap;">5 Mei 2026</td>
                        <td>
                            <div class="product-cell">
                                <img src="{{ asset('images/As8.png') }}" alt="Rekam Waktu" class="product-img">
                                <div>
                                    <div class="product-title">Rekam Waktu</div>
                                    <div class="product-chapter">Bab 40</div>
                                </div>
                            </div>
                        </td>
                        <td>QRIS</td>
                        <td><span class="badge-success-custom">Berhasil</span></td>
                        <td style="font-weight: 500;">Rp 45.000</td>
                        <td style="text-align: right;">
                            <a href="{{ route('transaksi.detail') }}" class="action-cell-btn">
                                <svg viewBox="0 0 24 24" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td style="white-space: nowrap;">28 April 2026</td>
                        <td>
                            <div class="product-cell">
                                <img src="{{ asset('images/As21.png') }}" alt="As21 Novel" class="product-img">
                                <div>
                                    <div class="product-title">Project Nova</div>
                                    <div class="product-chapter">Bab 12</div>
                                </div>
                            </div>
                        </td>
                        <td>QRIS</td>
                        <td><span class="badge-success-custom">Berhasil</span></td>
                        <td style="font-weight: 500;">Rp 35.000</td>
                        <td style="text-align: right;">
                            <a href="{{ route('transaksi.detail') }}" class="action-cell-btn">
                                <svg viewBox="0 0 24 24" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td style="white-space: nowrap;">15 April 2026</td>
                        <td>
                            <div class="product-cell">
                                <img src="{{ asset('images/As24.png') }}" alt="As24 Novel" class="product-img">
                                <div>
                                    <div class="product-title">Teman Seumur Hidup</div>
                                    <div class="product-chapter">Bab 25</div>
                                </div>
                            </div>
                        </td>
                        <td>QRIS</td>
                        <td><span class="badge-success-custom">Berhasil</span></td>
                        <td style="font-weight: 500;">Rp 40.000</td>
                        <td style="text-align: right;">
                            <a href="{{ route('transaksi.detail') }}" class="action-cell-btn">
                                <svg viewBox="0 0 24 24" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="pagination-container">
            <div class="pagination-box" id="prevBtn">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="19" y1="12" x2="5" y2="12"></line>
                    <polyline points="12 19 5 12 12 5"></polyline>
                </svg>
            </div>
            <div class="pagination-box active-page page-num" data-page="1">1</div>
            <div class="pagination-box page-num" data-page="2">2</div>
            <div class="pagination-box page-num" data-page="3">3</div>
            <div class="pagination-box" id="nextBtn">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // --- LOGIKA MENERIMA DATA DARI LOCALSTORAGE ---
        const targetNameElement = document.getElementById('user-profile-name');
        const targetAvatarElement = document.getElementById('user-profile-avatar');

        const savedName = localStorage.getItem('profile_name');
        const savedAvatar = localStorage.getItem('profile_avatar');

        if (savedName && targetNameElement) {
            targetNameElement.innerText = savedName;
        }
        if (savedAvatar && targetAvatarElement) {
            targetAvatarElement.src = savedAvatar;
        }

        const pageButtons = document.querySelectorAll('.page-num');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        
        function updateActivePage(targetPageNum) {
            pageButtons.forEach(btn => {
                if (parseInt(btn.getAttribute('data-page')) === targetPageNum) {
                    btn.classList.add('active-page');
                } else {
                    btn.classList.remove('active-page');
                }
            });
        }

        function getCurrentActivePage() {
            const activeBtn = document.querySelector('.page-num.active-page');
            return activeBtn ? parseInt(activeBtn.getAttribute('data-page')) : 1;
        }
        
        pageButtons.forEach(button => {
            button.addEventListener('click', function () {
                pageButtons.forEach(btn => btn.classList.remove('active-page'));
                this.classList.add('active-page');
            });
        });

        prevBtn.addEventListener('click', function() {
            let currentPage = getCurrentActivePage();
            if (currentPage > 1) {
                updateActivePage(currentPage - 1);
            }
        });

        nextBtn.addEventListener('click', function() {
            let currentPage = getCurrentActivePage();
            if (currentPage < pageButtons.length) {
                updateActivePage(currentPage + 1);
            }
        });
    });
</script>
@endsection