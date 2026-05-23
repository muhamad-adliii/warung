<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    protected $table = 'barang_masuk';

    protected $fillable = [
        'kode_transaksi',
        'tanggal',
        'supplier',
        'total_item',
        'total_qty',
        'total_harga'
    ];

    public function detail()
    {
        return $this->hasMany(DetailBarangMasuk::class, 'id_barang_masuk');
    }
}
