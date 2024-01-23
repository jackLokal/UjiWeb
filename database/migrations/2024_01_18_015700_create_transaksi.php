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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->bigIncrements('transaksi_id');
            $table->unsignedBigInteger('user_id');
            $table->string('no_transaksi');
            $table->date('tanggal_pembayaran');
            $table->string('bulan_spp');
            $table->string('biaya_spp');
            $table->string('biaya_terbayar');
            $table->string('bukti_bayar');
            $table->boolean('isApproved')->default(0);
            $table->boolean('isDelete')->default(0);
            $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
