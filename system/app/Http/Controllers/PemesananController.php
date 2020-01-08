<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Motor;
use App\Models\Pelanggan;
Use App\Models\Pemesanan;

class PemesananController extends Controller {
    
    public function index(){
        $dataPemesanan = Pemesanan::with(['motor','pemesan'])->get();
        
            //dd($dataPemesanan->toArray());

        //dd($dataPelanggan->toArray());  
        return view('admin.page.pemesanan')
            ->withpemesanan($dataPemesanan)       
        ;
    }

    public function hapus_pemesanan(Request $request, $id){
        $dataPemesanana = Pemesanan::where('id_pemesanan','=', $id)->first();

        $dataYhapus = [
            'id_motor'      => $request->id_motor,
            'id_pemesan'    => $request->id_pemesan,
            'total'         => $request->total,            
        ];

        $delete = Pemesanan::where('id_pemesanan','=', $id)->delete($dataYhapus);
        return redirect()->route('data_pemesanan');
    }

}