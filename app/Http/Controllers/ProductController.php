<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller {
  public function index() {
    $product = Product::all();
    if($product===null){
      return 'nthing';
    }else{ 
      return response()->json(array('products' => $product));
    }
  }

  public function create(Request $request) {
    $product = new Product;
    $product->nama = $request->nama;
    $product->price = $request->price;
    $product->category = $request->category;

    $product->save();
    return response()->json(array('products success upload' => $product));
  }
  public function getbyid($id) {
    $product = Product::find($id);
    return response()->json(array('products' => $product));
  }

  // public function delete($id) {
  //   $product = Product::find($id);
  //   return response()->json(array('products' => $product));
  // }
  // public function edit() {
  //   $product = Product::all();
  //   return response()->json(array('products' => $product));
  // }
  

}