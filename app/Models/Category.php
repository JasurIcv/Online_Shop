<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'slug',
        'parent_id',
    ];

    public function product()
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }

    public function property()
    {
        return $this->hasMany(Property::class, 'category_id', 'id');
    }


    //product model

    // public function category()
    // {
    //     return $this->belongsTo(Category::class, 'category_id', 'id');
    // }
}
