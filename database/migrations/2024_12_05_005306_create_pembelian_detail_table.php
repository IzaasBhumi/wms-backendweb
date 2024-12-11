<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pembelian_detail', function (Blueprint $table) {
            $table->id('id_pembelian_detail');
            $table->unsignedBigInteger('id_pembelian')->nullable();;
            $table->unsignedBigInteger('id_produk')->index();
            $table->integer('harga_beli');
            $table->integer('jumlah');
            $table->timestamps();

            //relasi
            $table->foreign('id_produk')->references('id')->on('produk');
            $table->foreign('id_pembelian')->references('id')->on('pembelian');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembelian_detail');
    }
};
