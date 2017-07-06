<?php

namespace App\Http\Controllers\Admin;

use App\Phrase;

class PhrasesController extends AdminController
{
    public function index()
    {
        $phrases = Phrase::all();

        return view('admin.phrases.index', compact('phrases'));
    }
}
