<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{

    protected $table = 'pelanggan';
    protected $primaryKey = 'id_pelanggan';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

     protected $fillable  = ['id_pelanggan', 'nama', 'email',];

        /**
         * The attributes that should be hidden for arrays.
         *
         * @var array
         */

    
        
    }