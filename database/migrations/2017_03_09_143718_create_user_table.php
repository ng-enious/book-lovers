<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('user', function(Blueprint $table)){
          $table->increments('iduser');
          $table->mediumtext('name');
          $table->mediumtext('password');
          $table->mediumtext('email')->unique();
          $table->Date('date_birth');
          $table->longtext('adress');
          $table->integer('postal_code');
          $table->mediumtext('town');
          $table->mediumtext('country');
          $table->mediumtext('phone_number')->nullable();
          $table->binary('photo')->nullable();
          $table->rememberToken();
          $table->timestamps();
          $table->foreign('id_friends_list')->references('id_friends_list')->on('friends_list') ; 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
