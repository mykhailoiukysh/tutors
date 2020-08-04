<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> TutorsWeb.org {{ ucfirst(Request::segment(1)) }} </title>
    <link rel="shortcut icon" href="{{asset('assets/images/favicons/favicon.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/images/favicons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/images/favicons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicons/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('assets/images/favicons/site.webmanifest')}}">

    <!-- plugin scripts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,500i,600,700,800%7CSatisfy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}} ">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}} ">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}} ">
    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free-5.11.2-web/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/kipso-icons/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vegas.min.css')}}">

    <!-- template styles -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

    {{--@yield('head')--}}
</head>

<body>

    <div class="page-wrapper">
        <header class="site-header site-header__home-three site-header__inner-page header-custom">
        <div class="topbar-one">
            <div class="container">
                <div class="topbar-one__left">
                    <a href="#">info@tutorsweb.org</a>
                </div><!-- /.topbar-one__left -->
                <div class="topbar-one__right">
                    <a href="#">Login</a>
                    <a href="#">Sign up</a>
                </div><!-- /.topbar-one__right -->
            </div><!-- /.container -->
        </div><!-- /.topbar-one -->

            <nav class="navbar navbar-expand-lg navbar-dark header-navigation stricky">
                <div class="container clearfix">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="logo-box clearfix">
                        <a class="navbar-brand" href="/">
                            <img src="{{asset('assets/images/logo-dark.png')}}" class="main-logo" width="128" alt="Awesome Image" />
                        </a>
                        <button class="menu-toggler" data-target=".main-navigation">
                            <span class="kipso-icon-menu"></span>
                        </button>
                    </div><!-- /.logo-box -->
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="main-navigation">
                        <ul class="navigation-box navigation-box-light">
                            <li @if( ucfirst(Request::segment(1)) == " " ) class="current" @endif>
                                <a href="/">Home</a>
                            </li>
                            <li @if( ucfirst(Request::segment(1)) == "About" ) class="current" @endif>
                                <a href="/about">About</a>
                            </li>
                            <li @if( ucfirst(Request::segment(1)) == "Howitworks" ) class="current" @endif>
                                <a href="howitworks">How it Works?</a>
                            </li>
                            <li @if( ucfirst(Request::segment(1)) == "Tutors" ) class="current" @endif>
                                <a href="tutors">Tutors</a>
                            </li>
                            <li @if( ucfirst(Request::segment(1)) == "Fee" ) class="current" @endif>
                                <a href="fee">Fees</a>
                            </li>
                            <li @if( ucfirst(Request::segment(1)) == "Contact" ) class="current" @endif>
                                <a href="contact">Contact</a>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                    <div class="right-side-box">
                        <a class="header__search-btn search-popup__toggler" href="#"><i class="kipso-icon-magnifying-glass"></i>
                            <!-- /.kipso-icon-magnifying-glass --></a>
                    </div><!-- /.right-side-box -->
                </div>
                <!-- /.container -->
            </nav>
            <div class="site-header__decor">
                <div class="site-header__decor-row">
                    <div class="site-header__decor-single">
                        <div class="site-header__decor-inner-1"></div><!-- /.site-header__decor-inner -->
                    </div><!-- /.site-header__decor-single -->
                    <div class="site-header__decor-single">
                        <div class="site-header__decor-inner-2"></div><!-- /.site-header__decor-inner -->
                    </div><!-- /.site-header__decor-single -->
                    <div class="site-header__decor-single">
                        <div class="site-header__decor-inner-3"></div><!-- /.site-header__decor-inner -->
                    </div><!-- /.site-header__decor-single -->
                </div><!-- /.site-header__decor-row -->
            </div><!-- /.site-header__decor -->
        </header><!-- /.site-header -->


            @yield('content')


  <footer class="site-footer">
            <div class="site-footer__upper">
                <div class="container">
                    <div class="row">

                        <div class="col-xl-3 col-lg-6 col-sm-12">
                            <div class="footer-widget footer-widget__link">
                                <h2 class="footer-widget__title">Explore</h2><!-- /.footer-widget__title -->
                                <div class="footer-widget__link-wrap">
                                    <ul class="list-unstyled footer-widget__link-list">
                                         <li><a href="{{url("/")}}">Home</a></li>
                                        <li><a href="{{url("/about")}}">About</a></li>
                                        <li><a href="{{url("/howitworks")}}">How it Works?</a></li>
                                    </ul><!-- /.footer-widget__link-list -->
                                    <ul class="list-unstyled footer-widget__link-list">
                                        <li><a href="{{url("/tutors")}}">Tutors</a></li>
                                        <li><a href="{{url("/fee")}}">Fees</a></li>
                                        <li><a href="{{url("/contact")}}">Contact</a></li>
                                    </ul><!-- /.footer-widget__link-list -->
                                </div><!-- /.footer-widget__link-wrap -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-3 -->
                        <div class="col-xl-3 col-lg-6 col-sm-12">
                            <div class="footer-widget footer-widget__gallery">
                               <!--  <h2 class="footer-widget__title">Gallery</h2> -->


                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-3 -->
                        <div class="col-xl-3 col-lg-6 col-sm-12">
                            <div class="footer-widget footer-widget__about">
                                <!-- h2 class="footer-widget__title">About</h2> //.footer-widget__title -->
                                <p class="footer-widget__text">

                                </p><!-- /.footer-widget__text -->
                                <div class="footer-widget__btn-block">
                                    <a href="/learn" class="thm-btn">Learn</a><!-- /.thm-btn -->
                                    <a href="/teach" class="thm-btn">Teach</a><!-- /.thm-btn -->
                                </div><!-- /.footer-widget__btn-block -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-3 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.site-footer__upper -->
            <div class="site-footer__bottom">
                <div class="container">
                    <p class="site-footer__copy">&copy; Copyright 2020 by <a href="#">TutorsWeb.com</a></p>
                    <div class="site-footer__social">
                        <a href="#" data-target="html" class="scroll-to-target site-footer__scroll-top"><i class="kipso-icon-top-arrow"></i></a>
                        <!--a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a -->
                    </div><!-- /.site-footer__social -->
                    <!-- /.site-footer__copy -->
                </div><!-- /.container -->
            </div><!-- /.site-footer__bottom -->
        </footer><!-- /.site-footer -->

    </div><!-- /.page-wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div><!-- /.search-popup__overlay -->
        <div class="search-popup__inner">
            <form action="#" class="search-popup__form">
                <input type="text" name="search" placeholder="Type here to Search....">
                <button type="submit"><i class="kipso-icon-magnifying-glass"></i></button>
            </form>
        </div><!-- /.search-popup__inner -->
    </div><!-- /.search-popup -->

    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('assets/js/TweenMax.min.js')}}"></script>
    <script src="{{asset('assets/js/wow.js')}}"></script>
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/countdown.min.js')}}"></script>
    <script src="{{asset('assets/js/vegas.min.js')}}"></script>

    <!-- template scripts -->
    <script src="{{asset('assets/js/theme.js')}}"></script>
    @yield('foot')
</body>

</html>






















