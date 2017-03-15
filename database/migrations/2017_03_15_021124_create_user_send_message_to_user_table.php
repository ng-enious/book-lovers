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
          $table->integer('id_sender')->unsigned();
          $table->integer('id_receiver')->unsigned();
          $table->longText('message_content');
          $table->time('create_time');
          $table->integer('idmessage');
          $table->primary('id_sender', 'id_receiver', 'idmessage');
          $table->foreign('id_sender')
              ->references('iduser')->on('user');

          $table->foreign('id_receiver')
              ->references('iduser')->on('user');

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
