<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Article extends Model
{
	public $table = "Articles";
	use Notifiable;
    protected $fillable = ['title', 'body'];
}
