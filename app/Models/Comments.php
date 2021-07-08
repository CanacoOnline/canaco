<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;
    //Relacion 1 a M
    public function comments(){

    	return $this->hasMany('App\Comment')->orderby('id','desc');
    }
    //Relacion M a 1
    public function user(){

    	return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function producto(){

    	return $this->belongsTo('App\Models\Producto', 'producto_id');
    }
}
