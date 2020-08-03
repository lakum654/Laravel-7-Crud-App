<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userModel extends Model
{
    protected $table = "students";
    protected $fillable = [

    	'id','name,','email','city'
    ];
}
