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
        Schema::create('produk', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('id_kategori')->index();
            $table->string('kode_produk', 255);
            $table->string('nama', 255);
            $table->integer('harga_beli');
            $table->integer('harga_jual');
            $table->date('expired')->nullable();
            $table->unsignedBigInteger('id_supplier')->index();
            $table->timestamps();

            //relasi
            $table->foreign('id_kategori')->references('id')->on('kategori');
            $table->foreign('id_supplier')->references('id')->on('supplier');
        });    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk');
    }
};
