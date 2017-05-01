<?php
namespace App\Http\Controllers;


class PagesController
{
    public function about()
    {
        return view('pages/default');
    }
}