<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Gettext\Languages\Language as CLDR;

class Language extends Model
{
    protected $fillable = [
        'lang',
        'lang_full',
        'active'
    ];

    protected $casts = [
        'active' => 'boolean'
    ];

    public function getLangName()
    {
        return CLDR::getById($this->lang)->name;
    }

//    protected $dates = false;
}
