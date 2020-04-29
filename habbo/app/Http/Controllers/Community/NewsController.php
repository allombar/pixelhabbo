<?php

namespace App\Http\Controllers\Community;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
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
        $news = News::orderBy('id','desc')->get();
        return view('community.news')->with('news',$news);
    }

    public function show($slug)
    {
        $new = News::where('slug', $slug)->firstOrFail();
        $news = News::orderBy('id','desc')->take(10)->get();
        return view('community.news-id')->with('data', $new)->with('news', $news);
    }
}
