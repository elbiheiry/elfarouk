<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductIngredientRequest;
use App\Models\ProductIngredient;
use Illuminate\Http\Request;

class ProductIngredientController extends Controller
{
    public function getIndex($id)
    {
        $ingredients = ProductIngredient::where('product_id' , $id)->orderBy('id' , 'desc')->get();

        return view('admin.pages.products.ingredients.index' , compact('ingredients' , 'id'));
    }

    public function getEdit($id)
    {
        $ingredient = ProductIngredient::find($id);

        return view('admin.pages.products.ingredients.edit' ,compact('ingredient'));
    }


    public function postIndex(ProductIngredientRequest $request , $id)
    {
        $request->store($id);

        return response()->json('product has been added successfully' , 200);
    }

    public function postEdit(ProductIngredientRequest $request , $id)
    {
        $request->edit($id);

        return response()->json('product data has been edited successfully' , 200);
    }

    public function getDelete($id)
    {
        $ingredient = ProductIngredient::find($id);

        $ingredient->delete();

        return redirect()->back();
    }
}
