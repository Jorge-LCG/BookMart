<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'editorial',
        'isbn',
        'language',
        'pages',
        'publication',
        'format',
        'price',
        'image',
        'description',
        'is_new'
    ];

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
