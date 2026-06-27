@extends('admin.layouts.app')

@section('title', 'Edit Novel')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>
    body, div, h1, h2, h3, h4, p, span, select, button, input, textarea, label { font-family: 'Poppins', sans-serif !important; }
    
    input:focus, textarea:focus, select:focus { outline: none !important; border-color: #7C3AED !important; box-shadow: 0 0 0 1px #7C3AED !important; }

    #toastContainer { position: fixed; top: 20px; left: 50%; transform: translateX(-50%); z-index: 9999; }
    .toast { background: #FEF3C7; color: #92400E; padding: 14px 32px; min-width: 300px; border-radius: 9999px; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1); display: flex; align-items: center; justify-content: center; gap: 12px; animation: toastAnim 3s ease-in-out forwards; border: 1px solid #FDE68A; }
    @keyframes toastAnim { 0% { transform: translateY(-100px); opacity: 0; } 10% { transform: translateY(0); opacity: 1; } 90% { transform: translateY(0); opacity: 1; } 100% { transform: translateY(-100px); opacity: 0; } }

    .btn-back-hover:hover { background-color: #7C3AED !important; }
    .btn-back-hover:hover svg { stroke: white !important; }
    
    .btn-primary { background-color: #7C3AED !important; color: white !important; }
    .btn-primary:hover { background-color: #6D28D9 !important; }

    .btn-outline-primary { border: 1px solid #7C3AED !important; color: #7C3AED !important; background: transparent; }
    .btn-outline-primary:hover { background-color: #F3E8FF !important; }
</style>

<div id="toastContainer"></div>

<div class="pt-4 pb-12 px-4 md:px-6 min-h-screen bg-gray-50">
    <div class="max-w-4xl mx-auto space-y-6">
        <div class="flex items-center gap-4 mb-2">
            <a href="{{ route('admin.produk.index') }}" class="btn-back-hover p-2 bg-white border border-gray-200 rounded-xl transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg>
            </a>
            <div>
                <h1 class="text-xl md:text-2xl font-bold text-gray-800">Edit Novel</h1>
                <p class="text-sm text-gray-500 mt-1">Perbarui informasi novel yang sudah ada.</p>
            </div>
        </div>

        <form id="novelForm" class="space-y-6">
            
            <div class="bg-white p-6 md:p-8 rounded-2xl border border-gray-100 shadow-sm space-y-5">
                <h2 class="text-lg font-bold text-gray-800 mb-4">Informasi Novel</h2>

                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">Sampul Novel <span class="text-red-500">*</span></label>
                    <div onclick="document.getElementById('imageInput').click()" class="w-40 h-56 sm:w-48 sm:h-64 border-2 border-dashed border-gray-200 rounded-2xl p-4 text-center cursor-pointer flex flex-col items-center justify-center hover:border-purple-400 transition-all bg-gray-50 relative overflow-hidden">
                        <img id="imagePreview" src="" class="hidden absolute inset-0 w-full h-full object-cover rounded-xl shadow-sm z-10">
                        <div id="dropText" class="flex flex-col items-center justify-center h-full z-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#7C3AED] mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                            </svg>
                            <p class="text-sm font-bold text-[#7C3AED] leading-tight">Ubah Sampul</p>
                            <p class="text-xs text-gray-400 mt-2">JPG, PNG<br>Maks 2MB</p>
                        </div>
                    </div>
                    <input type="file" id="imageInput" accept="image/jpeg, image/png" class="hidden">
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div class="md:col-span-2">
                        <label class="block text-sm font-bold text-gray-700 mb-2">Judul Novel <span class="text-red-500">*</span></label>
                        <input type="text" id="inputTitle" placeholder="Masukkan judul novel" class="w-full px-4 py-3 border border-gray-200 rounded-xl text-sm transition-all">
                    </div>

                    <div class="md:col-span-2">
                        <label class="block text-sm font-bold text-gray-700 mb-2">Penulis <span class="text-red-500">*</span></label>
                        <input type="text" id="inputAuthor" placeholder="Masukkan nama penulis" class="w-full px-4 py-3 border border-gray-200 rounded-xl text-sm transition-all">
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Genre <span class="text-red-500">*</span></label>
                        <select id="inputGenre" class="w-full px-4 py-3 border border-gray-200 rounded-xl text-sm transition-all bg-white">
                            <option value="" disabled selected>Pilih genre</option>
                            <option value="Romantis">Romantis</option>
                            <option value="Fantasi">Fantasi</option>
                            <option value="Horor">Horor</option>
                            <option value="Misteri">Misteri</option>
                            <option value="Thriller">Thriller</option>
                            <option value="Petualangan">Petualangan</option>
                            <option value="Sci-Fi">Sci-Fi</option>
                            <option value="Drama">Drama</option>
                            <option value="Komedi">Komedi</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Status <span class="text-red-500">*</span></label>
                        <select id="inputStatus" class="w-full px-4 py-3 border border-gray-200 rounded-xl text-sm transition-all bg-white">
                            <option value="Draft">Draft</option>
                            <option value="Published">Published</option>
                        </select>
                    </div>

                    <div class="md:col-span-2">
                        <label class="block text-sm font-bold text-gray-700 mb-2">Deskripsi </label>
                        <textarea id="inputDescription" placeholder="Masukkan deskripsi novel" rows="4" class="w-full px-4 py-3 border border-gray-200 rounded-xl text-sm resize-none transition-all"></textarea>
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Harga <span class="text-red-500">*</span></label>
                        <input type="text" id="inputPrice" placeholder="Contoh: Rp 45.000" class="w-full px-4 py-3 border border-gray-200 rounded-xl text-sm transition-all">
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Dibaca</label>
                        <input type="text" id="inputViews" value="-" readonly class="w-full px-4 py-3 border border-gray-200 bg-gray-100 text-gray-500 cursor-not-allowed rounded-xl text-sm transition-all focus:outline-none">
                    </div>

                    <div class="md:col-span-2">
                        <label class="block text-sm font-bold text-gray-700 mb-2">Ditambahkan Pada </label>
                        <input type="datetime-local" id="inputDate" class="w-full px-4 py-3 border border-gray-200 rounded-xl text-sm transition-all bg-white">
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 md:p-8 rounded-2xl border border-gray-100 shadow-sm space-y-6">
                <div>
                    <h2 class="text-lg font-bold text-gray-800">Upload Bab Tambahan (Opsional)</h2>
                    <p class="text-sm text-gray-500 mt-1">Kosongkan jika tidak ada bab baru yang ingin ditambahkan pada perubahan ini.</p>
                </div>

                <div id="chaptersContainer" class="space-y-6">
                    </div>

                <div class="flex flex-col xl:flex-row items-start xl:items-center justify-between gap-4 pt-2">
                    <div class="flex items-start xl:items-center gap-2 text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#7C3AED] flex-shrink-0 mt-0.5 xl:mt-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                        <span class="text-gray-500">Pastikan file berisi konten bab yang sudah siap dipublikasikan.</span>
                    </div>
                    <button type="button" onclick="addChapter()" class="btn-outline-primary w-full xl:w-auto px-4 py-2 font-bold text-sm rounded-lg flex items-center justify-center gap-1 transition-all">
                        <span>+</span> Tambah Bab Baru
                    </button>
                </div>
            </div>

            <div class="bg-white p-4 rounded-2xl border border-gray-100 shadow-sm flex justify-between items-center">
                <a href="{{ route('admin.produk.index') }}" class="px-8 py-3 bg-white border border-gray-200 font-bold text-sm text-gray-700 rounded-xl hover:bg-gray-50 transition-all">Batal</a>
                <button type="button" onclick="saveAndRedirect()" class="btn-primary px-8 py-3 font-bold text-sm rounded-xl shadow-md transition-all">Simpan Perubahan</button>
            </div>
            
        </form>
    </div>
</div>

<script>
    // Menyalin initialProducts agar sinkron dengan yang ada di produk.blade.php
    const initialProducts = [
        { id: 1, title: "Rumah Penunggu", chapters: "50 Bab", author: "Nathania Putri", genre: "Horor", status: "Published", price: "Rp 45.000", views: "125.430", date: "28 Mei 2024, 10:30 WIB", image: "{{ asset('images/As7.png') }}" },
        { id: 2, title: "Parasit", chapters: "32 Bab", author: "Hiro Jonathan", genre: "Horor", status: "Published", price: "Rp 35.000", views: "98.210", date: "27 Mei 2024, 16:45 WIB", image: "{{ asset('images/As26.png') }}" },
        { id: 3, title: "Jejak yang hilang", chapters: "26 Bab", author: "Theo Nirwana", genre: "Thriller", status: "Published", price: "Rp 50.000", views: "76.543", date: "26 Mei 2024, 09:15 WIB", image: "{{ asset('images/As20.png') }}" },
        { id: 4, title: "Santet", chapters: "18 Bab", author: "Tasya Aprilia", genre: "Horor", status: "Published", price: "Rp 32.000", views: "62.109", date: "25 Mei 2024, 14:20 WIB", image: "{{ asset('images/As31.png') }}" },
        { id: 5, title: "Project Nova", chapters: "30 Bab", author: "Alyssa Clara", genre: "Sci-Fi", status: "Draft", price: "Rp 40.000", views: "46.322", date: "28 Mei 2024, 13:25 WIB", image: "{{ asset('images/As21.png') }}" }
    ];

    let currentEditingProduct = null;
    let isInitialProduct = false;

    // Load Data Saat Halaman Dibuka
    document.addEventListener('DOMContentLoaded', () => {
        // Ambil ID dari URL (Misal: edit_produk?id=1)
        const urlParams = new URLSearchParams(window.location.search);
        const productId = urlParams.get('id');

        if(productId) {
            loadProductData(productId);
        } else {
            showToast("ID Novel tidak ditemukan!");
        }
    });

    function loadProductData(id) {
        // Cari di data yang ditambahkan (session)
        let tempProducts = JSON.parse(sessionStorage.getItem('my_temp_products') || '[]');
        let product = tempProducts.find(p => p.id == id);

        if (product) {
            currentEditingProduct = product;
        } else {
            // Cari di data awal (initial)
            let baseProduct = initialProducts.find(p => p.id == id);
            if(baseProduct) {
                // Cek apakah data initial ini sudah pernah diedit sebelumnya
                const editedInitial = JSON.parse(sessionStorage.getItem('edited_initial_products') || '{}');
                product = editedInitial[id] ? { ...baseProduct, ...editedInitial[id] } : baseProduct;
                currentEditingProduct = product;
                isInitialProduct = true;
            }
        }

        if (currentEditingProduct) {
            // Mengisi field form
            document.getElementById('inputTitle').value = currentEditingProduct.title || '';
            document.getElementById('inputAuthor').value = currentEditingProduct.author || '';
            document.getElementById('inputGenre').value = currentEditingProduct.genre || '';
            document.getElementById('inputStatus').value = currentEditingProduct.status || 'Draft';
            document.getElementById('inputDescription').value = currentEditingProduct.description || '';
            document.getElementById('inputPrice').value = currentEditingProduct.price || '';
            document.getElementById('inputViews').value = currentEditingProduct.views || '-';

            // Menyesuaikan Tanggal
            if(currentEditingProduct.date && currentEditingProduct.date.includes('T')) {
                document.getElementById('inputDate').value = currentEditingProduct.date;
            } else {
                 // Fallback format waktu saat ini jika format tanggal tidak valid untuk input datetime-local
                const now = new Date();
                now.setMinutes(now.getMinutes() - now.getTimezoneOffset());
                document.getElementById('inputDate').value = now.toISOString().slice(0, 16);
            }

            // Menampilkan Gambar
            if(currentEditingProduct.image) {
                document.getElementById('imagePreview').src = currentEditingProduct.image;
                document.getElementById('imagePreview').dataset.src = currentEditingProduct.image;
                document.getElementById('imagePreview').classList.remove('hidden');
            }
        }
    }

    // Toast Notification
    function showToast(message) {
        const container = document.getElementById('toastContainer');
        const toast = document.createElement('div');
        toast.className = 'toast';
        toast.innerHTML = `<svg class="h-5 w-5 mt-0.2 text-[#92400E]" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg> <span class="font-bold text-sm">${message}</span>`;
        container.appendChild(toast);
        setTimeout(() => toast.remove(), 3000);
    }

    // Preview Upload Sampul
    document.getElementById('imageInput').onchange = function(e) {
        if(e.target.files && e.target.files[0]) {
            const reader = new FileReader();
            reader.onload = function(evt) {
                document.getElementById('imagePreview').src = evt.target.result;
                document.getElementById('imagePreview').dataset.src = evt.target.result;
                document.getElementById('imagePreview').classList.remove('hidden');
            };
            reader.readAsDataURL(e.target.files[0]);
        }
    };

    // Logika Dinamis Tambah Bab
    function addChapter() {
        const container = document.getElementById('chaptersContainer');
        const chapterCount = document.querySelectorAll('.chapter-block').length + 1;
        
        const newChapterHTML = `
            <div class="chapter-block space-y-4 border border-gray-100 p-5 rounded-xl bg-gray-50/50 relative mt-4">
                <button type="button" onclick="this.parentElement.remove()" class="absolute top-4 right-4 text-red-500 hover:text-red-700 text-sm font-bold">Hapus</button>
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">Judul Bab Baru <span class="text-red-500">*</span></label>
                    <input type="text" placeholder="Contoh: Bab Tambahan ${chapterCount}" class="chapter-title w-full px-4 py-3 border border-gray-200 rounded-xl text-sm transition-all">
                </div>
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">Konten Bab <span class="text-red-500">*</span></label>
                    <div class="border-2 border-dashed border-gray-200 rounded-xl p-6 text-center cursor-pointer flex flex-col items-center justify-center hover:border-purple-400 transition-all bg-white" onclick="this.nextElementSibling.click()">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#7C3AED] mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        <p class="text-sm font-bold text-[#7C3AED] file-name-display">Klik untuk upload file bab</p>
                        <p class="text-xs text-gray-400 mt-1">Format DOCX, TXT. Maks 5MB</p>
                    </div>
                    <input type="file" accept=".docx,.txt,.pdf" class="chapter-file hidden" onchange="updateFileName(this)">
                </div>
            </div>
        `;
        
        container.insertAdjacentHTML('beforeend', newChapterHTML);
    }

    function updateFileName(input) {
        if(input.files && input.files[0]) {
            const display = input.previousElementSibling.querySelector('.file-name-display');
            display.innerText = input.files[0].name;
        }
    }

    // Submit Logika Simpan Perubahan
    function saveAndRedirect() {
        if (!currentEditingProduct) {
            showToast("Data novel tidak valid!");
            return;
        }

        const title = document.getElementById('inputTitle').value;
        const author = document.getElementById('inputAuthor').value;
        const genre = document.getElementById('inputGenre').value;
        const status = document.getElementById('inputStatus').value;
        const desc = document.getElementById('inputDescription').value;
        const price = document.getElementById('inputPrice').value;
        const date = document.getElementById('inputDate').value;
        const image = document.getElementById('imagePreview').dataset.src || currentEditingProduct.image;
        
        // Pengecekan Field yang Kosong
        let missingFields = [];
        if (!image) missingFields.push("Sampul Novel");
        if (!title) missingFields.push("Judul");
        if (!author) missingFields.push("Penulis");
        if (!genre) missingFields.push("Genre");
        if (!price) missingFields.push("Harga");

        if(missingFields.length > 0) {
            showToast("Mohon lengkapi data yang wajib di isi");
            return;
        }

        // Kalkulasi Tambahan Bab
        const newAddedChaptersCount = document.querySelectorAll('.chapter-block').length;
        let newChaptersString = currentEditingProduct.chapters || "0 Bab";
        
        if (newAddedChaptersCount > 0) {
            // Cek apakah judul bab yang diupload sudah diisi
            const firstChapterTitle = document.querySelector('.chapter-title').value;
            if(!firstChapterTitle) {
                showToast("Mohon isi judul untuk bab yang baru ditambahkan!");
                return;
            }
            
            // Ambil angka dari format "50 Bab" sebelumnya
            let existingBabCount = parseInt(newChaptersString) || 0;
            newChaptersString = (existingBabCount + newAddedChaptersCount) + " Bab";
        }

        // Object Data yang Diperbarui
        const updatedData = {
            title: title,
            chapters: newChaptersString,
            author: author,
            genre: genre,
            status: status,
            price: price,
            date: date,
            image: image,
            description: desc
        };

        // Menyimpan Perubahan Sesuai Asal Data
        if (isInitialProduct) {
            // Update initial product array via session storage mechanism
            let editedInitial = JSON.parse(sessionStorage.getItem('edited_initial_products') || '{}');
            editedInitial[currentEditingProduct.id] = updatedData;
            sessionStorage.setItem('edited_initial_products', JSON.stringify(editedInitial));
        } else {
            // Update temp product array
            let tempProducts = JSON.parse(sessionStorage.getItem('my_temp_products') || '[]');
            let index = tempProducts.findIndex(p => p.id == currentEditingProduct.id);
            if(index !== -1) {
                tempProducts[index] = { ...tempProducts[index], ...updatedData };
                sessionStorage.setItem('my_temp_products', JSON.stringify(tempProducts));
            }
        }
        
        // Arahkan kembali ke index produk
        window.location.href = "{{ route('admin.produk.index') }}";
    }
</script>
@endsection