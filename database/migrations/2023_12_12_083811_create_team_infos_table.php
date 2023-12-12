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
        Schema::create('team_infos', function (Blueprint $table) {
            $table->id();
            $table->string('team_name')->nullable();
            $table->string('link')->nullable();
            $table->string('logo')->nullable();
            $table->string('tournament_name')->nullable();
            $table->string('email')->nullable();
            $table->string('number')->nullable();
            $table->string('player_name_1')->nullable();
            $table->string('player_name_2')->nullable();
            $table->string('player_name_3')->nullable();
            $table->string('player_name_4')->nullable();
            $table->string('player_name_5')->nullable();
            $table->string('player_name_6')->nullable();
            $table->string('join_comunication_groupe')->nullable();
            $table->string('additional')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team_infos');
    }
};
