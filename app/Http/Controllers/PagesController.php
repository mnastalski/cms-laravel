<?php
namespace App\Http\Controllers;


class PagesController
{
    public function about()
    {
        return view('pages.default');
    }

    public function error()
    {
        return view('errors.404');
    }
}