<?php

namespace App\Http\Controllers;

use App\ShopCategory;

class HomepageController extends Controller
{
    public function index()
    {
        $categories = ShopCategory::where('is_featured', true)->defaultOrder()->get();

        return view('homepage', compact('categories'));
    }
}
