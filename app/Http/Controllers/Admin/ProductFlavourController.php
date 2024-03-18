<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductFlavourRequest;
use App\Models\ProductFlavour;
use Illuminate\Http\Request;

class ProductFlavourController extends Controller
{
    public function getIndex($id)
    {
        $flavours = ProductFlavour::where('product_id' , $id)->orderBy('id' , 'desc')->get();

        return view('admin.pages.products.flavours.index' , compact('flavours' , 'id'));
    }

    public function getEdit($id)
    {
        $flavour = ProductFlavour::find($id);

        return view('admin.pages.products.flavours.edit' ,compact('flavour'));
    }


    public function postIndex(ProductFlavourRequest $request , $id)
    {
        $request->store($id);

        return response()->json('product has been added successfully' , 200);
    }

    public function postEdit(ProductFlavourRequest $request , $id)
    {
        $request->edit($id);

        return response()->json('product data has been edited successfully' , 200);
    }

    public function getDelete($id)
    {
        $flavour = ProductFlavour::find($id);

        $flavour->delete();

        return redirect()->back();
    }
}
