<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDestinacijasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destinacijas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Grad',255);
            $table->string('Zemlja',255);
            $table->string('Opisi',255);
            $table->string('Latitude', 255);
            $table->string('Longitude', 255);
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
        Schema::dropIfExists('destinacijas');
    }
}
