<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'sku',
        'category_id',
        'title',
        'slug',
        'author',
        'cover',
        'file',
        'description'
    ];

    public function  category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
