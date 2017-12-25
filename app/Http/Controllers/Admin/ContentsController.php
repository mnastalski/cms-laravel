<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
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
        $content = Content::firstOrNew(['id' => $id]);

        $this->validate($request, [
            'key' => 'required|min:4' . ($id > 0 && $content->key == $request->key ? '' : '|unique:' . $content->getTable())
        ]);

        $content->fill($request->all());
        $content->save();

        return $this->redirectStore(
            $request,
            route('admin.contents'),
            route('admin.contents.create', [$content->id])
        );
    }

    public function destroy($id)
    {
        Content::destroy($id);

        return $this->redirectBack();
    }
}
