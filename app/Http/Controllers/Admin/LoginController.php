<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends \App\Http\Controllers\Auth\LoginController
{
    public function redirectTo()
    {
         return route('admin_dashboard');
    }

    public function showLoginForm()
    {
        return view('admin.login.login');
    }

//    public function logout(Request $request)
//    {
//        Auth::guard($this->getGuard())->logout();
//
//        return redirect()->route('admin_login');
//    }
}