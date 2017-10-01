<?php

namespace App\Http\Controllers\Admin;

use App\Rules\ValidCurrentPassword;
use Illuminate\Http\Request;
use App\Content;
use App\User;

class ProfileController extends AdminController
{
    public function index()
    {
        $contents = Content::all();

        return view('admin.profile.index', compact('contents'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'password' => [
                'required',
                new ValidCurrentPassword()
            ],
            'password_new' => User::RULES_PASSWORD
        ]);

        $user = User::find($this->user->id);
        $user->password = $request->password_new;
        $user->save();

        flash('Your password has been changed successfully')->success();

        return redirect()->route('admin.profile');
    }
}
