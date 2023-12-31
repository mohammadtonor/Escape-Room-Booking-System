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
        Schema::create('escape_rooms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->text('story');
            $table->tinyInteger('duration');
            $table->tinyInteger('min_participants_number');
            $table->tinyInteger('max_participants_number');
            $table->tinyInteger('difficulty');
            $table->tinyInteger('Scary_degree');
            $table->string('phone_number');
            $table->string('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('escape_rooms');
    }
};
