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
        Schema::create('penjualan', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            $table->string('no_nota');
            $table->dateTime('tanggal');
            $table->decimal('discount', 3, 0)->default(0);
            $table->decimal('total', 20, 0);
            $table->decimal('bayar', 20, 0);
            $table->decimal('grand_total', 20, 0);
            $table->decimal('laba', 20, 0);
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
        Schema::dropIfExists('penjualan');
    }
};
