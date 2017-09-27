@extends('layouts.app')

@section('title',"Beasiswa | Teknik Informatika")

@section('content')
    <section id="blog" class="container">
        <div class="row">
            <aside class="col-sm-4 col-sm-push-8">
                <div class="widget ads">
                    <div class="row">
                        <div class="col-xs-6">
                            <a href="#"><img class="img-responsive img-rounded" src="{{ asset('images/bbi.jpg') }}" alt=""></a>
                        </div>

                        <div class="col-xs-6">
                            <a href="#"><img class="img-responsive img-rounded" src="{{ asset('images/bca.jpg') }}" alt=""></a>
                        </div>
                    </div>
                    <p> </p>
                    {{--<div class="row">--}}
                        {{--<div class="col-xs-6">--}}
                            {{--<a href="#"><img class="img-responsive img-rounded" src="images/ads/ad3.png" alt=""></a>--}}
                        {{--</div>--}}

                        {{--<div class="col-xs-6">--}}
                            {{--<a href="#"><img class="img-responsive img-rounded" src="images/ads/ad4.png" alt=""></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div><!--/.ads-->
            </aside>
            <div class="col-sm-8 col-sm-pull-4">
                <div class="blog">
                    <div class="blog-item">
                        <img class="img-responsive img-blog" src="{{ asset('images/ppa.jpg') }}" width="100%" alt="" style="" />
                        <div class="blog-content">
                            <h3>Beasiswa Peningkatan Prestasi Akademik (PPA)</h3>
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
                    </div><!--/.blog-item-->
                </div>
            </div><!--/.col-md-8-->
        </div><!--/.row-->
    </section><!--/#blog-->
@endsection