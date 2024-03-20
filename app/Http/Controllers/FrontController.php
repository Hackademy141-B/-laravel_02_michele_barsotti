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
    ['id'=>'1','name'=>'Servizio 1','prezzo'=>'100$','tempo'=>'2h','img'=>'/img/servizio1.jpg'],
    ['id'=>'2','name'=>'Servizio 2','prezzo'=>'200$','tempo'=>'4h','img'=>'img\servizio2.webp'],
    ['id'=>'3','name'=>'Servizio 3','prezzo'=>'400$','tempo'=>'3h','img'=>'img\servizio3.jpg'],
];
        return view('dataPage', ['services'=>$services]);

    }

    public function Dettaglio($id){

        $services=[
            ['id'=>'1','name'=>'Servizio 1','prezzo'=>'100$','tempo'=>'2h','img'=>'/img/servizio1.jpg'],
    ['id'=>'2','name'=>'Servizio 2','prezzo'=>'200$','tempo'=>'4h','img'=>'/img/servizio2.webp'],
    ['id'=>'3','name'=>'Servizio 3','prezzo'=>'400$','tempo'=>'3h','img'=>'/img/servizio3.jpg'],
        ];
        
        foreach ($services as $service){
            if($id == $service['id']){
                return view ('DetailPG', ['service'=>$service]);
            }
        }



        
    }

    public function contactUs(){
        return view('mail.contactView');
    }
    public function sendMail(Request $request){
        
    }
}
