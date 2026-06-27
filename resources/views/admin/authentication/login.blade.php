<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - LembarNovel</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --primary-color: #7C3AED;     
            --primary-hover: #6D28D9;      
            --text-main: #1F2937;          
            --text-muted: #6B7280;         
            --bg-body: #F3F4F6;            
            --bg-card: #FFFFFF;            
            --border-color: #E5E7EB;       
            --purple-glow: #F3E8FF;        
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: var(--bg-body);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
        }

        .login-wrapper {
            margin: auto;
            width: 100%;
            max-width: 1000px;
            background-color: var(--bg-card);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
            display: flex;
            min-height: 550px;
        }

        .banner-side {
            flex: 1;
            background: linear-gradient(135deg, #8B5CF6 0%, var(--primary-color) 100%);
            padding: 45px;
            color: #FFFFFF;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            gap: 35px;
            position: relative;
            overflow: hidden;
        }

        .banner-side::before {
            content: '';
            position: absolute;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            top: -100px;
            right: -100px;
        }

        .banner-side::after {
            content: '';
            position: absolute;
            width: 200px;
            height: 200px;
            background: rgba(255, 255, 255, 0.06);
            border-radius: 50%;
            bottom: -50px;
            left: -50px;
        }

        .brand-header {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 8px;
            z-index: 1;
        }

        .brand-title-container {
            display: flex;
            align-items: center; 
            gap: 12px;
        }

        .brand-title-container i {
            font-size: 28px;
            line-height: 1;
            transform: translateY(-2px);
        }

        .brand-header h1 {
            font-size: 26px;
            font-weight: 600;
            line-height: 1;
        }

        .brand-tag {
            background: rgba(255, 255, 255, 0.2);
            padding: 4px 12px;
            border-radius: 6px;
            font-size: 11px;
            font-weight: 400;
            display: inline-block;
            margin-left: 40px; 
        }

        .banner-middle {
            z-index: 1;
        }

        .banner-middle h2 {
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 8px;
            line-height: 1.3;
        }

        .banner-middle p {
            font-size: 14px;
            color: rgba(255, 255, 255, 0.85);
            font-weight: 300;
            line-height: 1.5;
        }

        .features-list {
            display: flex;
            flex-direction: column;
            gap: 20px;
            z-index: 1;
        }

        .feature-item {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .feature-icon {
            width: 38px;
            height: 38px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            font-size: 14px;
        }

        .feature-text {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .feature-text h4 {
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 2px;
            line-height: 1.2;
        }

        .feature-text p {
            font-size: 12px;
            color: rgba(255, 255, 255, 0.8);
            font-weight: 300;
            line-height: 1.3;
        }

        .form-side {
            flex: 1;
            padding: 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .form-header {
            margin-bottom: 30px;
        }

        .form-header h3 {
            font-size: 24px;
            font-weight: 600;
            color: var(--text-main);
            margin-bottom: 6px;
        }

        .form-header p {
            font-size: 14px;
            color: var(--text-muted);
        }

        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            font-weight: 500;
            color: var(--text-main);
            margin-bottom: 8px;
        }

        .input-box {
            position: relative;
            display: flex;
            align-items: center;
        }

        .input-box i.input-icon {
            position: absolute;
            left: 16px;
            color: var(--text-muted);
            font-size: 16px;
        }

        .input-box input {
            width: 100%;
            padding: 12px 16px 12px 48px;
            border: 1px solid var(--border-color);
            border-radius: 10px;
            font-size: 14px;
            color: var(--text-main);
            outline: none;
            transition: all 0.3s ease;
        }

        .input-box input:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(124, 58, 237, 0.1);
        }

        .toggle-password {
            position: absolute;
            right: 16px;
            color: var(--text-muted);
            cursor: pointer;
            font-size: 16px;
            transition: color 0.3s;
        }

        .toggle-password:hover {
            color: var(--primary-color);
        }

        .form-options {
            display: flex;
            justify-content: flex-start;
            margin-bottom: 25px;
        }

        .forgot-link {
            font-size: 13px;
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }

        .forgot-link:hover {
            color: var(--primary-hover);
            text-decoration: underline;
        }

        .btn-submit {
            width: 100%;
            padding: 14px;
            background-color: var(--primary-color);
            color: #FFFFFF;
            border: none;
            border-radius: 10px;
            font-size: 15px;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s ease;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 8px;
        }

        .btn-submit:hover {
            background-color: var(--primary-hover);
        }

        .login-footer {
            font-size: 12px;
            color: var(--text-muted);
            text-align: center;
            width: 100%;
            margin-top: 0; 
            transform: translateY(-25px); 
        }

        /* Responsivitas */
        @media (max-width: 992px) {
            .login-wrapper { max-width: 800px; }
            .banner-side { padding: 35px; }
            .form-side { padding: 40px; }
            .banner-middle h2 { font-size: 24px; }
        }

        @media (max-width: 768px) {
            .login-wrapper { max-width: 550px; flex-direction: column; min-height: auto; }
            .banner-side { padding: 30px; flex: none; width: 100%; }
            .brand-tag { margin-left: 40px; }
            .features-list { display: none; }
            .form-side { padding: 40px 30px; width: 100%; }
            .login-footer { transform: translateY(-10px); } 
        }

        @media (max-width: 480px) {
            body { padding: 12px; }
            .login-wrapper { border-radius: 15px; }
            .banner-side { display: none; }
            .form-side { padding: 30px 20px; }
            .form-header h3 { font-size: 20px; }
            .form-header p, .form-group label, .input-box input, .btn-submit { font-size: 13px; }
            .login-footer { transform: translateY(0); } 
        }
    </style>
</head>
<body>

    <div class="login-wrapper">
        
        <div class="banner-side">
            <div class="brand-header">
                <div class="brand-title-container">
                    <i class="fa-solid fa-book-open"></i>
                    <h1>Lembar Novel</h1>
                </div>
                <span class="brand-tag">Admin Panel</span>
            </div>

            <div class="banner-middle">
                <h2>Selamat Datang Kembali!</h2>
                <p>Silakan masuk untuk mengakses dashboard admin Lembar Novel.</p>
            </div>

            <div class="features-list">
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <div class="feature-text">
                        <h4>Keamanan Terjamin</h4>
                        <p>Akses admin dilindungi sistem keamanan berlapis.</p>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fa-solid fa-chart-simple"></i>
                    </div>
                    <div class="feature-text">
                        <h4>Kelola Konten</h4>
                        <p>Kelola novel, pengguna, transaksi, dan konten lainnya dengan mudah.</p>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <div class="feature-text">
                        <h4>Monitoring Real-time</h4>
                        <p>Pantau aktivitas platform secara real-time dan akurat.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-side">
            <div class="form-header">
                <h3>Login Admin</h3>
                <p>Masukkan email dan password untuk masuk</p>
            </div>

            <form action="#" method="POST">
                <div class="form-group">
                    <label for="email">Email</label>
                    <div class="input-box">
                        <i class="fa-regular fa-envelope input-icon"></i>
                        <input type="email" id="email" name="email" placeholder="Masukkan email admin" required autocomplete="email">
                    </div>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="input-box">
                        <i class="fa-solid fa-lock input-icon"></i>
                        <input type="password" id="password" name="password" placeholder="Masukkan password" required>
                        <i class="fa-regular fa-eye toggle-password" id="eyeIcon"></i>
                    </div>
                </div>

                <div class="form-options">
                <a href="{{ route('admin.lupa_password') }}" class="forgot-link">Lupa password?</a>
                </div>

                <button type="button" id="btn-login" class="btn-submit">
                    Masuk <i class="fa-solid fa-arrow-right-to-bracket"></i>
                </button>
            </form>
        </div>

    </div>

    <div class="login-footer">
        &copy; 2026 LembarNovel Admin Panel. All rights reserved.
    </div>

    <script>
        const passwordInput = document.getElementById('password');
        const eyeIcon = document.getElementById('eyeIcon');
        const loginBtn = document.getElementById('btn-login');

        // Fitur Toggle Show/Hide Password 
        eyeIcon.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            
            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
        });

        // LOGIKA SIMULASI LOGIN DUMMY ADMIN
        loginBtn.addEventListener('click', function() {
            const inputEmail = document.getElementById('email').value;
            const inputPassword = document.getElementById('password').value;

            // Kredensial Dummy yang Ditentukan
            const dummyEmail = "admin@lembarnovel.com";
            const dummyPassword = "admin123";

            if (inputEmail === dummyEmail && inputPassword === dummyPassword) {
                alert('Login Berhasil! Selamat datang, Admin.');
                
                // Menyimpan status login di browser local storage
                localStorage.setItem('isAdminLoggedIn', 'true'); 
                
                // Berpindah ke dashboard admin menggunakan route Laravel 
                window.location.href = "{{ route('admin.dashboard') }}"; 
            } else {
                alert('Email atau Password salah! Anda tidak bisa masuk ke dashboard.');
            }
        });
    </script>
</body>
</html>