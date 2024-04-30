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
        Schema::create('billets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('concert_id');
            $table->foreign('concert_id')->references('id')->on('concerts')->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('categorie');
            $table->decimal('prix', 8, 2);
            $table->string('qr_code')->unique();
            $table->dateTime('date_achat')->nullable(); // date d'achat du billets
            $table->dateTime('date_validation')->nullable(); // date de validation du billets
            $table->string('mode_paiement')->nullable(); // mode de paiement
            $table->string('numero_transaction')->nullable(); // numero de transaction
            $table->string('nom_prenom')->nullable(); // nom et prenom du client
            $table->string('email')->nullable(); // email du client
            $table->string('telephone')->nullable(); // telephone du client
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('billets');
    }
};
