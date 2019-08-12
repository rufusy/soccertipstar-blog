<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'soccertipstar') }}</title>

    <!-- Fonts -->
    {{--     <link rel="dns-prefetch" href="//fonts.gstatic.com">
 --}}
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('Magazine/css/linearicons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Magazine/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Magazine/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Magazine/css/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Magazine/css/nice-select.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Magazine/css/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Magazine/css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Magazine/css/jquery-ui.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Magazine/css/main.css') }}">
</head>

<body>
    <div id="app">
        <header>
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-left no-padding">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-right no-padding">
                            <ul>
                                <li><a href="tel:+440 012 3654 896"><span
                                            class="lnr lnr-phone-handset"></span><span>+254 772928599</span></a></li>
                                <li><a href="mailto:support@colorlib.com"><span
                                            class="lnr lnr-envelope"></span><span>support@soccertipstar.com</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="logo-wrap">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-4 col-md-4 col-sm-12 logo-left no-padding">
                            <a href="index.html">
                                {{-- <img class="img-fluid" src="storage/img/logo.png" alt=""> --}}
                            </a>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-12 logo-right no-padding ads-banner">
                            <img class="img-fluid" src="storage/img/banner-advert.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container main-menu" id="main-menu">
                <div class="row align-items-center justify-content-between">
                    <nav id="nav-menu-container">
                        <ul class="nav-menu">
                            <li class="menu-active"><a href="/">Home</a></li>
                            <li><a href="/about">About</a></li>
                            <li><a href="/contact">Contact</a></li>
                        </ul>
                    </nav><!-- #nav-menu-container -->
                    <div class="navbar-right">
                        <form class="Search">
                            <input type="text" class="form-control Search-box" name="Search-box" id="Search-box"
                                placeholder="Search">
                            <label for="Search-box" class="Search-box-label">
                                <span class="lnr lnr-magnifier"></span>
                            </label>
                            <span class="Search-close">
                                <span class="lnr lnr-cross"></span>
                            </span>
                        </form>
                    </div>
                </div>
            </div>
        </header>

        <main class="py-4">
            @yield('content')
        </main>

        <!-- start footer Area -->
        <footer class="footer-area section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-6 single-footer-widget">
                        <h4>Mission</h4>
                        <p>
                            To form a winning strategy to guarantee profits to all our subscribers.
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 single-footer-widget">
                        <h4>NOTE</h4>
                        <p class="text-danger">
                            WE DON’T POST FIXED MATCHES. DON’T LET ANY OTHER WEBSITE CLAIMING TO BE US SCAM YOU!
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 single-footer-widget">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="#">about</a></li>
                            <li><a href="#">contact form</a></li>
                            <li><a href="#">Terms of Service</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 single-footer-widget">
                        <h4>Contact us</h4>
                        <ul>
                            <li><a href="tel:+440 012 3654 896"><span class="lnr lnr-phone-handset"></span><span>+254 772928599</span></a></li>
                            <li><a href="mailto:support@colorlib.com"><span class="lnr lnr-envelope"></span><span>support@soccertipstar.com</span></a></li>
                        </ul>
                    </div>
            
                    <div class="col-lg-2 col-md-6 single-footer-widget">
                        <h4>Resources</h4>
                        <ul>
                            <li><a href="#">Authors</a></li>
                            <li><a href="#">Developers</a></li>
                        </ul>
                    </div>
                </div>

                <div class="footer-bottom row align-items-center">
                	<p class="footer-text m-0 col-lg-8 col-md-12">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;2019 All rights reserved
                    </p>
                    <div class="col-lg-4 col-md-12 footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>

            </div>
        </footer>
        <!-- End footer Area -->
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('Magazine/js/vendor/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('Magazine/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('Magazine/js/easing.min.js') }}"></script>
    <script src="{{ asset('Magazine/js/hoverIntent.js') }}"></script>
    <script src="{{ asset('Magazine/js/superfish.min.js') }}"></script>
    <script src="{{ asset('Magazine/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('Magazine/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('Magazine/js/mn-accordion.js') }}"></script>
    <script src="{{ asset('Magazine/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('Magazine/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('Magazine/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('Magazine/js/mail-script.js') }}"></script>
    <script src="{{ asset('Magazine/js/main.js') }}"></script>
</body>

</html>
