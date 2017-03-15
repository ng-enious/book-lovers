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
        schema::create('user', function(Blueprint $table){
          $table->increments('id');
          $table->mediumtext('name');
          $table->mediumtext('password');
          $table->string('email');
          $table->Date('date_birth');
          $table->longtext('adress');
          $table->integer('postal_code');
          $table->mediumtext('town');
          $table->mediumtext('country');
          $table->mediumtext('phone_number')->nullable();
          $table->binary('photo')->nullable();
          $table->rememberToken();
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
        Schema::dropIfExists('user');
    }
}
