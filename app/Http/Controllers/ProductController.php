<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductFormRequest;

class ProductController extends Controller
{
    public function read(){
        $products = Product::all();
       
        return view('product.index',compact('products'));
        
    }

    public function create(){
        return view('product.insert');
    }

    public function insert(StoreProductFormRequest $request){
       
            $product = new Product();
            $product->name = $request->name;
            $product->description = $request->description;
            $product->price = $request->price;
            $product->quantity = $request->quantity;
            if($product->save()){
                return redirect()->route('product.index');
            }
     
        
      
       
    }

    public function show ($id){
        
        if($product = Product::find($id)){

            return view('product.edit',compact('product'));


        }else{
           
        }
        
    }

    public function edit (StoreProductFormRequest $request,$id){
        $product = Product::find($id);
        $data = $request->only('name','description','price','quantity');
        if($product->update($data)){
          return redirect()->route('product.index');
        }else{
            echo "Falha ao editar";
        }

       
        
    }

    public function delete ($id){
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('product.index');

    }

}
