<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    
    protected $table = 'producto';

    public function comments(){

    	return $this->hasMany('App\Models\Comments')->orderby('id','desc');
    }

    //Relacion M a 1
    public function user(){

    	return $this->belongsTo('App\Models\User', 'user_id');
    }
}
