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
        Schema::create('builders', function (Blueprint $table) {
            $table->id();
            $table->string('city');
            $table->string('street');
            $table->string('building_number');
            $table->string('wallType');
            $table->string('heating');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('builders');
    }
};

