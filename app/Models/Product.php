<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['restaurants_id', 'name', 'price', 'description'];
    use HasFactory;
}
