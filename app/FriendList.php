<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FriendList extends Model
{
     protected $table = 'friends_list';
  
     public function user(){
       return $this->belongsTo('App\User');
     }
}
