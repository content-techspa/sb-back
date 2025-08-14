<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatesTable extends Migration
{
    public function up()
    {
        Schema::create('states', function (Blueprint $table) {
            $table->bigIncrements('id');

            // Name of the state
            $table->string('name', 255);

            // Optional ISO code or abbreviation
            $table->string('iso_code', 10)->nullable();

            // Foreign key to countries.id
            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id')
                  ->references('id')
                  ->on('countries')
                  ->onDelete('cascade');

            $table->timestamps();

            // Ensure each (country_id, name) is unique to prevent duplicates
            $table->unique(['country_id', 'name']);
        });
    }

    public function down()
    {
        Schema::table('states', function (Blueprint $table) {
            $table->dropForeign(['country_id']);
        });
        Schema::dropIfExists('states');
    }
}
