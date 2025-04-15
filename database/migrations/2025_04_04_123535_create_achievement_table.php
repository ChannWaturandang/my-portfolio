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
        Schema::create('achievements', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('title'); // Nama sertifikasi
            $table->string('company'); // Penerbit sertifikasi
            $table->date('publication_date'); // Tanggal terbit sertifikasi
            $table->date('expiration_date')->nullable(); // Opsional: tanggal kadaluwarsa
            $table->string('credential_id')->nullable(); // Opsional: ID sertifikasi
            $table->string('credential_url')->nullable(); // Opsional: URL sertifikasi
            $table->text('description')->nullable(); // Opsional: deskripsi sertifikasi
            $table->timestamps(); // Menambahkan created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('achievement');
    }
};
