<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    public $fillable=['name','number','notes'];


    public function necessary_docs()
    {
        return $this->hasMany(NecessaryDoc::class);
    }



}
