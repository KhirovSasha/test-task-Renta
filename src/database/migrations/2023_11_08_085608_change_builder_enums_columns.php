<?php

use App\Enums\Heating;
use App\Enums\WallType;
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
        Schema::table('builders', function (Blueprint $table) {

            $table->enum('heating', Heating::values())->change();
            $table->enum('wallType', WallType::values())->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('builders', function (Blueprint $table) {

            $table->string('wallType')->change();
            $table->string('heating')->change();
        });
    }
};
