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
        Schema::create('tasks', function (Blueprint $table) {
            /*
        |--------------------------------------------------------------------------
        | Primary key
        |--------------------------------------------------------------------------
        */

        $table->id();

        /*
        |--------------------------------------------------------------------------
        | Task data
        |--------------------------------------------------------------------------
        */

        // título de la tarea
        $table->string('title');

        // descripción opcional
        $table->text('description')->nullable();

        // estado
        $table->boolean('completed')->default(false);

        /*
        |--------------------------------------------------------------------------
        | timestamps
        |--------------------------------------------------------------------------
        */

        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
