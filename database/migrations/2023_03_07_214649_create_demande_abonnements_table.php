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
        Schema::create('demande_abonnements', function (Blueprint $table) {
            $table->id();
            //$table->unsignedBigInteger('abonnement_id');
            //$table->unsignedBigInteger('paiement_id');
            //$table->unsignedBigInteger('tarif_id');
            // $table->unsignedBigInteger('gare_id');
            //$table->unsignedBigInteger('abonne_id');
            $table->string('section');
            $table->string('idEtudiant');
            $table->text('nom');
            $table->text('prenom');
            $table->string('adresse');
            $table->date('date_naissance');
            $table->string('cin');
            $table->date('date_emission');
            $table->string('email');
            $table->string('numero_tl');
            $table->text('nom_parent');
            $table->text('prenom_parent');
            // $table->date('date_reception');
            // $table->date('date_Cmd');
            $table->string('code_query');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demande_abonnements');
    }
};
