<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $table = 'penjualan';

    protected $fillable = [
        'kode_penjualan',
        'tanggal',
        'total_item',
        'total_qty',
        'total_harga',
        'bayar',
        'kembalian'
    ];

    public function detail()
    {
        return $this->hasMany(DetailPenjualan::class, 'id_penjualan');
    }

}
