<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notation', function(Blueprint $table){
          $table->integer('idnotation');
          $table->integer('notationValue')->nullable();
          $table->integer('iduser')->unsigned();
          $table->integer('idbook')->unsigned();

          $table->primary('idnotation', 'iduser', 'idbook');
          $table->foreign('iduser')
              ->references('iduser')->on('user');

          $table->foreign('idbook')
              ->references('idbook')->on('book');

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
        Schema::dropIfExists('notation');
    }
}
