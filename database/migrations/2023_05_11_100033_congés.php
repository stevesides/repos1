<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Congés extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('congés', function (Blueprint $table) {
            $table->bigIncrements('id_congés');
            $table->timestamps('début');
            $table->timestamps('fin');
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
        Schema::dropIfExists('congés');
    }
}
