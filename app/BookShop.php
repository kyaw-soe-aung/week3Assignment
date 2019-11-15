<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookShop extends Model
{
    protected $fillable = [
        'image',
        'title',
        'type',
        'category',
        'price',
        'paragraph'
    ];
}
