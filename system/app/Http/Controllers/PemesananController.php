<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\Pemesanan;

class PemesananController extends Controller
{
    public function index(){
        $dataPemesanan = Pemesanan::all();
        

        //dd($dataPelanggan->toArray());  
        return view('admin.page.pemesanan')
            ->withData($dataOnderdil)       
        ;
    }
}