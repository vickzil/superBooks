<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{

    use SoftDeletes;
    //Table name
    protected $table = "books";
    protected $dates = ['deleted_at'];

    public function user() {
    	return $this->belongsTo('App\User');
    }
}
