<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Komment;

class KommentController extends Controller
{
    public function store(Request $request) {
        $request->validate([
            'comment' => 'required',
            'post_id' => 'required',
        ]);

            $input = $request->all();

            $input['user_id'] = auth()->user()->id;
            Komment::create($input);
            return back()->with('status_upload', 'Comment has been Submitted Successfully!');
    }
}
