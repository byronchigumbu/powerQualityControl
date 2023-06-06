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
        Schema::create('sensor_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedDouble('current')->default(0.00);
            $table->unsignedDouble('voltage')->default(0.00);
            $table->unsignedDouble('frequency')->default(0.00);
            $table->unsignedDouble('harmonics')->default(0.00);
            $table->timestamp('time')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */

    public function down(): void
    {
        Schema::dropIfExists('sensor_data');
    }
};
