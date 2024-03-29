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
        Schema::create('teachers', function (Blueprint $table) {

                $table->id();
                $table->timestamps();
                $table->string('occupation',50);
                $table->string('tname',100);
                $table->string('image',100);
                $table->string('facebook');
                $table->string('twiter');
                $table->boolean('active');
                $table->string('instagram');
                $table->softDeletes(); 
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
