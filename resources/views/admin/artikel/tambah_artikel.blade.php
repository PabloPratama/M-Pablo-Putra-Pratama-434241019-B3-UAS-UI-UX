@extends('admin.layouts.app')

@section('title', 'Tambah Artikel')

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
    #btnSubmit { background-color: #7C3AED !important; }
    #btnSubmit:hover { background-color: #6D28D9 !important; }
    
    .editor-toolbar { border-bottom: 1px solid #E5E7EB; background: #F9FAFB; }
    .editor-toolbar button { padding: 4px 12px; font-weight: bold; color: #374151; font-size: 0.75rem; border: 1px solid #E5E7EB; background: white; border-radius: 6px; margin: 2px; }
    .editor-toolbar button:hover { background: #7C3AED; color: white; border-color: #7C3AED; }
    input:focus, select:focus { 
        outline: none !important; 
        border-color: #7C3AED !important; 
        box-shadow: 0 0 0 1px #7C3AED !important; 
    }

    textarea:focus:not(#inputContent) {
        outline: none !important; 
        border-color: #7C3AED !important; 
        box-shadow: 0 0 0 1px #7C3AED !important;
    }

    #inputContent:focus {
        border-color: #E5E7EB !important; 
        box-shadow: none !important;      
        outline: none !important;
    }
</style>

<div id="toastContainer"></div>

<div class="pt-4 pb-12 px-4 md:px-6 min-h-screen bg-gray-50">
    <div class="max-w-7xl mx-auto">
        <div class="flex items-center gap-4 mb-8">
            <a href="{{ route('admin.artikel.index') }}" class="btn-back-hover p-2 bg-white border border-gray-200 rounded-xl transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg>
            </a>
            <h1 class="text-xl md:text-2xl font-bold text-gray-800">Tambah Artikel</h1>
        </div>

        <form id="articleForm" class="grid grid-cols-1 xl:grid-cols-3 gap-6">
            <div class="xl:col-span-2 space-y-6">
                <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm space-y-5">
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Judul Artikel <span class="text-red-500">*</span></label>
                        <input type="text" id="inputTitle" placeholder="Masukkan judul artikel" class="w-full px-4 py-3 border border-gray-200 rounded-xl text-sm transition-all">
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Ringkasan Artikel <span class="text-red-500">*</span></label>
                        <textarea id="inputSummary" placeholder="Tulis ringkasan singkat artikel..." rows="4" class="w-full px-4 py-3 border border-gray-200 rounded-xl text-sm resize-none"></textarea>
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Konten Artikel <span class="text-red-500">*</span></label>
                        <div class="border border-gray-200 rounded-xl overflow-hidden">
                            <div class="editor-toolbar flex gap-1 px-2 py-1">
                                <button type="button" onclick="insertFormat('**')">B</button>
                                <button type="button" onclick="insertFormat('*')">I</button>
                                <button type="button" onclick="insertFormat('__')">U</button>
                            </div>
                            <textarea id="inputContent" placeholder="Tulis isi konten artikel..." rows="10" class="w-full px-4 py-3 border-t-0 border-none rounded-b-xl text-sm resize-none"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
                    <label class="block text-sm font-bold text-gray-700 mb-2">Gambar Utama</label>
                    <div onclick="document.getElementById('imageInput').click()" class="border-2 border-dashed border-gray-200 rounded-2xl p-6 text-center cursor-pointer min-h-[220px] flex flex-col items-center justify-center hover:border-purple-400 transition-all">
                        <img id="imagePreview" src="" class="hidden w-full h-full object-cover mb-2 rounded-xl">
                        <p id="dropText" class="text-sm font-bold text-[#7C3AED]">Klik untuk upload gambar</p>
                        <p class="text-xs text-gray-400 mt-2">Format: JPG, PNG</p>
                    </div>
                    <input type="file" id="imageInput" accept="image/*" class="hidden">
                </div>

                <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm space-y-4">
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Status</label>
                        <select id="statusSelect" class="w-full p-2.5 border border-gray-200 rounded-xl text-sm">
                            <option value="Draft">Draft</option>
                            <option value="Published">Published</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Tanggal Publish</label>
                        <input type="datetime-local" id="publishDateInput" class="w-full p-2.5 border border-gray-200 rounded-xl text-sm">
                    </div>
                </div>

                <div class="flex justify-end gap-3">
                    <a href="{{ route('admin.artikel.index') }}" class="px-6 py-2.5 bg-white border border-gray-200 font-bold text-sm rounded-xl hover:bg-gray-50">Batal</a>
                    <button type="button" id="btnSubmit" onclick="saveAndRedirect()" class="px-6 py-2.5 font-bold text-sm text-white rounded-xl shadow-md">Simpan Artikel</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    function showToast(message) {
        const container = document.getElementById('toastContainer');
        const toast = document.createElement('div');
        toast.className = 'toast';
        toast.innerHTML = `<svg class="h-5 w-5 mt-0.2 text-[#92400E]" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg> <span class="font-bold text-sm">${message}</span>`;
        container.appendChild(toast);
        setTimeout(() => toast.remove(), 3000);
    }

    function insertFormat(char) {
        const textarea = document.getElementById('inputContent');
        textarea.value += char + "Teks" + char;
    }

    document.getElementById('imageInput').onchange = function(e) {
        const reader = new FileReader();
        reader.onload = function(evt) {
            document.getElementById('imagePreview').src = evt.target.result;
            document.getElementById('imagePreview').dataset.src = evt.target.result;
            document.getElementById('imagePreview').classList.remove('hidden');
            document.getElementById('dropText').classList.add('hidden');
        };
        reader.readAsDataURL(e.target.files[0]);
    };

    function saveAndRedirect() {
        const title = document.getElementById('inputTitle').value;
        const summary = document.getElementById('inputSummary').value;
        const content = document.getElementById('inputContent').value;

        let missingFields = [];
        if (!title) missingFields.push("Judul");
        if (!summary) missingFields.push("Ringkasan");
        if (!content) missingFields.push("Konten");

        if(missingFields.length > 0) {
            showToast("Mohon lengkapi data yang wajib di isi");
            return;
        }

        const newArticle = {
            id: Date.now(),
            title: title,
            summary: summary,
            status: document.getElementById('statusSelect').value,
            date: document.getElementById('publishDateInput').value,
            image: document.getElementById('imagePreview').dataset.src || '',
            content: content
        };

        let articles = JSON.parse(sessionStorage.getItem('my_temp_articles') || '[]');
        articles.push(newArticle);
        sessionStorage.setItem('my_temp_articles', JSON.stringify(articles));
        
        window.location.href = "{{ route('admin.artikel.index') }}";
    }

    document.addEventListener('DOMContentLoaded', () => {
        const now = new Date();
        now.setMinutes(now.getMinutes() - now.getTimezoneOffset());
        document.getElementById('publishDateInput').value = now.toISOString().slice(0, 16);
    });
</script>
@endsection