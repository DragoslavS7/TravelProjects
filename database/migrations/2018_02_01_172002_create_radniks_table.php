<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRadniksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('radniks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('RadnikIme');
            $table->string('Sifra');
            $table->string('RadnikJMBG');
            $table->string('Adresa');
            $table->string('Telefon');
            $table->string('SSprema');
            $table->string('Pozicija');
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
        Schema::dropIfExists('radniks');
    }
}
