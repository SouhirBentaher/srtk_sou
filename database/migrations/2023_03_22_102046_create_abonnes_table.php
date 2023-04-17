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
        Schema::create('abonnes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('etablissement_id');
            $table->unsignedBigInteger('type_abonnes_id');
            $table->text('nom', 20);
            $table->text('prenom', 20);
            $table->date('date_naissance');
            $table->text('adresse', 30);
            $table->string('num_telephone');
            $table->string('classe', 30);
            //$table->('photo');
            $table->string('email');
            $table->string('cin');
            $table->date('date_emission');
            $table->text('nom_parent', 20);
            $table->text('prenom_parent', 20);
            $table->string('cin_parent');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abonnes');
    }
};
