<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produit extends Model
{
    // use HasFactory, SoftDeletes;

    protected $fillable = [
        'magasin_id',
        'category_id',
        'nom',
        'image',
        'prix',
        'prix_promo',
        'quantite',
    ];

    public function magasin()
    {
        return $this->belongsTo(Magasin::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
