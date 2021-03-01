<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $dateFormat = 'Ymd H:i:s';
    use HasFactory;
    protected $table = 'productos';
}
