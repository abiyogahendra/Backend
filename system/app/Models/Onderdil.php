<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Onderdil extends Model
{

    protected $table = 'onderdil';
    protected $primaryKey = 'idOnderdil';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

     protected $fillable  = ['idOnderdil', 'hargaOnderdil', 'namaOnderdil', 'imgOnderdil'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public function Onderdil(){ 
        return $this->hasMany('App\Models\Onderdil', 'idOnderdil'); 
    }
        
    }