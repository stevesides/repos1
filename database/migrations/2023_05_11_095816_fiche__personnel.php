<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FichePersonnel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiche_pers', function (Blueprint $table) {
            $table->bigIncrements('id_fiche');
            $table->Foreign('id_pers')
            ->references('id_pers') 
            ->on ('Personnel');
            $table->Foreign('id_stagiaire')
            ->references('id_stagiaire') 
            ->on ('Stagiaire');
            $table->text('evaluation', 255);
            $table->text('respect_delai', 255);
            $table->text('capacité', 255);
            $table->text('qualité', 255);
            $table->text('Regularité', 255);
            $table->text('Aptitude', 255);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fiche_pers');
    }
}
