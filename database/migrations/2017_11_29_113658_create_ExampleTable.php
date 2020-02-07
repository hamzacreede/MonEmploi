<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExampleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('example_tables', function (Blueprint $table) {

            $table->increments('ID_ExampleTbale');

            $table->integer('ID_Jours')->unsigned();
            
            $table->foreign('ID_Jours')->references('jours');

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
        Schema::dropIfExists('example_tables');
    }
}
