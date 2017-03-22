<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    protected $fillable = ['cover'];
    protected $table = 'library';
  
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function libraryHasBooks(){
        return $this->hasMany('App\LibraryHasBook');
    }
}
