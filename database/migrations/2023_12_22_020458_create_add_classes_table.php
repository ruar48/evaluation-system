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
        Schema::create('add_classes', function (Blueprint $table) {
            $table->id();
            $table->string('classCode');
            $table->string('instructorName');
            $table->string('Class');
            $table->string('Subject');
            $table->string('schedule');
            $table->string('no_student');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('add_classes');
    }
};