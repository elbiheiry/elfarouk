<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SettingsRequest;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    //
    public function getIndex()
    {
        return view('admin.pages.settings.index');
    }

    public function postEdit(SettingsRequest $request)
    {
        $request->edit();

        return response()->json('Data has been updated successfully' , 200);
    }
}
