<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Prime extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prime', function (Blueprint $table) {
            $table->bigIncrements('id_prime');
            $table->text('raison', 255);
            $table->int('Montant',1000000);
            $table->timestamps('date_remise');
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
        Schema::dropIfExists('prime');
    }
}
