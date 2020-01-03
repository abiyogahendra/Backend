<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Promo;

class TambahPromoController extends Controller {
    
    public function index(){
        
        return view('admin.page.tambah_promo')   
        ;
    }
}