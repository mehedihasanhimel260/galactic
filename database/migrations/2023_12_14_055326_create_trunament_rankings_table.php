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
        Schema::create('trunament_rankings', function (Blueprint $table) {
            $table->id();
            $table->string('trunament_id')->nullable();
            $table->string('team_id')->nullable(); // Team
            $table->string('ranking_number')->nullable(); //PTS
            $table->string('Kill')->nullable(); //Kill
            $table->string('Booyah')->nullable(); //Booyah
            $table->string('match')->nullable(); //M
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trunament_rankings');
    }
};
