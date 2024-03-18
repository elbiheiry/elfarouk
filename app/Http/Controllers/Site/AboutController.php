<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Home;
use App\Models\Member;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function index()
    {
        $about = About::first();
        $members = Member::orderBy('id' , 'asc')->get();
        $home = Home::first();

        return view('site.pages.about.index' ,compact('about' , 'members','home'));
    }
}
