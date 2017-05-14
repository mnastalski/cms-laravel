<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends AdminController
{
    public function index()
    {
        return view('admin.dashboard.dashboard');
    }
}
