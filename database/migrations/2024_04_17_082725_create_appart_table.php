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
        Schema::create('apparts', function (Blueprint $table) {
            $table->id();
            $table->string("type");
            $table->string("Intitule");
            $table->integer("prix");
            $table->float("surface");
            $table->string("nbPieces");
            $table->string("Adresse");
            $table->string("cp");
            $table->string("Ville");
            $table->text("description");
            $table->integer("nbChambres");
            $table->integer("nbSdb");
            $table->string("aParking");
            $table->string("aGarage");
            $table->string("aTerrain");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apparts');
    }
};
