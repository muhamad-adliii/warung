<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\DetailPenjualan;
use App\Models\Penjualan;
use App\Models\StockLog;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index()
    {
        $barang = Barang::all();

        $penjualan = Penjualan::latest()->get();

        return view('dashboard.penjualan', compact('barang', 'penjualan'));
    }

    public function store(Request $request)
    {
        $penjualan = Penjualan::create([
            'kode_penjualan' => 'PJ-' . time(),
            'tanggal' => now(),
            'total_item' => count($request->id_barang),
            'total_qty' => array_sum($request->qty),
            'total_harga' => array_sum($request->subtotal),
            'bayar' => $request->bayar,
            'kembalian' => $request->bayar - array_sum($request->subtotal)
        ]);

        foreach ($request->id_barang as $key => $barangId) {

            $barang = Barang::findOrFail($barangId);

            $qty = $request->qty[$key];

            $harga = $request->harga[$key];

            $subtotal = $request->subtotal[$key];

            // VALIDASI STOCK
            if ($barang->stock < $qty) {
                return redirect()->back()->with('error', 'Stock barang tidak cukup');
            }

            DetailPenjualan::create([
                'id_penjualan' => $penjualan->id,
                'id_barang' => $barangId,
                'qty' => $qty,
                'harga' => $harga,
                'subtotal' => $subtotal
            ]);

            $stockSebelum = $barang->stock;

            // KURANGI STOCK
            $barang->decrement('stock', $qty);

            // STOCK LOG
            StockLog::create([
                'id_barang' => $barang->id,
                'jenis' => 'Penjualan',
                'qty' => $qty,
                'stock_sebelum' => $stockSebelum,
                'stock_sesudah' => $barang->fresh()->stock,
                'keterangan' => 'Transaksi penjualan'
            ]);
        }

        return redirect()->back()->with('success', 'Transaksi berhasil');
    }
}
