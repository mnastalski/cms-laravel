<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\ShopCategory;

class ShopController extends Controller
{
    public function index()
    {
        $categories = ShopCategory::whereNotNull('parent_id')->defaultOrder()->get();

        return view('shop.categories.index', compact('categories'));
    }
}
