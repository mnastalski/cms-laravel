<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class ShopCategory extends Model
{
    use NodeTrait;

    protected $fillable = [
        'name',
        'slug',
        'parent_id',
//        'image',
        'is_featured'
    ];

    protected $casts = [
        'is_featured' => 'boolean'
    ];

    public static function selectList()
    {
        return self::withDepth()
            ->defaultOrder()
            ->get()
            ->map(function ($item) {
                $item->name = str_repeat('&nbsp;', $item->depth * 2) . $item->name;

                return $item;
            })
            ->pluck('name', 'id');
    }
}
