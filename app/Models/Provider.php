<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    public function delivery(){
        return $this->hasMany('App\Models\Delivery');
    }
}
