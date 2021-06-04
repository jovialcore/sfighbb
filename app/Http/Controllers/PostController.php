<?php

namespace App\Http\Controllers;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Komment;
use Session;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create() {
        if (Auth()->user()->user_type != 1) {
            return redirect()->route('index');
        } else {
            return view('admin.post.new');
        }
        
    }

    public function show ($post) {
        //increment view
        
           
        $posts = Post::find($post);
        $postID = $posts->id;
        $komments = Komment::where('post_id', $postID)->get();
        //Get comment count
        $comment_count = $komments->count();
        //Comment fetch
        $comments = Komment::where('post_id', $postID)->paginate(10);
        

        return view('posts.show', compact('posts', 'comment_count', 'comments'));
    }

    public function store()
    {

        $data = request()->validate([
            'title' => 'required',
            'story' => '',
            'publish' => 'required',
            'thumbnail' => ['required', 'image'],
        ]);

        

        //Images for Thumbnails 1920x870
        $thumbnailPath = request('thumbnail')->store('post_thumbnails', 'public');
        $img = Image::make(public_path("storage/{$thumbnailPath}"))->fit(1920, 870);
        $img->save();

        //Images for Thumbnails 600x600
        $thumbnailPath_2 = request('thumbnail')->store('post_thumbnails2', 'public');
        $img = Image::make(public_path("storage/{$thumbnailPath_2}"))->fit(600, 600);
        $img->save();

        Post::create([
        'title' => $data['title'],
        'story' => $data['story'],
        'publish' => $data['publish'],
        'thumbnail' => $thumbnailPath,
        'small_thumbnail' => $thumbnailPath_2,
        ]);


        return back()->with('status_upload', 'Post has been Submitted Successfully!');
    }
}
