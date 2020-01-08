<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function pageLogin(){
        return view('login');
    }

    public function logout(Request $request){
        $request->session()->flush();

        return redirect()->route('Login');
    }
    
}
