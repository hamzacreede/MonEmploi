<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJeudi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jeudi', function (Blueprint $table) {

            $table->increments('ID_Example');
            

            $table->string('1');

            $table->string('2');

            $table->string('3');

            $table->string('4');

            $table->string('5');
            /*
            $table->string('08h00-09h30');

            $table->string('09h40-11h10');

            $table->string('11h20-12h50');

            $table->string('13h00-14h30');

            $table->string('14h30-16h10');
            */

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
        Schema::dropIfExists('jeudi');
    }
}
