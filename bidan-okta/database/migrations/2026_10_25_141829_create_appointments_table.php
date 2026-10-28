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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ibu');
            $table->string('no_whatsapp');
            $table->string('usia_kehamilan')->nullable();
            $table->string('layanan');
            $table->date('tanggal_kunjungan');
            $table->string('waktu_kunjungan');
            $table->text('keluhan_catatan')->nullable();
            $table->string('status')->default('menunggu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
