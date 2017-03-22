<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $guarded =[];
  
    protected $table = 'book';
  
    public function comments(){
      return $this->hasMany('App\Comment');
    }
    public function notations(){
      return $this->hasMany('App\Notation');
    }
    public function userFavoriseBooks(){
      return $this->hasMany('App\UserFavoriseBook');
    }
    public function userFollowBooks(){
      return $this->hasMany('App\UserFollowBook');
    }
    public function userSalesBooks(){
      return $this->hasMany('App\UserSalesBook');
    }
    public function userWishBooks(){
      return $this->hasMany('App\UserWishBook');
    }
    public function userExchangeBooks(){
      return $this->hasMany('App\UserExchangeBook');
    }
    public function libraryHasBooks(){
      return $this->hasMany('App\LibraryHasBook');
    }
    public function publications(){
      return $this->hasMany('App\Publication');
    }
    
}
