<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  //  funzioni inserimento prodotti
  public function product(){
    return view('productFolder.productCreate');
  }
  
  public function createPag(Request $request){
    $product=Product::create(['nome'=>$request->nome,'prezzo'=>$request->prezzo,'descrizione'=>$request->descrizione]);
    
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
