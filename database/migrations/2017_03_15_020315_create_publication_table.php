<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publication', function(Blueprint $table){
          $table->integer('idpublication');
          $table->mediumText('type')->nullable();
          $table->integer('iduser')->unsigned();
          $table->integer('idbook')->unsigned();
          $table->mediumText('duration')->nullable();
          $table->date('StartDate')->nullable();
          $table->date('finishDate')->nullable();

          $table->primary('idpublication', 'iduser', 'idbook');
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
        Schema::dropIfExists('publication');
    }
}
