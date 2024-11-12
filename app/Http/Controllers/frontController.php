<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontController extends Controller
{
    public function home(){
        return view('admin.home');
    }
    
    public function addproduct(){
        return view('admin.addproduct');
    }
}
