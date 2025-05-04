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
        Schema::create('sewa_kameras', function (Blueprint $table) {
            $table->id();
            $table->string('nama_penyewa');
            $table->string('kamera');
            $table->date('tanggal_sewa');
            $table->integer('durasi'); // dalam hari
            $table->integer('harga_total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sewa_kameras');
    }
};
