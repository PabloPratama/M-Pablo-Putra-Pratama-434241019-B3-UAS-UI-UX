@extends('admin.layouts.app')

@section('title', 'Edit Pengguna')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>
    body, div, h1, h2, h3, h4, p, span, select, button, input, textarea, label { 
        font-family: 'Poppins', sans-serif !important; 
    }
    
    input:focus, textarea:focus, select:focus { 
        outline: none !important; 
        border-color: #7C3AED !important; 
        box-shadow: 0 0 0 1px #7C3AED !important; 
    }

    .btn-back-hover:hover { background-color: #7C3AED !important; }
    .btn-back-hover:hover svg { stroke: white !important; }
    
    #btnSubmit { background-color: #7C3AED !important; }
    #btnSubmit:hover { background-color: #6D28D9 !important; transition: 0.3s; }
</style>

<div id="successToast" class="fixed -top-24 left-1/2 transform -translate-x-1/2 transition-all duration-500 z-50 flex items-center gap-3 bg-white border border-green-200 shadow-xl px-5 py-3.5 rounded-2xl">
    <div class="flex-shrink-0 w-8 h-8 flex items-center justify-center bg-green-100 text-green-600 rounded-full">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
        </svg>
    </div>
    <span class="text-sm font-bold text-gray-800">Pesan berhasil dikirim</span>
</div>

<div class="pt-4 pb-12 px-4 md:px-6 min-h-screen bg-gray-50">
    <div class="max-w-4xl mx-auto space-y-6">
        
        <div class="flex items-center gap-4 mb-8">
            <a href="{{ route('admin.pengguna.index') }}" class="btn-back-hover p-2 bg-white border border-gray-200 rounded-xl transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg>
            </a>
            <h1 class="text-xl md:text-2xl font-bold text-gray-800">Edit Pengguna</h1>
        </div>

        <div class="bg-white p-6 md:p-8 rounded-2xl border border-gray-100 shadow-sm w-full">
            <h2 class="text-lg font-bold text-gray-800 mb-6">Informasi Pengguna</h2>
            
            <div class="flex items-center gap-4 mb-8">
                <div id="userInitial" class="w-14 h-14 rounded-full flex items-center justify-center text-white font-bold text-xl bg-gray-300 flex-shrink-0">
                    --
                </div>
                <div>
                    <h3 id="userName" class="text-base font-bold text-gray-800">-</h3>
                    <p id="userUsername" class="text-sm text-gray-500 mt-0.5">-</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div>
                    <p class="text-xs text-gray-400 mb-1">Email</p>
                    <p id="userEmail" class="text-sm font-medium text-gray-800 break-all">-</p>
                </div>
                <div>
                    <p class="text-xs text-gray-400 mb-1">Bergabung Sejak</p>
                    <p id="userJoined" class="text-sm font-medium text-gray-800">-</p>
                </div>
                <div>
                    <p class="text-xs text-gray-400 mb-1">Terakhir Aktif</p>
                    <p id="userLastActive" class="text-sm font-medium text-gray-800">-</p>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 md:p-8 rounded-2xl border border-gray-100 shadow-sm w-full">
            <h2 class="text-lg font-bold text-gray-800 mb-1">Suspend Akun</h2>
            <p class="text-sm text-gray-500 mb-6">Suspend akun untuk membatasi akses pengguna ke platform.</p>

            <div class="space-y-6">
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">Status Suspend</label>
                    <select id="statusSuspend" class="w-full px-4 py-3 border border-gray-200 rounded-xl text-sm transition-all bg-white cursor-pointer appearance-none">
                        <option value="tidak_disuspend">Tidak Disuspend</option>
                        <option value="disuspend">Disuspend</option>
                    </select>
                    <p class="text-xs text-gray-400 mt-2">Pilih status untuk suspend atau aktifkan kembali akun pengguna.</p>
                </div>

                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">
                        Alasan Suspend <span class="text-red-500">*</span>
                    </label>
                    <textarea id="alasanSuspend" placeholder="Masukkan alasan suspend akun (opsional)" rows="4" maxlength="500" class="w-full px-4 py-3 border border-gray-200 rounded-xl text-sm resize-none transition-all"></textarea>
                    
                    <div class="flex items-center justify-between mt-2">
                        <div id="warningAlasan" class="hidden flex items-center gap-1 text-red-500 text-xs font-medium transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                            Harap isi form diatas
                        </div>
                        <p class="text-xs text-gray-400 text-right ml-auto">0 / 500</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-start md:justify-start gap-3 mt-4">
            <a href="{{ route('admin.pengguna.index') }}" class="px-6 py-2.5 bg-white border border-gray-200 font-bold text-sm text-gray-700 rounded-xl hover:bg-gray-50 transition-all text-center">Batal</a>
            <button type="button" id="btnSubmit" onclick="kirimBalasan()" class="px-6 py-2.5 font-bold text-sm text-white rounded-xl shadow-md text-center">Kirim Balasan</button>
        </div>

    </div>
</div>

<script>
    const initialUsers = [
        {
            id: 1,
            name: "Dewi Lestari",
            username: "@dewiles",
            email: "dewi.lestari@example.com",
            joined: "28 Mei 2024",
            lastActive: "28 Mei 2024, 14:32 WIB",
            initial: "DP",
            bgColor: "bg-indigo-600"
        },
        {
            id: 2,
            name: "Ahmad Fadli",
            username: "@ahmadfadli",
            email: "ahmad.fadli@example.com",
            joined: "27 Mei 2024",
            lastActive: "27 Mei 2024, 11:15 WIB",
            initial: "AF",
            bgColor: "bg-blue-600"
        },
        {
            id: 3,
            name: "Siti Nurhaliza",
            username: "@sitinurhaliza",
            email: "siti.nurhaliza@example.com",
            joined: "26 Mei 2024",
            lastActive: "26 Mei 2024, 09:45 WIB",
            initial: "SN",
            bgColor: "bg-purple-600"
        },
        {
            id: 4,
            name: "Rizky Pratama",
            username: "@rizkypratama",
            email: "rizky.pratama@example.com",
            joined: "25 Mei 2024",
            lastActive: "25 Mei 2024, 16:20 WIB",
            initial: "RP",
            bgColor: "bg-purple-500"
        },
        {
            id: 5,
            name: "Putri Anggraini",
            username: "@putrianggi",
            email: "putri.anggraini@example.com",
            joined: "24 Mei 2024",
            lastActive: "24 Mei 2024, 10:05 WIB",
            initial: "PA",
            bgColor: "bg-indigo-700"
        }
    ];

    document.addEventListener('DOMContentLoaded', () => {
        // Ambil ID dari URL (contoh: edit_pengguna.blade.php?id=1)
        const urlParams = new URLSearchParams(window.location.search);
        const editId = parseInt(urlParams.get('id')) || 1; // Default ke id 1 jika tidak ada parameter

        const user = initialUsers.find(u => u.id === editId);

        if (user) {
            // Pasang data ke HTML
            const initialEl = document.getElementById('userInitial');
            initialEl.textContent = user.initial;
            initialEl.className = `w-14 h-14 rounded-full flex items-center justify-center text-white font-bold text-xl ${user.bgColor} flex-shrink-0`;
            
            document.getElementById('userName').textContent = user.name;
            document.getElementById('userUsername').textContent = user.username;
            document.getElementById('userEmail').textContent = user.email;
            document.getElementById('userJoined').textContent = user.joined;
            document.getElementById('userLastActive').textContent = user.lastActive;
        }
    });

    function kirimBalasan() {
        const alasan = document.getElementById('alasanSuspend').value.trim();
        const warning = document.getElementById('warningAlasan');
        const toast = document.getElementById('successToast');

        if (!alasan) {
            // Tampilkan peringatan merah
            warning.classList.remove('hidden');
            setTimeout(() => {
                warning.classList.add('hidden');
            }, 3000); // hilang setelah 3 detik
            return;
        }

        // Tampilkan notifikasi sukses
        toast.classList.remove('-top-24');
        toast.classList.add('top-6');

        setTimeout(() => {
            toast.classList.remove('top-6');
            toast.classList.add('-top-24');
        }, 3000);
    }
</script>
@endsection