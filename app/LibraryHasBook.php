<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LibraryHasBook extends Model
{

    protected $table = 'library_has_book';
    public function library(){
      return $this->belongsTo('App\Library');
    }
    public function book(){
      return $this->belongsTo('App\Book');
    }
}
