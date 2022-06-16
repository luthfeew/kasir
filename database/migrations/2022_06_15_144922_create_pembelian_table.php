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
        Schema::create('pembelian', function (Blueprint $table) {
            $table->id();
            $table->string('kode_barang');
            $table->integer('qty');
            $table->decimal('harga_beli', 20, 0);
            $table->string('satuan');
            $table->dateTime('tgl_beli');
            $table->unsignedBigInteger('supplier');
            $table->timestamps();
        });

        Schema::table('pembelian', function (Blueprint $table) {
            $table->foreign('kode_barang')->references('kode_barang')->on('barang');
            $table->foreign('supplier')->references('id')->on('supplier');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembelian');
    }
};
