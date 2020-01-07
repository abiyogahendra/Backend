<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Promo;
Use App\Models\Motor;
use Validator;
use Auth;
use Hash;

class OperasionalController extends Controller {

    public function __construct(){
        $this->middleware(['web']);
    }

    public function Logout(Request $request){
        //$request->session()->forget('admin_id');        
        return redirect()->route('logout');
    }

    public function LoginAdmin(Request $request) {
        //dd($request -> toArray());

        $datauser = User::all();

        //dd($datauser->toArray());

        $validator = Validator::make($request->all(),
            [
                'email'=>'required|email',
                'password'=>'required'
            ],

            ['email.required'=>'Email Harus Di isikan','password.required'=>'password Diharuskan']
        );

        if ($validator->fails()) {
            return response()->json([
                'status' => 500,
                'message' => 'Email dan password harus diisi'
            ]);
        }      
        
        $credentials = $request->only('email', 'password');

            $email = $request->email;
            $password = $request->password;

            

        if (Auth::attempt($credentials)) {
            //Auth::Pelanggan()->nam
            //$request->session()->put('nama', $user->id);
           //($request -> toArray());
           //dd(Auth()::nama)
           return redirect()->route('show_data');  
           //return view('pages.home')
            
        }else{
           return response()->json([
            'status' => 500,
            'message' => 'Email dan password tidak sesuai'
        ]); 
        }
      
        
        
    }

    

    
    public function doRegistration(Request $request){
        $validator = Validator::make($request->all(),
            [
                'email'=>'required|email|unique:pelanggan',
                'nama'=>'required',
                'password' => 'required'
            ],
            [
                'nama.required'=>'Nama Harus Di isikan','username.required'=>'Username Diharuskan'
            ]
            );
             if ($validator->fails()){
                                  return redirect()->back()
                                                ->withErrors($validator)
                                                ->withInput();               
                        }
        
        $new_user = new User();
        $new_user->nama    =       $request->input('nama');
        $new_user->email    =       $request->input('email');
        $new_user->password =       bcrypt($request->input('password'));
        $new_user->save();

        return redirect('/registrasi');
 
    }
    
    public function index_edit(Request $request, $id){
        $dataMotor = Motor::where('idmotor','=', $id)->first();
        //dd($dataMotor->toArray());

        return view('admin.page.edit', ['data' => $dataMotor]);

    }
    

    public function post_edit(Request $request, $id){
        $validator = Validator::make($request->all(),
                [
                    'namaMtr'       =>'required',
                    'jenisMtr'      =>'required',
                    'platMtr'       =>'required',
                    'hargaMtr'      =>'required',
                                                      
                ],
                [
                    'namaMtr.required'      =>'Nama Harus Disikan',
                    'jenisMtr.required'     =>'Jenis Harus Diisikan',
                    'platMtr.required'      =>'Plat Harus Diisikan',
                    'HargaMtr.required'     =>'Harga Harus diisikan',
                ]       
            );

        if($validator->fails()){
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $data = [
            'namaMtr'       => $request->namaMtr,
            'jenisMtr'      => $request->jenisMtr,
            'platMtr'       => $request->platMtr,
            'hargamtr'      => $request->hargaMtr,
            'keteranganMtr' => $request->keteranganMtr,
        ];

        $update = Motor::where('idmotor',$id)->update($data);
        return redirect()->route('show_data');
    }

    public function index_delete(Request $request, $id){
        $dataMotor = Motor::where('idmotor','=', $id)->first();

        $dataYhapus = [
            'namaMtr'       => $request->namaMtr,
            'jenisMtr'      => $request->jenisMtr,
            'platMtr'       => $request->platMtr,
            'hargamtr'      => $request->hargaMtr,
            'imageMotor'    => $request->imgmtr,
            'keteranganMtr' => $request->keteranganMtr,
        ];

        $delete = Motor::where('idmotor','=', $id)->delete($dataYhapus);
        return redirect()->route('show_data');
    }

    public function index_tambah(Request $request){
        
       //dd($request->toArray());
         
        $validator = Validator::make($request->all(),
                [
                    'namaMtr'       =>'required',
                    'jenisMtr'      =>'required',
                    'hargaMtr'      =>'required',
                    'platMtr'       =>'required',
                    'imgmtr'        => 'required',
                    'keteranganMtr' => 'required',      
                                      
                ],
                [
                    'namaMtr.required'      =>'Nama Harus Disikan',
                    'jenisMtr.required'     =>'Jenis Harus Diisikan',
                    'hargaMtr.required'     =>'Harga Harus diisikan',
                    'platMtr.required'      =>'Plat Harus Diisikan',
                    'imgmtr.required'       =>'Image Harus diisikan',
                    'keteranganMtr.required'=>'Keterangan Harus diisikan',

                ]       
            );

                if($validator->fails()){
                    return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
                }
                    
                        $file = $request->file('imgmtr');

                        $nama_image = $file->getClientOriginalName();
                        
                           // dd($file);

                        $tujuan_upload = 'assets/motor/motor';
                        $file->move($tujuan_upload,$file->getClientOriginalName());


                $new_tawaran = new Motor();
                $new_tawaran->namaMtr       =       $request->input('namaMtr');
                $new_tawaran->jenisMtr      =       $request->input('jenisMtr');
                $new_tawaran->platMtr      =        $request->input('platMtr');
                $new_tawaran->hargaMtr      =       $request->input('hargaMtr');
                $new_tawaran->keteranganMtr =       $request->input('keteranganMtr');
                $new_tawaran->imgmtr        =       $file->getClientOriginalName();


                $new_tawaran->save();
        
            return redirect()->route('show_data');
        
    }

    public function tambah_promo(Request $request){
        $validator = Validator::make($request->all(),
            [
                'idmotor'       => 'required',
                'hargaPromo'    => 'required',
            ],
            [
                'idmotor.required'      => 'ID Motor Harus Diisikan',
                'hargaPromo.required'   => 'Harga Motor Harus Diisikan',
            ]        
        );

        if($validator->fails()){
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $new_promo = new Promo();
        $new_promo->idmotor     =   $request->input('idmotor');
        $new_promo->hargaPromo  =   $request->input('hargaPromo');

        $new_promo->save();

        return redirect()->route('data_promo');

    }

    public function promo_delete(Request $request, $id){
        $dataPromo = Promo::where('idPromo','=', $id)->first();

        $dataYhapus = [
            'idmotor'       => $request->namaMtr,
            'hargaPromo'    => $request->jenisMtr,            
        ];

        $delete = Promo::where('idPromo','=', $id)->delete($dataYhapus);
        return redirect()->route('data_promo');
    }
    






}
   