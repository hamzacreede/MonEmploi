<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
Schema::defaultStringLength(191);
class CreateModules extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {

           $table->increments('ID_Module');

            $table->string('Nom_Modules');

            $table->string('Jours');

            $table->time('Heure');


            $table->boolean('TD',false);

            $table->boolean('TP',false);

            $table->boolean('Cours',false);


            $table->integer('ID_Enseignant')->unsigned();

            $table->foreign('ID_Enseignant')->references('ID_Enseignant')->on('enseignants');

         
           
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
        Schema::dropIfExists('modules');
    }
}
