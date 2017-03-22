<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserExchangeBook extends Model
{
   
    protected $table = 'user_exchange_book';
    public function user(){
      return $this->belongsTo('App\User');
    }
    public function book(){
      return $this->belongsTo('App\Book');
    }
}
