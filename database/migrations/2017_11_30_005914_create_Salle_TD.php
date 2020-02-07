<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalleTD extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salle_td', function (Blueprint $table) {

            $table->increments('ID_Salle_TD');

            $table->string('Nom_Salle');

            //heure de la disponibilité

            $table->time('Samedi');
            $table->time('Dimanche');
            $table->time('Lundi');
            $table->time('Mardi');
            $table->time('Mercredi');
            $table->time('Jeudi');

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
        Schema::dropIfExists('salle_td');
    }
}
