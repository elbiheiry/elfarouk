<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\HomeRequest;
use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function getIndex()
    {
        $home = Home::first();

        return view('admin.pages.home.index' ,compact('home'));
    }

    public function postEdit(HomeRequest $request)
    {
        $request->edit();

        return response()->json('Data has been updated successfully' , 200);
    }
}
