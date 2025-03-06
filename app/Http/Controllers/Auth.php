<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Auth extends Controller
{
    public function login (Request $request){
        $data = "login";
        return view ('Auth/login', ['data' => $data]);
    }
}
