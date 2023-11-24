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
        Schema::create('actifs', function (Blueprint $table) {
            $table->id();
            $table->enum('etat',['Normale','En panne','En cours de reparation']);
            $table->string('modele');
            $table->enum('type',['Pc','Souris','Clavier','Ecran','Unite']);
            $table->string('referance');
            $table->timestamps();
            $table->foreignId('salle_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actifs');
    }
};
