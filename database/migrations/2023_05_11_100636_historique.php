<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Historique extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Historique', function (Blueprint $table) {
            $table->bigIncrements('code_historique');
            $table->Foreign('id_fiche')
            ->references('id_fiche') 
            ->on ('fiche_personnel');

        });    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Historique');   
    }
}
