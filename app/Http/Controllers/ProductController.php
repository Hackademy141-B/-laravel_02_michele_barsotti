<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
  //  funzioni inserimento prodotti
  public function product(){
    return view('productFolder.productCreate');
  }
  
  public function createPag(ProductRequest $request){
    $product=Product::create(['nome'=>$request->nome,'prezzo'=>$request->prezzo,'descrizione'=>$request->descrizione,'img'=>$request->file('img')?$request->file('img')->store('public/img') : null]);
    // dd($request->all());
    // $product=new Product();
    // $product->nome=$nome;
    // $product->prezzo=$prezzo;
    // $product->descrizione=$descrizione;
    
    // $product->save();
     return redirect()->route('homePage')->with('status', 'Prodotto inserito con successo');
  }
  
  public function store(){
    $products=Product::all();
    
    return view('productFolder.productStore', compact('products'));
  }
}
