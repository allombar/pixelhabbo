<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use Auth;

class HomeController extends Controller
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
        if(Auth::user()->premium_time < time())
        {
            $user = Auth::user();
            $user->premium_time = 0;
            $user->rank = 1;
            $user->save();
        }
        $news = News::orderBy('id','desc')->limit(5)->get();
        return view('home')->with('news', $news);
    }
}
