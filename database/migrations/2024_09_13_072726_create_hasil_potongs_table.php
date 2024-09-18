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
        Schema::create('hasil_potongs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_potong');
            $table->string('jumlah_dihasilkan');
            $table->string('jumlah_lolos');
            $table->string('jumlah_cacat');
            $table->timestamps();
            $table->foreign('id_potong')->references('id')->on('potongs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hasil_potongs');
    }
};
