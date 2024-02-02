<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id', 'name', 'avatar', 'adress', 'phone', 'description', 'opening_hours', 'status', 'rating'
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'restaurant_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
