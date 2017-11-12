<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Gettext\Languages\Language as CLDR;

class Language extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'key',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];

//    public function getNameAttribute()
//    {
//        return CLDR::getById($this->key)->name;
//    }
}
