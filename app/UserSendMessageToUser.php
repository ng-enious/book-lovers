<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSendMessageToUser extends Model
{
    protected $fillable = ['messageContent'];
    protected $table = 'user_send_message_to_user';
     public function user(){
      return $this->belongsTo('App\User');
    }
}
