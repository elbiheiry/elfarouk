<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    //
    public function getIndex()
    {
        $messages = Message::orderBy('id' , 'desc')->get();

        return view('admin.pages.messages.index' ,compact('messages'));
    }

    public function getDelete($id)
    {
        $message = Message::find($id);

        $message->delete();

        return redirect()->back();
    }
}
