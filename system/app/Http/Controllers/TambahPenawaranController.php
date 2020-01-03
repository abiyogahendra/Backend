<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Motor;

class TambahPenawaranController extends Controller {
    
    public function index(){
        
        return view('admin.page.tambah_penawaran')   
        ;
    }
}