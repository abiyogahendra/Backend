<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Motor;
use App\Models\Pelanggan;
Use App\Models\Pemesanan;

class PemesananController extends Controller {
    
    public function index(){
        $dataPemesanan = Pemesanan::all();
        
        //dd($dataPemesanan->motor);

        //dd($dataPelanggan->toArray());  
        return view('admin.page.pemesanan')
            ->withpemesanan($dataPemesanan)       
        ;
    }
}