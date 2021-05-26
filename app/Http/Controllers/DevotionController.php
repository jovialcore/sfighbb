<?php

namespace App\Http\Controllers;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Devotion;
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
        $tomorrow = Carbon::tomorrow();
        $yesterday = Carbon::yesterday();

        $getTodayDevotion = Devotion::where('release_date', $today)->get();
        $check = $now->toDateString();
        dd("$now");
        dd("$getTodayDevotion");
        $getTomorrowDevotion = Devotion::where('release_date', $tomorrow)->get();
        $getYesterdayDevotion = Devotion::where('release_date', $yesterday)->get();

        //$Devotion = Post::get();

        return view('devotion.index', compact('getTodayDevotion', 'getTomorrowDevotion', 'getYesterdayDevotion'));
    }

    public function show() {
        return view('devotion.show');
    }

    public function create() {
        return view('admin.devotion.new');
    }

    public function store()
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

        $thumbnailPath = request('thumbnail')->store('thumbnails', 'public');

        $audioPath = request('audio')->store('podcasts', 'public');

        Devotion::create([
        'title' => $data['title'],
        'bible_reading' => $data['bible_reading'],
        'story' => $data['story'],
        'publish' => $data['publish'],
        'release_date' => $data['release_date'],
        'audio' => $audioPath,
        'thumbnail' => $thumbnailPath,
        ]);


        return back()->with('status_upload', 'Devotion has been Submitted Successfully!');
    }
}
