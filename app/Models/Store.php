<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Store extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image'
    ];

    public function products(): BelongsToMany
    {
        //La funzione restituisce una collezione di oggetti di tipo store collegati all'oggetto prodotto
        return $this->belongsToMany(Product::class);
    }

}
