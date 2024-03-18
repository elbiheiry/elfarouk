<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\Home;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products = Product::orderBy('id' , 'asc')->get();

        return view('site.pages.products.index' ,compact('products'));
    }

    public function single($slug)
    {
        $product = Product::where('slug' , $slug)->first();
        $agents = Branch::orderBy('id' , 'asc')->get();
        $home = Home::first();

        return view('site.pages.products.single' , compact('product' ,'agents','home'));
    }
}
