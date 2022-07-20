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
            return view('product.insert');
        }else{
            $product = new Product();
            $product->name = $request->name;
            $product->description = $request->description;
            $product->price = $request->price;
            $product->quantity = $request->quantity;
            if($product->save()){
                return redirect()->route('product.index');
            }
     
        }
        
       
    }

    public function show ($id){
        
        if($product = Product::find($id)){

            return view('product.edit',compact('product'));


        }else{
           
        }
        
    }

    public function edit (Request $request,$id){
        $product = Product::find($id);
        $data = $request->only('name','description','price','quantity');
        if($product->update($data)){
          return redirect()->route('product.index');
        }else{
            echo "Falha ao editar";
        }

       
        
    }

}
