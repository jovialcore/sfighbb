<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Devotion;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function devotion() {
        return view('admin.devotion');
    }

    public function post() {
        return view('admin.post');
    }

    public function videos() {
        return view('admin.videos');
    }

    public function about() {
        if (Auth()->user()->user_type != 1) {
            return redirect()->route('index');
        } else {
            return view('admin.about');
        }
        
    }

    public function faq() {
        if (Auth()->user()->user_type != 1) {
            return redirect()->route('index');
        } else {
            return view('admin.help');
        }
        
    }
}
