<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Buymovie extends Model
{
    protected $guarded = [''];

    public function user(){

    	return $this->hasOne('App\User');
    }
}
