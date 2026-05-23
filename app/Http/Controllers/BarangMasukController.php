<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangMasuk;
use App\Models\DetailBarangMasuk;
use App\Models\StockLog;
use Illuminate\Http\Request;

class BarangMasukController extends Controller
{
    public function index()
    {
        $barangMasuk = BarangMasuk::latest()->get();
        $barang = Barang::all();
        return view('dashboard.barang-masuk', compact('barangMasuk', 'barang'));
    }
    public function store(Request $request)
    {
        $barangMasuk = BarangMasuk::create([
            'kode_transaksi' => 'BM-' . time(),
            'tanggal' => now(),
            'supplier' => $request->supplier,
            'total_item' => count($request->id_barang),
            'total_qty' => array_sum($request->qty),
            'total_harga' => array_sum($request->subtotal)
        ]);

        foreach ($request->id_barang as $key => $barangId) {
            $barang = Barang::findOrFail($barangId);
            $qty = $request->qty[$key];
            $harga = $request->harga[$key];
            $subtotal = $request->subtotal[$key];

            DetailBarangMasuk::create([
                'id_barang_masuk' => $barangMasuk->id,
                'id_barang' => $barangId,
                'qty' => $qty,
                'harga' => $harga,
                'subtotal' => $subtotal
            ]);

            $stockSebelum = $barang->stock;

            $barang->increment('stock', $qty);

            StockLog::create([
                'id_barang' => $barang->id,
                'jenis' => 'Barang Masuk',
                'qty' => $qty,
                'stock_sebelum' => $stockSebelum,
                'stock_sesudah' => $barang->fresh()->stock,
                'keterangan' => 'Transaksi barang masuk'
            ]);
        }

        return redirect()->back()->with('success', 'Barang masuk berhasil ditambahkan');
    }
}
