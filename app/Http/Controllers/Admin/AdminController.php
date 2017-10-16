<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    private function setRedirectMessage($message = null)
    {
        if ($message !== false) {
            flash($message === null ? 'Saved successfully' : $message)->success();
        }
    }

    protected function redirectStore(Request $request, $route, $message = null)
    {
        $this->setRedirectMessage($message);

        if ($request->has('saveandstay')) {
            return redirect()->back();
        }

        return redirect($route);
    }

    protected function redirectBack($message = null)
    {
        $this->setRedirectMessage($message);

        return redirect()->back();
    }
}
