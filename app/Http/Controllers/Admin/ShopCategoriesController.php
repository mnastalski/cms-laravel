<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\ShopCategory;

class ShopCategoriesController extends AdminController
{
    public function index()
    {
        $categories = ShopCategory::whereNotNull('parent_id')->defaultOrder()->get();

        return view('admin.shop.categories.index', compact('categories'));
    }

    public function create($id = 0)
    {
        $model_data = $id > 0 ? ShopCategory::findOrFail($id) : [];
        $categories = ShopCategory::selectList();

        return view('admin.shop.categories.create', compact('model_data', 'categories'));
    }

    public function store(Request $request, $id = 0)
    {
        $category = ShopCategory::firstOrNew(['id' => $id]);

        $request['slug'] = str_slug($request->post($request->filled('slug') ? 'slug' : 'name'), '-');

        $this->validate($request, [
            'parent_id' => 'required|exists:' . $category->getTable() . ',id',
            'name' => 'required|min:2|max:191',
            'slug' => 'min:2|max:191' . ($id > 0 && $category->slug == $request->slug ? '' : '|unique:' . $category->getTable())
        ]);

        $request['is_featured'] = $request->has('is_featured');

        $category->fill($request->all());
        $category->save();

        return $this->redirectStore(
            $request,
            route('admin.shop.categories'),
            route('admin.shop.categories.create', [$category->id])
        );
    }

    public function destroy($id)
    {
        $category = ShopCategory::find($id);

        if ($category->children->count() > 0) {
            flash('You cannot delete a category that has sub categories')->error();

            return redirect()->back();
        }

        $category->delete();

        return $this->redirectBack();
    }

    public function up($id)
    {
        ShopCategory::find($id)->up();

        return $this->redirectBack();
    }

    public function down($id)
    {
        ShopCategory::find($id)->down();

        return $this->redirectBack();
    }
}
