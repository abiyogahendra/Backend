<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{

    protected $table = 'pemesanan';
    protected $primaryKey = 'id_pemesanan';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    

     protected $fillable = ['id_pemesanan', 'id_motor','id_pelanggan'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    public function motor(){
    	return $this->hasOne('App\Models\Motor', 'idmotor','id_motor');
    }

    public function pemesan(){
        return $this->hasOne('App\Models\Pelanggan','id_pelanggan', 'id_pemesan');
    }

    // public function pelanggan(){
    //     return $this->belongsTo('App\Models\Pelanggan', 'id_pelanggan');
    // }
        
}