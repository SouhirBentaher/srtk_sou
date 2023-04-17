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
        Schema::create('impressions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('abonnement_id');
            $table->unsignedBigInteger('administrateur_id');
            $table->boolean('bloque_impres');
            $table->date('date_impres');
            $table->boolean('impression');
            $table->date('datebloqye_impres');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('impressions');
    }
};
