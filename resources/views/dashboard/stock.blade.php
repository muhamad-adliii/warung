@extends('layouts.app')

@section('content')
    <div class="p-6">
        <div class="">
            <h3 class="text-2xl font-medium ">STOCK LOG</h3>
        </div>

        <!--  Filter & Search  -->
        <div class="bg-white rounded-2xl shadow-card p-5 md:p-6 mb-8 border border-gray-100 mt-5">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5 items-end">
                <!-- Search Laporan -->
                <div>
                    <label class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-1">
                        <i class="fas fa-search mr-1 text-gray-400"></i> Cari laporan
                    </label>
                    <div class="relative">
                        <i class="fas fa-search absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 text-sm"></i>
                        <input type="text" id="searchInput" placeholder="Search.."
                            class="w-50 pl-3 pr-4 py-2.5 border border-gray-200 rounded-xl focus:ring-2 focus:ring-indigo-200 focus:border-indigo-300 outline-none transition bg-gray-50 focus:bg-white">
                    </div>
                </div>
                <!-- Filter Tanggal range -->
                <div>
                    <label class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-1">
                        <i class="fas fa-calendar-week mr-1 text-gray-400"></i> Filter tanggal
                    </label>
                    <div class="flex gap-2 items-center">
                        <div class="relative flex-1">
                            <input type="date" id="startDate" value="2026-05-01"
                                class="w-full border border-gray-200 rounded-xl py-2.5 px-3 text-sm bg-gray-50 focus:bg-white focus:ring-2 focus:ring-indigo-200 outline-none">
                        </div>
                        <span class="text-gray-400">—</span>
                        <div class="relative flex-1">
                            <input type="date" id="endDate" value="2026-05-07"
                                class="w-full border border-gray-200 rounded-xl py-2.5 px-3 text-sm bg-gray-50 focus:bg-white focus:ring-2 focus:ring-indigo-200 outline-none">
                        </div>
                    </div>
                </div>
                <!-- Status Dropdown -->
                <div>
                    <label class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-1">
                        <i class="fas fa-filter mr-1"></i> Status
                    </label>
                    <select id="statusFilter"
                        class="w-full border border-gray-200 rounded-xl py-2.5 px-4 bg-gray-50 focus:ring-2 focus:ring-indigo-200 outline-none cursor-pointer">
                        <option value="semua">Semua ▼</option>
                        <option value="Selesai">Selesai</option>
                        <option value="Pending">Pending</option>
                    </select>
                </div>
                <!-- Dropdown Kategori -->
                <div>
                    <label class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-1">
                        <i class="fas fa-filter mr-1"></i> Kategori
                    </label>
                    <select id="statusFilter"
                        class="w-full border border-gray-200 rounded-xl py-2.5 px-4 bg-gray-50 focus:ring-2 focus:ring-indigo-200 outline-none cursor-pointer">
                        <option value="semua">Semua ▼</option>
                        <option value="Selesai">Makanan</option>
                        <option value="Pending">Minuman</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
@endsection