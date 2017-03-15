<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('book', function(Blueprint $table){
          $table->increments('id');
          $table->mediumtext('title');
          $table->mediumtext('isbn');
          $table->mediumtext('auteur');
          $table->mediumtext('genre');
          $table->binary('cover')->nullable();
          $table->mediumtext('description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::dropIfExists('book');
    }
}
