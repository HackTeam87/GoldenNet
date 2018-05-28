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

    public function about()
    {
        return view('site.pages.about');
    }

    public function news()
    {
        $news = News::orderBy('id','DESC')->paginate(3);

        return view('site.pages.news', compact('news'));
    }

    public function more($id)
    {
//        $news = News::where('id', $id);

        $news = News::find($id);

        return view('site.pages.more_news',compact('news'));
    }




    public function contactForm()
    {
        return view('site.pages.contacts');
    }


    public function price()
    {
        return view('site.pages.more_price');
    }
}
