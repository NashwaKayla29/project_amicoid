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
        Schema::create('potongs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemotong');
            $table->unsignedBigInteger('id_bahan');
            $table->string('size');
            $table->date('tanggal_potong');
            $table->unsignedBigInteger('id_barang');
            $table->timestamps();
            $table->foreign('id_bahan')->references('id')->on('bahans')->onDelete('cascade');
            $table->foreign('id_barang')->references('id')->on('barangs')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('potongs');
    }
};
