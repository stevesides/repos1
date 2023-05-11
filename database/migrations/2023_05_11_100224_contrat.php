<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Contrat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contrat', function (Blueprint $table) {
            $table->bigIncrements('numéro');
            $table->timestamps('date_debut');
            $table->timestamps('date_fin');
            $table->string('type', 255);
            $table->text('courant', 255);
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
        Schema::dropIfExists('contrat');
    }
}
