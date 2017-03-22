<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notation extends Model
{
    protected $fillable = ['notationValue'];
    protected $table = 'notation';
    public function book(){
      return $this->belongsTo('App\Book');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
}
