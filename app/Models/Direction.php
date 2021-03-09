<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direction extends Model
{
    use HasFactory;

    public function stocks(){
        return $this->belongsTo('App\Models\Stock');
    }

    /*
    uno a muchos
    return $this->hasMany('App\Models\Stock');*/
}
