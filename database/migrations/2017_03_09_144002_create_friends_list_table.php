<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFriendsListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('friends_list', function(Blueprint $table){
          $table->unsignedInteger('user_id');
          $table->unsignedInteger('user_id_friend');
          $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
          $table->foreign('user_id_friend')->references('id')->on('user')->onDelete('cascade');
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
        schema::dropIfExists('user_has_user');
    }
}
