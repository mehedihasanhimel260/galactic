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
        Schema::create('persone_rankings', function (Blueprint $table) {
            $table->id();
            $table->string('trunament_id')->nullable();
            $table->string('team_id')->nullable(); 
            $table->string('ranking_number')->nullable(); 
            $table->string('Kill')->nullable();
            $table->string('Booyah')->nullable(); 
            $table->string('match')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persone_rankings');
    }
};
