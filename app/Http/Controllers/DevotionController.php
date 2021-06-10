<?php

namespace App\Http\Controllers;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Devotion;
use App\Models\Post;
use App\Models\Video;
use Session;
use Carbon\Carbon;


class DevotionController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index() {
        $now = Carbon::now();
        $today = Carbon::today();
        $dtoday = $today->toFormattedDateString();
        $compareDate = $today->toDateString();

        $tomorrow = Carbon::tomorrow();
        $dtomorrow = $tomorrow->toFormattedDateString();

        $yesterday = Carbon::yesterday();
        $dyesterday = $yesterday->toFormattedDateString();

        $getTodayDevotion = Devotion::where('release_date', $today)->get();
        $getTomorrowDevotion = Devotion::where('release_date', $tomorrow)->get();
        $getYesterdayDevotion = Devotion::where('release_date', $yesterday)->get();

        //$devotions = Devotion::orderBy('release_date', 'asc')->where('release_date', '=', '$compareDate')->latest()->take(30)->get();
        $devotions = Devotion::orderBy('release_date', 'DESC')
                                ->where('release_date', '<=', $compareDate)
                                ->latest()
                                ->take(30)
                                ->get();

                                

        $videos = Video::orderBy('id', 'DESC')
                                ->latest()
                                ->first();
        if ($videos == null) {
            $check = "null";
            $romoveFromList = "2020-05-31 02:47:21";
        }else {
            $romoveFromList = $videos->created_at;
        }

        $fourVideos = Video::orderBy('id', 'DESC')
                                ->where('created_at', '!=', $romoveFromList)
                                ->latest()
                                ->take(4)
                                ->get();

        $posts = Post::get();

        return view('devotion.index', compact('fourVideos', 'videos', 'posts', 'devotions', 'getTodayDevotion', 'getTomorrowDevotion', 'getYesterdayDevotion', 'dtoday', 'dtomorrow', 'dyesterday'));
    }

    
    public function show($devotion) {
        $devotion = Devotion::find($devotion);
        //Get comment count
        $comment_count = $devotion->comments->count();
        //Comment fetch
        $comments = $devotion->comments()->paginate(10);

        $count = $devotion->view_count + 1;
        $devotion->update([
            'view_count' => $count,
        ]);

        return view('devotion.show', compact('devotion', 'comment_count', 'comments'));
    }

    public function create() {

        if (Auth()->user()->user_type != 1) {
            return redirect()->route('index');
        } else {
            return view('admin.devotion.new');
        }
        
    }

    public function store(Request $request)
    {

        $data = request()->validate([
            'title' => 'required',
            'bible_reading' => 'required',
            'story' => 'required',
            'publish' => 'required',
            'release_date' => 'required',
            'thumbnail' => ['required', 'image'],
            'audio' => ['required', 'mimes:mp3'],
        ]);
        //Images for Thumbnails 2880x1440
        $thumbnailPath = cloudinary()->upload($request->file('thumbnail')->getRealPath(), [
            'folder' => 'upload_devotion',
            'transformation' => [
                      'width' => 1920,
                      'height' => 870,
             ]
])->getSecurePath();



        //Images for Thumbnails 1920x870
      /*  $thumbnailPath1920x870 = cloudinary()->upload($request->file('thumbnail')->getRealPath(), [
            'folder' => 'upload_devotion',
            'transformation' => [
                      'width' => 1920,
                      'height' => 870,
             ]
])->getSecurePath(); */



        //Images for Thumbnails 600x600
        $thumbnailPath600x600 = cloudinary()->upload($request->file('thumbnail')->getRealPath(), [
            'folder' => 'upload_devotion',
            'transformation' => [
                      'width' => 600,
                      'height' => 600,
             ]
])->getSecurePath();

        //Audio for podcast
        $audioPath  = cloudinary()->uploadFile($request->file('audio')->getRealPath())->getSecurePath();
                    

        Devotion::create([
        'title' => $data['title'],
        'bible_reading' => $data['bible_reading'],
        'story' => $data['story'],
        'publish' => $data['publish'],
        'release_date' => $data['release_date'],
        'audio' => $audioPath,
        'thumbnail' => $thumbnailPath,
        'smaller_thumbnail' => $thumbnailPath600x600,
        ]);

        return back()->with('status_upload', 'Devotion has been Submitted Successfully!');
    }
}
