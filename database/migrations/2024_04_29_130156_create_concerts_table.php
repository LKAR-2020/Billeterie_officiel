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
        Schema::create('concerts', function (Blueprint $table) {
            $table->id();
            $table->string('photo');
            $table->string('nom');
            $table->string('description');
            $table->dateTime('date_debut');
            $table->dateTime('date_fin');
            $table->foreignId('lieu_id')->constrained()->onDelete('cascade');
            // $table->decimal('prix', 8, 2);
            $table->string('type')->nullable(); // concert, spectacle, festival
            $table->integer('capacite')->nullable(); // nombre de places
            $table->string('organisateur')->nullable(); // nom de l'organisateur
            $table->string('url')->nullable(); // lien vers le site de l'organisateur
            $table->dateTime('date_annonce')->nullable(); // date de l'annonce
            $table->dateTime('date_vente')->nullable(); // date de début de vente
            $table->dateTime('date_fin_vente')->nullable(); // date de fin de vente
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('concerts');
    }
};
