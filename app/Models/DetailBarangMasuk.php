<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailBarangMasuk extends Model
{
    protected $table = 'detail_barang_masuk';

    protected $fillable = [
        'id_barang_masuk',
        'id_barang',
        'qty',
        'harga',
        'subtotal'
    ];

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_barang');
    }

    public function transaksi()
    {
        return $this->belongsTo(BarangMasuk::class, 'id_barang_masuk');
    }
}
