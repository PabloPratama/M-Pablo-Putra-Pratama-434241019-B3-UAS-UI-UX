@extends('admin.layouts.app')

@section('title', 'Detail Transaksi')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>
    body, h1, h2, h3, h4, p, span, div { font-family: 'Poppins', sans-serif !important; }
    
    .status-berhasil { 
        background-color: #DEF7EC !important; 
        color: #03543F !important; 
    }
    
    .status-gagal { 
        background-color: #FDE8E8 !important; 
        color: #9B1C1C !important; 
    }

    .btn-back-hover:hover { background-color: #7C3AED !important; border-color: #7C3AED !important;}
    .btn-back-hover:hover svg { stroke: white !important; }
</style>

<div class="py-6 px-4 md:px-6 min-h-screen bg-gray-50">
    <div class="max-w-7xl mx-auto">
        <div class="flex items-center gap-4 mb-8">
            <a href="{{ route('admin.transaksi.index') }}" class="btn-back-hover p-2 bg-white border border-gray-200 rounded-xl transition-all shadow-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7" /></svg>
            </a>
            <h1 class="text-xl md:text-2xl font-bold text-gray-800">Detail Transaksi</h1>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            
            <div class="space-y-6">
                
                <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
                    <h3 class="text-lg font-bold text-gray-800 mb-5">Informasi Transaksi</h3>
                    <div class="space-y-4 text-sm">
                        <div class="flex justify-between items-center">
                            <span class="text-gray-500">ID Transaksi</span>
                            <span id="dt-id-trx" class="font-semibold text-gray-800">-</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-500">Tanggal</span>
                            <span id="dt-tanggal" class="font-semibold text-gray-800">-</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-500">Status</span>
                            <span id="dt-status" class="px-3 py-1 rounded-md text-xs font-bold">-</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-500">Metode Pembayaran</span>
                            <div class="text-right">
                                <p id="dt-bank" class="font-semibold text-gray-800">-</p>
                                <p id="dt-va-short" class="text-xs text-gray-500 mt-0.5">-</p>
                            </div>
                        </div>
                        <hr class="border-gray-100 my-2">
                        <div class="flex justify-between items-center">
                            <span class="text-gray-500">Total Pembayaran</span>
                            <span id="dt-total-pembayaran" class="font-bold text-gray-800">-</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
                    <h3 class="text-lg font-bold text-gray-800 mb-5">Detail Produk</h3>
                    <div class="flex items-start gap-4">
                        <img id="dt-img" src="" alt="Cover" class="w-16 h-20 rounded-lg object-cover border border-gray-100 flex-shrink-0 bg-gray-100">
                        <div class="flex-1 min-w-0">
                            <div class="flex flex-col xl:flex-row justify-between items-start gap-3 xl:gap-0">
                                <div class="flex-1 pr-2">
                                    <h4 id="dt-judul" class="font-bold text-gray-800 text-base break-words">-</h4>
                                    <p id="dt-penulis" class="text-sm text-gray-500 mt-1">Penulis: -</p>
                                    <p id="dt-bab" class="text-sm text-gray-500 mt-0.5">Jumlah Bab: -</p>
                                </div>
                                <div class="text-left xl:text-right mt-1 xl:mt-0 whitespace-nowrap">
                                    <p class="text-sm text-gray-500 font-semibold mb-1">Harga</p>
                                    <p id="dt-harga" class="font-bold text-gray-800 text-lg">-</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

            <div class="space-y-6">
                
                <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
                    <h3 class="text-lg font-bold text-gray-800 mb-5">Informasi Pengguna</h3>
                    
                    <div class="flex items-center gap-4 mb-6">
                        <div id="dt-bg-inisial" class="w-12 h-12 rounded-full text-white flex items-center justify-center text-lg font-bold flex-shrink-0 bg-gray-300">
                            -
                        </div>
                        <div>
                            <h4 id="dt-nama" class="font-bold text-gray-800 text-base">-</h4>
                            <p id="dt-email" class="text-sm text-gray-500 mt-0.5">-</p>
                        </div>
                    </div>

                    <div class="space-y-4 text-sm">
                        <div class="flex justify-between items-center">
                            <span class="text-gray-500">Username</span>
                            <span id="dt-username" class="font-semibold text-gray-800">-</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-500">Bergabung Sejak</span>
                            <span id="dt-bergabung" class="font-semibold text-gray-800">-</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-500">Terakhir Aktif</span>
                            <span id="dt-aktif" class="font-semibold text-gray-800">-</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
                    <h3 class="text-lg font-bold text-gray-800 mb-5">Informasi Pembayaran</h3>
                    <div class="space-y-4 text-sm">
                        <div class="flex justify-between items-start">
                            <span class="text-gray-500 w-1/3">Nama Bank</span>
                            <span id="dt-nama-bank" class="font-semibold text-gray-800 w-2/3 text-right">-</span>
                        </div>
                        <div class="flex justify-between items-start">
                            <span class="text-gray-500 w-1/3">No. Virtual Account</span>
                            <span id="dt-va-full" class="font-semibold text-gray-800 w-2/3 text-right">-</span>
                        </div>
                        <div class="flex justify-between items-start">
                            <span class="text-gray-500 w-1/3">Atas Nama</span>
                            <span id="dt-atas-nama" class="font-semibold text-gray-800 w-2/3 text-right">-</span>
                        </div>
                        <div class="flex justify-between items-start">
                            <span class="text-gray-500 w-1/3">Dibayar Pada</span>
                            <span id="dt-dibayar" class="font-semibold text-gray-800 w-2/3 text-right">-</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const trxDataStr = localStorage.getItem('selected_trx');
        
        if (trxDataStr) {
            const trx = JSON.parse(trxDataStr);
            const fullDate = `${trx.tanggal}, ${trx.waktu}`;

            // --- Info Transaksi ---
            document.getElementById('dt-id-trx').innerText = trx.id_transaksi;
            document.getElementById('dt-tanggal').innerText = fullDate;
            
            const statusEl = document.getElementById('dt-status');
            statusEl.innerText = trx.status;
            statusEl.className = `px-3 py-1 rounded-md text-xs font-bold ${trx.status === 'Berhasil' ? 'status-berhasil' : 'status-gagal'}`;
            
            document.getElementById('dt-bank').innerText = trx.bank;
            document.getElementById('dt-va-short').innerText = trx.va;
            document.getElementById('dt-total-pembayaran').innerText = trx.jumlah;

            // --- Info Produk ---
            document.getElementById('dt-img').src = trx.novel_image;
            document.getElementById('dt-judul').innerText = trx.novel_judul;
            document.getElementById('dt-penulis').innerText = `Penulis: ${trx.novel_penulis}`;
            document.getElementById('dt-bab').innerText = `Jumlah Bab: ${trx.novel_bab}`;
            document.getElementById('dt-harga').innerText = trx.jumlah;

            // --- Info Pengguna ---
            document.getElementById('dt-bg-inisial').innerText = trx.inisial;
            document.getElementById('dt-bg-inisial').className = `w-12 h-12 rounded-full text-white flex items-center justify-center text-lg font-bold flex-shrink-0 ${trx.bg_inisial}`;
            document.getElementById('dt-nama').innerText = trx.nama;
            document.getElementById('dt-email').innerText = trx.email;
            document.getElementById('dt-username').innerText = trx.username;
            
            document.getElementById('dt-bergabung').innerText = fullDate; 
            document.getElementById('dt-aktif').innerText = fullDate;

            // --- Info Pembayaran ---
            const bankName = trx.bank.replace(' Virtual Account', '');
            document.getElementById('dt-nama-bank').innerText = bankName;
            document.getElementById('dt-va-full').innerText = trx.va;
            document.getElementById('dt-atas-nama').innerText = trx.nama;
            document.getElementById('dt-dibayar').innerText = trx.status === 'Berhasil' ? fullDate : '-';
        }
    });
</script>
@endsection