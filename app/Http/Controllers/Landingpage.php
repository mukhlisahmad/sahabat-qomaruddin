<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Landingpage extends Controller
{
    public function index(){
        $data = "Sahabat Qomaruddin";
        return view ('index', ['data' => $data]);
    }
}
