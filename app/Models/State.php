<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $table = 'states';

    public function customers(){
        return $this->hasMany('App\Models\Customer');
    }

    public function stocks(){
        return $this->hasMany('App\Models\Stock');
    }
}
