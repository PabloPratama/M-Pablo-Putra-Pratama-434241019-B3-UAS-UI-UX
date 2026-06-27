@extends('admin.layouts.app')

@section('title', 'Kelola Pengguna')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>
    body, div, table, h1, h2, h3, h4, p, span, select, button, input, th, td {
        font-family: 'Poppins', sans-serif !important;
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
</style>

<div class="py-6 px-4 sm:px-6 min-h-screen bg-gray-50 w-full box-border block">
    
    <div class="flex flex-col gap-4 mb-6">
        <div>
            <h1 class="text-xl md:text-2xl font-bold text-gray-800">Kelola Pengguna</h1>
            <p class="text-xs sm:text-sm text-gray-500 mt-1">Kelola semua pengguna yang terdaftar di platform</p>
        </div>
        
        <div class="flex flex-row items-center gap-3 w-full max-w-xl">
            <div class="relative flex-1">
                <input type="text" id="searchInput" placeholder="Cari pengguna..." 
                    class="w-full pl-10 pr-4 py-2.5 bg-white border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-purple-400 focus:border-transparent transition-all">
                <div class="absolute left-3 top-3 text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
        <div class="bg-white p-5 rounded-2xl shadow-sm border border-gray-100 flex flex-col justify-between min-h-[120px]">
            <div class="flex items-center justify-between mb-2">
                <span class="p-3 rounded-xl text-purple-600 flex-shrink-0" style="color: #7C3AED; background-color: #F5F3FF;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </span>
                <div class="text-right">
                    <p class="text-xs font-medium text-gray-400 uppercase tracking-wider">Total Pengguna</p>
                    <h3 id="totalUsersBadge" class="text-2xl font-bold text-gray-800 mt-1">0</h3>
                </div>
            </div>
            <span class="text-xs font-semibold text-green-500 flex items-center gap-1 mt-2">
                ↑ +230 <span class="text-gray-400 font-normal">dari bulan lalu</span>
            </span>
        </div>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden w-full">
        <div class="w-full overflow-x-auto">
            <table class="w-full text-left border-collapse min-w-[800px]">
                <thead>
                    <tr class="bg-gray-50 text-gray-500 text-xs font-semibold uppercase tracking-wider border-b border-gray-200">
                        <th class="py-4 px-6 w-[30%]">Pengguna</th>
                        <th class="py-4 px-6 w-[25%]">Email</th>
                        <th class="py-4 px-6 w-[15%]">Bergabung</th>
                        <th class="py-4 px-6 w-[15%]">Terakhir Aktif</th>
                        <th class="py-4 px-6 w-[15%] text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody id="userTableBody" class="text-sm text-gray-700 divide-y divide-gray-100">
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
                <h3 class="text-gray-500 font-semibold text-sm">Tidak ada pengguna yang sesuai</h3>
                <p class="text-gray-400 text-xs mt-1">Coba gunakan kata kunci pencarian yang lain</p>
            </div>
        </div>

        <div class="py-4 px-6 border-t border-gray-100 flex flex-col sm:flex-row items-center justify-between gap-4 w-full">
            <p id="paginationInfo" class="text-xs sm:text-sm text-gray-500 order-2 sm:order-1 text-center sm:text-left">
                Menampilkan 1 - 5 dari 5 pengguna
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
    // 5 Dummy Data
    const initialUsers = [
        { id: 1, name: "Dewi Lestari", username: "@dewiles", email: "dewi.lestari@example.com", joined: "28 Mei 2024", lastActive: "28 Mei 2024, 14:32 WIB", initial: "DP", bgColor: "bg-indigo-600" },
        { id: 2, name: "Ahmad Fadli", username: "@ahmadfadli", email: "ahmad.fadli@example.com", joined: "27 Mei 2024", lastActive: "27 Mei 2024, 11:15 WIB", initial: "AF", bgColor: "bg-blue-600" },
        { id: 3, name: "Siti Nurhaliza", username: "@sitinurhaliza", email: "siti.nurhaliza@example.com", joined: "26 Mei 2024", lastActive: "26 Mei 2024, 09:45 WIB", initial: "SN", bgColor: "bg-purple-600" },
        { id: 4, name: "Rizky Pratama", username: "@rizkypratama", email: "rizky.pratama@example.com", joined: "25 Mei 2024", lastActive: "25 Mei 2024, 16:20 WIB", initial: "RP", bgColor: "bg-purple-500" },
        { id: 5, name: "Putri Anggraini", username: "@putrianggi", email: "putri.anggraini@example.com", joined: "24 Mei 2024", lastActive: "24 Mei 2024, 10:05 WIB", initial: "PA", bgColor: "bg-indigo-700" }
    ];

    let users = [...initialUsers];
    let currentPage = 1;
    const totalPages = 4; 

    function loadUsersFromStorage() {
        const editedInitial = JSON.parse(sessionStorage.getItem('edited_initial_users') || '{}');
        users = initialUsers.map(user => {
            return editedInitial[user.id] ? { ...user, ...editedInitial[user.id] } : user;
        });
    }

    function updateBadges() {
        document.getElementById('totalUsersBadge').innerText = users.length;
    }

    function renderTable(dataToRender) {
        const tableBody = document.getElementById('userTableBody');
        const noDataState = document.getElementById('noDataState');
        const paginationInfo = document.getElementById('paginationInfo');
        const tableWrapper = tableBody.parentElement.parentElement;
        
        tableBody.innerHTML = '';

        if (dataToRender.length === 0) {
            tableWrapper.classList.add('hidden');
            noDataState.classList.remove('hidden');
            paginationInfo.innerText = "Menampilkan 0 - 0 dari 0 pengguna";
            return;
        } else {
            tableWrapper.classList.remove('hidden');
            noDataState.classList.add('hidden');
        }

        dataToRender.forEach(user => {
            const dateParts = user.lastActive.split(', ');
            const dateOnly = dateParts[0] || "-";
            const timeOnly = dateParts[1] || "";

            const row = `
                <tr class="hover:bg-gray-50/80 transition-all border-b border-gray-100">
                    <td class="py-4 px-6 align-middle">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-full flex items-center justify-center text-white font-bold text-sm ${user.bgColor} flex-shrink-0">
                                ${user.initial}
                            </div>
                            <div class="min-w-0 flex-1">
                                <h4 class="text-sm font-bold text-gray-800 truncate" title="${user.name}">${user.name}</h4>
                                <p class="text-xs text-gray-400 mt-1 truncate">${user.username}</p>
                            </div>
                        </div>
                    </td>
                    <td class="py-4 px-6 text-sm font-medium text-gray-600 align-middle">
                        <div class="truncate" title="${user.email}">${user.email}</div>
                    </td>
                    <td class="py-4 px-6 text-sm font-medium text-gray-600 align-middle">
                        ${user.joined}
                    </td>
                    <td class="py-4 px-6 align-middle">
                        <div class="text-xs font-semibold text-gray-700 whitespace-nowrap">${dateOnly}</div>
                        <div class="text-[11px] text-gray-400 mt-0.5 whitespace-nowrap">${timeOnly}</div>
                    </td>
                    <td class="py-4 px-6 align-middle text-center">
                        <div class="flex items-center justify-center gap-1.5">
                            <a href="{{ route('admin.pengguna.detail') }}?id=${user.id}" class="p-2 bg-gray-50 text-gray-400 hover:text-purple-600 hover:bg-purple-50 rounded-lg transition-all" title="Detail">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </a>
                            <a href="{{ route('admin.pengguna.edit') }}?id=${user.id}" class="p-2 bg-gray-50 text-gray-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all" title="Edit">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                            </a>
                        </div>
                    </td>
                </tr>
            `;
            tableBody.insertAdjacentHTML('beforeend', row);
        });

        paginationInfo.innerText = `Menampilkan 1 - ${dataToRender.length} dari ${users.length} pengguna`;
    }

    document.getElementById('searchInput').addEventListener('input', function(e) {
        const query = e.target.value.toLowerCase();
        const filtered = users.filter(user => 
            user.name.toLowerCase().includes(query) || 
            user.username.toLowerCase().includes(query) ||
            user.email.toLowerCase().includes(query)
        );
        renderTable(filtered);
    });

    function setPage(page) {
        currentPage = page;
        const btns = document.querySelectorAll('.btn-pagination');
        btns.forEach(btn => btn.classList.remove('active'));
        const activeBtn = document.getElementById(`page-${page}`);
        if (activeBtn) { activeBtn.classList.add('active'); }
    }

    function changePage(dir) {
        const total = 4; 
        if(dir === 'prev' && currentPage > 1) { setPage(currentPage - 1); } 
        else if(dir === 'next' && currentPage < total) { setPage(currentPage + 1); }
        document.activeElement.blur();
    }

    document.addEventListener('DOMContentLoaded', () => {
        loadUsersFromStorage(); 
        renderTable(users);
        updateBadges();
    });
</script>
@endsection