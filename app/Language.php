<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Gettext\Languages\Language as CLDR;

class Language extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'key',
        'icon',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];

    protected static function boot()
    {
        parent::boot();

        self::saving(function($model) {
            $model->name = CLDR::getById($model->key)->name;
        });
    }
}
