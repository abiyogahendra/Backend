<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function pageLogin(){
        return view('login');
    }
    
}
