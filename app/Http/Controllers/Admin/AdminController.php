<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    protected function getModelData($model, $id = 0)
    {
        if ($id > 0) {
            return $model::findOrFail($id);
        }

        $data = new \stdClass();
        $data->id = false;

        return $data;
    }
}
