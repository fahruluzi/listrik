<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePelanggan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelanggan', function (Blueprint $table) {
            $table->bigIncrements('id_pelanggan');
            $table->string('username');
            $table->string('passowrd');
            $table->string('nomorKWH');
            $table->string('nama_pelanggan');
            $table->string('alamat');
            $table->unsignedBigInteger('id_tarif');
            $table->timestamps();
           
            $table->foreign('id_tarif')->references('id_tarif')->on('tarif');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelanggan');
    }
}
