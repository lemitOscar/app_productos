<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    public function stock(){
        return $this->belongsTo('App\Models\Stock');
    }

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }
}
