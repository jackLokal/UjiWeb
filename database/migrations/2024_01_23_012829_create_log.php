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
        Schema::create('log', function (Blueprint $table) {
            $table->bigIncrements('log_id');
            $table->unsignedBigInteger('tranksaksi_id')->nullable();
            $table->text('isi');
            $table->boolean('isDelete')->default(0);
            $table->timestamps();

            $table->foreign('transaksi_id')->references('transaksi_id')->on('transaksi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log');
    }
};
