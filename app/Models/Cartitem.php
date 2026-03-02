<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cartitem extends Model
{
    use HasFactory;
    protected $table = 'cart_items';
}