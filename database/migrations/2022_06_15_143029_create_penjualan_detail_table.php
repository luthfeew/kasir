<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualan_detail', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('id_penjualan');
            $table->unsignedInteger('id_barang');
            $table->foreign('id_penjualan')->references('id')->on('penjualan');
            $table->foreign('id_barang')->references('id')->on('barang');
            $table->integer('qty');
            $table->decimal('harga_satuan', 20, 0);
            $table->decimal('harga_beli', 20, 0);
            $table->decimal('total', 20, 0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penjualan_detail');
    }
};
