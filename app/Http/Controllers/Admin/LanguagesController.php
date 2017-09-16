<?php

namespace App\Http\Controllers\Admin;

use App\Language;

class LanguagesController extends AdminController
{
    public function index()
    {
        $languages = Language::orderBy('key', 'asc')->get();

        return view('admin.languages.index', compact('languages'));
    }
}
