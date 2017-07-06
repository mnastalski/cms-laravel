<?php

namespace App\Helpers;

class AdminMenu
{
    public static function add()
    {
        $item = new AdminMenuItem();

        return $item;
    }
}
