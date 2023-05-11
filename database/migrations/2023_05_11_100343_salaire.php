<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Salaire extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Salaire', function (Blueprint $table) {
            $table->bigIncrements('code_salaire',255);
            $table->timestamps();
            $table->int('Part_patronal',1000000);
            $table->int('Brut_decimal',1000000);
            $table->int('Montant',1000000);
            $table->int('prèt_ponctuel',1000000);
            $table->string('type', 255);
            $table->Foreign('id_pers')
            ->references('id_pers') 
            ->on ('Personnel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Salaire');
    }
}
