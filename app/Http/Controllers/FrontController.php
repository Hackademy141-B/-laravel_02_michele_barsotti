<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function welcome(){

               return view('welcome');
        
    }

    public function ChiSiamo()  {
        
        return view('Altrapag');
    }

    public function Servizi(){

$services=[
    ['id'=>'1','name'=>'Servizio 1','prezzo'=>'100$','tempo'=>'2h'],
    ['id'=>'2','name'=>'Servizio 2','prezzo'=>'200$','tempo'=>'4h'],
    ['id'=>'3','name'=>'Servizio 3','prezzo'=>'400$','tempo'=>'3h'],
];
        return view('dataPage', ['services'=>$services]);

    }

    public function Dettaglio($id){

        $services=[
            ['id'=>'1','name'=>'Servizio 1','prezzo'=>'100$','tempo'=>'2h'],
            ['id'=>'2','name'=>'Servizio 2','prezzo'=>'200$','tempo'=>'4h'],
            ['id'=>'3','name'=>'Servizio 3','prezzo'=>'400$','tempo'=>'3h'],
        ];
        
        foreach ($services as $service){
            if($id == $service['id']){
                return view ('DetailPG', ['service'=>$service]);
            }
        }



        
    }
}
