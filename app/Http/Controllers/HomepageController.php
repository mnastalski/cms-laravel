<?php

namespace App\Http\Controllers;

use App\ShopCategory;
use App\ShopProduct;

class HomepageController extends Controller
{
    public function index()
    {
        $categories = ShopCategory::where('is_featured', true)->defaultOrder()->get();
        $products_popular = ShopProduct::with('category')->orderBy('views', 'desc')->take(5)->get();

        return view('homepage', compact('categories', 'products_popular'));
    }
}
