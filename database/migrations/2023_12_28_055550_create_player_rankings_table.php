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
        Schema::create('player_rankings', function (Blueprint $table) {
            $table->id();  
            $table->string('name')->nullable(); 
            $table->string('Kill')->nullable();
            $table->string('Booyah')->nullable(); 
            $table->string('match')->nullable(); 
            $table->string('pts')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('player_rankings');
    }
};
