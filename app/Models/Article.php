<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	protected $table = "Articles";
	
    protected $fillable = ['title', 'body'];
}
