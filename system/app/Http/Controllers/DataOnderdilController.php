<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\Onderdil;

class DataOnderdilController extends Controller
{
    public function index(){
        $dataOnderdil = onderdil::all();


        //dd($dataPelanggan->toArray());  
        return view('admin.page.data_onderdil')
            ->withData($dataOnderdil)       
        ;
    }
}