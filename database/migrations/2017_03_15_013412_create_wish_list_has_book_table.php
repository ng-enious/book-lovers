<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWishListHasBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wish_list_has_book', function(Blueprint $table)){
          $table->integer('idwishList');
          $table->integer('iduser');
          $table->integer('idbook')->unsigned();

          $table->primary('idwishList', 'iduser', 'idbook');
          $table->foreign('idwishList , iduser')
              ->references('idwishList , iduser')->on('wishList');

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
         Schema::dropIfExists('wish_list_has_book');
    }
}
