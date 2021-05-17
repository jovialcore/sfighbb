<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DevotionController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index() {
        return view('devotion.index');
    }

    public function show() {
        return view('devotion.show');
    }
}
