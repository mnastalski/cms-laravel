<?php

namespace App\Http\Controllers\Admin;

use App\ShopProduct;
use Illuminate\Http\Request;
use App\ShopCategory;

class ShopProductsController extends AdminController
{
    public function index()
    {
        $products = ShopProduct::with('category')->get();

        return view('admin.shop.products.index', compact('products'));
    }

    public function create($id = 0)
    {
        $model_data = $id > 0 ? ShopProduct::findOrFail($id) : [];
        $categories = ShopCategory::selectList();

        return view('admin.shop.products.create', compact('model_data', 'categories'));
    }

    public function store(Request $request, $id = 0)
    {
        $this->validate($request, [
            'category_id' => 'required|exists:' . (new ShopCategory())->getTable() . ',id',
            'name' => 'required|min:2|max:191',
            'price' => 'required|numeric|min:0.01|max:9999.99',
            'slug' => 'nullable|min:2|max:191'
        ]);

        if ($request->filled('slug')) {
            $request['slug'] = str_slug($request->post('slug'), '-');
        } else {
            $request['slug'] = str_slug($request->post('name'), '-');
        }

//        if ($id > 0) {
//            $product = ShopProduct::findOrFail($id);
//        }
//
//        $this->validate($request, [
//            'slug' => $id > 0 && $product->slug == $request->slug ? '' : 'unique:' . (new ShopProduct())->getTable()
//        ]);

        ShopProduct::updateOrCreate(
            ['id' => $id],
            $request->all()
        );

        flash('Saved')->success();

        return redirect()->route('admin.shop.products');
    }

    public function destroy($id)
    {
        ShopProduct::destroy($id);

        return redirect()->back();
    }
}
