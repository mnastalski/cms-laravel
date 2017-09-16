<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Gettext\Languages\Language as CLDR;

class Language extends Model
{
    protected $fillable = [
        'key',
        'active'
    ];

    protected $casts = [
        'active' => 'boolean'
    ];

    public function getNameAttribute()
    {
        return CLDR::getById($this->key)->name;
    }
}
