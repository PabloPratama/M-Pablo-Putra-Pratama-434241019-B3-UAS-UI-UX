@extends('user.layouts.app')

@section('title', 'Keranjang')

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght=0,400;0,600;0,700;1,400&family=Poppins:wght=300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    .keranjang-page {
        font-family: 'Poppins', sans-serif;
        color: #ffffff;
        padding-bottom: 80px;
    }
    
    .font-cormorant {
        font-family: 'Cormorant Garamond', serif;
    }

    .custom-shadow {
        box-shadow: 0px 10px 40px rgba(124, 58, 237, 0.3);
    }

    .icon-verified {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 15px;
        height: 15px;
        background-color: #D17CE3;
        border-radius: 50%;
        position: relative;
        margin-left: 6px;
        vertical-align: middle;
    }
    .icon-verified::after {
        content: '';
        position: absolute;
        left: 5px;
        top: 2px;
        width: 4px;
        height: 7px;
        border: solid #18092F;
        border-width: 0 1.5px 1.5px 0;
        transform: rotate(45deg);
    }

    .icon-arrow-right {
        margin-left: 8px;
        display: inline-block;
        vertical-align: middle;
    }

    .custom-checkbox {
        appearance: none;
        -webkit-appearance: none;
        width: 22px;
        height: 22px;
        border: 2px solid #D17CE3;
        border-radius: 4px;
        background-color: transparent;
        display: inline-block;
        position: relative;
        cursor: pointer;
        vertical-align: middle;
        margin-top: -2px;
    }
    .custom-checkbox:checked {
        background-color: #D17CE3;
    }
    .custom-checkbox:checked::after {
        content: '';
        position: absolute;
        left: 6px;
        top: 2px;
        width: 6px;
        height: 11px;
        border: solid white;
        border-width: 0 2px 2px 0;
        transform: rotate(45deg);
    }

    .btn-counter:hover {
        background-color: #D17CE3 !important;
        border-color: #D17CE3 !important;
        color: #18092F !important;
    }
    
    .btn-gradient {
        background: linear-gradient(to right, #D17CE3, #B87BFF);
        transition: opacity 0.2s ease;
    }
    .btn-gradient:hover {
        opacity: 0.9;
    }
</style>

<div class="keranjang-page max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-2">
    
    <div class="relative w-full rounded-2xl overflow-hidden mb-6 md:mb-8" style="background-image: url('{{ asset('images/As33.png') }}'); background-size: cover; background-position: center; min-height: 160px; md:min-height: 260px;">
        <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col justify-center px-4 md:px-12 py-6 md:py-8">
            <h1 class="text-3xl md:text-5xl font-cormorant font-bold tracking-wide">
                Keranjang <span style="color: #D17CE3;">Saya</span>
            </h1>
            <p class="text-gray-300 mt-1 md:mt-2 text-xs md:text-base max-w-xl font-light">
                Periksa kembali novel pilihanmu sebelum melanjutkan ke pembayaran.
            </p>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 md:gap-8 items-start">
        
        <div class="lg:col-span-2 rounded-2xl p-4 md:p-6 border custom-shadow min-h-[auto] lg:min-h-[550px] flex flex-col justify-between" style="background-color: #22123F; border-color: rgba(139, 92, 246, 0.3);">
            
            <div>
                <div class="flex flex-row items-center justify-between border-b pb-4 mb-4 md:mb-6" style="border-color: rgba(92, 40, 126, 0.5);">
                    <div class="flex items-center space-x-3 select-none">
                        <input type="checkbox" id="selectAllCheckbox" class="custom-checkbox" checked onchange="toggleSelectAll(this)">
                        <span class="text-sm md:text-base font-semibold tracking-wide">
                            Pilih Semua (<span id="selectAllCount">1</span>)
                        </span>
                    </div>
                    
                    <button type="button" onclick="resetCartSession()" class="flex items-center space-x-1.5 text-sm md:text-base font-semibold tracking-wide transition-all duration-200 opacity-100 hover:opacity-70 active:scale-95" style="color: #F24A4A;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 mb-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                        <span>Hapus Semua</span>
                    </button>
                </div>

                <div id="cartItemsContainer" class="space-y-4">
                    
                    <div id="novelCardItem" class="relative rounded-xl p-4 md:p-6 border custom-shadow flex flex-col sm:flex-row sm:items-center justify-between gap-4" style="background-color: #18092F; border-color: rgba(139, 92, 246, 0.3);">
                        
                        <div class="flex items-start space-x-3 md:space-x-5 w-full">
                            <div class="flex-shrink-0 self-center">
                                <input type="checkbox" id="itemCheckbox" class="custom-checkbox" checked onchange="handleItemCheckboxChange(this)">
                            </div>
                            
                            <div class="w-20 h-28 sm:w-28 sm:h-36 flex-shrink-0 rounded-md overflow-hidden border" style="border-color: rgba(139, 92, 246, 0.3);">
                                <img src="{{ asset('images/As27.png') }}" alt="Bayangan Masa Lalu" class="w-full h-full object-cover">
                            </div>
                            
                            <div class="flex-1 min-w-0 pr-8 sm:pr-0">
                                <h3 class="text-base sm:text-2xl font-cormorant font-bold tracking-wide text-white leading-snug break-words">
                                    Bayangan Masa Lalu
                                </h3>
                                <div class="text-xs sm:text-sm text-gray-300 mt-0.5 flex items-center">
                                    <span class="break-words">Nathania Putri</span>
                                    <span class="icon-verified flex-shrink-0"></span>
                                </div>
                                <div class="mt-1 md:mt-1.5">
                                    <span class="inline-block text-[10px] sm:text-xs font-semibold px-2 py-0.5 rounded" style="background-color: rgba(184, 123, 255, 0.15); color: #B87BFF;">
                                        Romantis
                                    </span>
                                </div>
                                <div class="text-base sm:text-xl font-bold mt-1.5 md:mt-2 text-white">
                                    Rp <span id="itemPriceDisplay">50.000</span>
                                </div>
                            </div>
                        </div>

                        <div class="absolute top-4 right-4">
                            <button type="button" onclick="removeSingleItem()" class="transition-all duration-200 opacity-100 hover:opacity-70 active:scale-95 text-red-500" style="color: #F24A4A;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </button>
                        </div>

                        <div class="flex items-center justify-end space-x-1 sm:self-end sm:mt-0">
                            <button type="button" onclick="decrementQuantity()" class="btn-counter w-7 h-7 md:w-8 md:h-8 flex items-center justify-center rounded border text-sm md:text-base transition-colors font-bold select-none" style="background-color: #18092F; border-color: rgba(139, 92, 246, 0.3); color: #ffffff;">
                                -
                            </button>
                            <div id="quantityValue" class="w-8 md:w-9 text-center text-sm md:text-base font-semibold select-none">
                                1
                            </div>
                            <button type="button" onclick="incrementQuantity()" class="btn-counter w-7 h-7 md:w-8 md:h-8 flex items-center justify-center rounded border text-sm md:text-base transition-colors font-bold select-none" style="background-color: #18092F; border-color: rgba(139, 92, 246, 0.3); color: #ffffff;">
                                +
                            </button>
                        </div>

                    </div>
                </div>
            </div>

            <div class="mt-6 md:mt-8 pt-2 text-center">
                <a href="{{ route('katalog') }}" class="inline-flex items-center text-sm md:text-base font-medium transition-opacity hover:opacity-80 mx-auto" style="color: #D17CE3;">
                    <span class="text-xl md:text-2xl mr-1.5 md:mr-2 font-light">+</span> Tambah Pembelian
                </a>
            </div>
        </div>

        <div class="rounded-2xl p-5 md:p-6 border custom-shadow block" style="background-color: #22123F; border-color: rgba(139, 92, 246, 0.3);">
            <div>
                <h2 class="text-xl md:text-2xl font-cormorant font-bold tracking-wide text-white mb-4 md:mb-6">
                    Ringkasan Pesanan
                </h2>
                
                <div class="space-y-3.5 text-xs md:text-sm">
                    <div class="flex justify-between items-center text-gray-300">
                        <span>Total Item</span>
                        <span id="summaryTotalItem" class="font-semibold text-white text-sm md:text-base">1</span>
                    </div>
                    
                    <div class="flex justify-between items-center text-gray-300">
                        <span>Total Harga</span>
                        <span class="font-bold text-white text-base md:text-lg">
                            Rp <span id="summaryTotalPrice">50.000</span>
                        </span>
                    </div>
                </div>

                <div class="border-t mt-4 mb-4" style="border-color: rgba(92, 40, 126, 0.5);"></div>
            </div>

            <div>
                <a href="{{ route('transaksi.pembayaran') }}" class="btn-gradient w-full max-w-[280px] mx-auto text-white text-xs md:text-sm font-semibold py-2.5 md:py-3 px-4 rounded-xl flex items-center justify-center tracking-wide shadow-lg">
                    <span>Lanjut ke Pembayaran</span>
                    <svg class="icon-arrow-right w-4 h-4 text-white transform translate-y-[1px]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
            </div>
        </div>

    </div>
</div>

<script>
    let cartState = {
        basePricePerItem: 50000,
        quantity: 1,
        isItemChecked: true,
        isItemDeleted: false,
        totalUniqueNovels: 1 
    };

    function updateCartUI() {
        const novelCard = document.getElementById('novelCardItem');
        const selectAllCheckbox = document.getElementById('selectAllCheckbox');
        const selectAllCount = document.getElementById('selectAllCount');
        const itemCheckbox = document.getElementById('itemCheckbox');
        const quantityValue = document.getElementById('quantityValue');
        const summaryTotalItem = document.getElementById('summaryTotalItem');
        const summaryTotalPrice = document.getElementById('summaryTotalPrice');

        if (cartState.isItemDeleted) {
            if (novelCard) novelCard.style.setProperty('display', 'none', 'important');
            selectAllCheckbox.checked = false;
            selectAllCount.innerText = "0";
            summaryTotalItem.innerText = "0";
            summaryTotalPrice.innerText = "0";
            return;
        } else {
            if (novelCard) novelCard.style.setProperty('display', 'flex', 'important');
        }

        quantityValue.innerText = Math.max(0, cartState.quantity);
        itemCheckbox.checked = cartState.isItemChecked;

        // Angka di "Pilih Semua" HANYA berdasarkan status checkbox Pilih Semua itu sendiri
        if (selectAllCheckbox.checked) {
            selectAllCount.innerText = cartState.totalUniqueNovels;
        } else {
            selectAllCount.innerText = "0";
        }

        // Ringkasan pesanan di sebelah kanan tetap mengikuti item yang dicentang
        if (cartState.isItemChecked) {
            summaryTotalItem.innerText = cartState.quantity;
            let totalCalculated = cartState.quantity * cartState.basePricePerItem;
            summaryTotalPrice.innerText = totalCalculated.toLocaleString('id-ID');
        } else {
            summaryTotalItem.innerText = "0";
            summaryTotalPrice.innerText = "0";
        }
    }

    function incrementQuantity() {
        cartState.quantity += 1;
        updateCartUI();
    }

    function decrementQuantity() {
        if (cartState.quantity > 1) {
            cartState.quantity -= 1;
            updateCartUI();
        }
    }

    // Mengubah status centang item tanpa memengaruhi tulisan Pilih Semua global secara sepihak
    function handleItemCheckboxChange(checkbox) {
        cartState.isItemChecked = checkbox.checked;
        
        // Opsional: Jika checkbox item dimatikan manual, hilangkan centang di Pilih Semua (tapi angka tetap mengikuti aturan click)
        const selectAllCheckbox = document.getElementById('selectAllCheckbox');
        if (!checkbox.checked) {
            selectAllCheckbox.checked = false;
        }
        
        updateCartUI();
    }

    // Ketika Master Checkbox di klik, ia mengontrol semua status visual & angka secara sinkron
    function toggleSelectAll(masterCheckbox) {
        cartState.isItemChecked = masterCheckbox.checked;
        updateCartUI();
    }

    function removeSingleItem() {
        cartState.isItemDeleted = true;
        cartState.totalUniqueNovels = 0;
        updateCartUI();
    }

    function resetCartSession() {
        cartState.isItemDeleted = true;
        cartState.totalUniqueNovels = 0;
        updateCartUI();
    }

    document.addEventListener("DOMContentLoaded", function() {
        updateCartUI();
    });
</script>
@endsection