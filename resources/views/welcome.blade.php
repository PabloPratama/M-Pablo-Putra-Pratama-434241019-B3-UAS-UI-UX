@extends('user.layouts.app')

@section('title', 'Pengujian Template Lembar Novel')

@section('content')
<div class="flex flex-col items-center justify-center min-h-[50vh] border border-dashed border-[#37186F] rounded-2xl p-8 bg-[#0C0420]/40 text-center">
    <h2 class="font-cormorant text-4xl sm:text-5xl font-bold text-white mb-4">Template Berhasil Dimuat!</h2>
    <p class="font-poppins text-sm sm:text-base text-gray-400 max-w-md mb-6">
        Ini adalah area konten tengah (`@yield('content')`). Kamu bisa cek responsivitas navbar, footer, background gradasi, dan tombol di bawah ini.
    </p>
    <button class="btn-gradient font-poppins text-sm font-medium px-6 py-3 rounded-full shadow-lg transition-transform active:scale-95">
        Contoh Tombol Gradasi
    </button>
</div>
@endsection