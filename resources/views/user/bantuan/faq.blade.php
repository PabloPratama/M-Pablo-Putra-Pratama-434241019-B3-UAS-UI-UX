@extends('user.layouts.app')

@section('title', 'FAQ')

@section('content')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@600;700&family=Poppins:wght@100;200;300;400;500;600&display=swap');

    .faq-container {
        font-family: 'Poppins', sans-serif;
        max-width: 1200px; 
        margin: 5px auto 40px auto; 
        padding: 0 24px;
        color: #ffffff;
        box-sizing: border-box;
    }

    .faq-title {
        font-family: 'Cormorant Garamond', serif;
        font-size: 56px; 
        font-weight: 700;
        margin-bottom: 6px;
        letter-spacing: 1px;
    }

    .faq-subtitle {
        font-size: 18px; 
        color: #9CA3AF;
        margin-bottom: 25px;
        font-weight: 400;
    }

    .search-wrapper {
        position: relative;
        margin-bottom: 30px;
    }

    .search-input {
        width: 100%;
        background-color: #0C0420;
        border: 1px solid #2B0F52;
        border-radius: 10px;
        padding: 18px 24px 18px 56px; 
        color: #ffffff;
        font-size: 16px; 
        font-family: 'Poppins', sans-serif;
        transition: all 0.3s ease;
        outline: none;
        box-sizing: border-box;
    }

    .search-input::placeholder {
        color: #534b6e;
    }

    .search-input:focus, .search-input.has-content {
        border-color: #D17CE3;
        box-shadow: 0px 10px 40px 0px rgba(124, 58, 237, 0.30);
    }

    .search-icon {
        position: absolute;
        left: 20px;
        top: 50%;
        transform: translateY(-50%);
        color: #D17CE3;
        display: flex;
        align-items: center;
        justify-content: center;
        pointer-events: none;
    }

    .search-icon svg {
        width: 22px;
        height: 22px;
        stroke-width: 2.5; 
    }

    .filter-container {
        display: flex;
        gap: 30px; 
        margin-bottom: 35px;
        overflow-x: auto;
        padding-bottom: 8px;
    }

    .filter-container::-webkit-scrollbar {
        height: 4px;
    }

    .filter-container::-webkit-scrollbar-thumb {
        background: #2B0F52;
        border-radius: 4px;
    }

    .filter-btn {
        background: none;
        border: none;
        color: #ffffff;
        font-size: 16px; 
        font-weight: 500;
        cursor: pointer;
        padding: 0;
        white-space: nowrap;
        transition: color 0.3s ease;
    }

    .filter-btn.active {
        color: #D17CE3;
    }

    .faq-main-card {
        background-color: #22123F;
        border: 1px solid rgba(139, 92, 246, 0.30);
        border-radius: 14px;
        box-shadow: 0px 10px 40px 0px rgba(124, 58, 237, 0.30);
        overflow: hidden;
    }

    .faq-item {
        border-bottom: 1px solid rgba(92, 40, 126, 0.30);
        transition: background-color 0.3s ease;
    }

    .faq-item:last-child {
        border-bottom: none;
    }

    .faq-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 24px 30px; 
        cursor: pointer;
        user-select: none;
    }

    .faq-left-content {
        display: flex;
        align-items: center;
        gap: 22px; 
    }

    .faq-icon-box {
        width: 48px; 
        height: 48px;
        background-color: #18092F;
        border: 1px solid rgba(139, 92, 246, 0.30);
        border-radius: 10px;
        box-shadow: 0px 10px 40px 0px rgba(124, 58, 237, 0.30);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .faq-icon-box svg {
        width: 24px; 
        height: 24px;
        fill: none;
        stroke: #D17CE3;
        stroke-width: 2;
        stroke-linecap: round;
        stroke-linejoin: round;
    }

    .faq-question {
        font-size: 17px; 
        font-weight: 500; 
        color: #ffffff;
        line-height: 1.4;
    }

    .faq-arrow {
        display: flex;
        align-items: center;
        justify-content: center;
        transition: transform 0.3s ease;
        margin-left: 15px;
    }

    .faq-arrow svg {
        width: 22px; 
        height: 22px;
        fill: none;
        stroke: #ffffff;
        stroke-width: 2;
        stroke-linecap: round;
        stroke-linejoin: round;
    }

    .faq-content {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease-out;
        background-color: rgba(24, 9, 47, 0.4);
    }

    .faq-body {
        padding: 0 30px 28px 100px; 
        color: #d1cae1;
        font-size: 15px; 
        line-height: 1.7; 
    }

    .faq-body p {
        margin-top: 0;
        margin-bottom: 12px;
        font-weight: 400; 
    }

    .faq-steps {
        margin: 0;
        padding-left: 20px;
    }

    .faq-steps li {
        margin-bottom: 10px; 
        font-weight: 400; 
    }

    .faq-steps li:last-child {
        margin-bottom: 0;
    }

    .faq-steps li strong {
        color: #D17CE3;
        font-weight: 600; 
    }

    .faq-item.open .faq-arrow {
        transform: rotate(90deg);
    }

    .faq-item.open .faq-content {
        max-height: 600px; 
        transition: max-height 0.3s ease-in;
    }

    .no-results {
        padding: 50px;
        text-align: center;
        color: #b0a8c0;
        font-size: 16px;
        display: none;
    }

    @media (max-width: 1024px) {
        .faq-title {
            font-size: 46px;
        }
        .faq-header {
            padding: 22px 26px;
        }
        .faq-body {
            padding: 0 26px 24px 96px;
        }
    }

    @media (max-width: 768px) {
        .faq-container {
            margin-top: 5px;
            padding: 0 16px;
        }
        .faq-title {
            font-size: 38px;
        }
        .faq-header {
            padding: 20px 20px;
        }
        .faq-left-content {
            gap: 16px;
        }
        .faq-body {
            padding: 0 20px 20px 84px;
        }
    }

    @media (max-width: 480px) {
        .faq-title {
            font-size: 32px;
        }
        .faq-subtitle {
            font-size: 14px;
            margin-bottom: 20px;
        }
        .search-input {
            padding: 14px 20px 14px 48px;
            font-size: 14px;
        }
        .search-icon {
            left: 16px;
        }
        .search-icon svg {
            width: 18px;
            height: 18px;
        }
        .filter-container {
            gap: 20px;
            margin-bottom: 25px;
        }
        .filter-btn {
            font-size: 14px;
        }
        .faq-header {
            padding: 16px 16px;
        }
        .faq-icon-box {
            width: 38px;
            height: 38px;
            border-radius: 8px;
        }
        .faq-icon-box svg {
            width: 18px;
            height: 18px;
        }
        .faq-question {
            font-size: 14px;
        }
        .faq-arrow svg {
            width: 18px;
            height: 18px;
        }
        .faq-body {
            padding: 0 16px 18px 16px; 
        }
        .faq-steps {
            padding-left: 16px;
        }
    }
</style>

<div class="faq-container">
    <h1 class="faq-title">FAQ</h1>
    <p class="faq-subtitle">Temukan jawaban dari pertanyaan yang sering ditanyakan.</p>

    <div class="search-wrapper">
        <span class="search-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="11" cy="11" r="8"></circle>
                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
            </svg>
        </span>
        <input type="text" id="faqSearch" class="search-input" placeholder="Cari Pertanyaan...">
    </div>

    <div class="filter-container">
        <button class="filter-btn active" data-category="semua">Semua</button>
        <button class="filter-btn" data-category="akun">Akun & Profil</button>
        <button class="filter-btn" data-category="pembayaran">Pembayaran</button>
        <button class="filter-btn" data-category="membaca">Membaca Novel</button>
        <button class="filter-btn" data-category="upload">Upload & Penulis</button>
        <button class="filter-btn" data-category="lainnya">Lainnya</button>
    </div>

    <div class="faq-main-card">
        
        <div class="faq-item" data-categories="membaca pembayaran">
            <div class="faq-header">
                <div class="faq-left-content">
                    <div class="faq-icon-box">
                        <svg viewBox="0 0 24 24"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                    </div>
                    <div class="faq-question">Bagaimana cara membeli novel berbayar ?</div>
                </div>
                <div class="faq-arrow">
                    <svg viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </div>
            </div>
            <div class="faq-content">
                <div class="faq-body">
                    <ol class="faq-steps">
                        <li>Pilih novel berbayar yang ingin Anda baca di halaman <strong>Katalog</strong>.</li>
                        <li>Masuk ke halaman detail novel, lalu klik <strong>Beli Sekarang</strong>.</li>
                        <li>Pilih metode pembayaran yang tersedia (QRIS atau Virtual Account).</li>
                        <li>Lakukan pembayaran sesuai instruksi. Akses membaca novel akan otomatis terbuka setelah sistem memverifikasi transaksi Anda.</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="faq-item" data-categories="pembayaran">
            <div class="faq-header">
                <div class="faq-left-content">
                    <div class="faq-icon-box">
                        <svg viewBox="0 0 24 24"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>
                    </div>
                    <div class="faq-question">Metode pembayaran apa saja yang tersedia ?</div>
                </div>
                <div class="faq-arrow">
                    <svg viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </div>
            </div>
            <div class="faq-content">
                <div class="faq-body">
                    <p>Kami mendukung berbagai metode pembayaran terintegrasi untuk kenyamanan Anda:</p>
                    <ol class="faq-steps">
                        <li><strong>QRIS Otomatis:</strong> Dapat dipindai menggunakan aplikasi m-banking atau e-wallet apa pun.</li>
                        <li><strong>Virtual Account (VA):</strong> Bank BCA, Mandiri, BRI, BNI, BTN, BSI dan CIMB Niaga.</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="faq-item" data-categories="membaca">
            <div class="faq-header">
                <div class="faq-left-content">
                    <div class="faq-icon-box">
                        <svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline></svg>
                    </div>
                    <div class="faq-question">Apakah pembelian sudah termasuk semua bab ?</div>
                </div>
                <div class="faq-arrow">
                    <svg viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </div>
            </div>
            <div class="faq-content">
                <div class="faq-body">
                    <p>Paket pembelian novel sudah termasuk semua bab pada novel tersebut:</p>
                    <ol class="faq-steps">
                        <li><strong>Buka semua bab:</strong> Akses menyeluruh dari bab pertama hingga bab terakhir secara permanen, termasuk bab yang di-update mendatang.</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="faq-item" data-categories="pembayaran">
            <div class="faq-header">
                <div class="faq-left-content">
                    <div class="faq-icon-box">
                        <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
                    </div>
                    <div class="faq-question">Apa yang terjadi jika pembayaran gagal ?</div>
                </div>
                <div class="faq-arrow">
                    <svg viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </div>
            </div>
            <div class="faq-content">
                <div class="faq-body">
                    <p>Apabila terjadi kegagalan sistem saat proses pembayaran, lakukan langkah penanganan berikut:</p>
                    <ol class="faq-steps">
                        <li>Jangan buru-buru melakukan transaksi ulang untuk menghindari pembayaran ganda (*double-billing*).</li>
                        <li>Periksa menu <strong>Profil bagian Riwayat Transaksi</strong> untuk memvalidasi status riwayat pembayaran terbaru.</li>
                        <li>Jika saldo Anda terpotong namun status tetap gagal, kirim pesan ke Customer Support dengan melampirkan screenshot bukti transfer.</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="faq-item" data-categories="lainnya">
            <div class="faq-header">
                <div class="faq-left-content">
                    <div class="faq-icon-box">
                        <svg viewBox="0 0 24 24"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                    </div>
                    <div class="faq-question">Bagaimana cara menghubungi customer support ?</div>
                </div>
                <div class="faq-arrow">
                    <svg viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </div>
            </div>
            <div class="faq-content">
                <div class="faq-body">
                    <ol class="faq-steps">
                        <li>Gulir ke bawah ke bagian navigasi footer, lalu klik menu <strong>Hubungi Kami</strong>.</li>
                        <li>Isi formulir pengaduan dengan nama, email aktif, dan detail permasalahan Anda secara terperinci.</li>
                        <li>Atau Anda bisa mengirim langsung menggunakan Nomor WhatsApp atau email Official Lembar Novel untuk tanggapan tentang masalah anda.</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="faq-item" data-categories="upload">
            <div class="faq-header">
                <div class="faq-left-content">
                    <div class="faq-icon-box">
                        <svg viewBox="0 0 24 24"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="17 8 12 3 7 8"></polyline><line x1="12" y1="3" x2="12" y2="15"></line></svg>
                    </div>
                    <div class="faq-question">Kapan admin lembar novel akan mengupload bab novel terbaru ?</div>
                </div>
                <div class="faq-arrow">
                    <svg viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </div>
            </div>
            <div class="faq-content">
                <div class="faq-body">
                    <ol class="faq-steps">
                        <li>Admin Lembar Novel akan mengupload bab novel terbaru ketika bab tersebut sudah resmi di publikasi oleh penulis, atau paling lambat 3 jam setelah di publikasi.</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="faq-item" data-categories="akun">
            <div class="faq-header">
                <div class="faq-left-content">
                    <div class="faq-icon-box">
                        <svg viewBox="0 0 24 24"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path></svg>
                    </div>
                    <div class="faq-question">Bagaimana cara reset password ?</div>
                </div>
                <div class="faq-arrow">
                    <svg viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </div>
            </div>
            <div class="faq-content">
                <div class="faq-body">
                    <ol class="faq-steps">
                        <li>Arahkan ke menu utama login, lalu klik kalimat tautan <strong>Lupa Password?</strong>.</li>
                        <li>Masukkan alamat email yang Anda gunakan saat mendaftar akun Lembar Novel.</li>
                        <li>Periksa kotak masuk/spam email Anda, temukan kiriman surat dari kami, lalu klik tombol tautan atur ulang sandi.</li>
                        <li>Ketikkan kata sandi baru Anda, lakukan konfirmasi ulang dan tekan simpan.</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="faq-item" data-categories="akun lainnya">
            <div class="faq-header">
                <div class="faq-left-content">
                    <div class="faq-icon-box">
                        <svg viewBox="0 0 24 24"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                    </div>
                    <div class="faq-question">Apakah data pribadi saya aman di Lembar Novel ?</div>
                </div>
                <div class="faq-arrow">
                    <svg viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </div>
            </div>
            <div class="faq-content">
                <div class="faq-body">
                    <p>Keamanan privasi data akun Anda dilindungi secara ketat melalui standardisasi berlapis:</p>
                    <ol class="faq-steps">
                        <li>Seluruh password dienkripsi searah secara aman menggunakan algoritma hashing bawaan framework modern.</li>
                        <li>Sistem transaksi dienkripsi terenkapsulasi penuh menggunakan API resmi payment gateway bersertifikat PCI-DSS.</li>
                        <li>Kami menjamin data email dan informasi personal Anda tidak akan diperjualbelikan kepada pihak eksternal mana pun.</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="faq-item" data-categories="lainnya">
            <div class="faq-header">
                <div class="faq-left-content">
                    <div class="faq-icon-box">
                        <svg viewBox="0 0 24 24"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line></svg>
                    </div>
                    <div class="faq-question">Apakah Lembar Novel tersedia di aplikasi mobile ?</div>
                </div>
                <div class="faq-arrow">
                    <svg viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </div>
            </div>
            <div class="faq-content">
                <div class="faq-body">
                    <p>Fokus platform saat ini mengoptimalkan pengalaman pengguna melalui platform web:</p>
                    <ol class="faq-steps">
                        <li>Anda bisa langsung membuka Lembar Novel melalui peramban/browser dengan berbagai macam device yang anda miliki seperti smartphone, ipad, laptop dan komputer.</li>
                        <li>Aplikasi bawaan khusus Android (.apk) serta iOS saat ini tengah dikembangkan secara intensif oleh tim pengembang kami untuk rilis masa depan.</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="faq-item" data-categories="pembayaran">
            <div class="faq-header">
                <div class="faq-left-content">
                    <div class="faq-icon-box">
                        <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                    </div>
                    <div class="faq-question">kenapa pembayaran saya belum terverifikasi ?</div>
                </div>
                <div class="faq-arrow">
                    <svg viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </div>
            </div>
            <div class="faq-content">
                <div class="faq-body">
                    <p>Meskipun sistem beroperasi otomatis, beberapa hambatan teknis berikut bisa memicu penundaan verifikasi:</p>
                    <ol class="faq-steps">
                        <li><strong>Gangguan Kliring Bank:</strong> Node server bank terkait sedang sibuk atau mengalami kendala pembaruan mutasi data secara berkala.</li>
                        <li><strong>Gangguan Server:</strong> Jika pembayaran terjadi saat server sedang mengalami gangguan maka segala aktivitas transaksi akan otomatis gagal.</li>
                        <li>Mohon menunggu sekitar 10-15 menit, lalu ajukan pelaporan berkas bukti bayar ke Customer Service apabila status tidak berubah.</li>
                    </ol>
                </div>
            </div>
        </div>

        <div id="noResults" class="no-results">
            Pertanyaan tidak ditemukan. Coba gunakan kata kunci lain.
        </div>

    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const searchInput = document.getElementById('faqSearch');
        const filterButtons = document.querySelectorAll('.filter-btn');
        const faqItems = document.querySelectorAll('.faq-item');
        const noResults = document.getElementById('noResults');

        // Accordion Toggle
        faqItems.forEach(item => {
            const header = item.querySelector('.faq-header');
            header.addEventListener('click', () => {
                const isOpen = item.classList.contains('open');
                
                // Close all other items
                faqItems.forEach(otherItem => {
                    if (otherItem !== item) {
                        otherItem.classList.remove('open');
                        otherItem.querySelector('.faq-content').style.maxHeight = null;
                    }
                });

                // Toggle current item
                if (isOpen) {
                    item.classList.remove('open');
                    item.querySelector('.faq-content').style.maxHeight = null;
                } else {
                    item.classList.add('open');
                    const content = item.querySelector('.faq-content');
                    content.style.maxHeight = content.scrollHeight + "px";
                }
            });
        });

        // Search and Filter Logic
        function filterFAQ() {
            const query = searchInput.value.toLowerCase().trim();
            const activeFilter = document.querySelector('.filter-btn.active').getAttribute('data-category');
            let hasVisibleItems = false;

            // Handle Input class for styling
            if (query.length > 0) {
                searchInput.classList.add('has-content');
            } else {
                searchInput.classList.remove('has-content');
            }

            faqItems.forEach(item => {
                const question = item.querySelector('.faq-question').textContent.toLowerCase();
                const categories = item.getAttribute('data-categories').split(' ');
                
                const matchesSearch = question.includes(query);
                const matchesFilter = activeFilter === 'semua' || categories.includes(activeFilter);

                if (matchesSearch && matchesFilter) {
                    item.style.display = 'block';
                    hasVisibleItems = true;
                } else {
                    item.style.display = 'none';
                    item.classList.remove('open');
                    item.querySelector('.faq-content').style.maxHeight = null;
                }
            });

            noResults.style.display = hasVisibleItems ? 'none' : 'block';
        }

        // Search Input Event
        searchInput.addEventListener('input', filterFAQ);

        // Filter Button Events
        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                filterButtons.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');
                filterFAQ();
            });
        });
    });
</script>
@endsection

