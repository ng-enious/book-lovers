<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'date_birth', 'adress','postal_code', 'town', 'country', 
        'phone_number', 'photo'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];
  
    protected $table = 'user'; 
  
    public function library(){
      return $this->hasOne('App\Library');
    }
  
    public function comments(){
      return $this->hasMany('App\Comment', '');   
    }
    public function notations(){
      return $this->hasMany('App\Notation');   
    }

    public function friendsList(){
      return $this->hasMany('App\friendList');
    }
    
    public function userFavoriseBooks(){
      return $this->hasMany('App\UserFavoriseBook');
    }
  
    public function userFollowBooks(){
      return $this->hasMany('App\UserFollowBook');
    }
    
    public function userExchangeBooks(){
      return $this->hasMany('App\UserExchangeBook');
    }
  
    public function userSalesBooks(){
      return $this->hasMany('App\UserSalesBook');
    }
    
    public function userWishBooks(){
      return $this->hasMany('App\UserWishBook');
    }
    public function userSendMessageToUsers(){
      return $this->hasMany('App\UserSendMessageToUser');
    }
    public function publications(){
      return $this->hasMany('App\Publication');
    }
  
}
