<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BranchRequest;
use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    //
    public function getIndex()
    {
        $branches = Branch::orderBy('id' , 'desc')->get();

        return view('admin.pages.branches.index' , compact('branches'));
    }

    public function getEdit($id)
    {
        $branch = Branch::find($id);

        return view('admin.pages.branches.edit' ,compact('branch'));
    }


    public function postIndex(BranchRequest $request)
    {
        $request->store();

        return response()->json('Branch has been added successfully' , 200);
    }

    public function postEdit(BranchRequest $request , $id)
    {
        $request->edit($id);

        return response()->json('Branch data has been edited successfully' , 200);
    }

    public function getDelete($id)
    {
        $branch = Branch::find($id);

        $branch->delete();

        return redirect()->back();
    }

}
