<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Komment;

class PostcommentController extends Controller
{
    public function store(Request $request) {

        $request->validate([
            'comment' => 'required',
            'post_id' => 'required',
        ]);

            $input = $request->all();
            
            $input['user_id'] = auth()->user()->id;
            Postcomment::create($input);

            return back()->with('status_upload', 'Comment has been Submitted Successfully!');
    }
    
}
