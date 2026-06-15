<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Daftar - Lembar Novel</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            width: 100%;
            height: 100%;
            overflow-x: hidden;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #000;
            color: white;
        }

        * {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        *::-webkit-scrollbar {
            display: none;
        }

        .page-wrapper {
            min-height: 100vh;
            padding: 0;
            display: flex;
            flex-direction: column;
        }

        .hero-container {
            width: 100%;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            position: relative;
            background: linear-gradient(
                rgba(8, 2, 22, 0.45),
                rgba(8, 2, 22, 0.55)
            ),
            url("{{ asset('images/As17.png') }}");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding-bottom: 80px; 
        }

        .top-bar {
            display: flex;
            align-items: center;
            gap: 20px;
            padding: 30px 30px;
            width: 100%;
        }

        .back-btn {
            color: white;
            font-size: 28px;
            text-decoration: none;
            transition: .2s;
        }

        .back-btn:hover {
            color: #D17CE3;
        }

        .logo-area {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .logo-icon {
            color: #B87BFF;
            font-size: 32px;
        }

        .logo-text {
            font-family: 'Cormorant Garamond', serif;
            font-size: 2rem;
            font-weight: 600;
            color: white;
        }

        .content-wrapper {
            flex-grow: 1;
            display: flex;
            align-items: flex-end; 
            justify-content: space-between;
            gap: 60px;
            padding: 0 40px 60px 30px;
            max-width: 1400px;
            width: 100%;
            margin: 0 auto;
        }

        .left-content {
            flex: 1;
            max-width: 600px;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            margin-bottom: 150px; 
        }

        .hero-title {
            font-family: 'Cormorant Garamond', serif;
            font-size: clamp(2.4rem, 4.5vw, 4.2rem); 
            font-weight: 600;
            line-height: 1.15;
            color: white;
        }

        .accent {
            color: #D17CE3;
        }

        .hero-description {
            margin-top: 24px;
            font-size: clamp(1rem, 1.5vw, 1.2rem);
            line-height: 1.7;
            color: #E9E9E9;
            font-weight: 300;
            max-width: 560px;
        }

        .feature-list {
            margin-top: 28px;
            display: flex;
            flex-direction: column;
            gap: 18px;
        }

        .feature-item {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .feature-icon {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: #5C287E;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #D17CE3;
            font-size: 22px;
            flex-shrink: 0;
        }

        .feature-title {
            color: white;
            font-weight: 600;
            font-size: 1.05rem;
        }

        .feature-desc {
            color: #D7D7D7;
            font-size: .9rem;
            line-height: 1.4;
        }

        .register-card {
            width: 480px;
            max-width: 100%;
            background: #22123F;
            border: 1px solid rgba(139, 92, 246, .35);
            border-radius: 14px;
            padding: 40px 36px;
            box-shadow: 0 15px 45px rgba(12, 4, 32, 0.5);
            align-self: center; 
        }

        .card-title {
            text-align: center;
            font-family: 'Cormorant Garamond', serif;
            font-size: 2.2rem;
            font-weight: 600;
            color: white;
        }

        .card-subtitle {
            text-align: center;
            margin-top: 8px;
            color: #BDB7C8;
            font-size: .9rem;
            font-weight: 300;
        }

        .card-subtitle a {
            color: #D17CE3;
            text-decoration: none;
            font-weight: 500;
        }

        .card-subtitle a:hover {
            text-decoration: underline;
        }

        .form-group {
            margin-top: 24px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-size: 0.95rem;
            font-weight: 500;
            color: #E9E9E9;
        }

        .input-wrapper {
            height: 52px;
            background: #130626;
            border: 1px solid #2F1755;
            border-radius: 10px;
            display: flex;
            align-items: center;
            padding: 0 16px;
            gap: 12px;
            transition: .2s;
        }

        .input-wrapper:focus-within {
            border-color: #B87BFF;
        }

        .input-wrapper i {
            color: #8C849D;
            font-size: 16px;
            width: auto;
        }

        .input-wrapper i.password-toggle {
            cursor: pointer;
            color: white;
            padding: 4px;
            transition: color .2s;
        }

        .input-wrapper i.password-toggle:hover {
            color: #D17CE3;
        }

        .input-wrapper input {
            flex: 1;
            background: transparent;
            border: none;
            outline: none;
            color: white;
            font-family: 'Poppins', sans-serif;
            font-size: 0.95rem;
            padding-left: 0;
        }

        .input-wrapper input::placeholder {
            color: #8C849D;
        }

        .register-btn {
            width: 100%;
            height: 54px;
            border: none;
            border-radius: 10px;
            margin-top: 28px;
            cursor: pointer;
            color: white;
            font-weight: 600;
            font-size: 1rem;
            background: linear-gradient(
                90deg,
                #D17CE3,
                #B87BFF
            );
            transition: .2s;
        }

        .register-btn:hover {
            opacity: 0.95;
            transform: translateY(-1px);
        }

        .footer-bar {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(12, 4, 32, .85);
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #BDB7C8;
            font-size: .8rem;
            border-top: 1px solid rgba(55, 24, 111, 0.3);
        }

        .footer-bar i {
            margin-right: 6px;
        }

        @media (max-width: 1024px) {
            .top-bar {
                padding: 26px 30px;
            }
            .content-wrapper {
                padding: 0 30px 60px 30px;
                gap: 40px;
            }
        }

        @media (max-width: 992px) {
            .top-bar {
                padding: 26px 20px;
            }
            .content-wrapper {
                flex-direction: column;
                justify-content: center;
                align-items: center;
                gap: 40px;
                padding: 40px 20px 100px 20px;
            }
            .left-content {
                text-align: center;
                max-width: 100%;
                justify-content: center;
                margin-bottom: 0; 
            }
            .feature-list {
                align-items: center;
            }
            .feature-item {
                text-align: left;
                max-width: 400px;
                width: 100%;
            }
            .register-card {
                width: 100%;
                max-width: 480px;
                align-self: center;
            }
        }

        @media (max-width: 576px) {
            .top-bar {
                padding: 20px 20px;
            }
            .logo-text {
                font-size: 1.5rem;
            }
            .logo-icon {
                font-size: 26px;
            }
            .back-btn {
                font-size: 22px;
            }
            .content-wrapper {
                padding: 20px 20px 100px 20px;
                gap: 30px;
            }
            .register-card {
                padding: 30px 22px;
            }
            .card-title {
                font-size: 1.8rem;
            }
            .feature-item {
                align-items: flex-start;
            }
        }
    </style>
</head>
<body>

<div class="page-wrapper">

    <div class="hero-container">

        <div class="top-bar">
            <a href="{{ url('/') }}" class="back-btn">
                <i class="fa-solid fa-arrow-left"></i>
            </a>
            <div class="logo-area">
                <i class="fa-solid fa-book-open logo-icon"></i>
                <span class="logo-text">Lembar Novel</span>
            </div>
        </div>

        <div class="content-wrapper">

            <div class="left-content">
                <h1 class="hero-title">
                    Mulai <span class="accent">perjalananmu</span> <br> di dunia <span class="accent">cerita.</span>
                </h1>
                <p class="hero-description">
                    Daftar sekarang dan temukan ribuan novel menarik yang siap menemanimu setiap hari.
                </p>

                <div class="feature-list">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fa-solid fa-book-open"></i> </div>
                        <div>
                            <div class="feature-title">Akses Ribuan Novel</div>
                            <div class="feature-desc">Nikmati koleksi lengkap berbagai genre favoritmu.</div>
                        </div>
                    </div>

                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fa-regular fa-bookmark"></i>
                        </div>
                        <div>
                            <div class="feature-title">Simpan Favoritmu</div>
                            <div class="feature-desc">Simpan dan lanjutkan bacaan kapan saja dengan mudah.</div>
                        </div>
                    </div>

                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>
                        <div>
                            <div class="feature-title">Aman & Nyaman</div>
                            <div class="feature-desc">Transaksi aman dan pengalaman membaca yang nyaman.</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="register-card">
                <h2 class="card-title">Buat <span class="accent">Akun Baru</span></h2>
                <p class="card-subtitle">
                    Sudah punya akun ? <a href="{{ route('login') }}">Masuk di sini</a>
                </p>

                <form>
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <div class="input-wrapper">
                            <i class="fa-regular fa-user"></i>
                            <input type="text" placeholder="Masukkan nama lengkap" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <div class="input-wrapper">
                            <i class="fa-regular fa-envelope"></i>
                            <input type="email" placeholder="Masukkan email aktif" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Kata Sandi</label>
                        <div class="input-wrapper">
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" placeholder="Buat Kata Sandi" required>
                            <i class="fa-regular fa-eye-slash password-toggle"></i>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Konfirmasi Kata Sandi</label>
                        <div class="input-wrapper">
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" placeholder="Konfirmasi kata sandi" required>
                            <i class="fa-regular fa-eye-slash password-toggle"></i>
                        </div>
                    </div>

                    <button type="submit" class="register-btn">Daftar Sekarang</button>
                </form>
            </div>

        </div>

        <div class="footer-bar">
            <i class="fa-regular fa-copyright"></i> Lembar Novel. All rights reserved
        </div>

    </div>

</div>

<script>
    document.querySelectorAll('.password-toggle').forEach(icon => {
        icon.addEventListener('click', () => {
            const input = icon.parentElement.querySelector('input');
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            } else {
                input.type = 'password';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            }
        });
    });
</script>

</body>
</html>