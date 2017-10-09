<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\ShopProduct;

class ProductController extends Controller
{
    public function view($category_slug, $product_slug)
    {
        $product = ShopProduct::where('slug', $product_slug)->firstOrFail();

        return view('shop.products.index', compact('product'));
    }
}
