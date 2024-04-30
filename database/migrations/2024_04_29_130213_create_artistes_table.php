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
        Schema::create('artistes', function (Blueprint $table) {
            $table->id();
            $table->string('photo');
            $table->string('nom');
            $table->string('prenom');
            $table->string('blaze'); //son nom d'artiste
            $table->string('genre_musical')->nullable();
            $table->date('date_de_naissance')->nullable(); //date de naissance
            $table->text('biographie')->nullable(); //biographie
            $table->string('site_web')->nullable();
            $table->text('reseaux_sociaux')->nullable();
            $table->string('pays_origine')->nullable();
            $table->string('ville_origine')->nullable();
            $table->integer('annee_debut')->nullable(); //année de début de carriere de l'artiste.
            $table->integer('annee_fin')->nullable(); //année de fin de carriere de l'artiste.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artistes');
    }
};
