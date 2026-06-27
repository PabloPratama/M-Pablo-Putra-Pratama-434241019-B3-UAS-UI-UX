@extends('admin.layouts.app')

@section('title', 'Kelola Transaksi')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>
    body, div, table, h1, h2, h3, h4, p, span, select, button, input, th, td {
        font-family: 'Poppins', sans-serif !important;
    }
    
    .status-berhasil { 
        background-color: #DEF7EC !important; 
        color: #03543F !important; 
        padding: 0.25rem 0.75rem !important;
        font-size: 0.75rem !important;
        font-weight: 600 !important;
        border-radius: 0.5rem !important;
        display: inline-block !important;
    }
    
    .status-gagal { 
        background-color: #FDE8E8 !important; 
        color: #9B1C1C !important; 
        padding: 0.25rem 0.75rem !important;
        font-size: 0.75rem !important;
        font-weight: 600 !important;
        border-radius: 0.5rem !important;
        display: inline-block !important;
    }

    .btn-pagination {
        width: 2.25rem;
        height: 2.25rem;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 0.75rem;
        border: 1px solid #E5E7EB;
        background-color: #FFFFFF;
        color: #4B5563;
        font-size: 0.875rem;
        font-weight: 600;
        transition: all 0.2s ease-in-out;
    }

    .btn-pagination:hover, .btn-pagination.active {
        background-color: #7C3AED !important;
        border-color: #7C3AED !important;
        color: #FFFFFF !important;
    }
    
    .btn-pagination:hover svg, .btn-pagination.active svg {
        stroke: #FFFFFF !important;
    }

    @media (min-width: 768px) and (max-width: 1024px) {
        .filters-container {
            flex-wrap: wrap;
        }
        .search-box {
            flex: 1 1 100%;
        }
    }
</style>

<div class="py-6 px-4 sm:px-6 min-h-screen bg-gray-50 w-full box-border block">
    
    <div class="flex flex-col xl:flex-row xl:items-end justify-between gap-4 mb-6">
        <div>
            <h1 class="text-xl md:text-2xl font-bold text-gray-800">Kelola Transaksi</h1>
        </div>
        
        <div class="filters-container flex flex-col sm:flex-row items-center gap-3 w-full xl:w-auto">
            <div class="search-box relative w-full xl:w-64">
                <input type="text" id="searchInput" placeholder="Cari transaksi, pengguna, novel..." 
                    class="w-full pl-10 pr-4 py-2.5 bg-white border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-purple-400 focus:border-transparent transition-all">
                <div class="absolute left-3 top-3 text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
            </div>
            
            <div class="w-full sm:w-auto flex-1 sm:flex-none">
                <select id="statusFilter" class="w-full px-4 py-2.5 bg-white border border-gray-200 rounded-xl text-sm text-gray-600 focus:outline-none focus:ring-2 focus:ring-purple-400 cursor-pointer">
                    <option value="Semua">Semua Status</option>
                    <option value="Berhasil">Berhasil</option>
                    <option value="Gagal">Gagal</option>
                </select>
            </div>

            <div class="w-full sm:w-auto flex-1 sm:flex-none">
                <input type="date" id="dateFilter" class="w-full px-4 py-2.5 bg-white border border-gray-200 rounded-xl text-sm text-gray-600 focus:outline-none focus:ring-2 focus:ring-purple-400 cursor-pointer">
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 xl:grid-cols-4 gap-4 mb-6">
        <div class="bg-white p-5 rounded-2xl shadow-sm border border-gray-100 flex flex-col justify-between min-h-[120px]">
            <div class="flex items-center justify-between mb-2">
                <span class="p-3 rounded-xl flex-shrink-0" style="color: #7C3AED; background-color: #F5F3FF;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                    </svg>
                </span>
                <div class="text-right">
                    <p class="text-xs font-medium text-gray-400 uppercase tracking-wider">Total Transaksi</p>
                    <h3 class="text-2xl font-bold text-gray-800 mt-1">2.845</h3>
                </div>
            </div>
            <span class="text-xs font-semibold text-green-500 flex items-center gap-1 mt-2">
                ↑ +18% <span class="text-gray-400 font-normal">dari bulan lalu</span>
            </span>
        </div>

        <div class="bg-white p-5 rounded-2xl shadow-sm border border-gray-100 flex flex-col justify-between min-h-[120px]">
            <div class="flex items-center justify-between mb-2">
                <span class="p-3 rounded-xl bg-green-50 text-green-600 flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </span>
                <div class="text-right">
                    <p class="text-xs font-medium text-gray-400 uppercase tracking-wider">Pendapatan Kotor</p>
                    <h3 class="text-xl md:text-2xl font-bold text-gray-800 mt-1">Rp 125.430.000</h3>
                </div>
            </div>
            <span class="text-xs font-semibold text-green-500 flex items-center gap-1 mt-2">
                ↑ +22% <span class="text-gray-400 font-normal">dari bulan lalu</span>
            </span>
        </div>

        <div class="bg-white p-5 rounded-2xl shadow-sm border border-gray-100 flex flex-col justify-between min-h-[120px]">
            <div class="flex items-center justify-between mb-2">
                <span class="p-3 rounded-xl bg-yellow-50 text-yellow-600 flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </span>
                <div class="text-right">
                    <p class="text-xs font-medium text-gray-400 uppercase tracking-wider">Transaksi Berhasil</p>
                    <h3 id="berhasilBadge" class="text-2xl font-bold text-gray-800 mt-1">0</h3>
                </div>
            </div>
            <span id="berhasilPercentage" class="text-xs font-semibold text-gray-500 mt-2">0% dari total tabel</span>
        </div>

        <div class="bg-white p-5 rounded-2xl shadow-sm border border-gray-100 flex flex-col justify-between min-h-[120px]">
            <div class="flex items-center justify-between mb-2">
                <span class="p-3 rounded-xl bg-red-50 text-red-600 flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                </span>
                <div class="text-right">
                    <p class="text-xs font-medium text-gray-400 uppercase tracking-wider">Transaksi Gagal</p>
                    <h3 id="gagalBadge" class="text-2xl font-bold text-gray-800 mt-1">0</h3>
                </div>
            </div>
            <span id="gagalPercentage" class="text-xs font-semibold text-gray-500 mt-2">0% dari total tabel</span>
        </div>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden w-full">
        <div class="w-full overflow-x-auto">
            <table class="w-full text-left border-collapse min-w-[1050px]">
                <thead>
                    <tr class="bg-gray-50 text-gray-500 text-xs font-semibold uppercase tracking-wider border-b border-gray-200">
                        <th class="py-4 px-6 w-[15%]">ID Transaksi</th>
                        <th class="py-4 px-6 w-[20%]">Pengguna</th>
                        <th class="py-4 px-6 w-[20%]">Novel</th>
                        <th class="py-4 px-6 w-[15%]">Metode Pembayaran</th>
                        <th class="py-4 px-6 w-[10%]">Jumlah</th>
                        <th class="py-4 px-6 w-[5%] text-center">Status</th>
                        <th class="py-4 px-6 w-[10%]">Tanggal</th>
                        <th class="py-4 px-6 w-[5%] text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody id="transactionTableBody" class="text-sm text-gray-700 divide-y divide-gray-100">
                </tbody>
            </table>
        </div>

        <div id="noDataState" class="hidden py-16 text-center w-full">
            <div class="flex flex-col items-center justify-center">
                <div class="bg-gray-50 p-4 rounded-full mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 9.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-gray-500 font-semibold text-sm">Tidak ada data yang sesuai</h3>
                <p class="text-gray-400 text-xs mt-1">Coba sesuaikan filter atau kata kunci pencarian</p>
            </div>
        </div>

        <div class="py-4 px-6 border-t border-gray-100 flex flex-col sm:flex-row items-center justify-between gap-4 w-full">
            <p id="paginationInfo" class="text-xs sm:text-sm text-gray-500 order-2 sm:order-1 text-center sm:text-left">
                Menampilkan 1 - 5 dari 2.845 transaksi
            </p>
            <div class="flex items-center justify-center gap-2 order-1 sm:order-2" id="paginationControls">
                <button onclick="changePage('prev')" id="btnPrev" class="btn-pagination">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="#4B5563">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button onclick="setPage(1)" id="page-1" class="btn-pagination active">1</button>
                <button onclick="setPage(2)" id="page-2" class="btn-pagination">2</button>
                <button onclick="setPage(3)" id="page-3" class="btn-pagination">3</button>
                <button onclick="setPage(4)" id="page-4" class="btn-pagination">4</button>
                <button onclick="setPage(5)" id="page-5" class="btn-pagination">5</button>
                <button class="btn-pagination border-transparent bg-transparent hover:bg-transparent text-gray-400 cursor-default">...</button>
                <button onclick="setPage(356)" id="page-356" class="btn-pagination">356</button>
                <button onclick="changePage('next')" id="btnNext" class="btn-pagination">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="#4B5563">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    const initialTransactions = [
        {
            id: 1,
            id_transaksi: "TRX-202405280001",
            inisial: "DP",
            bg_inisial: "bg-purple-600",
            nama: "Dewi Lestari",
            email: "dewi.lestari@example.com",
            username: "@dewilestari",
            novel_judul: "Bayangan Masa Lalu",
            novel_bab: "50 Bab",
            novel_penulis: "Nathania Putri",
            novel_image: "{{ asset('images/As7.png') }}",
            bank: "BCA Virtual Account",
            va: "1234 5678 9012 3456",
            jumlah: "Rp 49.000",
            status: "Berhasil",
            tanggal: "28 Mei 2024",
            waktu: "10:30 WIB",
            raw_date: "2024-05-28"
        },
        {
            id: 2,
            id_transaksi: "TRX-202405280002",
            inisial: "AF",
            bg_inisial: "bg-indigo-600",
            nama: "Ahmad Fadli",
            email: "ahmad.fadli@example.com",
            username: "@ahmadfadli",
            novel_judul: "Parasit",
            novel_bab: "32 Bab",
            novel_penulis: "Hiro Jonathan",
            novel_image: "{{ asset('images/As26.png') }}",
            bank: "Mandiri Virtual Account",
            va: "9876 5432 1098 7654",
            jumlah: "Rp 35.000",
            status: "Berhasil",
            tanggal: "28 Mei 2024",
            waktu: "09:45 WIB",
            raw_date: "2024-05-28"
        },
        {
            id: 3,
            id_transaksi: "TRX-202405270015",
            inisial: "SN",
            bg_inisial: "bg-purple-500",
            nama: "Siti Nurhaliza",
            email: "siti.nurhaliza@example.com",
            username: "@sitinurhaliza",
            novel_judul: "Jejak yang hilang",
            novel_bab: "26 Bab",
            novel_penulis: "Theo Nirwana",
            novel_image: "{{ asset('images/As20.png') }}",
            bank: "BNI Virtual Account",
            va: "1122 3344 5566 7788",
            jumlah: "Rp 50.000",
            status: "Berhasil",
            tanggal: "27 Mei 2024",
            waktu: "16:20 WIB",
            raw_date: "2024-05-27"
        },
        {
            id: 4,
            id_transaksi: "TRX-202405270014",
            inisial: "RP",
            bg_inisial: "bg-blue-500",
            nama: "Rizky Pratama",
            email: "rizky.pratama@example.com",
            username: "@rizkypratama",
            novel_judul: "Santet",
            novel_bab: "18 Bab",
            novel_penulis: "Tasya Aprilia",
            novel_image: "{{ asset('images/As31.png') }}",
            bank: "BRI Virtual Account",
            va: "0011 2233 4455 6677",
            jumlah: "Rp 32.000",
            status: "Berhasil",
            tanggal: "27 Mei 2024",
            waktu: "14:10 WIB",
            raw_date: "2024-05-27"
        },
        {
            id: 5,
            id_transaksi: "TRX-202405260007",
            inisial: "MA",
            bg_inisial: "bg-purple-700",
            nama: "Muhammad Arif",
            email: "m.arif@example.com",
            username: "@muhammadarif",
            novel_judul: "Project Nova",
            novel_bab: "30 Bab",
            novel_penulis: "Alyssa Clara",
            novel_image: "{{ asset('images/As21.png') }}",
            bank: "CIMB Virtual Account",
            va: "8899 7766 5544 3322",
            jumlah: "Rp 40.000",
            status: "Gagal",
            tanggal: "26 Mei 2024",
            waktu: "09:30 WIB",
            raw_date: "2024-05-26"
        }
    ];

    let transactions = [...initialTransactions];
    let currentPage = 1;

    function getStatusClass(status) {
        if (status === 'Berhasil') return 'status-berhasil';
        if (status === 'Gagal') return 'status-gagal';
        return '';
    }

    function updateBadges(dataList) {
        const total = dataList.length;
        const berhasil = dataList.filter(a => a.status === 'Berhasil').length;
        const gagal = dataList.filter(a => a.status === 'Gagal').length;

        document.getElementById('berhasilBadge').innerText = berhasil;
        document.getElementById('gagalBadge').innerText = gagal;

        const berhasilPct = total > 0 ? Math.round((berhasil / total) * 100) : 0;
        const gagalPct = total > 0 ? Math.round((gagal / total) * 100) : 0;

        document.getElementById('berhasilPercentage').innerText = `${berhasilPct}% dari tabel`;
        document.getElementById('gagalPercentage').innerText = `${gagalPct}% dari tabel`;
    }

    function renderTable(dataToRender) {
        const tableBody = document.getElementById('transactionTableBody');
        const noDataState = document.getElementById('noDataState');
        const tableWrapper = tableBody.parentElement.parentElement;
        
        tableBody.innerHTML = '';

        if (dataToRender.length === 0) {
            tableWrapper.classList.add('hidden');
            noDataState.classList.remove('hidden');
            return;
        } else {
            tableWrapper.classList.remove('hidden');
            noDataState.classList.add('hidden');
        }

        dataToRender.forEach(trx => {
            const row = `
                <tr class="hover:bg-gray-50/80 transition-all border-b border-gray-100">
                    <td class="py-4 px-6 align-middle font-medium text-gray-800">
                        ${trx.id_transaksi}
                    </td>
                    <td class="py-4 px-6 align-middle">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full ${trx.bg_inisial} text-white flex items-center justify-center text-xs font-bold flex-shrink-0">
                                ${trx.inisial}
                            </div>
                            <div class="min-w-0">
                                <h4 class="text-sm font-semibold text-gray-800 truncate" title="${trx.nama}">${trx.nama}</h4>
                                <p class="text-xs text-gray-400 mt-0.5 truncate">${trx.email}</p>
                            </div>
                        </div>
                    </td>
                    <td class="py-4 px-6 align-middle">
                        <div class="flex items-center gap-3">
                            <img src="${trx.novel_image}" alt="Img" class="w-10 h-12 rounded-lg object-cover shadow-sm flex-shrink-0 border border-gray-100">
                            <div class="min-w-0 flex-1">
                                <h4 class="text-sm font-semibold text-gray-800 truncate" title="${trx.novel_judul}">${trx.novel_judul}</h4>
                                <p class="text-xs text-gray-400 mt-0.5">${trx.novel_bab}</p>
                            </div>
                        </div>
                    </td>
                    <td class="py-4 px-6 align-middle">
                        <div class="text-sm font-semibold text-gray-700 whitespace-nowrap">${trx.bank}</div>
                        <div class="text-[11px] text-gray-400 mt-0.5 whitespace-nowrap">${trx.va}</div>
                    </td>
                    <td class="py-4 px-6 text-sm font-semibold text-gray-800 align-middle">
                        ${trx.jumlah}
                    </td>
                    <td class="py-4 px-6 align-middle text-center">
                        <span class="${getStatusClass(trx.status)}">${trx.status}</span>
                    </td>
                    <td class="py-4 px-6 align-middle">
                        <div class="text-xs font-semibold text-gray-700 whitespace-nowrap">${trx.tanggal}</div>
                        <div class="text-[11px] text-gray-400 mt-0.5 whitespace-nowrap">${trx.waktu}</div>
                    </td>
                    <td class="py-4 px-6 align-middle text-center">
                        <div class="flex items-center justify-center gap-1.5">
                            <button onclick="goToDetail(${trx.id})" class="p-2 bg-gray-50 text-gray-400 hover:text-purple-600 hover:bg-purple-50 rounded-lg transition-all" title="Detail">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </button>
                            <button onclick="deleteTransaction(${trx.id})" class="p-2 bg-gray-50 text-gray-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition-all" title="Hapus">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </button>
                        </div>
                    </td>
                </tr>
            `;
            tableBody.insertAdjacentHTML('beforeend', row);
        });
        
        updateBadges(dataToRender);
    }

    function handleFilters() {
        const query = document.getElementById('searchInput').value.toLowerCase();
        const status = document.getElementById('statusFilter').value;
        const dateVal = document.getElementById('dateFilter').value; 

        const filtered = transactions.filter(trx => {
            const matchSearch = trx.nama.toLowerCase().includes(query) || 
                                trx.id_transaksi.toLowerCase().includes(query) || 
                                trx.novel_judul.toLowerCase().includes(query);
            const matchStatus = status === 'Semua' || trx.status === status;
            const matchDate = dateVal === '' || trx.raw_date === dateVal;

            return matchSearch && matchStatus && matchDate;
        });

        renderTable(filtered);
    }

    document.getElementById('searchInput').addEventListener('input', handleFilters);
    document.getElementById('statusFilter').addEventListener('change', handleFilters);
    document.getElementById('dateFilter').addEventListener('change', handleFilters);

    function deleteTransaction(id) {
        if(confirm('Apakah Anda yakin ingin menghapus transaksi ini? (Akan kembali saat refresh)')) {
            transactions = transactions.filter(t => t.id !== id);
            handleFilters();
        }
    }
    
    function goToDetail(id) {
        const trx = initialTransactions.find(t => t.id === id);
        if(trx) {
            localStorage.setItem('selected_trx', JSON.stringify(trx));
        }
        window.location.href = `{{ route('admin.transaksi.detail') }}?id=${id}`;
    }

    function setPage(page) {
        currentPage = page;
        const btns = document.querySelectorAll('.btn-pagination:not(.cursor-default)');
        btns.forEach(btn => btn.classList.remove('active'));
        const activeBtn = document.getElementById(`page-${page}`);
        if (activeBtn) activeBtn.classList.add('active');
    }

    function changePage(dir) {
        if(dir === 'prev' && currentPage > 1) {
            setPage(currentPage - 1);
        } else if(dir === 'next' && currentPage < 356) {
            setPage(currentPage + 1);
        }
        document.activeElement.blur();
    }

    document.addEventListener('DOMContentLoaded', () => {
        renderTable(transactions);
    });
</script>
@endsection