@extends('admin.layouts.app')

@section('title', 'Detail Artikel')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>
    body, h1, h2, p, span, div { font-family: 'Poppins', sans-serif !important; }
    .text-main-purple { color: #7C3AED; }
    .bg-main-purple { background-color: #7C3AED; }
    .border-main-purple { border-color: #7C3AED; }
    
    .btn-back-hover:hover { background-color: #7C3AED !important; }
    .btn-back-hover:hover svg { stroke: white !important; }
</style>

<div class="pt-4 pb-12 px-4 md:px-6 min-h-screen bg-gray-50">
    <div class="max-w-7xl mx-auto">
        <div class="flex items-center gap-4 mb-8">
            <a href="{{ route('admin.artikel.index') }}" class="btn-back-hover p-2 bg-white border border-gray-200 rounded-xl transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg>
            </a>
            <h1 class="text-xl md:text-2xl font-bold text-gray-800">Detail Artikel</h1>
        </div>

        <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">
            <div class="xl:col-span-2 space-y-6">
                <div class="bg-white p-6 md:p-8 rounded-2xl border border-gray-100 shadow-sm">
                    <img src="{{ asset('images/As3.png') }}" alt="Artikel" class="w-full h-64 md:h-96 object-cover rounded-2xl mb-6">
                    
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6">10 Novel Romantis Terbaik Sepanjang Masa</h2>
                    
                    <div class="mb-6">
                        <h3 class="text-lg font-bold text-gray-800 mb-3">Ringkasan Artikel</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Daftar rekomendasi novel romantis yang wajib kamu baca setidaknya sekali dalam hidupmu. Membaca novel romantis bisa menjadi pelarian yang menyenangkan dari rutinitas sehari-hari. Berikut adalah 10 novel romantis terbaik yang akan membuatmu baper dan susah move on!
                        </p>
                    </div>

                    <hr class="border-gray-100 mb-6">

                    <div>
                        <h3 class="text-lg font-bold text-gray-800 mb-3">Konten Artikel</h3>
                        <div class="text-gray-600 text-sm leading-relaxed space-y-4">
                            <p>1. Dilan 1990 - Pidi Baiq</p>
                            <p>2. Dear Nathan - Erisca Febriani</p>
                            <p>3. Mariposa - Luluk HF</p>
                            <p>4. Critical Eleven - Ika Natassa</p>
                            <p>5. Twivortiare - Ika Natassa</p>
                            <p class="mt-4">Masih banyak novel romantis lainnya yang tidak kalah menarik. Selamat membaca!</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm space-y-6">
                    <div>
                        <p class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-1">Status</p>
                        <span class="inline-block px-3 py-1 text-xs font-bold bg-green-100 text-green-700" style="border-radius: 5px;">Published</span>
                    </div>
                    
                    <div>
                        <p class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-1">Penulis</p>
                        <p class="text-sm font-semibold text-gray-800">Admin</p>
                    </div>

                    <div>
                        <p class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-1">Tanggal Publish</p>
                        <p class="text-sm font-semibold text-gray-800">28 Mei 2024, 10:30 WIB</p>
                    </div>

                    <div>
                        <p class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-1">Terakhir Diupdate</p>
                        <p class="text-sm font-semibold text-gray-800">28 Mei 2024, 10:30 WIB</p>
                    </div>
                    
                    <div class="pt-4 border-t border-gray-100">
                        <div class="flex items-center gap-6">
                            <div class="flex items-center gap-2">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                <span class="text-sm font-semibold text-gray-700">1.248</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection