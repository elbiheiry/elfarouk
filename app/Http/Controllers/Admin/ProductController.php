<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function getIndex()
    {
        $products = Product::orderBy('id' , 'desc')->get();

        return view('admin.pages.products.index' , compact('products'));
    }

    public function getEdit($id)
    {
        $product = Product::find($id);

        return view('admin.pages.products.edit' ,compact('product'));
    }


    public function postIndex(ProductRequest $request)
    {
        $request->store();

        return response()->json('product has been added successfully' , 200);
    }

    public function postEdit(ProductRequest $request , $id)
    {
        $request->edit($id);

        return response()->json('product data has been edited successfully' , 200);
    }

    public function getDelete($id)
    {
        $product = Product::find($id);

        $product->delete();

        return redirect()->back();
    }
}
