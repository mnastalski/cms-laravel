<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'email',
        'password',
        'admin'
    ];

    protected $hidden = [
        'password',
        'remember_token'
    ];

    public function isAdmin()
    {
        return $this->admin >= 1;
    }

    public function isSuperAdmin()
    {
        return $this->admin == 2;
    }
}
