<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibraryHasBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('library_has_book',function(Blueprint $table){
          $table->unsignedInteger('library_id');
          $table->unsignedInteger('book_id');
          $table->foreign('library_id')->references('id')->on('library')->onDelete('cascade');
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
        Schema::dropIfExists('library_has_book');
    }
}
