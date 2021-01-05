<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
class authcontroller extends Controller
{
    //
    public function login(Request $request)
    {
        $username =  $request['username'];
        $password =  $request['password'];
        if(Auth::attempt(['name'=>$username,'password'=>$password]))
            return view('thanhcong');
        else
             echo $password;
    }
}
