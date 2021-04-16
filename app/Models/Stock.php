<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $table = 'stocks';

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function state(){
        return $this->belongsTo('App\Models\State');
    }

    /*Relacion uno a muchos */
    public function inventories(){
        return $this->hasMany('App\Models\Inventory');
    }
}
