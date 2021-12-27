<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $product = Product::all();
        return response()->json($product);
    }
    public function store(Request $request){
        $request->validate([
            "name" => 'required' ,
            "price" => 'required' ,
            "category" => 'required', 
            "imageUrl" => 'required',
        ]);
        $product = Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'category' => $request->category,
            'imageUrl' => $request->imageUrl,
            'description' => $request->description,
        ]);

        return response()->json($product);
    }
    public function update(Request $request,Product $product){
        $request->validate([
            "name" => 'required' ,
            "price" => 'required' ,
            "category" => 'required', 
            "imageUrl" => 'required',
        ]);
        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'category' => $request->category,
            'imageUrl' => $request->imageUrl,
            'description' => $request->description,
        ]);

        return response()->json($product);
    }
    
    public function destroy(Product $product){
        $product->delete();
        return response()->json($product);
    }
}
