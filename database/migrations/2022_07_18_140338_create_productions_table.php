<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productions', function (Blueprint $table) {
            $table->id();
            $table->string('eau_brute');
            $table->string('eau_traite');
            $table->string('pompe_lavage');
            $table->string('horaire_agitateur');
            $table->string('horaire_pompe_doseuse');
            $table->string('horaire_pompe_refoulement');
            $table->string('stock_produit');
            $table->string('index_eneo');
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
        Schema::dropIfExists('productions');
    }
}
