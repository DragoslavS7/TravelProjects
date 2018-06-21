<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAranzmenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aranzmen', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Destinacija');
            $table->string('Kategorija');
            $table->string('Prevoz');
            $table->string('Hotel');
            $table->string('Cena');
            $table->string('Viza');
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
        Schema::dropIfExists('aranzmen');
    }
}
