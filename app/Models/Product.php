<?php

namespace App\Models;

use App\Models\User;
use App\Models\Store;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable=['nome','prezzo','descrizione','img','user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function stores(): BelongsToMany
    {
        //La funzione restituisce una collezione di oggetti di tipo store collegati all'oggetto prodotto
        return $this->belongsToMany(Store::class);
    }

}
