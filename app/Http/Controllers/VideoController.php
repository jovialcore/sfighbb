<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        return view('admin.video.new');
    }

    public function store()
    {

        $data = request()->validate([
            'title' => 'required',
            'story' => 'required',
            'publish' => 'required',
            'tag' => 'required',
            'url' => 'required',
            'thumbnail' => ['required', 'image'],
        ]);

        $thumbnailPath = request('thumbnail')->store('video_thumbnails', 'public');

        Video::create([
        'title' => $data['title'],
        'story' => $data['story'],
        'publish' => $data['publish'],
        'tag' => $data['tag'],
        'url' => $data['url'],
        'thumbnail' => $thumbnailPath,
        ]);


        return back()->with('status_upload', 'Video has been Submitted Successfully!');
    }
}
