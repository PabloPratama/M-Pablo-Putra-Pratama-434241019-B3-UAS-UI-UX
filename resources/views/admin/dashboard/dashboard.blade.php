@extends('admin.layouts.app')

@section('title', 'Dashboard')

<script>
    if (localStorage.getItem('isAdminLoggedIn') !== 'true') {
        // Sembunyikan body secara instan agar tidak terjadi 'flicker' konten ilegal
        document.documentElement.style.display = 'none'; 
        alert('Akses Ditolak! Anda harus login terlebih dahulu untuk mengakses dashboard.');
        window.location.href = "{{ route('admin.login') }}";
    }
</script>

<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>
    body, div, table, h1, h2, h3, h4, p, span, select, button {
        font-family: 'Plus Jakarta Sans', sans-serif !important;
    }

    .custom-select {
        appearance: none;
        background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%237C3AED' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: right 0.75rem center;
        background-size: 1em;
        padding-right: 2.5rem;
    }
</style>

@section('content')
<div class="pt-0 pb-4 md:pt-0 md:pb-6 px-4 md:px-6 min-h-screen bg-gray-50 min-w-full block">
    
    <div class="mb-6">
        <h1 class="text-lg sm:text-xl md:text-2xl font-bold text-gray-800 flex items-center gap-2 flex-wrap">
            Selamat datang, Admin Utama! 👋
        </h1>
        <p class="text-xs sm:text-sm text-gray-500 mt-1">Berikut ringkasan aktivitas Lembar Novel hari ini.</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 mb-6">
        <div class="bg-white p-4 rounded-xl shadow-sm border border-gray-100 flex flex-col justify-between h-full">
            <div>
                <div class="flex items-center justify-between gap-2">
                    <span class="text-xs font-medium text-gray-400 truncate">Total Novel</span>
                    <span class="p-2 rounded-lg bg-purple-50 text-purple-600 flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </span>
                </div>
                <h3 class="text-xl md:text-2xl font-bold text-gray-800 mt-2">324</h3>
            </div>
            <span class="text-xs font-semibold text-green-500 mt-2 block break-words">↑ +12 <span class="text-gray-400 font-normal">dari kemarin</span></span>
        </div>

        <div class="bg-white p-4 rounded-xl shadow-sm border border-gray-100 flex flex-col justify-between h-full">
            <div>
                <div class="flex items-center justify-between gap-2">
                    <span class="text-xs font-medium text-gray-400 truncate">Total Artikel</span>
                    <span class="p-2 rounded-lg bg-purple-50 text-purple-600 flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </span>
                </div>
                <h3 class="text-xl md:text-2xl font-bold text-gray-800 mt-2">48</h3>
            </div>
            <span class="text-xs font-semibold text-green-500 mt-2 block break-words">↑ +5 <span class="text-gray-400 font-normal">dari kemarin</span></span>
        </div>

        <div class="bg-white p-4 rounded-xl shadow-sm border border-gray-100 flex flex-col justify-between h-full">
            <div>
                <div class="flex items-center justify-between gap-2">
                    <span class="text-xs font-medium text-gray-400 truncate">Total Pengguna</span>
                    <span class="p-2 rounded-lg bg-purple-50 text-purple-600 flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </span>
                </div>
                <h3 class="text-xl md:text-2xl font-bold text-gray-800 mt-2">12.894</h3>
            </div>
            <span class="text-xs font-semibold text-green-500 mt-2 block break-words">↑ +230 <span class="text-gray-400 font-normal">dari kemarin</span></span>
        </div>

        <div class="bg-white p-4 rounded-xl shadow-sm border border-gray-100 flex flex-col justify-between h-full">
            <div>
                <div class="flex items-center justify-between gap-2">
                    <span class="text-xs font-medium text-gray-400 truncate">Total Transaksi</span>
                    <span class="p-2 rounded-lg bg-purple-50 text-purple-600 flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                        </svg>
                    </span>
                </div>
                <h3 class="text-xl md:text-2xl font-bold text-gray-800 mt-2">1.256</h3>
            </div>
            <span class="text-xs font-semibold text-green-500 mt-2 block break-words">↑ +80 <span class="text-gray-400 font-normal">dari kemarin</span></span>
        </div>

        <div class="bg-white p-4 rounded-xl shadow-sm border border-gray-100 flex flex-col justify-between h-full sm:col-span-2 md:col-span-3 lg:col-span-1">
            <div>
                <div class="flex items-center justify-between gap-2">
                    <span class="text-xs font-medium text-gray-400 truncate">Pendapatan Hari Ini</span>
                    <span class="p-2 rounded-lg bg-purple-50 text-purple-600 flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2m0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                    </span>
                </div>
                <h3 class="text-xl md:text-2xl font-bold text-gray-800 mt-2">Rp 2.450.000</h3>
            </div>
            <span class="text-xs font-semibold text-green-500 mt-2 block break-words">↑ +15% <span class="text-gray-400 font-normal">dari kemarin</span></span>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
        <div class="bg-white p-4 sm:p-6 rounded-2xl shadow-sm border border-gray-100 lg:col-span-2">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 mb-6">
                <h2 class="text-base md:text-lg font-bold text-gray-800">Grafik Pendapatan</h2>
                <select id="timeFilter" class="custom-select w-full sm:w-auto text-xs md:text-sm bg-white border border-purple-300 text-purple-700 rounded-xl py-2 pl-3 pr-10 shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-400 focus:border-purple-500 cursor-pointer font-semibold transition-all">
                    <option value="1_hari">1 Hari Terakhir</option>
                    <option value="7_hari" selected>7 Hari Terakhir</option>
                    <option value="1_bulan">1 Bulan Terakhir</option>
                    <option value="1_tahun">1 Tahun Terakhir</option>
                </select>
            </div>
            <div class="relative w-full h-64 md:h-80">
                <canvas id="revenueChart"></canvas>
            </div>
        </div>

        <div class="bg-white p-4 sm:p-6 rounded-2xl shadow-sm border border-gray-100">
            <div class="flex items-center justify-between mb-4 gap-2">
            <h2 class="text-base md:text-lg font-bold text-gray-800 truncate">Daftar Novel</h2>
            <a href="{{ route('admin.produk.index') }}" class="text-xs md:text-sm font-semibold text-purple-600 hover:text-purple-800 bg-purple-50 hover:bg-purple-100 px-3 py-1.5 rounded-lg transition flex-shrink-0">
                Lihat Semua
            </a>
        </div>
            
            <div class="space-y-4">
                <div class="flex items-center justify-between p-1.5 hover:bg-gray-50 rounded-xl transition gap-3">
                    <div class="flex items-center gap-3 flex-1 min-w-0">
                        <span class="w-6 h-6 flex items-center justify-center font-bold text-xs text-white bg-purple-600 rounded-lg flex-shrink-0">1</span>
                        <img src="{{ asset('images/As27.png') }}" alt="Cover As27" class="w-10 h-14 rounded-lg object-cover shadow-sm bg-gray-100 flex-shrink-0">
                        <div class="flex-1 min-w-0">
                            <h4 class="text-xs md:text-sm font-bold text-gray-800 truncate leading-tight">Bayangan Masa Lalu</h4>
                            <p class="text-xs text-gray-400 mt-1 truncate leading-tight">Nathania Putri</p>
                        </div>
                    </div>
                    <div class="text-right flex-shrink-0">
                        <span class="text-xs md:text-sm font-bold text-gray-700 block leading-tight">125.430</span>
                        <span class="text-xs text-gray-400 tracking-wide block leading-tight mt-1">Dibaca</span>
                    </div>
                </div>

                <div class="flex items-center justify-between p-1.5 hover:bg-gray-50 rounded-xl transition gap-3">
                    <div class="flex items-center gap-3 flex-1 min-w-0">
                        <span class="w-6 h-6 flex items-center justify-center font-bold text-xs text-white bg-purple-600 rounded-lg flex-shrink-0">2</span>
                        <img src="{{ asset('images/As26.png') }}" alt="Cover As26" class="w-10 h-14 rounded-lg object-cover shadow-sm bg-gray-100 flex-shrink-0">
                        <div class="flex-1 min-w-0">
                            <h4 class="text-xs md:text-sm font-bold text-gray-800 truncate leading-tight">Parasit</h4>
                            <p class="text-xs text-gray-400 mt-1 truncate leading-tight">Budi Prajogo</p>
                        </div>
                    </div>
                    <div class="text-right flex-shrink-0">
                        <span class="text-xs md:text-sm font-bold text-gray-700 block leading-tight">98.210</span>
                        <span class="text-xs text-gray-400 tracking-wide block leading-tight mt-1">Dibaca</span>
                    </div>
                </div>

                <div class="flex items-center justify-between p-1.5 hover:bg-gray-50 rounded-xl transition gap-3">
                    <div class="flex items-center gap-3 flex-1 min-w-0">
                        <span class="w-6 h-6 flex items-center justify-center font-bold text-xs text-white bg-purple-600 rounded-lg flex-shrink-0">3</span>
                        <img src="{{ asset('images/As31.png') }}" alt="Cover As31" class="w-10 h-14 rounded-lg object-cover shadow-sm bg-gray-100 flex-shrink-0">
                        <div class="flex-1 min-w-0">
                            <h4 class="text-xs md:text-sm font-bold text-gray-800 truncate leading-tight">Santet</h4>
                            <p class="text-xs text-gray-400 mt-1 truncate leading-tight">Jefri Wibowo</p>
                        </div>
                    </div>
                    <div class="text-right flex-shrink-0">
                        <span class="text-xs md:text-sm font-bold text-gray-700 block leading-tight">76.543</span>
                        <span class="text-xs text-gray-400 tracking-wide block leading-tight mt-1">Dibaca</span>
                    </div>
                </div>

                <div class="flex items-center justify-between p-1.5 hover:bg-gray-50 rounded-xl transition gap-3">
                    <div class="flex items-center gap-3 flex-1 min-w-0">
                        <span class="w-6 h-6 flex items-center justify-center font-bold text-xs text-white bg-purple-600 rounded-lg flex-shrink-0">4</span>
                        <img src="{{ asset('images/As8.png') }}" alt="Cover As8" class="w-10 h-14 rounded-lg object-cover shadow-sm bg-gray-100 flex-shrink-0">
                        <div class="flex-1 min-w-0">
                            <h4 class="text-xs md:text-sm font-bold text-gray-800 truncate leading-tight">Rekam Waktu</h4>
                            <p class="text-xs text-gray-400 mt-1 truncate leading-tight">Rena Nabila</p>
                        </div>
                    </div>
                    <div class="text-right flex-shrink-0">
                        <span class="text-xs md:text-sm font-bold text-gray-700 block leading-tight">62.109</span>
                        <span class="text-xs text-gray-400 tracking-wide block leading-tight mt-1">Dibaca</span>
                    </div>
                </div>

                <div class="flex items-center justify-between p-1.5 hover:bg-gray-50 rounded-xl transition gap-3">
                    <div class="flex items-center gap-3 flex-1 min-w-0">
                        <span class="w-6 h-6 flex items-center justify-center font-bold text-xs text-white bg-purple-600 rounded-lg flex-shrink-0">5</span>
                        <img src="{{ asset('images/As23.png') }}" alt="Cover As23" class="w-10 h-14 rounded-lg object-cover shadow-sm bg-gray-100 flex-shrink-0">
                        <div class="flex-1 min-w-0">
                            <h4 class="text-xs md:text-sm font-bold text-gray-800 truncate leading-tight">Akademi Elysian</h4>
                            <p class="text-xs text-gray-400 mt-1 truncate leading-tight">Kevin Devano</p>
                        </div>
                    </div>
                    <div class="text-right flex-shrink-0">
                        <span class="text-xs md:text-sm font-bold text-gray-700 block leading-tight">54.321</span>
                        <span class="text-xs text-gray-400 tracking-wide block leading-tight mt-1">Dibaca</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white p-4 md:p-6 rounded-2xl shadow-sm border border-gray-100">
        <div class="flex items-center justify-between mb-4 gap-2">
        <h2 class="text-base md:text-lg font-bold text-gray-800 truncate">Transaksi Terbaru</h2>
        <a href="{{ route('admin.transaksi.index') }}" class="text-xs md:text-sm font-semibold text-purple-600 hover:text-purple-800 bg-purple-50 hover:bg-purple-100 px-3 py-1.5 rounded-lg transition flex-shrink-0">
            Lihat Semua
        </a>
    </div>

        <div class="w-full overflow-x-auto rounded-xl border border-gray-100">
            <table class="w-full text-left border-collapse min-w-max">
                <thead>
                    <tr class="bg-gray-50 text-gray-400 text-xs font-semibold uppercase tracking-wider border-b border-gray-100">
                        <th class="py-3 px-4">ID Transaksi</th>
                        <th class="py-3 px-4">Pengguna</th>
                        <th class="py-3 px-4">Produk</th>
                        <th class="py-3 px-4 text-center">Jumlah</th>
                        <th class="py-3 px-4">Metode</th>
                        <th class="py-3 px-4">Waktu</th>
                        <th class="py-3 px-4">Status</th>
                    </tr>
                </thead>
                <tbody class="text-xs md:text-sm text-gray-700 divide-y divide-gray-100">
                    <tr class="hover:bg-gray-50 transition">
                        <td class="py-3.5 px-4 font-medium text-gray-400">#TRX-12984</td>
                        <td class="py-3.5 px-4 font-semibold text-gray-800">Dewi Lestari</td>
                        <td class="py-3.5 px-4 text-gray-600">Bayangan Masa Lalu - Bab 50</td>
                        <td class="py-3.5 px-4 text-center font-medium text-gray-800">1</td>
                        <td class="py-3.5 px-4"><span class="bg-blue-50 text-blue-600 px-2.5 py-1 rounded font-semibold text-xs whitespace-nowrap">QRIS</span></td>
                        <td class="py-3.5 px-4 text-gray-400 text-xs whitespace-nowrap">28 Mei 2024, 14:32</td>
                        <td class="py-3.5 px-4"><span class="bg-green-50 text-green-600 px-2.5 py-1 rounded-full text-xs font-semibold whitespace-nowrap">Berhasil</span></td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition">
                        <td class="py-3.5 px-4 font-medium text-gray-400">#TRX-12983</td>
                        <td class="py-3.5 px-4 font-semibold text-gray-800">Ahmad Fadli</td>
                        <td class="py-3.5 px-4 text-gray-600">Jejak Diantara Bintang - Bab 20</td>
                        <td class="py-3.5 px-4 text-center font-medium text-gray-800">2</td>
                        <td class="py-3.5 px-4"><span class="bg-indigo-50 text-indigo-600 px-2.5 py-1 rounded font-semibold text-xs whitespace-nowrap">Virtual Account</span></td>
                        <td class="py-3.5 px-4 text-gray-400 text-xs whitespace-nowrap">28 Mei 2024, 14:21</td>
                        <td class="py-3.5 px-4"><span class="bg-green-50 text-green-600 px-2.5 py-1 rounded-full text-xs font-semibold whitespace-nowrap">Berhasil</span></td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition">
                        <td class="py-3.5 px-4 font-medium text-gray-400">#TRX-12982</td>
                        <td class="py-3.5 px-4 font-semibold text-gray-800">Siti Nurhaliza</td>
                        <td class="py-3.5 px-4 text-gray-600">Cinta di Ujung Senja - Bab 15</td>
                        <td class="py-3.5 px-4 text-center font-medium text-gray-800">1</td>
                        <td class="py-3.5 px-4"><span class="bg-blue-50 text-blue-600 px-2.5 py-1 rounded font-semibold text-xs whitespace-nowrap">QRIS</span></td>
                        <td class="py-3.5 px-4 text-gray-400 text-xs whitespace-nowrap">28 Mei 2024, 14:10</td>
                        <td class="py-3.5 px-4"><span class="bg-green-50 text-green-600 px-2.5 py-1 rounded-full text-xs font-semibold whitespace-nowrap">Berhasil</span></td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition">
                        <td class="py-3.5 px-4 font-medium text-gray-400">#TRX-12981</td>
                        <td class="py-3.5 px-4 font-semibold text-gray-800">Rizky Pratama</td>
                        <td class="py-3.5 px-4 text-gray-600">Hati yang Tersisa - Bab 10</td>
                        <td class="py-3.5 px-4 text-center font-medium text-gray-800">2</td>
                        <td class="py-3.5 px-4"><span class="bg-indigo-50 text-indigo-600 px-2.5 py-1 rounded font-semibold text-xs whitespace-nowrap">Virtual Account</span></td>
                        <td class="py-3.5 px-4 text-gray-400 text-xs whitespace-nowrap">28 Mei 2024, 13:58</td>
                        <td class="py-3.5 px-4"><span class="bg-green-50 text-green-600 px-2.5 py-1 rounded-full text-xs font-semibold whitespace-nowrap">Berhasil</span></td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition">
                        <td class="py-3.5 px-4 font-medium text-gray-400">#TRX-12980</td>
                        <td class="py-3.5 px-4 font-semibold text-gray-800">Putri Anggraini</td>
                        <td class="py-3.5 px-4 text-gray-600">Langit dan Rahasia - Bab 8</td>
                        <td class="py-3.5 px-4 text-center font-medium text-gray-800">1</td>
                        <td class="py-3.5 px-4"><span class="bg-blue-50 text-blue-600 px-2.5 py-1 rounded font-semibold text-xs whitespace-nowrap">QRIS</span></td>
                        <td class="py-3.5 px-4 text-gray-400 text-xs whitespace-nowrap">28 Mei 2024, 13:45</td>
                        <td class="py-3.5 px-4"><span class="bg-green-50 text-green-600 px-2.5 py-1 rounded-full text-xs font-semibold whitespace-nowrap">Berhasil</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const ctx = document.getElementById('revenueChart').getContext('2d');
        
        const chartData = {
            '1_hari': {
                labels: ['00:00', '04:00', '08:00', '12:00', '16:00', '20:00', '24:00'],
                data: [150000, 300000, 850000, 1200000, 1900000, 2450000, 410000]
            },
            '7_hari': {
                labels: ['22 Mei', '23 Mei', '24 Mei', '25 Mei', '26 Mei', '27 Mei', '28 Mei'],
                data: [900000, 1600000, 2400000, 1950000, 2700000, 3250000, 1500000]
            },
            '1_bulan': {
                labels: ['Minggu 1', 'Minggu 2', 'Minggu 3', 'Minggu 4'],
                data: [12000000, 18500000, 15000000, 24500000]
            },
            '1_tahun': {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
                data: [45000000, 52000000, 61000000, 58000000, 74000000, 82000000, 79000000, 85000000, 91000000, 95000000, 102000000, 120000000]
            }
        };

        let gradient = ctx.createLinearGradient(0, 0, 0, 300);
        gradient.addColorStop(0, 'rgba(124, 58, 237, 0.25)');
        gradient.addColorStop(1, 'rgba(124, 58, 237, 0.0)');

        let revenueChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: chartData['7_hari'].labels,
                datasets: [{
                    label: 'Pendapatan (Rp)',
                    data: chartData['7_hari'].data,
                    borderColor: '#7c3aed',
                    borderWidth: 3,
                    backgroundColor: gradient,
                    fill: true,
                    tension: 0.35,
                    pointBackgroundColor: '#7c3aed',
                    pointHoverRadius: 7
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { display: false }
                },
                scales: {
                    y: {
                        grid: { color: 'rgba(243, 244, 246, 1)' },
                        ticks: {
                            color: '#9ca3af',
                            callback: function(value) {
                                if (value >= 1000000) return 'Rp ' + (value / 1000000) + 'M';
                                if (value >= 1000) return 'Rp ' + (value / 1000) + 'K';
                                return 'Rp ' + value;
                            }
                        }
                    },
                    x: {
                        grid: { display: false },
                        ticks: { color: '#9ca3af' }
                    }
                }
            }
        });

        document.getElementById('timeFilter').addEventListener('change', function () {
            const selectedFilter = this.value;
            revenueChart.data.labels = chartData[selectedFilter].labels;
            revenueChart.data.datasets[0].data = chartData[selectedFilter].data;
            revenueChart.update();
        });
    });
</script>
@endsection