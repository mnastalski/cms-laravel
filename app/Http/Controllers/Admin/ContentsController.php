<?php

namespace App\Http\Controllers\Admin;

use App\Content;

class ContentsController extends AdminController
{
    public function index()
    {
        $contents = Content::all();

        return view('admin.contents.index', compact('contents'));
    }

    public function create($id = 0)
    {
        $model_data = $id > 0 ? Content::findOrFail($id) : [];

        return view('admin.contents.create', compact('model_data'));
    }
}
