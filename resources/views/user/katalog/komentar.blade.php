@extends('user.layouts.app')

@section('title', 'Komentar')

@section('content')

<div class="komentar-page-body">
    <div class="container-fluid wrapper-container">
        
        <div class="main-comment-card">
            
            <h1 class="comment-header-title">Tulis Komentar</h1>
            <p class="comment-header-subtitle">Bagikan pendapatmu tentang novel ini</p>

            <div class="novel-info-section">
                <div class="novel-image-box">
                    <img src="{{ asset('images/As27.png') }}" alt="Cover Novel Bayangan Masa Lalu">
                </div>
                <div class="novel-detail-meta">
                    <h2 class="novel-title-text">Bayangan Masa Lalu</h2>
                    <div class="novel-author-row">
                        <span class="author-name">Nathania Putri</span>
                        <i class="fas fa-check-circle icon-verified"></i>
                    </div>
                    <div class="novel-stats-row">
                        <div class="stat-item">
                            <i class="fas fa-star icon-align-star"></i>
                            <span class="stat-text-align">4.6</span>
                        </div>
                        <div class="stat-item">
                            <i class="far fa-eye icon-align-eye"></i>
                            <span class="stat-text-align">163K</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="rating-input-section">
                <div class="rating-stars-side">
                    <div class="rating-title-label">Beri Rating</div>
                    <div class="stars-interactive-container" id="starRatingGroup">
                        <i class="fas fa-star star-clickable" data-value="1"></i>
                        <i class="fas fa-star star-clickable" data-value="2"></i>
                        <i class="fas fa-star star-clickable" data-value="3"></i>
                        <i class="fas fa-star star-clickable" data-value="4"></i>
                        <i class="fas fa-star star-clickable" data-value="5"></i>
                    </div>
                </div>
                
                <div class="rating-divider-line"></div>

                <div class="rating-text-explanation">
                    <h4>Pilih rating kamu</h4>
                    <p>Klik bintang untuk memberikan penilaian</p>
                </div>
            </div>

            <div class="comment-input-section">
                <div class="rating-title-label">Komentarmu</div>
                <form id="commentSubmitForm" action="javascript:void(0);">
                    <input type="hidden" name="rating_value" id="ratingValueInput" value="0">
                    
                    <textarea 
                        name="komentar_teks" 
                        id="komentarTeks" 
                        class="comment-textarea-box" 
                        placeholder="Tulis komentar kamu di sini..." 
                        required></textarea>
                </form>
            </div>

            <div class="comment-tips-heading">Tips menulis komentar yang baik</div>
            <div class="tips-layout-row">
                
                <div class="tip-card-item">
                    <div class="tip-icon-circle">
                        <i class="far fa-heart"></i>
                    </div>
                    <div class="tip-text-content">
                        <div class="tip-title">Jujur & Sopan</div>
                        <div class="tip-description">Sampaikan pendapatmu dengan jujur dan bahasa yang sopan</div>
                    </div>
                </div>

                <div class="tip-card-item">
                    <div class="tip-icon-circle">
                        <i class="far fa-comment-dots"></i>
                    </div>
                    <div class="tip-text-content">
                        <div class="tip-title">Bermanfaat</div>
                        <div class="tip-description">Komentarmu bisa membantu pembaca lain memilih bacaan.</div>
                    </div>
                </div>

                <div class="tip-card-item">
                    <div class="tip-icon-circle">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <div class="tip-text-content">
                        <div class="tip-title">Hindari Spoiler</div>
                        <div class="tip-description">Jangan membocorkan alur cerita penting ya!</div>
                    </div>
                </div>

            </div>

            <div class="comment-action-bar">
                <a href="javascript:void(0);" id="btnBatal" class="btn-action-cancel">Batal</a>
                <button type="submit" id="btnKirim" class="btn-action-submit">Kirim Komentar</button>
            </div>

        </div>
    </div>
</div>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400&family=Poppins:wght@300;400;500;600;700&display=swap');

    .komentar-page-body {
        font-family: 'Poppins', sans-serif;
        color: #FFFFFF;
        min-height: 100vh;
        padding-top: 40px;
        padding-bottom: 80px;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
    }

    .wrapper-container {
        width: 100%;
        max-width: 1300px;
        padding-left: 24px;
        padding-right: 24px;
    }

    .main-comment-card {
        background-color: #22123F;
        border: 1px solid rgba(139, 92, 246, 0.30);
        border-radius: 16px;
        padding: 50px 60px; 
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        box-shadow: 0px 10px 40px 0px rgba(124, 122, 237, 0.30);
    }

    .comment-header-title {
        font-family: 'Cormorant Garamond', serif;
        font-size: 38px;
        font-weight: 700;
        margin: 0 0 6px 0;
    }

    .comment-header-subtitle {
        font-size: 16px;
        color: #A096C7;
        margin: 0 0 35px 0;
        font-weight: 400;
    }

    .novel-info-section {
        display: flex;
        gap: 28px;
        align-items: flex-start;
        padding-bottom: 35px;
        border-bottom: 1px solid rgba(92, 40, 126, 0.30);
    }

    .novel-image-box {
        width: 190px; 
        height: 265px; 
        border-radius: 8px;
        overflow: hidden;
        flex-shrink: 0;
        box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.4);
        border: 1px solid rgba(139, 92, 246, 0.30); 
    }

    .novel-image-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .novel-detail-meta {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .novel-title-text {
        font-family: 'Cormorant Garamond', serif;
        font-size: 42px;
        font-weight: 700;
        margin: 0;
        line-height: 1.1;
    }

    .novel-author-row {
        display: flex;
        align-items: center;
        gap: 6px;
        font-size: 16px;
        color: #FFFFFF;
    }

    .author-name {
        font-weight: 300;
    }

    .icon-verified {
        color: #D17CE3;
        font-size: 14px;
    }

    .novel-stats-row {
        display: flex;
        align-items: center;
        gap: 16px;
        font-size: 14px;
        color: #A096C7;
        margin-top: 4px;
    }

    .stat-item {
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .icon-align-star {
        color: #FFD700;
        display: inline-flex;
        align-items: center;
        margin-top: -1px;
    }

    .icon-align-eye {
        display: inline-flex;
        align-items: center;
        margin-top: 1px;
    }

    .stat-text-align {
        line-height: 1;
        display: inline-block;
    }

    .rating-input-section {
        display: flex;
        align-items: center;
        padding: 35px 0;
    }

    .rating-stars-side {
        width: 40%;
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .rating-title-label {
        font-size: 18px;
        font-weight: 600;
        letter-spacing: 0.5px;
    }

    .stars-interactive-container {
        display: flex;
        gap: 10px;
    }

    .star-clickable {
        font-size: 36px;
        color: #4A4A6A;
        cursor: pointer;
        transition: color 0.2s ease, transform 0.1s ease;
    }

    .star-clickable:hover {
        transform: scale(1.1);
    }

    .star-clickable.active {
        color: #FFD700;
    }

    .rating-divider-line {
        width: 1px;
        height: 80px; 
        background-color: rgba(92, 40, 126, 0.30);
        margin: 0 40px;
    }

    .rating-text-explanation {
        display: flex;
        flex-direction: column;
        gap: 12px; 
        justify-content: center;
    }

    .rating-text-explanation h4 {
        font-size: 18px; 
        font-weight: 600;
        margin: 0;
        color: #FFFFFF;
        line-height: 1; 
    }

    .rating-text-explanation p {
        font-size: 14px; 
        color: #A096C7;
        margin: 0;
        line-height: 1;
    }

    .comment-input-section {
        display: flex;
        flex-direction: column;
        gap: 12px;
        margin-bottom: 40px;
    }

    .comment-textarea-box {
        width: 100%;
        min-height: 180px;
        background-color: #18092F;
        border: 1px solid rgba(139, 92, 246, 0.30);
        border-radius: 12px;
        padding: 18px;
        color: #FFFFFF;
        font-family: 'Poppins', sans-serif;
        font-size: 14px;
        resize: vertical;
    }

    .comment-textarea-box::placeholder {
        color: #53457A;
    }

    .comment-textarea-box:focus {
        outline: none;
        border-color: #D17CE3;
        box-shadow: 0px 0px 15px rgba(209, 124, 227, 0.2);
    }

    .comment-tips-heading {
        font-size: 16px;
        font-weight: 600;
        margin-bottom: 20px;
    }

    .tips-layout-row {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 28px;
        margin-bottom: 40px;
    }

    .tip-card-item {
        display: flex;
        align-items: flex-start;
        gap: 16px;
    }

    .tip-icon-circle {
        width: 52px;
        height: 52px;
        background-color: #18092F;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        box-shadow: 0px 6px 20px 0px rgba(124, 122, 237, 0.25);
    }

    .tip-icon-circle i {
        color: #D17CE3;
        font-size: 20px;
    }

    .tip-text-content {
        display: flex;
        flex-direction: column;
        gap: 4px;
    }

    .tip-title {
        font-size: 14px;
        font-weight: 600;
        color: #FFFFFF;
    }

    .tip-description {
        font-size: 12px;
        color: #A096C7;
        line-height: 1.5;
    }

    .comment-action-bar {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        gap: 16px;
        margin-top: 60px; 
        padding-top: 10px;
    }

    .btn-action-cancel {
        background-color: transparent;
        border: 1px solid #D17CE3;
        color: #D17CE3;
        padding: 12px 36px;
        border-radius: 8px;
        font-size: 14px;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.2s ease;
        text-decoration: none;
        text-align: center;
        box-shadow: none;
    }

    .btn-action-cancel:hover {
        background-color: rgba(209, 124, 227, 0.1);
    }

    .btn-action-submit {
        background: linear-gradient(90deg, #D17CE3 0%, #B87BFF 100%);
        border: none;
        color: #FFFFFF; 
        padding: 12px 36px;
        border-radius: 8px;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        transition: opacity 0.2s ease;
        box-shadow: none;
    }

    .btn-action-submit:hover {
        opacity: 0.9;
    }

    @media (max-width: 868px) {
        .main-comment-card {
            padding: 35px 30px;
        }
        .rating-input-section {
            flex-direction: column;
            align-items: flex-start;
            gap: 20px;
        }
        .rating-stars-side {
            width: 100%;
        }
        .rating-divider-line {
            display: none;
        }
        .tips-layout-row {
            grid-template-columns: 1fr;
            gap: 20px;
        }
        .comment-action-bar {
            margin-top: 40px;
        }
    }

    @media (max-width: 576px) {
        .main-comment-card {
            padding: 24px 20px;
        }
        .novel-info-section {
            flex-direction: column;
            align-items: flex-start;
            gap: 16px;
        }
        .novel-title-text {
            font-size: 32px;
        }
        .comment-action-bar {
            flex-direction: column-reverse;
            align-items: stroke;
            width: 100%;
            gap: 12px;
            margin-top: 35px;
        }
        .btn-action-cancel, .btn-action-submit {
            width: 100%;
        }
    }
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
// Tombol Batal Mengikuti Referrer Halaman Sebelum masuk ke Sini
$('#btnBatal').click(function() {
    if (document.referrer.includes('detail-bayar')) {
        window.location.href = "{{ route('katalog.detail_bayar') }}";
    } else {
        window.location.href = "{{ route('katalog.detail') }}";
    }
});

$(document).ready(function() {
    let currentRating = 0;
    $('.star-clickable').click(function() {
        let clickedValue = parseInt($(this).data('value'));
        if (currentRating === clickedValue) {
            currentRating = clickedValue - 1;
        } else {
            currentRating = clickedValue;
        }
        $('#ratingValueInput').val(currentRating);
        $('.star-clickable').each(function() {
            let starValue = parseInt($(this).data('value'));
            if (starValue <= currentRating) {
                $(this).addClass('active');
            } else {
                $(this).removeClass('active');
            }
        });
    });
});

$(document).ready(function() {
    let currentRating = 0;
    
    // Logika Bintang
    $('.star-clickable').click(function() {
        currentRating = parseInt($(this).data('value'));
        $('#ratingValueInput').val(currentRating);
        $('.star-clickable').removeClass('active');
        $('.star-clickable').each(function(index) {
            if (index < currentRating) $(this).addClass('active');
        });
    });

    // Kirim Komentar (Simpan ke localStorage)
    $('#btnKirim').click(function() {
        let komentarData = {
            nama: "Pengguna Baru",
            rating: currentRating,
            isi: $('#komentarTeks').val(),
            waktu: Date.now() 
        };

        let listKomentar = JSON.parse(localStorage.getItem('komentar_baru') || '[]');
        listKomentar.push(komentarData);
        localStorage.setItem('komentar_baru', JSON.stringify(listKomentar));

        // MENGGUNAKAN document.referrer UNTUK CEK HALAMAN SEBELUMNYA
        if (document.referrer.includes('detail-bayar')) {
            window.location.href = "{{ route('katalog.detail_bayar') }}";
        } else {
            window.location.href = "{{ route('katalog.detail') }}";
        }
    });
});
</script>
@endsection