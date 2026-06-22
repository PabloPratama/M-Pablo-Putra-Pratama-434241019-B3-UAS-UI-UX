@extends('user.layouts.app')

@section('title', 'Edit Profil')

@section('content')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<style>
    .font-cormorant {
        font-family: 'Cormorant Garamond', serif;
    }
    .font-poppins {
        font-family: 'Poppins', sans-serif;
    }
    
    .title-edit-profil {
        font-family: 'Cormorant Garamond', serif;
        font-size: 58px;
        font-weight: 700;
        margin-bottom: 8px;
        color: #FFFFFF;
        line-height: 1.1;
    }

    .subtitle-edit-profil {
        font-size: 18px;
        color: #9CA3AF;
        margin-bottom: 16px;
    }

    .card-utama {
        background-color: #22123F;
        border: 1px solid rgba(139, 92, 246, 0.30); 
        box-shadow: 0px 10px 40px 0px rgba(124, 58, 237, 0.30); 
        border-radius: 12px;
    }

    .form-input-custom {
        background-color: #0C0420;
        border: 1px solid #2B0F52;
        color: #FFFFFF;
    }

    .btn-gradient-simpan {
        background: linear-gradient(to right, #D17CE3, #B87BFF);
        color: #FFFFFF;
        transition: opacity 0.2s;
    }
    .btn-gradient-simpan:hover {
        opacity: 0.9;
    }

    .btn-batal-custom {
        background: transparent;
        border: 1px solid #D17CE3;
        color: #D17CE3;
        transition: background 0.2s;
    }
    .btn-batal-custom:hover {
        background: rgba(209, 124, 227, 0.1); 
    }

    .btn-ubah-foto {
        background: transparent;
        border: 1px solid #D17CE3;
        color: #D17CE3;
        font-size: 14px;
        transition: background 0.2s;
    }
    .btn-ubah-foto:hover {
        background: rgba(209, 124, 227, 0.1);
    }

    @media (max-width: 768px) {
        .title-edit-profil {
            font-size: 42px;
        }
        .subtitle-edit-profil {
            font-size: 16px;
        }
    }

    .custom-toast {
        position: fixed;
        top: -100px;
        left: 50%;
        transform: translateX(-50%);
        background-color: #FFE600;
        color: #92400E;
        padding: 12px 24px;
        border-radius: 8px;
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.3);
        display: flex;
        align-items: center;
        gap: 10px;
        z-index: 9999;
        font-size: 14px;
        font-weight: 500;
        transition: top 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }
    .custom-toast.show {
        top: 24px;
    }
</style>

<div id="toast-warning" class="custom-toast font-poppins">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" style="width: 20px; height: 20px; color: #D97706;">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
    </svg>
    <span>lengkapi data yang ingin di ubah</span>
</div>

<div class="container mx-auto px-4 pt-4 pb-16 font-poppins min-h-screen flex flex-col justify-start max-w-6xl">
    
    <div class="text-left mb-4">
        <h1 class="title-edit-profil">Edit Profil</h1>
        <p class="subtitle-edit-profil">perbarui informasi profil kamu.</p>
    </div>

    <form id="edit-profile-form" action="#" method="POST" enctype="multipart/form-data" class="card-utama p-6 md:p-10 text-white">
        @csrf

        <div class="flex flex-col md:flex-row items-center md:items-start gap-8 md:gap-12">
            
            <div class="flex flex-col items-center flex-shrink-0">
                <div class="relative w-40 h-40 md:w-44 md:h-44 rounded-full overflow-hidden border-2 border-transparent mb-4">
                    <img id="avatar-preview" src="{{ asset('images/As33.jpg') }}" alt="Foto Profil" class="w-full h-full object-cover">
                </div>
                
                <input type="file" id="foto-input" name="foto" accept="image/*" class="hidden" onchange="previewImage(event)">
                
                <button type="button" onclick="document.getElementById('foto-input').click()" class="btn-ubah-foto px-6 py-2 rounded-lg flex items-center gap-2 font-medium">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5" />
                    </svg>
                    Ubah Foto
                </button>
            </div>

            <div class="w-full flex flex-col justify-center">
                <h2 class="text-xl md:text-2xl font-semibold mb-6 tracking-wide text-left">Informasi Pribadi</h2>
                
                <div class="mb-5 w-full text-left">
                    <label for="name" class="block text-sm font-medium text-gray-300 mb-2">Nama Lengkap</label>
                    <input type="text" id="name" name="name" value="Leo Argantara" class="form-input-custom w-full px-4 py-3 rounded-lg focus:outline-none focus:border-purple-500 text-base">
                    <span class="text-xs text-gray-500 mt-1 block">Nama ini akan ditampilkan ke publik.</span>
                </div>

                <div class="mb-6 w-full text-left">
                    <label for="email" class="block text-sm font-medium text-gray-300 mb-2">Email</label>
                    <div class="relative w-full">
                        <input type="email" id="email" value="leoarganta@gmail.com" class="form-input-custom w-full px-4 py-3 rounded-lg text-base opacity-70 cursor-not-allowed pr-12" disabled>
                        <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                            </svg>
                        </div>
                    </div>
                    <span class="text-xs text-gray-500 mt-1 block">Email tidak dapat di ubah.</span>
                </div>
            </div>

        </div>

        <div class="flex flex-col sm:flex-row justify-end items-center gap-4 mt-8 pt-4 border-t border-transparent">
            <a href="{{ route('profil') }}" class="btn-batal-custom w-full sm:w-auto px-8 py-2.5 rounded-lg font-medium text-center text-sm order-2 sm:order-1">
                Batal
            </a>
            <button type="submit" id="submit-btn" class="btn-gradient-simpan w-full sm:w-auto px-6 py-2.5 rounded-lg font-medium text-center text-sm order-1 sm:order-2">
                Simpan Perubahan
            </button>
        </div>
    </form>
</div>

<script>
    // Menyimpan base64 string gambar yang dipilih secara temporer
    let selectedImageBase64 = null;

    // Load data lama dari localStorage saat halaman Edit dibuka (jika ada)
    document.addEventListener("DOMContentLoaded", function() {
        const savedName = localStorage.getItem('profile_name');
        const savedAvatar = localStorage.getItem('profile_avatar');

        if (savedName) {
            document.getElementById('name').value = savedName;
        }
        if (savedAvatar) {
            document.getElementById('avatar-preview').src = savedAvatar;
            selectedImageBase64 = savedAvatar; // Pertahankan gambar lama jika tidak diganti
        }
    });

    function previewImage(event) {
        const reader = new FileReader();
        reader.onload = function(){
            const output = document.getElementById('avatar-preview');
            output.src = reader.result;
            selectedImageBase64 = reader.result; // Ambil string base64 untuk disimpan
        };
        if(event.target.files[0]) {
            reader.readAsDataURL(event.target.files[0]);
        }
    }

    // Validasi dan simpan data ke localStorage sebelum pindah halaman
    document.getElementById('edit-profile-form').addEventListener('submit', function(event) {
        event.preventDefault(); // Stop form submit bawaan HTML

        const nameInput = document.getElementById('name').value.trim();
        const toast = document.getElementById('toast-warning');

        if (nameInput === "") {
            // Tampilkan Toast jika nama kosong
            toast.classList.add('show');
            setTimeout(function() {
                toast.classList.remove('show');
            }, 3000);
        } else {
            // Simpan data ke localStorage browser
            localStorage.setItem('profile_name', nameInput);
            if (selectedImageBase64) {
                localStorage.setItem('profile_avatar', selectedImageBase64);
            }

            // Redirect ke halaman profil lewat penamaan Route
            window.location.href = "{{ route('profil') }}";
        }
    });
</script>
@endsection