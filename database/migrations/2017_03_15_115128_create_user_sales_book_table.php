<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserSalesBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_sales_book', function(Blueprint $table){
          $table->increments('id');
          $table->unsignedInteger('user_id');
          $table->unsignedInteger('book_id');
          $table->double('price');
          $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
          $table->foreign('book_id')->references('id')->on('book')->onDelete('cascade');
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
        Schema::dropIfExists('user_sales_book');
    }
}
