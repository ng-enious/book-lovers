<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment', function(Blueprint $table){
          $table->integer('idcomment');
          $table->longText('commentContent')->nullable();
          $table->time('create_time')->nullable();
          $table->integer('iduser')->unsigned();
          $table->integer('idbook')->unsigned();

          $table->primary('idcomment', 'iduser', 'idbook');
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
        Schema::dropIfExists('comment');
    }
}
