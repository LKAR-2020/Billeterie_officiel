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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->text('nom');
            $table->string('color')->nullable();
            $table->text('description')->nullable();
            // $table->string('type')->nullable();
            $table->integer('ordre')->nullable(); // pour afficher l'ordre des categorie
            // $table->string('image')->nullable();
            $table->string('slug')->nullable(); // pour la recherche (le liens)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
