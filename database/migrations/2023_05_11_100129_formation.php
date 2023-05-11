<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Formation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Formation', function (Blueprint $table) {
            $table->bigIncrements('id_form');
            $table->timestamps('début');
            $table->timestamps('fin');
            $table->string('objet');
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
        Schema::dropIfExists('Formation');
    }
}
