<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function redirectTo(){
        return redirect('/login');
//        return view('login.login');
    }
}
