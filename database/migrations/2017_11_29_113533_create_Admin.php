<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {

            $table->increments('ID_Admin');

            $table->string('Nom_Admin');

            $table->string('Passowrd_Admin');

            //relations ..

            $table->integer('ID_Salle_TD')->unsigned();

            $table->foreign('ID_Salle_TD')->references('ID_Salle_TD')->on('salle_id');

            // relation 2 

            $table->integer('ID_Salle_TP')->unsigned();

            $table->foreign('ID_Salle_TP')->references('ID_Salle_TP')->on('salle_tp');

            //relation 3 

            $table->integer('ID_Amphi')->unsigned();
            
            $table->foreign('ID_Amphi')->references('ID_Amphi')->on('amphi');

             //relation 4

            $table->integer('ID_ExampleTbale')->unsigned();
            
            $table->foreign('ID_ExampleTbale')->references('ID_ExampleTbale')->on('example_tables');



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
        Schema::dropIfExists('admin');
    }
}
