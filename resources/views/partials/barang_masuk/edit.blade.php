<div id="editBarangModal" class="hidden fixed inset-0 bg-black/40 z-20 items-center justify-center p-4">
    <div class="bg-white rounded-2xl w-full max-w-lg p-6 mt-12">
        <!-- header -->
        <div class="flex justify-between items-center mb-12">
            <h2 class="font-medium text-lg md:text-xl">Edit Barang</h2>
            <button data-close-modal="editBarangModal" class=" cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <!-- form -->
        <form action="" method="post" class="space-y-2">
            <div class="flex flex-col gap-2">
                <label for="" class="text-base">Kode :</label>
                <input type="text" class="w-full border rounded-xl px-4 py-2">
            </div>
            <div class="flex flex-col gap-2">
                <label for="" class="text-base">Tanggal :</label>
                <input type="date" class="w-full border rounded-xl px-4 py-2">
            </div>
            <div class="flex flex-col gap-2">
                <label for="" class="text-base">Supplier :</label>
                <input type="text" class="w-full border rounded-xl px-4 py-2">
            </div>
            <div class="flex flex-col gap-2">
                <label for="" class="text-base">Total Item :</label>
                <input type="number" class="w-full border rounded-xl px-4 py-2">
            </div>
            <div class="flex flex-col gap-2">
                <label for="" class="text-base">Total Qty :</label>
                <input type="number" class="w-full border rounded-xl px-4 py-2">
            </div>
            <div class="flex flex-col gap-2">
                <label for="" class="text-base">Total :</label>
                <input type="number" class="w-full border rounded-xl px-4 py-2">
            </div>
            <div class="flex justify-end gap-3 pt-4">
                <button type="button" class="px-4 cursor-pointer py-2 border rounded-lg">Batal</button>
                <button type="submit"
                    class="px-4 cursor-pointer py-2 bg-gray-800 hover:bg-gray-600 text-white  rounded-lg">Simpan</button>
            </div>
        </form>
    </div>
</div>