<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeathsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deaths', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('id_character')->nullable();
            $table->integer('id_killer')->nullable();
            $table->integer('id_film')->nullable();
            
//            $table->foreign('id_character', 'deaths_ibfk_1')->references('id')->on('characters');
//            $table->foreign('id_killer', 'deaths_ibfk_2')->references('id')->on('characters');
            $table->foreign('id_film', 'deaths_ibfk_3')->references('id')->on('films');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deaths');
    }
}
