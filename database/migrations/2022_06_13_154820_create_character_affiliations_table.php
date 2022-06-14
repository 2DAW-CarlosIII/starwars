<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharacterAffiliationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('character_affiliations', function (Blueprint $table) {
            $table->integer('id_character');
            $table->integer('id_affiliation');
            
            $table->primary(['id_character', 'id_affiliation']);
//            $table->foreign('id_character', 'character_affiliations_ibfk_1')->references('id')->on('characters');
            $table->foreign('id_affiliation', 'character_affiliations_ibfk_2')->references('id')->on('affiliations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('character_affiliations');
    }
}
