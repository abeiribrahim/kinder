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
        Schema::create('kclasses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teacherId',50)->constrained('teachers');
            $table->string('kcname');
            $table->tinyInteger('age');
            $table->time('time');
            $table->tinyInteger('capacity');
            $table->tinyInteger('price');
            $table->boolean('active');
            $table->string('class_image',100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kclasses');
    }
};
