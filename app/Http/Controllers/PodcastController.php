<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Devotion;
use App\Models\Post;
use App\Models\Video;
use Session;
use Carbon\Carbon;

class PodcastController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show($podcast) {
        $now = Carbon::now();
        $today = Carbon::today();
        $dtoday = $today->toFormattedDateString();
        $compareDate = $today->toDateString();
        
        $podcast = Devotion::find($podcast);

        $podcasts = Devotion::orderBy('release_date', 'DESC')
                                ->where('release_date', '<=', $compareDate)
                                ->latest()
                                ->take(30)
                                ->get();

        return view('podcasts.show', compact('podcast', 'podcasts'));
    }
}
