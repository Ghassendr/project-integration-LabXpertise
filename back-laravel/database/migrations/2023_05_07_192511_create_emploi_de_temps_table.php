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
        Schema::create('emploi_de_temps', function (Blueprint $table) {
            $table->id();
            $table->enum('jour',['Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi']);
            $table->string('prof1');
            $table->string('prof2');
            $table->string('prof3');
            $table->string('prof4');
            $table->string('prof5');
            $table->string('prof6');
            $table->timestamps();
            $table->foreignId('salle_id')->constrained()->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emploi_de_temps');
    }
};
