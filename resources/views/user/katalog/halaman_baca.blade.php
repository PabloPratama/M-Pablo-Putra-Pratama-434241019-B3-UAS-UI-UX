@extends('user.layouts.app')

@section('title', 'Halaman_Baca')

@section('content')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;1,400&display=swap');

    .font-cormorant {
        font-family: 'Cormorant Garamond', serif;
    }
    .font-poppins {
        font-family: 'Poppins', sans-serif;
    }

    .custom-read-card {
        background-color: #22123F;
        border: 1px solid rgba(139, 92, 246, 0.3); 
        box-shadow: 0px 10px 40px 0px rgba(124, 58, 237, 0.3); 
        border-radius: 12px;
        width: 100%;
    }

    .icon-arrow-left {
        display: inline-block;
        position: relative;
        width: 14px;
        height: 2px;
        background-color: #9CA3AF;
        margin-right: 8px;
        vertical-align: middle;
    }
    .icon-arrow-left::before {
        content: '';
        position: absolute;
        left: 0;
        top: -3px;
        width: 8px;
        height: 8px;
        border-left: 2px solid #9CA3AF;
        border-bottom: 2px solid #9CA3AF;
        transform: rotate(45deg);
    }

    .icon-arrow-right {
        display: inline-block;
        position: relative;
        width: 14px;
        height: 2px;
        background-color: #FFFFFF; 
        margin-left: 8px;
        vertical-align: middle;
        transition: background-color 0.2s ease;
    }
    .icon-arrow-right::before {
        content: '';
        position: absolute;
        right: 0;
        top: -3px;
        width: 8px;
        height: 8px;
        border-right: 2px solid #FFFFFF;
        border-top: 2px solid #FFFFFF;
        transform: rotate(45deg);
        transition: border-color 0.2s ease;
    }

    .icon-list {
        display: inline-block;
        width: 16px;
        height: 12px;
        border-top: 2px solid #D17CE3;
        border-bottom: 2px solid #D17CE3;
        position: relative;
        margin-right: 8px;
        vertical-align: middle;
    }
    .icon-list::before {
        content: '';
        position: absolute;
        top: 3px;
        left: 0;
        width: 16px;
        height: 2px;
        background-color: #D17CE3;
    }

    .nav-prev {
        color: #9CA3AF; 
        cursor: pointer;
    }

    .nav-list {
        color: #D17CE3;
        cursor: pointer;
        transition: opacity 0.2s ease;
    }
    .nav-list:hover {
        opacity: 0.8;
    }

    .nav-next {
        color: #FFFFFF;
        cursor: pointer;
        transition: color 0.2s ease;
    }
    .nav-next:hover {
        color: #D17CE3; 
    }
    .nav-next:hover .icon-arrow-right {
        background-color: #D17CE3;
    }
    .nav-next:hover .icon-arrow-right::before {
        border-color: #D17CE3;
    }
</style>

<div class="py-6 md:py-12 px-4 flex justify-center items-center font-poppins text-white">
    <div class="max-w-7xl custom-read-card p-6 sm:p-10 md:p-16">
        
        <h1 class="font-cormorant text-3xl sm:text-4xl md:text-5xl text-center font-bold tracking-wide mb-8 md:mb-12">
            Bab 1 - Pertemuan yang Tidak Diinginkan
        </h1>

        <div class="text-center mb-10 md:mb-16">
            <p class="font-poppins text-base sm:text-lg md:text-xl text-gray-200 max-w-3xl mx-auto leading-relaxed px-4">
                “Terkadang, takdir mempertemukan dua jiwa dengan cara yang paling menyakitkan.”
            </p>
            <div class="text-gray-500 tracking-widest mt-4">---</div>
        </div>

        <div class="font-poppins text-base sm:text-lg md:text-xl text-gray-200 space-y-6 sm:space-y-8 leading-relaxed text-justify max-w-5xl mx-auto mb-16 opacity-95">
            <p>Hujan turun deras malam itu.</p>
            
            <p>Aurelia berjalan cepat menyusuri trotoar, berusaha menghindari genangan air yang hampir menelannya. Hari yang melelahkan di kantor terasa semakin berat ketika ia harus lembur hingga larut malam.</p>
            
            <p>"Sial!" gumamnya pelan, saat seseorang menabraknya dari belakang.</p>
            
            <p>Tubuhnya oleng, hampir terjatuh jika bukan karena tangan kuat menahannya.</p>
            
            <p>Aurelia menoleh dengan kesal, namun ekspresinya langsung membeku saat bertemu sepasang mata gelap yang menatapnya dingin.</p>
            
            <p>Pria itu tinggi, berjas hitam, dengan wajah tampan yang sulit diabaikan, Namun, ekspresinya dingin dan penuh jarak.</p>
            
            <p>"Jalan lihat-lihat." suaranya rendah, tegas.</p>
            
            <p>Aurelia mengerutkan keningnya, "Maaf, tapi kamu juga bisa lihat ke depan."</p>
            
            <p>Pria itu menatapnya sejenak, lalu menghela napas. "Dasar bodoh."</p>
            
            <p>Sebelum Aurelia sempat membalas, pria itu sudah berbalik dan berjalan pergi, membiarkan Aurelia berdiri dengan jantung berdebar.</p>
            
            <p>Siapa pria tadi? Dan... mengapa pertemuan ini terasa begitu aneh?</p>
        </div>
        
    <div class="w-full grid grid-cols-3 gap-8 items-center text-[10px] sm:text-lg font-medium pt-4">

    <a href="javascript:void(0);" class="nav-prev flex items-center justify-start whitespace-nowrap">
        <span class="icon-arrow-left"></span>
        Bab Sebelumnya
    </a>

    <a href="{{ route('katalog.detail') }}" class="nav-list flex items-center justify-center whitespace-nowrap">
        <span class="icon-list"></span>
        Daftar Bab
    </a>

    <a href="javascript:void(0);" class="nav-next flex items-center justify-end whitespace-nowrap">
        Bab Selanjutnya
        <span class="icon-arrow-right"></span>
    </a>

</div>

    </div>
</div>
@endsection