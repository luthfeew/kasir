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
        Schema::create('penjualan_details', function (Blueprint $table) {
            $table->id();
            $table->integer('qty');
            $table->decimal('harga_satuan', 20, 0);
            $table->decimal('harga_beli', 20, 0);
            $table->decimal('total', 20, 0);
            $table->timestamps();
        });

        Schema::table('penjualan_details', function (Blueprint $table) {
            $table->foreignId('penjualan_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('barang_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penjualan_details');
    }
};
