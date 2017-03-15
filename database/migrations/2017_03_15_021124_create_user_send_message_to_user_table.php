<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserSendMessageToUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_send_message_to_user', function(Blueprint $table){
          $table->unsignedInteger('idsender');
          $table->unsignedInteger('idreceiver');
          $table->longText('message_content');
          $table->increments('id');
          $table->foreign('idsender')
              ->references('id')->on('user');

          $table->foreign('idreceiver')
              ->references('id')->on('user');

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
        Schema::dropIfExists('user_send_message_to_user');
    }
}
