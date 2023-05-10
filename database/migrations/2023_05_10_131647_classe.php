<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Classe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Personnel', function () {
            $table->id();
            $table->string('Nom');
            $table->string('Service');
            $table->string('Section');
            $table->string('cadre');
            $table->string('Indice');
            $table->string('echelon');
            $table->string('ancienneté');
            $table->int('age_retraite');
            $table->string('email')->unique();
        });
        Schema::create('Fiche_Pers', function () {
            $table->id();
            $table->id(ID_fiche);
            $table->id(ID_fiche);
            $table->string('email')->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
