@extends('layouts.app')

@section('content')
    <div class="Wrapper-barang-masuk p-6">
        <div class="flex flex-col md:flex-row justify-between md:items-center gap-5">
            <div class="flex flex-col gap-3">
                <h3 class="text-header text-xl md:text-2xl capitalize font-medium">Barang Masuk</h3>
                <div class="flex capitalize font-medium">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6 mr-1 text-gray-500">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 0 1-1.125-1.125v-3.75ZM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-8.25ZM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-2.25Z" />
                    </svg>
                    <span class="text-gray-500">total: <span class="text-black">500</span></span>
                </div>
            </div>
            <!-- buttons -->
            <div>
                <button
                    class="py-2 bg-[#5d5de7] w-full font-medium cursor-pointer hover:bg-[#4040e8] flex gap-2 text-[#ffffff] capitalize rounded-lg md:w-auto justify-center px-10 text-md">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    add Items
                </button>
            </div>
        </div>
        <!-- table -->
         
    </div>
@endsection