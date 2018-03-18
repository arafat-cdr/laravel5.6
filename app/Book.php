<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
	#protected $fillable = [];

	protected $guarded  = [];


    public function author() 
    {
    	return $this->belongsTo('App\Author');
    }
}
