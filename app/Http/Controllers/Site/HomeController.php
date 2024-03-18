<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Branch;
use App\Models\Home;
use App\Models\Media;
use App\Models\Member;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $home = Home::first();
        $about = About::first();
        $products = Product::orderBy('id' , 'asc')->get();
        $agents = Branch::orderBy('id' , 'asc')->get();
        $members = Member::orderBy('id' , 'asc')->get();
        $medias = Media::take(6)->orderBy('id' , 'desc')->get();

        return view('site.pages.index' , compact('home' , 'about' , 'products' ,'agents' , 'members' , 'medias'));
    }

    public function getBranch($id)
    {
        $agent = Branch::find($id);

        return view('site.layouts.branch' , compact('agent'));
    }
}
