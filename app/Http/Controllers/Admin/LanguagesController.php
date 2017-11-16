<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Gettext\Languages\Language as CLDR;
use App\Language;

class LanguagesController extends AdminController
{
    public function index()
    {
        $languages = Language::orderBy('key', 'asc')->get();

        return view('admin.languages.index', compact('languages'));
    }

    public function create()
    {
        $languages = collect(CLDR::getAll())->pluck('name', 'id');

        return view('admin.languages.create', compact('languages'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'key' => 'required|max:6|unique:' . (new Language())->getTable()
        ]);

        $language = new Language();
        $language->key = $request->input('key');
        $language->is_active = $request->has('is_active');
        $language->save();

        return $this->redirectStore($request, route('admin.languages'));
    }

    public function destroy($id)
    {
        Language::destroy($id);

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
