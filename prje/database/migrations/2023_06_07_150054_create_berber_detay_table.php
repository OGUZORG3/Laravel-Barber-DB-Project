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
        Schema::create('berber_detays', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('berber_file');
            $table->string('berber_isim');
            $table->string('berber_soyisim');
            $table->string('berber_adres');
            $table->string('berber_dukkan_isim');
            $table->string('berber_Telefon');
            $table->string('berber_mail');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berber_detay');
    }
};
