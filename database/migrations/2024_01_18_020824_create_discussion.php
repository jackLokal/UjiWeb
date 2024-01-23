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
        Schema::create('discussion', function (Blueprint $table) {
            $table->bigIncrements('disc_id');
            $table->unsignedBigInteger('transaksi_id');
            $table->unsignedBigInteger('user_id');
            $table->text('komentar');
            $table->boolean('isDelete');

            $table->foreign('transaksi_id')->references('transaksi_id')->on('transaksi');
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discussion');
    }
};
