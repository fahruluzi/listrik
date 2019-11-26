<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePembayaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->bigIncrements('id_pembayaran');
            $table->unsignedBigInteger('id_tagihan');
            $table->unsignedBigInteger('id_pelanggan');
            $table->string('tanggal_pembayaran');
            $table->string('bulan_bayar');
            $table->string('biaya_admin');
            $table->string('total_bayar');
            $table->unsignedBigInteger('id_admin');
            $table->timestamps();

            $table->foreign('id_tagihan')->references('id_tagihan')->on('tagihan');
            $table->foreign('id_pelanggan')->references('id_pelanggan')->on('pelanggan');
            $table->foreign('id_admin')->references('id_admin')->on('admin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembayaran');
    }
}
