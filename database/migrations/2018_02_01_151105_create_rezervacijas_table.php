<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRezervacijasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rezervacijas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ImeKorisnika');
            $table->string('PrezimeKorisnika');
            $table->string('JMBG');
            $table->string('Telefon');
            $table->string('Od');
            $table->string('Do');
            $table->string('Adresa');
            $table->string('Soba');
            $table->string('Aranzman');
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
        Schema::dropIfExists('rezervacijas');
    }
}
