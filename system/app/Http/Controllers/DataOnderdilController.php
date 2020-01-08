<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\Onderdil;
use Validator;

class DataOnderdilController extends Controller
{
    public function index(){
        $dataOnderdil = onderdil::all();


        //dd($dataPelanggan->toArray());  
        return view('admin.page.data_onderdil')
            ->withData($dataOnderdil)       
        ;
    }

    public function tampil_tambah(){
        return view('admin.page.tambah_onderdil');
    }

    public function tambah_onderdil(Request $request){
        
        //dd($request->toArray());
          
         $validator = Validator::make($request->all(),
                 [
                     'namaOnderdil'  =>'required',
                     'hargaOnderdil'      =>'required',
                     'imgOnderdil'        => 'required',
                                       
                 ],
                 [
                     'namaOnderdil.required'    =>'Nama Harus Disikan',
                     'hargaOnderdil.required'        =>'Harga Harus diisikan',
                     'imgOnderdil.required'          =>'Image Harus diisikan',
 
                 ]       
             );
 
                 if($validator->fails()){
                     return redirect()->back()
                         ->withErrors($validator)
                         ->withInput();
                 }
                     
                         $file = $request->file('imgOnderdil');
 
                         $nama_image = $file->getClientOriginalName();
                         
                            // dd($file);
 
                         $tujuan_upload = 'assets/Onderdil/Onderdil';
                         $file->move($tujuan_upload,$file->getClientOriginalName());
 
 
                 $new_onderdil = new Onderdil();
                 $new_onderdil->namaOnderdil        =       $request->input('namaOnderdil');
                 $new_onderdil->hargaOnderdil       =       $request->input('hargaOnderdil');
                 $new_onderdil->imgOnderdil         =       $file->getClientOriginalName();
 
 
                 $new_onderdil->save();
         
             return redirect()->route('data_onderdil');         
     }


     public function hapus_onderdil (Request $request, $id){
         $dataHapus = Onderdil::where('idOnderdil','=', $id)->first();

         $dataYhapus = [
            'idOnderdil'        => $request->idOnderdil,
            'hargaOnderdil'     => $request->hargaOnderdil,
            'imgOnderdil'       => $request->imgOnderdil,            
        ];

        $delete = Onderdil::where('idOnderdil','=', $id)->delete($dataYhapus);
        return redirect()->route('data_onderdil');
    }

    public function edit_onderdil(Request $request, $id){
        $data_edit = Onderdil::where('idOnderdil','=', $id)->first();
        
        return view('admin.page.edit_onderdil', ['data' => $data_edit]);
    }

    public function post_edit_onderdil(Request $request, $id){

        $validator = Validator::make($request->all(),
                [
                    'namaOnderdil'       =>'required',
                    'hargaOnderdil'      =>'required',
                                                      
                ],
                [
                    'namaOnderdil.required'      =>'Nama Harus Disikan',
                    'hargaOnderdil.required'     =>'Harga Harus diisikan',
                ]       
            );

        if($validator->fails()){
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $data = [
            'namaOnderdil'       => $request->namaOnderdil,
            'hargaOnderdil'      => $request->hargaOnderdil,
        ];

        $update = Onderdil::where('idOnderdil',$id)->update($data);
        return redirect()->route('data_onderdil');
    }
     

}