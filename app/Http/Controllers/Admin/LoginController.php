<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\User\LoginController as BaseLoginController;
use Illuminate\Http\Request;
use Auth;

class LoginController extends BaseLoginController
{
    public function redirectTo()
    {
        return route('admin.dashboard');
    }

    public function showLoginForm()
    {
        return view('admin.login.login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        return redirect()->route('admin.login');
    }
}
