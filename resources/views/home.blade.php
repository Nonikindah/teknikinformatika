@extends('layouts.app')

@section('title',"Home | Teknik Informatika")

@section('content')
<section id="main-slider" class="no-margin">
    <div class="carousel slide wet-asphalt">
        <ol class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider" data-slide-to="1"></li>
            <li data-target="#main-slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="carousel-content centered">
                                <h2 class="animation animated-item-1" style="text-align: center">Jurusan Teknik Informatika Universitas Negeri Surabaya</h2>
                                <p class="animation animated-item-2"> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
            <div class="item" style="background-image: url(images/slider/bg2.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="carousel-content center centered">
                                <h2 class="boxed animation animated-item-1">Clean, Crisp, Powerful and Responsive Web Design</h2>
                                <p class="boxed animation animated-item-2">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                <br>
                                <a class="btn btn-md animation animated-item-3" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
            <div class="item" style="background-image: url(images/slider/bg3.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="carousel-content centered">
                                <h2 class="animation animated-item-1">Powerful and Responsive Web Design Theme</h2>
                                <p class="animation animated-item-2">Pellentesque habitant morbi tristique senectus et netus et malesuada fames</p>
                                <a class="btn btn-md animation animated-item-3" href="#">Learn More</a>
                            </div>
                        </div>
                        <div class="col-sm-6 hidden-xs animation animated-item-4">
                            <div class="centered">
                                <div class="embed-container">
                                    <iframe src="//player.vimeo.com/video/69421653?title=0&amp;byline=0&amp;portrait=0&amp;color=a22c2f" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.carousel-inner-->
    </div><!--/.carousel-->
    <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
        <i class="icon-angle-left"></i>
    </a>
    <a class="next hidden-xs" href="#main-slider" data-slide="next">
        <i class="icon-angle-right"></i>
    </a>
</section><!--/#main-slider-->

<section id="recent-works">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div id="scroller" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                                <div class="col-xs-4">
                                    <div class="portfolio-item">
                                        <div class="item-inner">
                                            <img class="img-responsive" src="images/portfolio/recent/DSC_0062.jpg" alt="">
                                            <h5>
                                                Buka Bareng Anak TI 2016
                                            </h5>
                                            <div class="overlay">
                                                <a class="preview btn btn-danger" title="Buka Bareng Anak TI 2016" href="images/portfolio/full/DSC_0062.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="portfolio-item">
                                        <div class="item-inner">
                                            <img class="img-responsive" src="images/portfolio/recent/IMG_6216.JPG" alt="">
                                            <h5>
                                                Halal Bihalal Warga JTIF
                                            </h5>
                                            <div class="overlay">
                                                <a class="preview btn btn-danger" title="Halal Bihalal Warga JTIF" href="images/portfolio/full/IMG_6216.JPG" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="portfolio-item">
                                        <div class="item-inner">
                                            <img class="img-responsive" src="images/portfolio/recent/IMG_8024.JPG" alt="">
                                            <h5>
                                                Rapat Kerja HIMTI
                                            </h5>
                                            <div class="overlay">
                                                <a class="preview btn btn-danger" title="Rapat Kerja HIMTI 2016" href="images/portfolio/full/IMG_8024.JPG" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--/.row-->
                        </div><!--/.item-->
                        <div class="item">
                            <div class="row">
                                <div class="col-xs-4">
                                    <div class="portfolio-item">
                                        <div class="item-inner">
                                            <img class="img-responsive" src="images/portfolio/recent/item2.png" alt="">
                                            <h5>
                                                Sensus
                                            </h5>
                                            <div class="overlay">
                                                <a class="preview btn btn-danger" title="Malesuada fames ac turpis egestas" href="images/portfolio/full/item1.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="portfolio-item">
                                        <div class="item-inner">
                                            <img class="img-responsive" src="images/portfolio/recent/item2.png" alt="">
                                            <h5>
                                                Training Of Trainers
                                            </h5>
                                            <div class="overlay">
                                                <a class="preview btn btn-danger" title="Malesuada fames ac turpis egestas" href="images/portfolio/full/item1.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="colxs-4">
                                    <div class="portfolio-item">
                                        <div class="item-inner">
                                            <img class="img-responsive" src="images/portfolio/recent/IMG_7833.JPG" alt="">
                                            <h5>
                                                Musyawarah Mahasiswa II
                                            </h5>
                                            <div class="overlay">
                                                <a class="preview btn btn-danger" title="Musyawarah Mahasiswa II" href="images/portfolio/full/IMG_7833.JPG" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--/.item-->
                    </div>
                </div>
            </div>
        </div><!--/.row-->
    </div>
</section><!--/#recent-works-->
@endsection
