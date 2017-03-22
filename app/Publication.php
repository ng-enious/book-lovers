<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
  
    protected $table = 'publication';
    public function user(){
      return $this->belongsTo('App\User');
    }
    public function book(){
      return $this->belongsTo('App\Book');
    }
    
}
