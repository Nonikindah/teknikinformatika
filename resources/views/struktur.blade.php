@extends('layouts.app')

@section('title',"Struktur | Teknik Informatika")

@section('content')
<section id="blog" class="container">
    <div class="row">
        <aside class="col-sm-4 col-sm-push-8">
        </aside>
        <div class="col-sm-8 col-sm-pull-2">
            <div class="blog">
                <div class="blog-item">
                    <h3 style="text-align: center">Struktur Organisasi Jurusan Teknik Informatika Periode 2016-2020</h3>
                    <img class="img-responsive img-blog" src="{{ asset('images/dosen.jpg') }}" width="100%" alt="" style="" />
                    <div class="blog-content">
                        <div class="entry-meta">
                            <span><i class="icon-user"></i> <a href="#">John</a></span>
                            <span><i class="icon-folder-close"></i> <a href="#">Bootstrap</a></span>
                            <span><i class="icon-calendar"></i> Sept 16th, 2012</span>
                            <span><i class="icon-comment"></i> <a href="blog-item.html#comments">3 Comments</a></span>
                        </div>
                        <p class="lead">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
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
    <div style="text-align: center"><h3>Dosen Jurusan Teknik Informatika</h3></div>
    <ul class="portfolio-items col-3">
        <li class="portfolio-item apps">
            <div class="item-inner" style="text-align: center">
                <h5>Prof. Dr. Ekohariadi, M.Pd</h5>
                <img src="{{ asset('images/dosen/pakEko.jpg') }}" alt="">
                <h5>NIP : 196004041987011001</h5>
                <h5>Program Studi : S-1 Pendidikan Teknologi Informasi</h5>
            </div>
        </li><!--/.portfolio-item-->
        <li class="portfolio-item joomla bootstrap">
            <div class="item-inner">
                <img src="images/portfolio/thumb/item2.jpg" alt="">
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