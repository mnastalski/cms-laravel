<?php

namespace App\Http\Controllers\Admin;

class DashboardController extends AdminController
{
    public function index()
    {
        return view('admin.dashboard.index');
    }

    public function about()
    {
        return view('admin.dashboard.index');
    }
}
