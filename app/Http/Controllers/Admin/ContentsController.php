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
        if ($id === 0) {
            $model_data = [];
        } else {
            $model_data = Content::where('id', $id)->orWhere('key', $id)->first();

            if (!$model_data) {
                flash('Content section with key "' . $id . '" not found')->warning();

                return $this->index();
            }
        }

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
