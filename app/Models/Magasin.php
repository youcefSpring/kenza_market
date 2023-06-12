<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Magasin extends Model
{
    //
    protected $table='magasins';

    public function produits(){
        return $this->hasMany(Produit::class);
    }
}
