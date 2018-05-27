<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\News;

class IndexController extends Controller
{
    public function index()
    {
        return view('site.index');
    }

    public function news()
    {
        $news = News::orderBy('id','DESC')->paginate(3);
        return view('site.pages.news', compact('news'));
    }

    public function contactForm()
    {
        return view('site.pages.contacts');
    }
}
