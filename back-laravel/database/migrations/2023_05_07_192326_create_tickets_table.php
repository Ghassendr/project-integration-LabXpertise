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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->enum('typeTicket',['Perte','Probleme Technique','Probleme Mecanique']);
            $table->string('details');
            $table->date('dateOpened');
            $table->date('dateClosed');
            $table->date('lastUpdate');
            $table->enum('statue',['En Attent','Ouvert','En Cours','En Pause','Fermer']);
            $table->enum('priorite',['Bas','Moyen','Haute','Critique']);
            $table->timestamps();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('actif_id')->constrained()->onDelete('cascade');
            $table->foreignId('salle_id')->constrained()->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
