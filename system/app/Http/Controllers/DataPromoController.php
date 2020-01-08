<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\Promo;
use Validator;

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

    // public function edit_promo(Request $request, $id){
    //     $dataPromo = Promo::where('idPromo','=',$id)->first();

    //     return view('admin.page.edit_promo',['data' => $dataPromo]);
    // }

    // public function post_edit_promo(Request $request, $id){

    //     $validator = Validator::make($request->all(),
    //             [
    //                 'idmotor'       =>'required',
    //                 'hargaPromo'      =>'required',
                                                      
    //             ],
    //             [
    //                 'idmotor.required'      =>'Nama Harus Disikan',
    //                 'hargaPromo.required'     =>'Harga Harus diisikan',
    //             ]       
    //         );

    //     if($validator->fails()){
    //         return redirect()->back()
    //             ->withErrors($validator)
    //             ->withInput();
    //     }

    //     $data = [
    //         'idmotor'           => $request->idmotor,
    //         'hargaPromo'        => $request->hargaPromo,
    //     ];

    //     $update = Promo::where('idPromo',$id)->update($data);
    //     return redirect()->route('data_promo');
    // }
}