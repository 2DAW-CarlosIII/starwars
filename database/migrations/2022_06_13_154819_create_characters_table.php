<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->text('name')->nullable();
            $table->integer('height')->nullable();
            $table->float('mass')->nullable();
            $table->text('hair_color')->nullable();
            $table->text('skin_color')->nullable();
            $table->text('eye_color')->nullable();
            $table->text('birth_year')->nullable();
            $table->text('gender')->nullable();
            $table->integer('planet_id');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->text('url')->nullable();

            // $table->foreign('planet_id', 'characters_ibfk_1')->references('id')->on('planets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('characters');
    }
}
