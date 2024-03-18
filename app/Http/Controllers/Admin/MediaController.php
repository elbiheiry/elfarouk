<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\MediaRequest;
use App\Models\Media;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    //
    public function getIndex()
    {
        $medias = Media::orderBy('id' , 'desc')->get();

        return view('admin.pages.media.index' , compact('medias'));
    }

    public function getEdit($id)
    {
        $media = Media::find($id);

        return view('admin.pages.media.edit' ,compact('media'));
    }


    public function postIndex(MediaRequest $request)
    {
        $request->store();

        return response()->json('media has been added successfully' , 200);
    }

    public function postEdit(MediaRequest $request , $id)
    {
        $request->edit($id);

        return response()->json('media data has been edited successfully' , 200);
    }

    public function getDelete($id)
    {
        $media = Media::find($id);

        $media->delete();

        return redirect()->back();
    }
}
