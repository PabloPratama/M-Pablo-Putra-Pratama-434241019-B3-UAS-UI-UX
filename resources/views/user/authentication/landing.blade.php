<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lembar Novel</title>

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
            overflow-x: hidden;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #000;
            min-height: 100vh;
        }

        * {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        *::-webkit-scrollbar {
            display: none;
        }

        .landing-wrapper {
            min-height: 100vh;
            padding: 0;
        }

        .hero-container {
            width: 100%;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background: linear-gradient(
                rgba(8, 0, 20, 0.55),
                rgba(8, 0, 20, 0.55)
            ),
            url("{{ asset('images/As11.png') }}");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
            overflow: hidden;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 30px 90px; 
            width: 100%;
        }

        .logo-area {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .logo-icon {
            font-size: 32px;
            color: #B87BFF;
        }

        .logo-text {
            font-family: 'Cormorant Garamond', serif;
            font-size: 2rem;
            font-weight: 600;
            color: white;
        }

        .auth-buttons {
            display: flex;
            gap: 14px;
            align-items: center;
        }

        .btn-login {
            width: 120px;
            height: 54px;
            border: 1px solid #D17CE3;
            background: transparent;
            border-radius: 14px;
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            transition: .3s;
        }

        .btn-login:hover {
            background: rgba(209, 124, 227, .12);
        }

        .btn-register {
            width: 120px;
            height: 54px;
            border-radius: 14px;
            text-decoration: none;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-weight: 600;
            background: linear-gradient(
                90deg,
                #D17CE3,
                #B87BFF
            );
            transition: .3s;
        }

        .btn-register:hover {
            opacity: 0.95;
        }

        .hero-content {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding-left: 90px;
            padding-right: 90px;
            max-width: 800px;
            margin-top: -40px; 
        }

        .hero-title {
            font-family: 'Cormorant Garamond', serif;
            font-size: clamp(2.4rem, 5.5vw, 4.8rem);
            font-weight: 600;
            line-height: 1.1;
            color: white;
            text-align: left;
        }

        .hero-title .accent {
            color: #D17CE3;
        }

        .hero-description {
            margin-top: 20px;
            font-size: clamp(0.95rem, 1.8vw, 1.15rem);
            line-height: 1.7;
            color: #E7E7E7;
            max-width: 580px;
            text-align: left;
            font-weight: 300;
        }

        .cta-button {
            margin-top: 36px;
            width: 290px;
            height: 64px;
            border-radius: 10px;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            color: white;
            font-weight: 600;
            font-size: 1rem;
            background: linear-gradient(
                90deg,
                #D17CE3,
                #B87BFF
            );
            transition: .3s;
        }

        .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(184, 123, 255, 0.15);
        }


        @media (max-width: 1024px) {
            .navbar {
                padding: 26px 50px;
            }
            .hero-content {
                padding-left: 50px;
                padding-right: 50px;
            }
        }

        @media (max-width: 768px) {
            .navbar {
                padding: 22px 30px;
            }
            .logo-text {
                font-size: 1.75rem;
            }
            .logo-icon {
                font-size: 28px;
            }
            .btn-login, .btn-register {
                width: 100px;
                height: 48px;
                font-size: 0.9rem;
                border-radius: 10px;
            }
            .hero-content {
                padding-left: 30px;
                padding-right: 30px;
            }
            .cta-button {
                width: 260px;
                height: 58px;
                font-size: 0.95rem;
            }
        }

        @media (max-width: 576px) {
            .navbar {
                flex-direction: row; 
                justify-content: space-between;
                align-items: center;
                padding: 20px 20px;
                gap: 0;
            }

            .logo-area {
                gap: 8px;
            }

            .logo-text {
                font-size: 1.4rem; 
            }

            .logo-icon {
                font-size: 22px;
            }

            .auth-buttons {
                width: auto;
                gap: 8px; 
            }

            .btn-login, .btn-register {
                flex: none;
                width: 78px;  
                height: 42px;
                font-size: 0.8rem;
                border-radius: 8px;
            }

            .hero-content {
                padding-left: 20px;
                padding-right: 20px;
                text-align: left; 
                margin-top: -60px;
            }

            .hero-title {
                text-align: left;
                line-height: 1.15;
            }

            .hero-description {
                text-align: left;
                margin-top: 16px;
            }

            .cta-button {
                width: 100%; 
                max-width: 290px;
                height: 56px;
            }
        }
    </style>
</head>
<body>

<div class="landing-wrapper">

    <div class="hero-container">

        <nav class="navbar">

            <div class="logo-area">
                <i class="fa-solid fa-book-open logo-icon"></i>
                <div class="logo-text">
                    Lembar Novel
                </div>
            </div>

            <div class="auth-buttons">
                <a href="{{ route('login') }}" class="btn-login">
                    Masuk
                </a>
                <a href="{{ route('daftar') }}" class="btn-register">
                    Daftar
                </a>
            </div>

        </nav>

        <div class="hero-content">

            <h1 class="hero-title">
                Dunia <span class="accent">Cerita,</span>
                <br>
                dalam setiap <span class="accent">lembar.</span>
            </h1>

            <p class="hero-description">
                Lembar Novel adalah platform e-novel untuk
                membaca, menemukan, dan menikmati berbagai
                cerita terbaik karya penulis berbakat.
            </p>

            <a href="{{ route('login') }}" class="cta-button">
                Mulai Membaca Novel
                <i class="fa-solid fa-arrow-right"></i>
            </a>

        </div>

    </div>

</div>

</body>
</html>