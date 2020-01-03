<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pelanggan;

class DataPelangganController extends Controller
{
    public function index(){
        $dataPelanggan = Pelanggan::Get();
        //dd($dataPelanggan->toArray());
        //dd($dataPelanggan->toArray());  
        return view('admin.page.data_pelanggan')
           ->withData($dataPelanggan)       
        ;
    }
}