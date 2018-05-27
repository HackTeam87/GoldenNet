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
                <div class="col-md-8 agile-blog-grid-left">
                    @foreach($news as $item)
                    <div class="agile-blog-grid">
                        <div class="agile-blog-grid-left-img">
                            <a href="site_downloads/images_news/{{$item->image}}"><img src="site_downloads/images_news/{{$item->image}}" alt="img"/></a>
                        </div>
                        <div class="blog-left-grids">
                            <div class="blog-left-left">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </div>
                            <div class="blog-left-right">
                                <div class="blog-left-right-top">
                                    <h4><a href="single.html">{{$item->title}}</a></h4>
                                    <p>Posted By <a href="#">Admin</a> &nbsp;&nbsp; on June 2, 2016 &nbsp;&nbsp; <a
                                                href="#">Comments (10)</a></p>
                                </div>
                                <div class="blog-left-right-bottom">
                                    <p>
                                       {{$item->text}}
                                    </p>
                                    <a href="single.html">Більше</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    @endforeach

                        {{ $news->links() }}

                    <nav>
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">«</span>
                                </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">»</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-4 agile-blog-grid-right">
                    <div class="categories">
                        <h3>Категорії</h3>
                        <ul>
                            <li><a href="#">Phasellus sem leo, interdum quis risus</a></li>
                            <li><a href="#">Nullam egestas nisi id malesuada aliquet </a></li>
                            <li><a href="#"> Donec condimentum purus urna venenatis</a></li>
                            <li><a href="#">Ut congue, nisl id tincidunt lobor mollis</a></li>
                            <li><a href="#">Cum sociis natoque penatibus et magnis</a></li>
                            <li><a href="#">Suspendisse nec magna id ex pretium</a></li>
                        </ul>
                    </div>
                    <div class="categories">
                        <h3>Архів</h3>
                        <ul class="marked-list offs1">
                            <li><a href="#">May 2016 (7)</a></li>
                            <li><a href="#">April 2016 (11)</a></li>
                            <li><a href="#">March 2016 (12)</a></li>
                            <li><a href="#">February 2016 (14)</a></li>
                            <li><a href="#">January 2016 (10)</a></li>
                            <li><a href="#">December 2016 (12)</a></li>
                            <li><a href="#">November 2016 (8)</a></li>
                            <li><a href="#">October 2016 (7)</a></li>
                            <li><a href="#">September 2016 (8)</a></li>
                            <li><a href="#">August 2016 (6)</a></li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- //blog -->



@endsection