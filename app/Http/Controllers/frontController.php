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

    public function saveproduct (Request $requ){
        $product = new productlist();
    
        $product->Pname         = $requ->Pname;
        $product->Pquality      = $requ->Pquality;
        $product->Pquantity     = $requ->Pquantity;
    
        if($product->save()):
            return "Data entry successful";
        else:
            return "Data entry faile";
        endif;
    }

}