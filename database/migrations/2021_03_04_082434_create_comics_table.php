<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id('id');
            $table->string('series', 100);
            $table->string('price', 100);
            $table->string('onSale', 100);
            $table->string('volume', 100);
            $table->string('trimSize', 100);
            $table->string('pageCount', 100);
            $table->string('rated', 100);
            $table->string('artBy', 100);
            $table->string('writtenBy', 100);
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
        Schema::dropIfExists('comics');
    }
}
