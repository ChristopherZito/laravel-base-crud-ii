<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    /*
    Movie:
    - id
    - title
    - subtitle
    - release_date
    */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();

            $table ->string('title',50);
            $table ->string('subTitle',50);
            $table ->date('release_date');

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
        Schema::dropIfExists('movies');
    }
}
