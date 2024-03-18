<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    //
    public function index(Request $request)
    {
        $medias = Media::orderBy('id' , 'desc')->paginate(9);

        if ($request->ajax()){
            $medias = Media::orderBy('id' , 'desc')->paginate(9 , ['*'] , 'page' , $request->page);

            return view('site.pages.media.templates.media' , compact('medias'));
        }

        return view('site.pages.media.index' , compact('medias'));
    }
}
