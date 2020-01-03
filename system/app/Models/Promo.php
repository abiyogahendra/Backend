<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{

    protected $table = 'promo';
    protected $primaryKey = 'idPromo';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    

     protected $fillable = ['idPromo', 'idmotor'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    public function motor(){
    	return $this->belongsTo('App\Models\Motor', 'idmotor');
    }
        
}