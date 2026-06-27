@extends('admin.layouts.app')

@section('title', 'Kelola Pesan')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>
    body, div, table, h1, h2, h3, h4, p, span, select, button, input, th, td {
        font-family: 'Poppins', sans-serif !important;
    }
    
    .status-menunggu { 
        background-color: #FEF3C7 !important; 
        color: #92400E !important; 
        padding: 0.25rem 0.6rem !important;
        font-size: 0.75rem !important;
        font-weight: 700 !important;
        border-radius: 0.5rem !important;
        display: inline-block !important;
        white-space: nowrap !important;
    }
    
    .status-ditanggapi { 
        background-color: #DEF7EC !important; 
        color: #03543F !important; 
        padding: 0.25rem 0.6rem !important;
        font-size: 0.75rem !important;
        font-weight: 700 !important;
        border-radius: 0.5rem !important;
        display: inline-block !important;
        white-space: nowrap !important; 
    }

    .btn-pagination {
        width: 2.25rem;
        height: 2.25rem;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 0.5rem;
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
        .filters-container { flex-wrap: wrap; }
        .search-box { flex: 1 1 100%; } 
    }

    @media (min-width: 768px) and (max-width: 1279px) {
        .grid-cards { grid-template-columns: repeat(2, minmax(0, 1fr)); }
    }
</style>

<div class="py-6 px-4 sm:px-6 min-h-screen bg-gray-50 w-full box-border block">
    
    <div class="flex flex-col xl:flex-row xl:items-end justify-between gap-4 mb-6">
        <div>
            <h1 class="text-xl md:text-2xl font-bold text-gray-800">Kelola Pesan</h1>
        </div>
        
        <div class="filters-container flex flex-col sm:flex-row items-center gap-3 w-full xl:w-auto">
            
            <div class="search-box relative w-full xl:w-64">
                <input type="text" id="searchInput" placeholder="Cari pesan, pengguna, atau topik..." 
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
                    <option value="Menunggu">Menunggu</option>
                    <option value="Sudah Ditanggapi">Sudah Ditanggapi</option>
                </select>
            </div>

            <div class="w-full sm:w-auto flex-1 sm:flex-none">
                <input type="date" id="dateFilter" class="w-full px-4 py-2.5 bg-white border border-gray-200 rounded-xl text-sm text-gray-600 focus:outline-none focus:ring-2 focus:ring-purple-400 cursor-pointer">
            </div>
            
        </div>
    </div>

    <div class="grid-cards grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
        <div class="bg-white p-5 rounded-2xl shadow-sm border border-gray-100 flex flex-col justify-between min-h-[120px]">
            <div class="flex items-center justify-between mb-2">
                <span class="p-3 rounded-xl flex-shrink-0" style="color: #7C3AED; background-color: #F5F3FF;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                    </svg>
                </span>
                <div class="text-right">
                    <p class="text-xs font-medium text-gray-500 mb-1">Total Pesan</p>
                    <h3 id="totalBadge" class="text-2xl font-bold text-gray-800">128</h3>
                </div>
            </div>
            <span class="text-xs font-semibold text-green-500 flex items-center gap-1 mt-2">
                ↑ +18 <span class="text-gray-400 font-normal">dari bulan lalu</span>
            </span>
        </div>

        <div class="bg-white p-5 rounded-2xl shadow-sm border border-gray-100 flex flex-col justify-between min-h-[120px]">
            <div class="flex items-center justify-between mb-2">
                <span class="p-3 rounded-xl bg-yellow-50 text-yellow-500 flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </span>
                <div class="text-right">
                    <p class="text-xs font-medium text-gray-500 mb-1">Menunggu Balasan</p>
                    <h3 id="menungguBadge" class="text-2xl font-bold text-gray-800">0</h3>
                </div>
            </div>
            <span id="menungguPercentage" class="text-xs font-semibold text-gray-500 mt-2">0% dari total</span>
        </div>

        <div class="bg-white p-5 rounded-2xl shadow-sm border border-gray-100 flex flex-col justify-between min-h-[120px]">
            <div class="flex items-center justify-between mb-2">
                <span class="p-3 rounded-xl bg-green-50 text-green-600 flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </span>
                <div class="text-right">
                    <p class="text-xs font-medium text-gray-500 mb-1">Sudah Ditanggapi</p>
                    <h3 id="ditanggapiBadge" class="text-2xl font-bold text-gray-800">0</h3>
                </div>
            </div>
            <span id="ditanggapiPercentage" class="text-xs font-semibold text-gray-500 mt-2">0% dari total</span>
        </div>

        <div class="bg-white p-5 rounded-2xl shadow-sm border border-gray-100 flex flex-col justify-between min-h-[120px]">
            <div class="flex items-center justify-between mb-2">
                <span class="p-3 rounded-xl bg-red-50 text-red-600 flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                </span>
                <div class="text-right">
                    <p class="text-xs font-medium text-gray-500 mb-1">Pesan Dihapus</p>
                    <h3 id="dihapusBadge" class="text-2xl font-bold text-gray-800">0</h3>
                </div>
            </div>
            <span class="text-xs font-semibold text-gray-500 mt-2">Akan reset saat refresh</span>
        </div>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden w-full">
        <div class="w-full overflow-x-auto">
            <table class="w-full text-left border-collapse min-w-[1100px]">
                <thead>
                    <tr class="bg-gray-50 text-gray-500 text-xs font-semibold uppercase tracking-wider border-b border-gray-200">
                        <th class="py-4 px-6 w-[15%]">ID Pesan</th>
                        <th class="py-4 px-6 w-[20%]">Pengguna</th>
                        <th class="py-4 px-6 w-[30%]">Pesan</th>
                        <th class="py-4 px-6 w-[10%] text-center">Status</th>
                        <th class="py-4 px-6 w-[12%]">Tanggal</th>
                        <th class="py-4 px-6 w-[13%] text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody id="pesanTableBody" class="text-sm text-gray-700 divide-y divide-gray-100">
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
                Menampilkan 1 - 5 dari 128 pesan
            </p>
            <div class="flex items-center justify-center gap-1 sm:gap-2 order-1 sm:order-2" id="paginationControls">
                <button onclick="changePage('prev')" id="btnPrev" class="btn-pagination">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="#4B5563">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button onclick="setPage(1)" id="page-1" class="btn-pagination active">1</button>
                <button onclick="setPage(2)" id="page-2" class="btn-pagination">2</button>
                <button onclick="setPage(3)" id="page-3" class="btn-pagination">3</button>
                <button onclick="setPage(4)" id="page-4" class="btn-pagination">4</button>
                <button class="btn-pagination border-transparent bg-transparent hover:bg-transparent text-gray-400 cursor-default">...</button>
                <button onclick="setPage(16)" id="page-16" class="btn-pagination">16</button>
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
    // Data Default (5 baris, 2 Menunggu, 3 Sudah Ditanggapi)
    const initialMessages = [
        {
            id: 1,
            id_pesan: "MSG-202405280001",
            inisial: "DP",
            bg_inisial: "bg-purple-700",
            nama: "Dewi Lestari",
            email: "dewi.lestari@example.com",
            username: "@dewilestari",
            pesan: "Saya tidak bisa login ke akun saya sejak kemarin sore. Muncul pesan error...",
            pesan_full: "Saya tidak bisa login ke akun saya sejak kemarin sore. Muncul pesan error 'kredensial tidak valid' padahal password dan email sudah benar. Mohon bantuannya.",
            status: "Menunggu",
            tanggal: "28 Mei 2024",
            waktu: "10:30 WIB",
            raw_date: "2024-05-28",
            bergabung: "20 Jan 2024, 14:00 WIB",
            aktif: "28 Mei 2024, 10:28 WIB",
            total: "3 pesan"
        },
        {
            id: 2,
            id_pesan: "MSG-202405280002",
            inisial: "AF",
            bg_inisial: "bg-indigo-600",
            nama: "Ahmad Fadli",
            email: "ahmad.fadli@example.com",
            username: "@ahmadfadli",
            pesan: "Saya sudah melakukan pembayaran tapi statusnya masih pending dan koin belum...",
            pesan_full: "Saya sudah melakukan pembayaran tapi statusnya masih pending dan koin belum masuk ke akun saya padahal saldo di ATM sudah terpotong. Tolong dicek.",
            status: "Sudah Ditanggapi",
            tanggal: "28 Mei 2024",
            waktu: "09:45 WIB",
            raw_date: "2024-05-28",
            bergabung: "15 Feb 2024, 08:30 WIB",
            aktif: "28 Mei 2024, 15:00 WIB",
            total: "1 pesan"
        },
        {
            id: 3,
            id_pesan: "MSG-202405270015",
            inisial: "SN",
            bg_inisial: "bg-purple-500",
            nama: "Siti Nurhaliza",
            email: "siti.nurhaliza@example.com",
            username: "@sitinurhaliza",
            pesan: "Saya menemukan konten yang tidak pantas di novel berjudul 'Bayangan Kelabu'...",
            pesan_full: "Saya menemukan konten yang tidak pantas di novel berjudul 'Bayangan Kelabu' bab 15. Tolong tim meninjau ulang isi dari bab tersebut.",
            status: "Sudah Ditanggapi",
            tanggal: "27 Mei 2024",
            waktu: "16:20 WIB",
            raw_date: "2024-05-27",
            bergabung: "10 Mar 2024, 09:15 WIB",
            aktif: "28 Mei 2024, 07:12 WIB",
            total: "4 pesan"
        },
        {
            id: 4,
            id_pesan: "MSG-202405270014",
            inisial: "RP",
            bg_inisial: "bg-blue-600",
            nama: "Rizky Pratama",
            email: "rizky.pratama@example.com",
            username: "@rizkypratama",
            pesan: "Aplikasi sering keluar sendiri saat saya membaca bab, terutama di chapter panjang.",
            pesan_full: "Aplikasi sering keluar sendiri saat saya membaca bab, terutama di chapter panjang. Ini sudah terjadi beberapa kali di perangkat saya (Android 13). Mohon bantuannya terima kasih.",
            status: "Menunggu",
            tanggal: "27 Mei 2024",
            waktu: "14:10 WIB",
            raw_date: "2024-05-27",
            bergabung: "25 Apr 2024, 09:12 WIB",
            aktif: "27 Mei 2024, 14:08 WIB",
            total: "2 pesan"
        },
        {
            id: 5,
            id_pesan: "MSG-202405260008",
            inisial: "PA",
            bg_inisial: "bg-purple-600",
            nama: "Putri Anggraini",
            email: "putri.anggi@example.com",
            username: "@putrianggi",
            pesan: "Saya sudah melakukan penarikan saldo tapi belum masuk ke rekening saya sampai...",
            pesan_full: "Saya sudah melakukan penarikan saldo tapi belum masuk ke rekening saya sampai hari ini padahal sudah melebihi 2x24 jam kerja.",
            status: "Sudah Ditanggapi",
            tanggal: "26 Mei 2024",
            waktu: "11:05 WIB",
            raw_date: "2024-05-26",
            bergabung: "05 Mei 2024, 16:45 WIB",
            aktif: "27 Mei 2024, 10:20 WIB",
            total: "1 pesan"
        }
    ];

    let messages = [...initialMessages];
    let currentPage = 1;
    let deletedCount = 0;

    function getStatusClass(status) {
        if (status === 'Sudah Ditanggapi') return 'status-ditanggapi';
        if (status === 'Menunggu') return 'status-menunggu';
        return '';
    }

    function updateBadges(dataList) {
        const waiting = dataList.filter(a => a.status === 'Menunggu').length;
        const replied = dataList.filter(a => a.status === 'Sudah Ditanggapi').length;
        const currentTotal = dataList.length;

        document.getElementById('menungguBadge').innerText = waiting;
        document.getElementById('ditanggapiBadge').innerText = replied;
        document.getElementById('dihapusBadge').innerText = deletedCount;

        const wPct = currentTotal > 0 ? ((waiting / currentTotal) * 100).toFixed(1) : 0;
        const rPct = currentTotal > 0 ? ((replied / currentTotal) * 100).toFixed(1) : 0;

        document.getElementById('menungguPercentage').innerText = `${wPct}% dari total tabel`;
        document.getElementById('ditanggapiPercentage').innerText = `${rPct}% dari total tabel`;
    }

    function renderTable(dataToRender) {
        const tableBody = document.getElementById('pesanTableBody');
        const noDataState = document.getElementById('noDataState');
        const tableWrapper = tableBody.closest('table').parentElement;
        
        tableBody.innerHTML = '';

        if (dataToRender.length === 0) {
            tableWrapper.classList.add('hidden');
            noDataState.classList.remove('hidden');
            return;
        } else {
            tableWrapper.classList.remove('hidden');
            noDataState.classList.add('hidden');
        }

        dataToRender.forEach(msg => {
            const row = `
                <tr class="hover:bg-gray-50/80 transition-all border-b border-gray-100">
                    <td class="py-4 px-6 align-middle font-medium text-gray-800 whitespace-nowrap">
                        ${msg.id_pesan}
                    </td>
                    <td class="py-4 px-6 align-middle">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full ${msg.bg_inisial} text-white flex items-center justify-center text-xs font-bold flex-shrink-0">
                                ${msg.inisial}
                            </div>
                            <div class="min-w-0">
                                <h4 class="text-sm font-semibold text-gray-800 truncate" title="${msg.nama}">${msg.nama}</h4>
                                <p class="text-xs text-gray-400 mt-0.5 truncate">${msg.username}</p>
                            </div>
                        </div>
                    </td>
                    <td class="py-4 px-6 align-middle">
                        <p class="text-sm text-gray-600 line-clamp-2 pr-4 leading-relaxed">${msg.pesan}</p>
                    </td>
                    <td class="py-4 px-6 align-middle text-center">
                        <span class="${getStatusClass(msg.status)}">${msg.status}</span>
                    </td>
                    <td class="py-4 px-6 align-middle">
                        <div class="text-xs font-semibold text-gray-700 whitespace-nowrap">${msg.tanggal}</div>
                        <div class="text-[11px] text-gray-400 mt-0.5 whitespace-nowrap">${msg.waktu}</div>
                    </td>
                    <td class="py-4 px-6 align-middle text-right">
                        <div class="flex items-center justify-end gap-2">
                            <button onclick="goToReply(${msg.id})" class="px-3 py-1.5 border border-purple-200 text-purple-600 hover:bg-purple-50 hover:border-purple-300 rounded-lg transition-all flex items-center gap-1.5 text-sm font-medium" title="Balas">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6" />
                                </svg>
                                Balas
                            </button>
                            <button onclick="deletePesan(${msg.id})" class="p-1.5 border border-transparent text-gray-400 hover:text-red-600 hover:bg-red-50 hover:border-red-100 rounded-lg transition-all flex-shrink-0" title="Hapus">
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

        const filtered = messages.filter(msg => {
            const matchSearch = msg.nama.toLowerCase().includes(query) || 
                                msg.id_pesan.toLowerCase().includes(query) || 
                                msg.pesan.toLowerCase().includes(query);
            const matchStatus = status === 'Semua' || msg.status === status;
            const matchDate = dateVal === '' || msg.raw_date === dateVal;

            return matchSearch && matchStatus && matchDate;
        });

        renderTable(filtered);
    }

    document.getElementById('searchInput').addEventListener('input', handleFilters);
    document.getElementById('statusFilter').addEventListener('change', handleFilters);
    document.getElementById('dateFilter').addEventListener('change', handleFilters);

    function deletePesan(id) {
        if(confirm('Apakah Anda yakin ingin menghapus pesan ini?')) {
            messages = messages.filter(t => t.id !== id);
            deletedCount++;
            handleFilters();
        }
    }
    
    function goToReply(id) {
        const msg = initialMessages.find(t => t.id === id);
        if(msg) {
            localStorage.setItem('selected_msg', JSON.stringify(msg));
        }
        window.location.href = `{{ route('admin.pesan.balas') }}`;
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
        } else if(dir === 'next' && currentPage < 16) {
            setPage(currentPage + 1);
        }
        document.activeElement.blur();
    }

    document.addEventListener('DOMContentLoaded', () => {
        renderTable(messages);
    });
</script>
@endsection