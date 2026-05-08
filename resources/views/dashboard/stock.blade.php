@extends('layouts.app')

@section('content')
    <div class="p-6">
        <div class="">
            <h3 class="text-2xl font-medium ">STOCK LOG</h3>
        </div>
        <!--  Filter & Search  -->
        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-5 md:p-6 mt-5">

            <div class="grid grid-cols-1 md:grid-cols-2 2xl:grid-cols-4 gap-5">

                <!-- Search -->
                <div>
                    <label class="block text-xs font-semibold text-gray-500 uppercase mb-2">
                        Cari Laporan
                    </label>

                    <div class="relative">

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-4 h-4 absolute left-3 top-1/2 -translate-y-1/2 text-gray-400">

                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />

                        </svg>

                        <input type="text" placeholder="Search..." class="w-full h-11 pl-10 pr-4 border border-gray-200 rounded-xl
                                    bg-gray-50 focus:bg-white
                                    focus:outline-none focus:ring-2 focus:ring-indigo-200
                                    focus:border-indigo-300 transition">
                    </div>
                </div>

                <!-- Filter Tanggal -->
                <div>
                    <label class="block text-xs font-semibold text-gray-500 uppercase mb-2">
                        Filter Tanggal
                    </label>

                    <div class="flex flex-col sm:flex-row items-center gap-2">

                        <input type="date" class="w-full h-11 border border-gray-200 rounded-xl px-3
                                    bg-gray-50 focus:bg-white
                                    focus:outline-none focus:ring-2 focus:ring-indigo-200 transition">

                        <span class="hidden sm:block text-gray-400">-</span>

                        <input type="date" class="w-full h-11 border border-gray-200 rounded-xl px-3
                                    bg-gray-50 focus:bg-white
                                    focus:outline-none focus:ring-2 focus:ring-indigo-200 transition">

                    </div>
                </div>

                <!-- Jenis -->
                <div class="xl:max-w-[220px]">
                    <label class="block text-xs font-semibold text-gray-500 uppercase mb-2">
                        Jenis
                    </label>

                    <select class="w-full h-11 border border-gray-200 rounded-xl px-4
                    bg-gray-50 focus:bg-white
                    focus:outline-none focus:ring-2 focus:ring-indigo-200
                    cursor-pointer transition">

                        <option>Semua</option>
                        <option>Barang Masuk</option>
                        <option>Barang Keluar</option>
                        <option>Penyesuaian Stock</option>
                        <option>Retur</option>
                        <option>Penjualan</option>

                    </select>
                </div>

                <!-- Kategori -->
                <div class="xl:max-w-[220px]">
                    <label class="block text-xs font-semibold text-gray-500 uppercase mb-2">
                        Kategori
                    </label>    

                    <select class="w-full h-11 border border-gray-200 rounded-xl px-4
                    bg-gray-50 focus:bg-white
                    focus:outline-none focus:ring-2 focus:ring-indigo-200
                    cursor-pointer transition">

                        <option>Semua</option>
                        <option>Makanan</option>
                        <option>Minuman</option>
                        <option>Snack</option>
                        <option>Elektronik</option>
                        <option>Alat Tulis</option>
                        <option>Kesehatan</option>

                    </select>
                </div>

            </div>

        </div>
    </div>
@endsection