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
        Schema::create('library_has_book',function(Blueprint $table)){
          $table->integer('idlibrary');
          $table->integer('iduser');
          $table->integer('idbook');
          $table->primary('idlibrary', 'iduser', 'idbook');
          $table->foreign('idlibrary')->references('idlibrary')->on('library');
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
        Schema::dropIfExists('library_has_book');
    }
}
