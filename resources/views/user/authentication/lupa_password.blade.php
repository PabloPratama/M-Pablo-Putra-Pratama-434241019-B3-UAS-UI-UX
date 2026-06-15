<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lupa Password - Lembar Novel</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        html,
        body{
            width:100%;
            height:100%;
            overflow-x:hidden;
        }

        body{
            font-family:'Poppins',sans-serif;
            background:#000;
            color:white;
        }

        *{
            -ms-overflow-style:none;
            scrollbar-width:none;
        }

        *::-webkit-scrollbar{
            display:none;
        }

        .page-wrapper{
            min-height:100vh;
            display:flex;
            flex-direction:column;
        }

        .hero-container{
            width:100%;
            flex-grow:1;
            display:flex;
            flex-direction:column;
            position:relative;

            background:
            linear-gradient(
                rgba(8,2,22,.45),
                rgba(8,2,22,.55)
            ),
            url("{{ asset('images/As15.png') }}");

            background-size:cover;
            background-position:center;
            background-repeat:no-repeat;

            padding-bottom:80px;
        }

        .top-bar{
            display:flex;
            align-items:center;
            gap:20px;
            padding:30px 30px;
            width:100%;
        }

        .back-btn{
            color:white;
            font-size:28px;
            text-decoration:none;
            transition:.2s;
        }

        .back-btn:hover{
            color:#D17CE3;
        }

        .logo-area{
            display:flex;
            align-items:center;
            gap:14px;
        }

        .logo-icon{
            color:#B87BFF;
            font-size:32px;
        }

        .logo-text{
            font-family:'Cormorant Garamond',serif;
            font-size:2rem;
            font-weight:600;
            color:white;
        }

        .content-wrapper{
            flex-grow:1;
            display:flex;
            align-items:flex-end;
            justify-content:space-between;

            gap:60px;

            padding:0 40px 60px 30px;

            max-width:1400px;
            width:100%;

            margin:0 auto;
        }

            .left-content{
            flex:1;
            max-width:600px;
            display:flex;
            flex-direction:column;
            justify-content:flex-end;
            margin-bottom:1px;
        }

        .hero-title{
            font-family:'Cormorant Garamond',serif;
            font-size:clamp(2.6rem,4.5vw,4.2rem);
            font-weight:600;
            line-height:1.15;
            color:white;
        }

        .accent{
            color:#D17CE3;
        }

        .hero-description{
            margin-top:24px;
            font-size:clamp(1rem,1.5vw,1.2rem);
            line-height:1.7;
            color:#E9E9E9;
            font-weight:300;
            max-width:560px;
        }

        .reset-card{
            width:480px;
            max-width:100%;

            background:#22123F;

            border:1px solid rgba(139,92,246,.35);

            border-radius:14px;

            padding:40px 36px;

            box-shadow:
            0 15px 45px rgba(12,4,32,.5);
        }

        .card-title{
            text-align:center;

            font-family:'Cormorant Garamond',serif;

            font-size:2.2rem;
            font-weight:600;

            color:white;
        }

        .card-subtitle{
            text-align:center;

            margin-top:8px;

            color:#BDB7C8;

            font-size:.9rem;
            font-weight:300;

            line-height:1.6;
        }

        .form-group{
            margin-top:28px;
        }

        .form-group label{
            display:block;

            margin-bottom:8px;

            font-size:.95rem;
            font-weight:500;

            color:#E9E9E9;
        }

        .input-wrapper{
            height:52px;

            background:#130626;

            border:1px solid #2F1755;

            border-radius:10px;

            display:flex;
            align-items:center;

            padding:0 16px;

            gap:12px;

            transition:.2s;
        }

        .input-wrapper:focus-within{
            border-color:#B87BFF;
        }

        .input-wrapper i{
            color:#8C849D;
            font-size:16px;
        }

        .input-wrapper input{
            flex:1;

            background:transparent;
            border:none;
            outline:none;

            color:white;

            font-family:'Poppins',sans-serif;
            font-size:.95rem;
        }

        .input-wrapper input::placeholder{
            color:#8C849D;
        }

        .reset-btn{
            width:100%;
            height:54px;

            border:none;
            border-radius:10px;

            margin-top:30px;

            cursor:pointer;

            color:white;

            font-size:1rem;
            font-weight:600;

            background:
            linear-gradient(
                90deg,
                #D17CE3,
                #B87BFF
            );

            transition:.2s;
        }

        .reset-btn:hover{
            opacity:.95;
            transform:translateY(-1px);
        }

        .back-login{
            display:block;

            text-align:center;

            margin-top:24px;

            color:#D17CE3;

            text-decoration:none;

            font-size:.9rem;
        }

        .back-login:hover{
            text-decoration:underline;
        }

                .footer-bar{
            position:absolute;

            left:0;
            right:0;
            bottom:0;

            height:50px;

            display:flex;
            align-items:center;
            justify-content:center;

            background:rgba(12,4,32,.85);

            color:#BDB7C8;

            font-size:.8rem;

            border-top:
            1px solid rgba(55,24,111,.3);
        }

        .footer-bar i{
            margin-right:6px;
        }

        @media (max-width:1024px){

            .top-bar{
                padding:26px 30px;
            }

            .content-wrapper{
                padding:0 30px 60px 30px;
                gap:40px;
            }
        }

@media (max-width:992px){

    .content-wrapper{
        flex-direction:column;

        justify-content:flex-start;
        align-items:center;

        gap:60px;

        padding:20px 20px 100px 20px;

        flex-grow:0;
    }

    .left-content{
        text-align:center;
        max-width:100%;
        margin-bottom:0;
    }

    .reset-card{
        width:100%;
        max-width:480px;
    }
}

        @media (max-width:576px){

            .top-bar{
                padding:20px;
            }

            .logo-text{
                font-size:1.5rem;
            }

            .logo-icon{
                font-size:26px;
            }

            .back-btn{
                font-size:22px;
            }

            .reset-card{
                padding:30px 22px;
            }

            .card-title{
                font-size:1.8rem;
            }
        }

    </style>
</head>
<body>

<div class="page-wrapper">

    <div class="hero-container">

        <div class="top-bar">

            <a href="{{ route('login') }}" class="back-btn">
                <i class="fa-solid fa-arrow-left"></i>
            </a>

            <div class="logo-area">

                <i class="fa-solid fa-book-open logo-icon"></i>

                <span class="logo-text">
                    Lembar Novel
                </span>

            </div>

        </div>

        <div class="content-wrapper">

            <div class="left-content">

                <h1 class="hero-title">
                    Lupa Kata <span class="accent">Sandi?</span>
                </h1>

                <p class="hero-description">
                    Jangan khawatir. Masukkan email yang
                    terdaftar dan kami akan mengirimkan
                    tautan untuk mengatur ulang kata sandi
                    akunmu.
                </p>

            </div>

            <div class="reset-card">

                <h2 class="card-title">
                    Reset <span class="accent">Password</span>
                </h2>

                <p class="card-subtitle">
                    Masukkan email akun yang terdaftar
                </p>

                <form>

                    <div class="form-group">

                        <label>Email</label>

                        <div class="input-wrapper">

                            <i class="fa-regular fa-envelope"></i>

                            <input
                                type="email"
                                placeholder="Masukkan email aktif"
                                required
                            >

                        </div>

                    </div>

                    <button
                        type="submit"
                        class="reset-btn"
                    >
                        Kirim Link Reset
                    </button>

                </form>

                <a
                    href="{{ route('login') }}"
                    class="back-login"
                >
                    Kembali ke halaman masuk
                </a>

            </div>

        </div>

        <div class="footer-bar">

            <i class="fa-regular fa-copyright"></i>

            Lembar Novel. All rights reserved

        </div>

    </div>

</div>

</body>
</html>