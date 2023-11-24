<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('salle_logiciel', function (Blueprint $table) {
        $table->unsignedBigInteger('salle_id');
        $table->unsignedBigInteger('logiciel_id');
        $table->foreign('salle_id')->references('id')->on('salles')->onDelete('cascade');
        $table->foreign('logiciel_id')->references('id')->on('logiciels')->onDelete('cascade');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('salle_logiciel');
}


    /**
     * Reverse the migrations.
     */

};
