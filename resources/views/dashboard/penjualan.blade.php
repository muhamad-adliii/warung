@extends('layouts.app')

@section('content')
    <div class="wwrapper p-6">
        <div class="">
            <div class="flex flex-col gap-3">
                <h3 class="text-xl md:text-2xl capitalize md:items-center gap-6 font-medium">PENJUALAN</h3>
                <div class="flex capitalize font-medium">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6 mr-1 text-gray-500">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 0 1-1.125-1.125v-3.75ZM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-8.25ZM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-2.25Z" />
                    </svg>
                    <span class="text-gray-500">Penjualan > <span class="text-black">Kasir</span></span>
                </div>
            </div>
        </div>
        <!-- list page -->
        <div
            class="flex flex-col md:flex-row justify-between items-start md:items-center gap-5 md:gap-0 mt-10 border-b-2 py-2 border-gray-200">
            <div class="flex gap-6 items-center">
                <a href="#"
                    class="after:border-b-2 relative inline-block after:absolute after:left-0 after:bottom-0 after:h-0.5 after:w-0 after:border-gray-700 hover:after:w-full after:transition-all">Kasir</a>
                <a href="#"
                    class="after:border-b-2 relative inline-block after:absolute after:left-0 after:bottom-0 after:h-0.5 after:w-0 after:border-gray-700 hover:after:w-full after:transition-all">Penjualan</a>
                <a href="#"
                    class="after:border-b-2 relative inline-block after:absolute after:left-0 after:bottom-0 after:h-0.5 after:w-0 after:border-gray-700 hover:after:w-full after:transition-all">Detail
                    Penjualan</a>
            </div>
            <div class="flex items-center gap-2">
                <div class="relative">
                    <input type="text" placeholder="Search..."
                        class="border border-gray-300 rounded-md pl-7 pr-4 py-1 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-full md:w-64">
                    <div class="absolute inset-y-0 left-0 flex items-center  pointer-events-none pl-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-4 h-4 text-gray-400">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <!-- table -->
        <div class="">
            
        </div>
    </div>
@endsection