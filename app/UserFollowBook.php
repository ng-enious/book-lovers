<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserFollowBook extends Model
{
    protected $fillable = ['price'];
    protected $table = 'user_follow_book';
    public function user(){
      return $this->belongsTo('App\User');
    }
    public function book(){
      return $this->belongsTo('App\Book');
    }
}
