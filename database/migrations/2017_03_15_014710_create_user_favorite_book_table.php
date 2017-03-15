<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserFavoriteBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_favorise_book', function(Blueprint $table)){
          $table->integer('iduser')->unsigned();
          $table->integer('idbook')->unsigned();
          $table->primary('iduser', ' idbook');
          $table->foreign('iduser')
              ->references('iduser')->on('user');

          $table->foreign('idbook')
              ->references('idbook')->on('book');

          $table->timestamps();
		
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_favorise_book');
    }
}
