<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;


class frontController extends Controller
{
    public function home(){
        return view('admin.home');
    }
    
    public function addproduct(){
        return view('admin.addproduct');
    }

    public function saveproduct (Request $requ){
        $product = new product();
    
        $product->Pname         = $requ->Pname;
        $product->Pquality      = $requ->Pquality;
        $product->Pquantity     = $requ->pquantity;
    
        if($product->save()):
            return back()->with('success','Data entry successful');
        else:
            return back()->with('erorr','Data entry Failed');
        endif;
    }

    public function productlist(){
        $data = product::all();
        return view('admin.productlist',['product'=>$data]);
    }

    public function editproduct($id){
        $data= product::find($id);
        return view('admin.editproduct',['product'=>$data]);
    }

    public function updateproduct (Request $requ){
        $product = product::find($requ->pid);
        if(!empty($product)){ 
    
        $product->Pname         = $requ->Pname;
        $product->Pquality      = $requ->Pquality;
        $product->Pquantity     = $requ->pquantity;
    
        if($product->save()):
            return back()->with('success','Data entry successful');
        else:
            return back()->with('erorr','Data entry Failed');
        endif;
    }else{
        return back()->with('erorr','No Data Found');
       }
    }
}