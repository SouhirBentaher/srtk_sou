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
        Schema::create('etablissements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('type_etablissements_id');
            $table->unsignedBigInteger('nature_etablissements_id');
            $table->string('nom');
            $table->string('code_etab');
            $table->string('type_etablissement');
            $table->string('lib_etablissement');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etablissements');
    }
};
