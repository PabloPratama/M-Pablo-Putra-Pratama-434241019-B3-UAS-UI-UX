@extends('admin.layouts.app')

@section('title', 'Detail Pengguna')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>
    body, h1, h2, p, span, div { font-family: 'Poppins', sans-serif !important; }
    
    .btn-back-hover:hover { background-color: #7C3AED !important; }
    .btn-back-hover:hover svg { stroke: white !important; }
</style>

<div class="pt-4 pb-12 px-4 md:px-6 min-h-screen bg-gray-50 flex justify-center">
    <div class="w-full max-w-4xl">
        
        <div class="flex items-center gap-4 mb-8">
            <a href="{{ route('admin.pengguna.index') }}" class="btn-back-hover p-2 bg-white border border-gray-200 rounded-xl transition-all shadow-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </a>
            <h1 class="text-xl md:text-2xl font-bold text-gray-800">Detail Pengguna</h1>
        </div>

        <div class="bg-white p-6 md:p-10 rounded-2xl border border-gray-100 shadow-sm w-full">
            
            <div class="flex items-center gap-5 mb-10">
                <div id="userInitial" class="w-16 h-16 md:w-20 md:h-20 rounded-full flex items-center justify-center text-white font-bold text-2xl md:text-3xl bg-gray-300 flex-shrink-0 shadow-sm">
                    --
                </div>
                <div class="flex flex-col justify-center">
                    <h2 id="userName" class="text-xl md:text-2xl font-bold text-gray-800 tracking-tight">-</h2>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12 relative">
                
                <div class="space-y-5">
                    <div class="grid grid-cols-3 gap-4 items-start">
                        <div class="text-sm font-medium text-gray-500">Email</div>
                        <div id="userEmail" class="col-span-2 text-sm font-bold text-gray-800 break-all">-</div>
                    </div>
                    <div class="grid grid-cols-3 gap-4 items-start">
                        <div class="text-sm font-medium text-gray-500">Username</div>
                        <div id="userUsername" class="col-span-2 text-sm font-bold text-gray-800">-</div>
                    </div>
                    <div class="grid grid-cols-3 gap-4 items-start">
                        <div class="text-sm font-medium text-gray-500">Bergabung Sejak</div>
                        <div id="userJoined" class="col-span-2 text-sm font-bold text-gray-800">-</div>
                    </div>
                    <div class="grid grid-cols-3 gap-4 items-start">
                        <div class="text-sm font-medium text-gray-500">Terakhir Aktif</div>
                        <div id="userLastActive" class="col-span-2 text-sm font-bold text-gray-800">-</div>
                    </div>
                </div>

                <div class="hidden md:block absolute left-1/2 top-0 bottom-0 w-px bg-gray-100 transform -translate-x-1/2"></div>
                <div class="md:hidden w-full h-px bg-gray-100"></div>

                <div class="space-y-6 flex flex-col justify-center">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-xl bg-purple-50 flex items-center justify-center text-purple-600 flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                            </div>
                            <span class="text-sm font-bold text-gray-800">Total Novel Dibaca</span>
                        </div>
                        <span id="totalNovel" class="text-sm font-medium text-gray-600">0 novel</span>
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-xl bg-purple-50 flex items-center justify-center text-purple-600 flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </div>
                            <span class="text-sm font-bold text-gray-800">Total Komentar</span>
                        </div>
                        <span id="totalKomentar" class="text-sm font-medium text-gray-600">0 komentar</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
    // Data Array
    const initialUsers = [
        { id: 1, name: "Dewi Lestari", username: "@dewiles", email: "dewi.lestari@example.com", joined: "28 Mei 2024", lastActive: "28 Mei 2024, 14:32 WIB", initial: "DP", bgColor: "bg-indigo-600" },
        { id: 2, name: "Ahmad Fadli", username: "@ahmadfadli", email: "ahmad.fadli@example.com", joined: "27 Mei 2024", lastActive: "27 Mei 2024, 11:15 WIB", initial: "AF", bgColor: "bg-blue-600" },
        { id: 3, name: "Siti Nurhaliza", username: "@sitinurhaliza", email: "siti.nurhaliza@example.com", joined: "26 Mei 2024", lastActive: "26 Mei 2024, 09:45 WIB", initial: "SN", bgColor: "bg-purple-600" },
        { id: 4, name: "Rizky Pratama", username: "@rizkypratama", email: "rizky.pratama@example.com", joined: "25 Mei 2024", lastActive: "25 Mei 2024, 16:20 WIB", initial: "RP", bgColor: "bg-purple-500" },
        { id: 5, name: "Putri Anggraini", username: "@putrianggi", email: "putri.anggraini@example.com", joined: "24 Mei 2024", lastActive: "24 Mei 2024, 10:05 WIB", initial: "PA", bgColor: "bg-indigo-700" }
    ];

    document.addEventListener('DOMContentLoaded', () => {
        const urlParams = new URLSearchParams(window.location.search);
        const detailId = parseInt(urlParams.get('id')) || 1; // Default id 1 jika tidak ada parameter
        const editedInitial = JSON.parse(sessionStorage.getItem('edited_initial_users') || '{}');
        let users = initialUsers.map(u => editedInitial[u.id] ? { ...u, ...editedInitial[u.id] } : u);

        const user = users.find(u => u.id === detailId);

        if (user) {
            // Set Profil Atas
            const initialEl = document.getElementById('userInitial');
            initialEl.textContent = user.initial;
            initialEl.className = `w-16 h-16 md:w-20 md:h-20 rounded-full flex items-center justify-center text-white font-bold text-2xl md:text-3xl ${user.bgColor} flex-shrink-0 shadow-sm`;
            
            document.getElementById('userName').textContent = user.name;
            
            // Set Info Kiri
            document.getElementById('userEmail').textContent = user.email;
            document.getElementById('userUsername').textContent = user.username;
            document.getElementById('userJoined').textContent = user.joined;
            document.getElementById('userLastActive').textContent = user.lastActive;

            // Set Statistik Dummy Kanan berdasarkan ID 
            document.getElementById('totalNovel').textContent = `${(user.id * 7) + 12} novel`;
            document.getElementById('totalKomentar').textContent = `${(user.id * 4) + 3} komentar`;
        }
    });
</script>
@endsection