<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use Session;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create() {
        return view('admin.post.new');
    }

    public function store()
    {

        $data = request()->validate([
            'title' => 'required',
            'story' => 'required',
            'publish' => 'required',
            'thumbnail' => ['required', 'image'],
        ]);

        $thumbnailPath = request('thumbnail')->store('post_thumbnails', 'public');

        Post::create([
        'title' => $data['title'],
        'story' => $data['story'],
        'publish' => $data['publish'],
        'thumbnail' => $thumbnailPath,
        ]);


        return back()->with('status_upload', 'Post has been Submitted Successfully!');
    }
}
