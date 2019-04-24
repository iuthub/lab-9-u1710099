<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    //
    public function post()
     {
    	# code...
    	return $this->belongsTo('App\Post', 'post_id');
    }
}
