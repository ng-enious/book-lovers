<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserExchangeBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_exchange_book', function(Blueprint $table){
          $table->unsignedInteger('user_id');
          $table->unsignedInteger('book_id_to_exchange');
          $table->unsignedInteger('book_id_wants_to_get')->nullable;
          $table->Date('dateOfLend');
          $table->Date('dateOfRecuperate');
          $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
          $table->foreign('book_id_to_exchange')->references('id')->on('book')->onDelete('cascade');
          $table->foreign('book_id_wants_to_get')->references('id')->on('book');
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
        Schema::dropIfExists('user_exchange_book');
    }
}
