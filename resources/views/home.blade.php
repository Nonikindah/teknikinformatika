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
            <div class="item active" style="background-image: url(images/slider/lombaic.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="carousel-content centered">
                                <h2 class="animation animated-item-1" style="text-align: center">Kegiatan Lomba Jurusan</h2>
                                <p class="animation animated-item-2"> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
            <div class="item" style="background-image: url(images/slider/dialog.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="carousel-content center centered">
                                <h2>Kegiatan Dialog Jurusan</h2>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
            <div class="item" style="background-image: url(images/slider/wisuda.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="carousel-content center centered">
                                <h2>Mahasiswa Setelah Sidang</h2>
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
<section id="services" class="emerald">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-6">
                <div class="media">
                    <div class="pull-left">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading" style="text-align: center">Seputar Informasi</h3>
                    </div>
                </div>
            </div><!--/.col-md-4-->
        </div>
    </div>
</section><!--/#services-->
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
                                            <img class="img-responsive" src="images/portfolio/full/soskom.png" alt="">
                                            <h5>
                                                Sosialisasi Komatik
                                            </h5>
                                            <div class="overlay">
                                                <a class="preview btn btn-danger" title="Sosialisasi Komatik" href="images/portfolio/full/soskom.png" rel="prettyPhoto"><li class="icon-eye-open"></li></a>
                                            </div>
                                            <p>
                                                Salam komatik!
                                                Hai para kreator jurusan Teknik Informatika🙋🙋
                                                Punya ide baru tapi bingung ngembanginnya? Atau pingin ngembangin hardskill tapi kurang inovasi?

                                                Yuk ikuti sosialisasi komatik pada :

                                                Hari/Tanggal : Rabu, 27 September 2017
                                                Waktu : 15.30 – Selesai
                                                Fee : FREE [Wajib #dulurti2k17]
                                                Tempat : B10201

                                                Visit : komatik.id

                                                Kita tunggu ya kehadiran kalian!😊
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="portfolio-item">
                                        <div class="item-inner">
                                            <img class="img-responsive" src="images/portfolio/full/PPMLN.jpg" alt="">
                                            <h5>
                                                Program Pemuda Magang Luar Negeri ( PPMLN )
                                            </h5>
                                            <div class="overlay">
                                                <a class="preview btn btn-danger" title="Program Pemuda Magang Luar Negeri ( PPMLN )" href="images/portfolio/full/PPMLN.jpg" rel="prettyPhoto"><li class="icon-eye-open"></li></a>
                                            </div>
                                            <p>
                                                Hello Indonesian Youth!??
                                                Kabar baik untukmu hari ini!

                                                AIESEC Indonesia bekerja sama dengan KEMENPORA di tahun 2017 ini untuk membuat program Pemuda Magang Luar Negeri ( PPMLN ). PPMLN adalah program bagi anak muda Indonesia untuk membangun karir melalui program magang Internasional full-funded.

                                                Dan mulai hari ini, 16 Juni hingga tanggal 30 Juni nanti kami akan membuka online registration untuk setiap anak muda Indonesia yang ingin mengikuti program ini. Ayo daftarkan dirimu untuk menjadi yang pertama mengikuti PPMLN.

                                                Register : aiesec.or.id/registerppmln
                                                More info: www.aiesec.or.id/program-ppmln
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="portfolio-item">
                                        <div class="item-inner">
                                            <img class="img-responsive" src="images/portfolio/full/startup.jpeg" alt="">
                                            <h5>
                                                Startup Geeks Goes To Campus
                                            </h5>
                                            <div class="overlay">
                                            <a class="preview btn btn-danger" title="Startup Geeks Goes To Campus" href="images/portfolio/full/startup.jpeg" rel="prettyPhoto"><li class="icon-eye-open"></li></a>
                                            </div>
                                                <p>
                                                Yuk ikutan kuliah tamu dengan tema “Open mind the Startup Founder” dari CEO Riliv “Audrey Maxi”

                                                Hari : Selasa, 2 Mei 2017
                                                Waktu : 13.00 – selesai
                                                Tempat : Auditorium A1 lt.2 *Perwakilan kelas minimal 5 orang ya guys
                                                Terima kasih
                                                </p>
                                    </div>
                                </div>
                            </div><!--/.row-->
                        </div><!--/.item-->
                        <div class="item">
                            <div class="row">
                            </div>
                        </div><!--/.item-->
                    </div>
                </div>
            </div>
        </div><!--/.row-->
    </div>
</section><!--/#recent-works-->
@endsection
