<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trunament_schedules', function (Blueprint $table) {
            $table->id();
            $table->string('round_id')->nullable();
            $table->string('seasons_id')->nullable();
            $table->string('date')->nullable();
            $table->string('group')->nullable();
            $table->string('start_time')->nullable();
            $table->string('map')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trunament_schedules');
    }
};
