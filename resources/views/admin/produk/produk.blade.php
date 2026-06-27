@extends('admin.layouts.app')

@section('title', 'Kelola Produk')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>
    body, div, table, h1, h2, h3, h4, p, span, select, button, input, th, td {
        font-family: 'Poppins', sans-serif !important;
    }
    
    .status-published { 
        background-color: #DEF7EC !important; 
        color: #03543F !important; 
        padding: 0.35rem 0.75rem !important;
        font-size: 0.75rem !important;
        font-weight: 700 !important;
        border-radius: 0.5rem !important;
        display: inline-block !important;
    }
    
    .status-draft { 
        background-color: #FEF3C7 !important; 
        color: #92400E !important; 
        padding: 0.35rem 0.75rem !important;
        font-size: 0.75rem !important;
        font-weight: 700 !important;
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

    .btn-tambah {
        background-color: #7C3AED; 
    }

    .btn-tambah:hover {
        background-color: #6D28D9 !important; 
        transition: 0.3s;
    }

    .btn-tambah svg {
        position: relative;
        top: -0.1px; 
    }
</style>

<div class="py-6 px-4 sm:px-6 min-h-screen bg-gray-50 w-full box-border block">
    
    <div class="flex flex-col gap-4 mb-6">
        <div>
            <h1 class="text-xl md:text-2xl font-bold text-gray-800">Kelola Produk</h1>
            <p class="text-xs sm:text-sm text-gray-500 mt-1">Kelola semua novel yang tersedia di platform.</p>
        </div>
        
        <div class="flex flex-row items-center gap-3 w-full max-w-xl">
            <div class="relative flex-1">
                <input type="text" id="searchInput" placeholder="Cari novel..." 
                    class="w-full pl-10 pr-4 py-2.5 bg-white border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-purple-400 focus:border-transparent transition-all">
                <div class="absolute left-3 top-3 text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
            </div>
            
            <a href="{{ route('admin.produk.tambah') }}" 
            class="btn-tambah flex items-center justify-center gap-2 text-white px-5 py-2.5 rounded-xl text-sm font-semibold transition-all shadow-sm shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4" />
                </svg>        
                <span class="leading-none">Tambah Novel</span>
            </a>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
        <div class="bg-white p-5 rounded-2xl shadow-sm border border-gray-100 flex flex-col justify-between min-h-[120px]">
            <div class="flex items-center justify-between mb-2">
                <span class="p-3 rounded-xl text-purple-600 flex-shrink-0" style="color: #7C3AED; background-color: #F5F3FF;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                </span>
                <div class="text-right">
                    <p class="text-xs font-medium text-gray-400 uppercase tracking-wider">Total Novel</p>
                    <h3 id="totalProductsBadge" class="text-2xl font-bold text-gray-800 mt-1">0</h3>
                </div>
            </div>
            <span class="text-xs font-semibold text-green-500 flex items-center gap-1 mt-2">
                ↑ +5 <span class="text-gray-400 font-normal">dari bulan lalu</span>
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
                    <p class="text-xs font-medium text-gray-400 uppercase tracking-wider">Novel Aktif</p>
                    <h3 id="activeProductsBadge" class="text-2xl font-bold text-gray-800 mt-1">0</h3>
                </div>
            </div>
            <span id="activePercentage" class="text-xs font-semibold text-gray-500 mt-2">0% dari total</span>
        </div>

        <div class="bg-white p-5 rounded-2xl shadow-sm border border-gray-100 flex flex-col justify-between min-h-[120px]">
            <div class="flex items-center justify-between mb-2">
                <span class="p-3 rounded-xl bg-yellow-50 text-yellow-600 flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </span>
                <div class="text-right">
                    <p class="text-xs font-medium text-gray-400 uppercase tracking-wider">Novel Draft</p>
                    <h3 id="draftProductsBadge" class="text-2xl font-bold text-gray-800 mt-1">0</h3>
                </div>
            </div>
            <span id="draftPercentage" class="text-xs font-semibold text-gray-500 mt-2">0% dari total</span>
        </div>

        <div class="bg-white p-5 rounded-2xl shadow-sm border border-gray-100 flex flex-col justify-between min-h-[120px]">
            <div class="flex items-center justify-between mb-2">
                <span class="p-3 rounded-xl bg-red-50 text-red-600 flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                </span>
                <div class="text-right">
                    <p class="text-xs font-medium text-gray-400 uppercase tracking-wider">Novel Dihapus</p>
                    <h3 id="deletedProductsBadge" class="text-2xl font-bold text-gray-800 mt-1">0</h3>
                </div>
            </div>
            <span id="deletedPercentage" class="text-xs font-semibold text-gray-500 mt-2">0% dari total</span>
        </div>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden w-full">
        <div class="w-full overflow-x-auto">
            <table class="w-full text-left border-collapse min-w-[1050px]">
                <thead>
                    <tr class="bg-gray-50 text-gray-500 text-xs font-semibold uppercase tracking-wider border-b border-gray-200">
                        <th class="py-4 px-6 w-[25%]">Novel</th>
                        <th class="py-4 px-6 w-[15%]">Penulis</th>
                        <th class="py-4 px-6 w-[10%]">Genre</th>
                        <th class="py-4 px-6 w-[10%]">Status</th> <th class="py-4 px-6 w-[10%]">Harga</th>
                        <th class="py-4 px-6 w-[10%]">Dibaca</th>
                        <th class="py-4 px-6 w-[10%]">Ditambahkan</th>
                        <th class="py-4 px-6 w-[10%] text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody id="productTableBody" class="text-sm text-gray-700 divide-y divide-gray-100">
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
                <h3 class="text-gray-500 font-semibold text-sm">Tidak ada novel yang sesuai</h3>
                <p class="text-gray-400 text-xs mt-1">Coba gunakan kata kunci pencarian yang lain</p>
            </div>
        </div>

        <div class="py-4 px-6 border-t border-gray-100 flex flex-col sm:flex-row items-center justify-between gap-4 w-full">
            <p id="paginationInfo" class="text-xs sm:text-sm text-gray-500 order-2 sm:order-1 text-center sm:text-left">
                Menampilkan 1 - 5 dari 5 novel
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
    const initialProducts = [
        {
            id: 1,
            title: "Rumah Penunggu",
            chapters: "50 Bab",
            author: "Nathania Putri",
            genre: "Horor",
            status: "Published",
            price: "Rp 45.000",
            views: "125.430",
            date: "28 Mei 2024, 10:30 WIB",
            image: "{{ asset('images/As7.png') }}"
        },
        {
            id: 2,
            title: "Parasit",
            chapters: "32 Bab",
            author: "Hiro Jonathan",
            genre: "Horor",
            status: "Published",
            price: "Rp 35.000",
            views: "98.210",
            date: "27 Mei 2024, 16:45 WIB",
            image: "{{ asset('images/As26.png') }}"
        },
        {
            id: 3,
            title: "Jejak yang hilang",
            chapters: "26 Bab",
            author: "Theo Nirwana",
            genre: "Thriller",
            status: "Published",
            price: "Rp 50.000",
            views: "76.543",
            date: "26 Mei 2024, 09:15 WIB",
            image: "{{ asset('images/As20.png') }}"
        },
        {
            id: 4,
            title: "Santet",
            chapters: "18 Bab",
            author: "Tasya Aprilia",
            genre: "Horor",
            status: "Published",
            price: "Rp 32.000",
            views: "62.109",
            date: "25 Mei 2024, 14:20 WIB",
            image: "{{ asset('images/As31.png') }}"
        },
        {
            id: 5,
            title: "Project Nova",
            chapters: "30 Bab",
            author: "Alyssa Clara",
            genre: "Sci-Fi",
            status: "Draft",
            price: "Rp 40.000",
            views: "46.322",
            date: "28 Mei 2024, 13:25 WIB",
            image: "{{ asset('images/As21.png') }}"
        }
    ];

    let products = [...initialProducts];
    let deletedCount = 0; 
    let currentPage = 1;
    const totalPages = 4; 

    function loadProductsFromStorage() {
        const editedInitial = JSON.parse(sessionStorage.getItem('edited_initial_products') || '{}');

        products = initialProducts.map(product => {
            return editedInitial[product.id]
                ? { ...product, ...editedInitial[product.id] }
                : product;
        });

        const stored = sessionStorage.getItem('my_temp_products');

        if (stored) {
            const parsed = JSON.parse(stored);
            parsed.forEach((item) => {
                products.push({
                    id: item.id,
                    title: item.title,
                    chapters: item.chapters || "0 Bab", 
                    author: item.author || "Admin",
                    genre: item.genre || "Lainnya",
                    status: item.status || "Draft",
                    price: item.price || "Rp 35.000",
                    views: item.views || "-", 
                    date: item.date,
                    image: item.image
                });
            });
        }
    }

    function getStatusClass(status) {
        if (status === 'Published') return 'status-published';
        if (status === 'Draft') return 'status-draft';
        return '';
    }

    function formatCustomDate(dateString) {
        if (!dateString) return "-";
        if (dateString.includes('WIB')) return dateString;

        const dateObj = new Date(dateString);
        if (isNaN(dateObj.getTime())) return dateString;

        const months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
        const day = dateObj.getDate();
        const month = months[dateObj.getMonth()];
        const year = dateObj.getFullYear();
        let hours = dateObj.getHours().toString().padStart(2, '0');
        let minutes = dateObj.getMinutes().toString().padStart(2, '0');

        return `${day} ${month} ${year}, ${hours}:${minutes} WIB`;
    }

    function updateBadges() {
        const totalActiveAndDraft = products.length;
        const totalOverall = totalActiveAndDraft + deletedCount;

        const active = products.filter(a => a.status === 'Published').length;
        const draft = products.filter(a => a.status === 'Draft').length;

        document.getElementById('totalProductsBadge').innerText = totalActiveAndDraft;
        document.getElementById('activeProductsBadge').innerText = active;
        document.getElementById('draftProductsBadge').innerText = draft;
        document.getElementById('deletedProductsBadge').innerText = deletedCount;

        const activePct = totalOverall > 0 ? Math.round((active / totalOverall) * 100) : 0;
        const draftPct = totalOverall > 0 ? Math.round((draft / totalOverall) * 100) : 0;
        const deletedPct = totalOverall > 0 ? Math.round((deletedCount / totalOverall) * 100) : 0;

        document.getElementById('activePercentage').innerText = `${activePct}% dari total`;
        document.getElementById('draftPercentage').innerText = `${draftPct}% dari total`;
        document.getElementById('deletedPercentage').innerText = `${deletedPct}% dari total`;
    }

    function renderTable(dataToRender) {
        const tableBody = document.getElementById('productTableBody');
        const noDataState = document.getElementById('noDataState');
        const paginationInfo = document.getElementById('paginationInfo');
        const tableWrapper = tableBody.parentElement.parentElement;
        
        tableBody.innerHTML = '';

        if (dataToRender.length === 0) {
            tableWrapper.classList.add('hidden');
            noDataState.classList.remove('hidden');
            paginationInfo.innerText = "Menampilkan 0 - 0 dari 0 novel";
            return;
        } else {
            tableWrapper.classList.remove('hidden');
            noDataState.classList.add('hidden');
        }

        dataToRender.forEach(art => {
            const formattedDate = formatCustomDate(art.date);
            const dateParts = formattedDate.split(', ');
            const dateOnly = dateParts[0] || "-";
            const timeOnly = dateParts[1] || "";

            const row = `
                <tr class="hover:bg-gray-50/80 transition-all border-b border-gray-100">
                    <td class="py-4 px-6 align-middle">
                        <div class="flex items-center gap-4">
                            <img src="${art.image || 'https://via.placeholder.com/64x80?text=No+Image'}" alt="Img" class="w-12 h-14 rounded-xl object-cover shadow-sm bg-gray-100 flex-shrink-0 border border-gray-100">
                            <div class="min-w-0 flex-1">
                                <h4 class="text-sm font-bold text-gray-800 truncate" title="${art.title}">${art.title}</h4>
                                <p class="text-xs text-gray-400 mt-1 line-clamp-2 leading-relaxed">${art.chapters || '-'}</p>
                            </div>
                        </div>
                    </td>
                    <td class="py-4 px-6 text-sm font-semibold text-gray-600 align-middle">
                        <div class="truncate" title="${art.author}">${art.author}</div>
                    </td>
                    <td class="py-4 px-6 align-middle">
                        <span class="bg-purple-200 text-purple-900 px-3 py-1 rounded-md text-xs font-bold">
                            ${art.genre || '-'}
                        </span>
                    </td>
                    <td class="py-4 px-6 align-middle">
                        <span class="${getStatusClass(art.status)}">
                            ${art.status}
                        </span>
                    </td>
                    <td class="py-4 px-6 text-sm font-semibold text-gray-600 align-middle">
                        ${art.price || '-'}
                    </td>
                    <td class="py-4 px-6 text-sm font-semibold text-gray-600 align-middle">
                        ${art.views || '-'}
                    </td>
                    <td class="py-4 px-6 align-middle">
                        <div class="text-xs font-semibold text-gray-700 whitespace-nowrap">${dateOnly}</div>
                        <div class="text-[11px] text-gray-400 mt-0.5 whitespace-nowrap">${timeOnly}</div>
                    </td>
                    <td class="py-4 px-6 align-middle text-center">
                        <div class="flex items-center justify-center gap-1.5">
                            <a href="{{ route('admin.produk.detail') }}?id=${art.id}" class="p-2 bg-gray-50 text-gray-400 hover:text-purple-600 hover:bg-purple-50 rounded-lg transition-all" title="Detail">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </a>
                            <a href="{{ route('admin.produk.edit') }}?id=${art.id}#" class="p-2 bg-gray-50 text-gray-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all" title="Edit">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                            </a>
                            <button onclick="deleteProduct(${art.id})" class="p-2 bg-gray-50 text-gray-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition-all" title="Hapus">
                                <svg xmlns="http://www.w3.org/2000/xl" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </button>
                        </div>
                    </td>
                </tr>
            `;
            tableBody.insertAdjacentHTML('beforeend', row);
        });

        paginationInfo.innerText = `Menampilkan 1 - ${dataToRender.length} dari ${products.length} novel`;
    }

    document.getElementById('searchInput').addEventListener('input', function(e) {
        const query = e.target.value.toLowerCase();
        const filtered = products.filter(art => 
            art.title.toLowerCase().includes(query) || 
            (art.genre && art.genre.toLowerCase().includes(query)) ||
            art.author.toLowerCase().includes(query)
        );
        renderTable(filtered);
    });

    function deleteProduct(id) {
        if(confirm('Apakah Anda yakin ingin menghapus novel ini?')) {

            products = products.filter(a => a.id !== id);
            deletedCount++;

            const stored = sessionStorage.getItem('my_temp_products');

            if (stored) {
                let parsed = JSON.parse(stored);
                parsed = parsed.filter(item => item.id !== id);
                sessionStorage.setItem(
                    'my_temp_products',
                    JSON.stringify(parsed)
                );
            }

            const query = document.getElementById('searchInput').value.toLowerCase();
            const filtered = products.filter(art =>
                art.title.toLowerCase().includes(query)
            );

            renderTable(filtered);
            updateBadges();
        }
    }

    function setPage(page) {
        currentPage = page;
        const btns = document.querySelectorAll('.btn-pagination');
        btns.forEach(btn => btn.classList.remove('active'));
        const activeBtn = document.getElementById(`page-${page}`);
        if (activeBtn) {
            activeBtn.classList.add('active');
        }
    }

    function changePage(dir) {
        const total = 4; 
        if(dir === 'prev' && currentPage > 1) {
            setPage(currentPage - 1);
        } else if(dir === 'next' && currentPage < total) {
            setPage(currentPage + 1);
        }
        document.activeElement.blur();
    }

    document.addEventListener('DOMContentLoaded', () => {
        loadProductsFromStorage(); 
        renderTable(products);
        updateBadges();
    });
</script>
@endsection