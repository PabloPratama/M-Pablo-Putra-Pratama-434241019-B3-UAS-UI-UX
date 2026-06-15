<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Masuk - Lembar Novel</title>

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

        .login-container {
            width: 100%;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            position: relative;
            background: linear-gradient(
                rgba(8, 2, 22, 0.45),
                rgba(8, 2, 22, 0.55)
            ),
            url("{{ asset('images/As15.png') }}");
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

        .logo {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .logo i {
            color: #B87BFF;
            font-size: 32px;
        }

        .logo span {
            font-family: 'Cormorant Garamond', serif;
            font-size: 2rem;
            font-weight: 600;
        }

        .content {
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

        .left-side {
        flex: 1;
        max-width: 600px;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        margin-bottom: 1px;
        }

        .welcome-title {
            font-family: 'Cormorant Garamond', serif;
            font-size: clamp(2rem, 3.9vw, 3.8rem);
            font-weight: 600;
            line-height: 1.15;
            color: white;
        }

        .welcome-title span {
            color: #D17CE3;
        }

        .welcome-text {
            margin-top: 24px;
            font-size: clamp(1rem, 1.5vw, 1.2rem);
            line-height: 1.7;
            color: #E9E9E9;
            font-weight: 300;
        }

        .login-card {
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
        }

        .card-title span {
            color: #D17CE3;
        }

        .card-subtitle {
            text-align: center;
            margin-top: 8px;
            color: #BDB7C8;
            font-size: .9rem;
            font-weight: 300;
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

        .input-box {
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

        .input-box:focus-within {
            border-color: #B87BFF;
        }

        .input-box i {
            color: #8C849D;
            font-size: 16px;
        }

        .input-box i.fa-eye-slash, 
        .input-box i.fa-eye {
            cursor: pointer;
            color: white;
            padding: 4px;
            transition: color .2s;
        }

        .input-box i.fa-eye-slash:hover,
        .input-box i.fa-eye:hover {
            color: #D17CE3;
        }

        .input-box input {
            flex: 1;
            background: transparent;
            border: none;
            outline: none;
            color: white;
            font-family: 'Poppins', sans-serif;
            font-size: 0.95rem;
        }

        .input-box input::placeholder {
            color: #8C849D;
        }

        .forgot {
            display: inline-block;
            margin-top: 12px;
            font-size: .85rem;
            color: #9A8BB8;
            text-decoration: none;
            transition: color .2s;
        }

        .forgot:hover {
            color: #D17CE3;
        }

        .login-btn {
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

        .login-btn:hover {
            opacity: 0.95;
            transform: translateY(-1px);
        }

        .register-link {
            text-align: center;
            margin-top: 24px;
            font-size: .85rem;
            color: #BDB7C8;
        }

        .register-link a {
            color: #D17CE3;
            text-decoration: none;
            font-weight: 500;
        }

        .register-link a:hover {
            text-decoration: underline;
        }

        .footer {
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

        .login-error{
            margin-top:15px;

            padding:12px;

            border-radius:10px;

            background:#F24A4A;

            color:#FFFFFF;

            font-size:.9rem;

            text-align:center;
        }

        
        @media (max-width: 1024px) {
            .top-bar {
                padding: 26px 30px;
            }
            .content {
                padding: 0 30px 60px 30px;
                gap: 40px;
            }
        }

        @media (max-width:992px){

        .top-bar{
            padding:26px 20px;
        }

        .content{
            flex-direction:column;

            justify-content:flex-start;
            align-items:center;

            gap:60px;

            padding:20px 20px 100px 20px;

            flex-grow:0;
        }

        .left-side{
            text-align:center;
            max-width:100%;
            margin-bottom:0;
        }

        .welcome-text{
            max-width:100%;
        }

        .login-card{
            width:100%;
            max-width:480px;
        }
        }

        @media (max-width: 576px) {
            .top-bar {
                padding: 20px 20px;
            }
            .logo span {
                font-size: 1.5rem;
            }
            .logo i {
                font-size: 26px;
            }
            .back-btn {
                font-size: 22px;
            }

            .login-card {
                padding: 30px 22px;
            }
            .card-title {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>

<div class="page-wrapper">

    <div class="login-container">

        <div class="top-bar">
            <a href="{{ url('/') }}" class="back-btn">
                <i class="fa-solid fa-arrow-left"></i>
            </a>
            <div class="logo">
                <i class="fa-solid fa-book-open"></i>
                <span>Lembar Novel</span>
            </div>
        </div>

        <div class="content">

            <div class="left-side">
                <h1 class="welcome-title">
                    Selamat Datang <span>Kembali!</span> 
                </h1>
                <p class="welcome-text">
                    Masuk untuk melanjutkan perjalananmu di dunia cerita favoritmu.
                </p>
            </div>

            <div class="login-card">

                <h2 class="card-title">
                    Masuk ke <span>Lembar Novel</span>
                </h2>

                <p class="card-subtitle">
                    Yuk, lanjutkan petualangan membacamu !!
                </p>

                @if(session('error'))
                <div class="login-error">
                    {{ session('error') }}
                </div>
                @endif

                <form action="{{ route('login.process') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label>Email</label>
                    <div class="input-box">
                        <i class="fa-regular fa-envelope"></i>
                        <input
                            type="email"
                            name="email"
                            placeholder="Masukkan email aktif"
                            required
                        >
                    </div>
                </div>

                <div class="form-group">
                    <label>Kata Sandi</label>
                    <div class="input-box">
                        <i class="fa-solid fa-lock"></i>
                        <input
                            type="password"
                            id="passwordInput"
                            name="password"
                            placeholder="Buat Kata Sandi"
                            required
                        >
                        <i class="fa-regular fa-eye-slash" id="togglePassword"></i>
                    </div>
                </div>

                    <a href="{{ route('lupa_password') }}" class="forgot">
                        Lupa kata sandi ?
                    </a>

                    <button type="submit" class="login-btn">
                        Masuk
                    </button>
                </form>

                <div class="register-link">
                    Belum Punya akun ? 
                    <a href="{{ route('daftar') }}">Daftar sekarang</a>
                </div>

            </div>

        </div>

        <div class="footer">
            &copy; Lembar Novel. All rights reserved.
        </div>

    </div>

</div>

<script>
    const togglePassword = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('passwordInput');

    togglePassword.addEventListener('click', function () {
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        
        this.classList.toggle('fa-eye-slash');
        this.classList.toggle('fa-eye');
    });
</script>

</body>
</html>