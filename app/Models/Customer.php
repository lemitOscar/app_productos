<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';

    public function address(){
        return $this->belongsTo('App\Models\Address');
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
