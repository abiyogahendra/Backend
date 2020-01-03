<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{

    protected $table = 'jenis_motor';
    protected $primaryKey = 'idmotor';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

     protected $fillable  = ['idmotor', 'namaMtr', 'jenisMtr', 'hargaMtr','Kecepatan', 'keteranganMtr', 'imgmtr'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public function Promo(){ 
        return $this->hasMany('App\Models\Promo', 'idmotor'); 
    }
        
    }