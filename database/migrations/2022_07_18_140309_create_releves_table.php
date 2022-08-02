<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelevesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('releves', function (Blueprint $table) {
            $table->id();
            $table->string('nom_agence');
            $table->string('code_agence');
            $table->string('nom_releveur');
            $table->string('numero_compteur');
            $table->string('nom_prenom');
            $table->string('reference_abonne');
            $table->string('ancien_index');
            $table->string('nouvel_index');
            $table->string('anomalie');
            $table->string('photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('releves');
    }
}
