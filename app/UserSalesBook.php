<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSalesBook extends Model
{
    protected $table = 'user_sales_book';
    public function user(){
      return $this->belongsTo('App\User');
    }
    public function book(){
      return $this->belongsTo('App\Book');
    }
}
