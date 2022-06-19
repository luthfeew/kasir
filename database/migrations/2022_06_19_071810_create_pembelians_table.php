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
        Schema::create('pembelians', function (Blueprint $table) {
            $table->id();
            $table->integer('qty');
            $table->decimal('harga_beli', 20, 0);
            $table->string('satuan');
            $table->dateTime('tgl_beli');
            $table->timestamps();
        });

        Schema::table('pembelians', function (Blueprint $table) {
            $table->string('kode_barang');
            $table->foreign('kode_barang')->references('kode_barang')->on('barangs')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('supplier_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembelians');
    }
};
