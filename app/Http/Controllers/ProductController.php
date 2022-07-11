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
        if(!$request->name){
           echo 'Incompletos';
        }else{
            $product = new Product();
            $product->name = $request->name;
            $product->description = $request->description;
            $product->price = $request->price;
            $product->quantity = $request->quantity;
            $product->save();
     
        }

        
        return view('product.insert');
    }

    public function update (Request $request,$id){
        
    }

}
