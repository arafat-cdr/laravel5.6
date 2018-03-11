<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable	=	['name', 'id'];

    # here the element that are allows to insert

    # or we can write for mass assignment 

    # protected $guarded  =	[]; 

    # array element that are disallow to insert 
}