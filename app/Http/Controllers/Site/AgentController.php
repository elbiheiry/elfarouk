<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    //
    public function index()
    {
        $branches = Branch::orderBy('id' , 'asc')->get();

        return view('site.pages.branches.index' ,compact('branches'));
    }
}
