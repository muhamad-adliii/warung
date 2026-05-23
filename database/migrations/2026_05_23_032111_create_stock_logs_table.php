<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('stock_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_barang')
                ->constrained('barang')
                ->onDelete('cascade');

            $table->enum('jenis', [
                'Barang Masuk',
                'Penjualan',
                'Penyesuaian',
                'Retur'
            ]);

            $table->integer('qty');
            $table->integer('stock_sebelum');
            $table->integer('stock_sesudah');
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock_logs');
    }
};
