<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Devotion;

class SearchController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function search(Request $request) {
        $search = $request->get('search');

        $devotions = Devotion::where('title', 'like', '%' .$search. '%')
                            ->orWhere('bible_reading', 'like', '%' .$search. '%')
                            ->orWhere('release_date', 'like', '%' .$search. '%')
                            ->get();

        $posts = Post::where('title', 'like', '%' .$search. '%')
                            ->get();

        return view('search', compact('posts', 'devotions', 'search'));
    }
}
