<?php

namespace App\Http\Controllers\Community;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class TopController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $credits = User::orderBy('credits','desc')->take(3)->get();
        $pixels = User::orderBy('activity_points','desc')->take(3)->get();
        return view('community.top')->with('credits', $credits)->with('pixels', $pixels);
    }
}
