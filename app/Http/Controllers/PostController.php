<?php

namespace App\Http\Controllers;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Komment;
use Session;
use Illuminate\Support\Facades\Storage;

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

    public function store(Request $request)
    {

        $data = request()->validate([
            'title' => 'required',
            'story' => '',
            'publish' => 'required',
            'thumbnail' => ['required', 'image'],
        ]);

        $thumbnailPath = cloudinary()->upload($request->file('thumbnail')->getRealPath(), [
            'folder' => 'upload_post',
            'transformation' => [
                      'width' => 1920,
                      'height' => 870,
             ]
])->getSecurePath();

        $thumbnailPath_2 = cloudinary()->upload($request->file('thumbnail')->getRealPath(), [
            'folder' => 'upload_post',
            'transformation' => [
                      'width' => 600,
                      'height' => 600,
             ]
])->getSecurePath();

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
