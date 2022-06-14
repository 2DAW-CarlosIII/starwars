<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharacterFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('character_films', function (Blueprint $table) {
            $table->integer('id_character');
            $table->integer('id_film');

            $table->primary(['id_character', 'id_film']);
            // $table->foreign('id_character', 'character_films_ibfk_1')->references('id')->on('characters');
            $table->foreign('id_film', 'character_films_ibfk_2')->references('id')->on('films');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('character_films');
    }
}
