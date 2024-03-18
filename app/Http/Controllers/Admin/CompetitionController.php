<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Competition;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CompetitionController extends Controller
{
    //
    public function getIndex()
    {
        $competitions = Competition::orderBy('id', 'desc')->paginate(50);
        $dimensions = Competition::where('latitude', '!=', null)->where('longitude', '!=', null)->orderBy('id', 'desc')->get(['longitude', 'latitude', 'name', 'phone', 'government']);
//         dd($dimensions);

        return view('admin.pages.competitions.index', compact('competitions', 'dimensions'));
    }

    public function postFilter(Request $request)
    {
        $age = $request->age;
        $name = $request->name;
        $phone = $request->phone;
        $government = $request->government;
        $from = Carbon::parse($request->from);
        $to = Carbon::parse($request->to);

        $competitions = Competition::select('*');

        if ($name) {
            $competitions->where('name', 'LIKE', '%' . $name . '%');
        }

        if ($age) {
            $competitions->orWhere('age', $age);
        }

        if ($phone) {
            $competitions->orWhere('phone', $phone);
        }

        if ($government) {
            $competitions->orWhere('government', 'LIKE', '%' . $government . '%');
        }

        if ($from || $to) {
            $competitions->orWhereBetween('created_at', [$from, $to]);
        }

        $competitions = $competitions->orderBy('id', 'desc')->get();

        return ['html' => view('admin.pages.competitions.templates.index', compact('competitions'))->render()];
    }

    public function getDelete($id)
    {
        $competition = Competition::find($id);

        $competition->delete();

        return redirect()->back();
    }

    public function getMap($id)
    {
        $competition = Competition::find($id);

        return view('admin.pages.competitions.templates.map', compact('competition'));
    }
}
