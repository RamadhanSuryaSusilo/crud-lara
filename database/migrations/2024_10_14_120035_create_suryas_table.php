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
        Schema::create('surya', function (Blueprint $table) {
            $table->id();
            $table->integer("nis");
            $table->string("nama");
            $table->string("alamat");
            $table->string("jenis_kelamin");
            $table->string("hobi");
            $table->string("asal_sekolah");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surya');
    }
};
