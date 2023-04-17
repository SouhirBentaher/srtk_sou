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
        Schema::create('type__durees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('type_abonnement_id');
            $table->unsignedBigInteger('periodicite_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('type__durees');
    }
};
