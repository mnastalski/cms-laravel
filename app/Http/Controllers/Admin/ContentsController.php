<?php

namespace App\Http\Controllers\Admin;

use App\Content;
use Illuminate\Http\Request;

class ContentsController extends AdminController
{
    public function index()
    {
        $contents = Content::all();

        return view('admin.contents.index', compact('contents'));
    }

    public function create($id = 0)
    {
        $model_data = $this->getModelData(Content::class, $id);

        return view('admin.contents.create', compact('model_data'));
    }

    public function store(Request $request, $id = 0)
    {
        $this->validate($request, [
            'key' => 'required|min:4'
        ]);

        Content::updateOrCreate(
            ['id' => $id],
            $request->all()
        );

        flash('Saved')->success();

        return redirect()->route('admin.contents');
    }

    public function destroy($id)
    {
        Content::destroy($id);

        return redirect()->back();
    }
}
