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
        $categories = ShopCategory::withDepth()
            ->defaultOrder()
            ->get()
            ->map(function ($item) {
                $item->name = str_repeat('&nbsp;', $item->depth * 2) . $item->name;

                return $item;
            })
            ->pluck('name', 'id');

        return view('admin.shop.categories.create', compact('model_data', 'categories'));
    }

    public function store(Request $request, $id = 0)
    {
        $this->validate($request, [
            'parent_id' => 'required|exists:' . (new ShopCategory())->getTable() . ',id',
            'slug' => 'nullable|min:2|max:191',
            'name' => 'required|min:2|max:191'
        ]);

        if ($request->filled('slug')) {
            $request['slug'] = str_slug($request->post('slug'), '-');
        } else {
            $request['slug'] = str_slug($request->post('name'), '-');
        }

        $request['is_featured'] = $request->has('is_featured');

        ShopCategory::updateOrCreate(
            ['id' => $id],
            $request->all()
        );

        flash('Saved')->success();

        return redirect()->route('admin.shop.categories');
    }

    public function destroy($id)
    {
        $category = ShopCategory::find($id);

        if ($category->children->count() > 0) {
            flash('Cannot delete a category that has sub categories')->error();
        } else {
            $category->delete();
        }

        return redirect()->back();
    }

    public function up($id)
    {
        ShopCategory::find($id)->up();

        flash('Moved')->success();

        return redirect()->back();
    }

    public function down($id)
    {
        ShopCategory::find($id)->down();

        flash('Moved')->success();

        return redirect()->back();
    }
}
