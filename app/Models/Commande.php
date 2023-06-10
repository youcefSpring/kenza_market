<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Commande extends Model
{
    protected $fillable = [
        'magasin_id',
        'user_id',
        'nombre',
        'cas',
    ];

    public function magasin()
    {
        return $this->belongsTo(Magasin::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function generateUniqueCode($length = 4)
{
    $code = Str::random($length);

    // Check if the generated code already exists in the database
    if (self::where('code', $code)->exists()) {
        // If it exists, recursively call the method to generate a new code
        return self::generateUniqueCode($length);
    }

    return $code;
}

}
