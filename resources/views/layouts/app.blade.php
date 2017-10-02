<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="">
</head><!--/head-->
<body>
<header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href=""><img src="images/logo.jpg" width="90" height="90"></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="about-us.html">Profil</a></li>
                <li><a href="{{ route('struktur') }}">Struktur Organisasi</a></li>
                <li><a href="services.html">Fasilitas</a></li>
                <li><a href="services.html">Acara</a></li>
                <li><a href="portfolio.html">Galeri</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Prodi<i class="icon-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('mi') }}">D3 Manajemen Informatika</a></li>
                        <li><a href="{{ route('pti') }}">S1 Pendidikan Teknologi Informasi</a></li>
                        <li><a href="{{ route('ti') }}">S1 Teknik Informatika</a></li>
                        <li><a href="{{ route('si') }}">S1 Sistem Informasi</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Info<i class="icon-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('beasiswa') }}">Beasiswa</a></li>
                        <li><a href="{{ route('loker') }}">Loker</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</header><!--/header-->

@yield('content')

<footer id="footer" class="midnight-blue">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                &copy; 2017 Teknik Informatika
            </div>
            {{--<div class="col-sm-6">--}}
                {{--<ul class="pull-right">--}}
                    {{--<li><a href="#">Home</a></li>--}}
                    {{--<li><a href="about-us.html">Profil</a></li>--}}
                    {{--<li><a href="faq.html">Faq</a></li>--}}
                    {{--<li><a id="gototop" class="gototop" href="#"><i class="icon-chevron-up"></i></a></li><!--#gototop-->--}}
                {{--</ul>--}}
            {{--</div>--}}
        </div>
    </div>
</footer><!--/#footer-->

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/main.js"></script>
</body>
</html>