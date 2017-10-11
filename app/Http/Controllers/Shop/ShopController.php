<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\ShopProduct;

class ShopController extends Controller
{
    public function index($category_slug = null)
    {
        if ($category_slug === null) {
            $products = ShopProduct::with('category')->get();
        } else {
            $products = ShopProduct::with('category')
                ->whereHas('category', function ($q) use ($category_slug) {
                    $q->where('slug', $category_slug);
                })->get();
        }

        return view('shop.categories.index', compact('categories', 'products'));
    }
}
