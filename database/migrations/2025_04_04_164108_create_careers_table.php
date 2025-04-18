<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{


    public function up(): void
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->string('position');
            $table->enum('typeofwork', ['Fulltime', 'Part-time', 'Self-employee', 'Freelance', 'contract', 'Internship']);
            $table->string('current_job');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('location');
            $table->enum('location_type', ['On site', 'Combined', 'Long distance']);
            $table->enum('employment_type', ['full-time', 'part-time', 'internship']);
            $table->text('description');
            $table->timestamp('posted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('careers');
    }
};
