<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Motor;
use App\Models\Promo;
use App\Models\User;
use Auth;

class HomeController extends Controller
{
    public function __construct(){
        $this->middleware(['web']);
    }
    
    public function index(){
       
        $dataMotor = Motor::Get(); 
        return view('admin.page.beranda_admin')
            ->withData($dataMotor)       
        ;
    }

    public function User(){
        $admin =  User::get();
        return $admin;
    }

    

}
