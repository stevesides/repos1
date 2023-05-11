<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cotisation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Cotisation' , function (Blueprint $table ){
            $table->bigIncrements('code_cotisation');
            $table->Foreign('id_pers')
            ->references('id_pers') 
            ->on ('Personnel');
        });    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Salaire');    }
}
