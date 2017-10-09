<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShopProduct extends Model
{
    protected $fillable = [
        'category_id',
        'slug',
        'name',
        'price',
        'description',
        'views'
    ];

    public function category()
    {
        return $this->belongsTo(ShopCategory::class, 'category_id');
    }
}
