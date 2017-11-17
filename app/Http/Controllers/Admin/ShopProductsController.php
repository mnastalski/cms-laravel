<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\ShopCategory;
use App\ShopProduct;

class ShopProductsController extends AdminController
{
    public function index()
    {
        $products = ShopProduct::with(['category', 'media'])->get();

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
        $product = ShopProduct::firstOrNew(['id' => $id]);

        $request['slug'] = str_slug($request->post($request->filled('slug') ? 'slug' : 'name'), '-');

        $this->validate($request, [
            'category_id' => 'required|exists:' . (new ShopCategory())->getTable() . ',id',
            'name' => 'required|min:2|max:191',
            'price' => 'required|numeric|min:0.01|max:9999.99',
            'slug' => 'min:2|max:191' . ($id > 0 && $product->slug == $request->slug ? '' : '|unique:' . $product->getTable()),
            'thumbnail' => 'image|max:256'
        ]);

        $product->fill($request->all());
        $product->save();

        if ($request->has('thumbnail')) {
            if ($id > 0 && $product->hasMedia('images')) {
                $product->getMedia('images')[0]->delete();
            }

            $product->addMedia($request->file('thumbnail'))->toMediaCollection('images');
        }

        return $this->redirectStore(
            $request,
            route('admin.shop.products'),
            route('admin.shop.products.create', [$product->id])
        );
    }

    public function destroy($id)
    {
        ShopProduct::destroy($id);

        return $this->redirectBack();
    }
}
