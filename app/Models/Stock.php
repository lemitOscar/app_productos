<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function direction(){
        return $this->belongsTo('App\Models\Direction');
    }

    /*Relacion uno a muchos */
    public function inventories(){
        return $this->hasMany('App\Models\Inventory');
    }
}
