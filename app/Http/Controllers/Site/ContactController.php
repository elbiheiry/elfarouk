<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index()
    {
        return view('site.pages.contact.index');
    }

    public function store(Request $request)
    {
        $validator = validator($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            'message' => 'required'
        ], [
            'name.required' => 'برجاء ادخال اسمك بالكامل',
            'phone.required' => 'برجاء ادخال رقم الهاتف',
            'message.required' => 'برجاء ادخال رسالتك'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->first(), 500);
        }

        $message = new Message();

        $message->name = $request->name;
        $message->phone = $request->phone;
        $message->message = $request->message;

        if ($message->save()){
            return response()->json('تم ارسال رسالتك بنجاح وسيتم التواصل معك في اقرب وقت ممكن' , 200);
        }
    }
}
