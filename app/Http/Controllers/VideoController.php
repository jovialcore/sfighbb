<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Models\User;
use App\Models\Video;
use Session;

class VideoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create() {
        if (Auth()->user()->user_type != 1) {
            return redirect()->route('index');
        } else {
            return view('admin.video.new');
        }
        
    }

    public function store(Request $request)
    {

        $data = request()->validate([
            'title' => 'required',
            'publish' => 'required',
            'tag' => 'required',
            'url' => 'required',
            'thumbnail' => ['required', 'image'],
        ]);

        $thumbnailPath = cloudinary()->upload($request->file('thumbnail')->getRealPath(), [
            'folder' => 'upload_devotion',
            'transformation' => [
                      'width' => 600,
                      'height' => 600,
             ]
])->getSecurePath();

        Video::create([
        'title' => $data['title'],
        'publish' => $data['publish'],
        'tag' => $data['tag'],
        'url' => $data['url'],
        'thumbnail' => $thumbnailPath,
        ]);


        return back()->with('status_upload', 'Video has been Submitted Successfully!');
    }
}
