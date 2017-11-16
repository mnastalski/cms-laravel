<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Gettext\Languages\Language as CLDR;
use App\Language;
use Lang;

class LanguagesController extends AdminController
{
    public function index()
    {
        $languages = Language::orderBy('key', 'asc')->get();

        return view('admin.languages.index', compact('languages'));
    }

    public function create($id = 0)
    {
        $model_data = $id > 0 ? Language::findOrFail($id) : [];
        $languages = collect(CLDR::getAll())->pluck('name', 'id');

        return view('admin.languages.create', compact('model_data', 'languages'));
    }

    public function store(Request $request, $id = 0)
    {
        $language = Language::firstOrNew(['id' => $id]);

        $this->validate($request, [
            'key' => 'sometimes|required|max:6|unique:' . $language->getTable(),
            'icon' => 'max:10'
        ]);

        $request['is_active'] = $request->has('is_active');

        $language->fill($request->all());
        $language->save();

        return $this->redirectStore($request, route('admin.languages'));
    }

    public function destroy($id)
    {
        $language = Language::find($id);

        if ($language->key === Lang::getFallback()) {
            flash('You cannot delete the fallback language')->error();

            return redirect()->back();
        }

        $language->delete();

        return $this->redirectBack();
    }

    public function status($id)
    {
        $language = Language::find($id);
        $language->is_active = !$language->is_active;
        $language->save();

        return $this->redirectBack();
    }
}
