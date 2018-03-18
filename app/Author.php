<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
	#protected $fillable = [];

	protected $guarded  = [];

    public function book() 
    {
    	return $this->hasOne('App\Book');
    }
}
