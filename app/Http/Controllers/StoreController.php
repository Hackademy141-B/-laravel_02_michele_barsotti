<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stores=Store::all();

        return view('storeFolder.storeIndex', compact('stores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('storeFolder.createStore');
    }

    /**
     * Store a newly created resource in storage.
     */
    //Una rotta collegata ad una rotta di tipo post NON HA IL COMPITO DI RESTITUIRE UNA VISTA quindi ha una sola tipologia di return
    //una redirect verso una rotta di tipo get
    public function store(Request $request)
    {
        //dd($request->all());

        //Mass Assignment
        $store = Store::create([
            'name' => $request->name,
            'description' => $request->description,
            'img'=>$request->file('img')?$request->file('img')->store('public/img') : null
        ]);

        return redirect()->route('homePage')->with('message','Negozio creato con successo');

    }
}
