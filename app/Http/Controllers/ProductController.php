<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function read(){
        $products = Product::all();
       
        return view('product.index',compact('products'));
        
    }

    public function insert(Request $request){
      $name = $request->name;
      echo $name;
        
        return view('product.insert');
    }

}
