@extends('layouts.app')

@section('title',"Fasilitas | Teknik Informatika")

@section('content')
<section id="blog" class="container">
    <div class="row">
        <aside class="col-sm-4 col-sm-push-8">
        </aside>
        <div class="col-sm-8 col-sm-pull-2">
            <div class="blog">
                <div class="blog-item">
                    <h3 style="text-align: center">Fasilitas yang ada di Jurusan Teknik Informatika </h3>
                    <img class="img-responsive img-blog" src="{{ asset('') }}" width="100%" alt="" style="" />
                    <div class="blog-content">
                        <div class="entry-meta">
                            <span><i class="icon-user"></i> <a href="#">John</a></span>
                            <span><i class="icon-folder-close"></i> <a href="#">Bootstrap</a></span>
                            <span><i class="icon-calendar"></i> Sept 16th, 2012</span>
                            <span><i class="icon-comment"></i> <a href="blog-item.html#comments">3 Comments</a></span>
                        </div>
                        <p class="lead">dibawah ini adalah beberapa fasilitas yang ada di jurusan teknik informatika .</p>
                        <hr>
                        <div class="tags">
                            <i class="icon-tags"></i> Tags <a class="btn btn-xs btn-primary" href="#">CSS3</a> <a class="btn btn-xs btn-primary" href="#">HTML5</a> <a class="btn btn-xs btn-primary" href="#">WordPress</a> <a class="btn btn-xs btn-primary" href="#">Joomla</a>
                        </div>
                        <p>&nbsp;</p>
                    </div>
                    </div>
                </div><!--/.blog-item-->
            </div>
        </div><!--/.col-md-8-->
    <div style="text-align: center"><h3>Fasilitas</h3></div>
    <ul class="portfolio-items col-3">
        <li class="portfolio-item apps">
            <div class="item-inner" style="text-align: center">
                <h5>fasilitas 1</h5>
                <img src="{{ asset('') }}" alt="">
                <h5>aliansi</h5>
                <h5>----</h5>
            </div>
        </li><!--/.portfolio-item-->
        <li class="portfolio-item joomla bootstrap">
            <div class="item-inner">
                <img src="" alt=image/portfolio/tumb/PPMLN"">
                <h5>Lorem ipsum dolor sit amet</h5>
            </div>
        </li><!--/.portfolio-item-->
        <li class="portfolio-item bootstrap wordpress">
            <div class="item-inner">
                <img src="images/portfolio/thumb/item3.jpg" alt="">
                <h5>Lorem ipsum dolor sit amet</h5>
            </div>
        </li><!--/.portfolio-item-->
        <li class="portfolio-item joomla wordpress apps">
            <div class="item-inner">
                <img src="images/portfolio/thumb/item4.jpg" alt="">
                <h5>Lorem ipsum dolor sit amet</h5>
            </div>
        </li><!--/.portfolio-item-->
        <li class="portfolio-item joomla html">
            <div class="item-inner">
                <img src="images/portfolio/thumb/item5.jpg" alt="">
                <h5>Lorem ipsum dolor sit amet</h5>
            </div>
        </li><!--/.portfolio-item-->
        <li class="portfolio-item wordpress html">
            <div class="item-inner">
                <img src="images/portfolio/thumb/item6.jpg" alt="">
                <h5>Lorem ipsum dolor sit amet</h5>
            </div>
        </li><!--/.portfolio-item-->
    </ul>
</section><!--/#portfolio-->
@endsection