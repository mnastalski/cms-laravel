<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Rules\ValidCurrentPassword;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        return view('user.profile.index');
    }

    public function password()
    {
        return view('user.profile.password');
    }

    public function passwordStore(Request $request)
    {
        $this->validate($request, [
            'password' => [
                'required',
                new ValidCurrentPassword()
            ],
            'password_new' => User::RULES_PASSWORD
        ]);

        $this->user->password = $request->password_new;
        $this->user->save();

        flash('Your password has been changed successfully')->success();

        return redirect()->route('user.profile');
    }
}
