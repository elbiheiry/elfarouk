<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Competition;
use Illuminate\Http\Request;

class CompetitionController extends Controller
{
    //
    public function index()
    {
        return view('site.pages.competition.index');
    }

    public function index2()
    {
        return view('site.pages.competition.index2');
    }

    public function store(Request $request)
    {
        $validator = validator($request->all(), [
            'name' => 'required|string|max:225',
            'phone' => 'required',
            'government' => 'required|string',
            'age' => 'required'
        ], [
            'name.required' => 'برجاء ادخال اسمك بالكامل',
            'name.string' => 'الاسم يجب ان يحتوي علي حروف وليس ارقام فقط',
            'name.max' => 'اقصي حد مسموح به للاسم هو 225 حرف',
            'phone.required' => 'برجاء ادخال رقم الهاتف',
            'government.required' => 'برجاء ادخال اسم محافظتك',
            'government.string' => 'الاسم يجب ان يحتوي علي حروف وليس ارقام فقط',
            'age.required' => 'برجاء ادخال عمرك الحالي'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->first() , 500);
        }

        $competition = new Competition();

        $competition->name = $request->name;
        $competition->phone = $request->phone;
        $competition->government = $request->government;
        $competition->age = $request->age;
        $competition->latitude = $request->latitude;
        $competition->longitude = $request->longitude;

        if ($competition->save()){
            return response()->json('تم اشتراكك بنجاح ,برجاء الانتظار وسيتم تحويلك في خلال ثواني' ,200);
        }
    }
}
