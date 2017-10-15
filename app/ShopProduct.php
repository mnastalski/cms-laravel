<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;

class ShopProduct extends Model implements HasMedia
{
    use HasMediaTrait;

    protected $fillable = [
        'category_id',
        'slug',
        'name',
        'price',
        'description',
        'views'
    ];

    public function getUrlAttribute()
    {
        return route('shop.product.view', [$this->category->slug, $this->slug]);
    }

    public function getThumbnailAttribute()
    {
        if (!$this->hasMedia('images')) {
            return null;
        }

        return $this->getMedia('images')[0];
    }

    public function category()
    {
        return $this->belongsTo(ShopCategory::class, 'category_id');
    }
}
