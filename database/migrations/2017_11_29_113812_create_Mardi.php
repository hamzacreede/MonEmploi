<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMardi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mardi', function (Blueprint $table) {

            $table->increments('ID_Example');

            
            $table->string('1');

            $table->string('2');

            $table->string('3');

            $table->string('4');

            $table->string('5');

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
        Schema::dropIfExists('mardi');
    }
}
