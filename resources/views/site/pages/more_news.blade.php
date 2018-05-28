@extends('layouts_site.base')

@section('content')
    <!-- about-heading -->
    <div class="about-heading">
        <h2><span>Новини</span></h2>
    </div>
    <!-- //about-heading -->
    <!-- blog -->
    <div class="blog">
        <div class="container">
            <div class="agile-blog-grids">
                <div class="col-md-10 agile-blog-grid-left">

                        <div class="agile-blog-grid">
                            <div class="agile-blog-grid-left-img">
                                <a href="/site_downloads/images_news/{{$news->image}}"><img src="/site_downloads/images_news/{{$news->image}}" alt="img"/></a>
                            </div>
                            <div class="blog-left-grids">
                                <div class="blog-left-left">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </div>
                                <div class="blog-left-right">
                                    <div class="blog-left-right-top">
                                        <h4><a href="single.html">{{$news->title}}</a></h4>
                                        <p>Posted By <a href="#">Admin</a> &nbsp;&nbsp; on June 2, 2016 &nbsp;&nbsp; <a
                                                    href="#">Comments (10)</a></p>
                                    </div>
                                    <div class="blog-left-right-bottom">
                                        <p>
                                            {{$news->text}}
                                        </p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>



                </div>
                <div class="clearfix"></div>
            </div>
            <a class="btn btn-info" href="{{ URL::previous() }}">Назад</a>
        </div>
    </div>
    <!-- //blog -->



@endsection