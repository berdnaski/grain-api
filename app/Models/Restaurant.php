<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = [ 'category', 'name', 'avatar', 'adress', 'phone', 'description', 'opening_hours', 'status', 'rating' ];
    use HasFactory;
}
