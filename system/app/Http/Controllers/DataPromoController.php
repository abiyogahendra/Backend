<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\Promo;

class DataPromoController extends Controller
{
    public function index(){
        $dataPromo = Promo::all();

       // dd($dataPromo->motor);

        //dd($dataPelanggan->toArray());  
        return view('admin.page.data_promo')
            ->withData($dataPromo)       
        ;
    }
}