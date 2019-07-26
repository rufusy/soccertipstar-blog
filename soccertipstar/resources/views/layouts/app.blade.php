<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'soccertipstar') }}</title>

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
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-right no-padding">
                            <ul>
                                <li><a href="tel:+440 012 3654 896"><span class="lnr lnr-phone-handset"></span><span>+440 012 3654 896</span></a></li>
                                <li><a href="mailto:support@colorlib.com"><span class="lnr lnr-envelope"></span><span>support@colorlib.com</span></a></li>
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
                                <img class="img-fluid" src="storage/img/logo.png" alt="">
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
                            <li class="menu-active"><a href="index.html">Home</a></li>
                            <li><a href="archive.html">Archive</a></li>
                            <li><a href="category.html">Category</a></li>
                            <li class="menu-has-children"><a href="">Post Types</a>
                            <ul>
                                <li><a href="standard-post.html">Standard Post</a></li>
                                <li><a href="image-post.html">Image Post</a></li>
                                <li><a href="gallery-post.html">Gallery Post</a></li>
                                <li><a href="video-post.html">Video Post</a></li>
                                <li><a href="audio-post.html">Audio Post</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                    </nav><!-- #nav-menu-container -->
                    <div class="navbar-right">
                        <form class="Search">
                            <input type="text" class="form-control Search-box" name="Search-box" id="Search-box" placeholder="Search">
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
                    <div class="col-lg-3 col-md-6 single-footer-widget">
                        <h4>Top Products</h4>
                        <ul>
                            <li><a href="#">Managed Website</a></li>
                            <li><a href="#">Manage Reputation</a></li>
                            <li><a href="#">Power Tools</a></li>
                            <li><a href="#">Marketing Service</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-6 single-footer-widget">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="#">Jobs</a></li>
                            <li><a href="#">Brand Assets</a></li>
                            <li><a href="#">Investor Relations</a></li>
                            <li><a href="#">Terms of Service</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-6 single-footer-widget">
                        <h4>Features</h4>
                        <ul>
                            <li><a href="#">Jobs</a></li>
                            <li><a href="#">Brand Assets</a></li>
                            <li><a href="#">Investor Relations</a></li>
                            <li><a href="#">Terms of Service</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-6 single-footer-widget">
                        <h4>Resources</h4>
                        <ul>
                            <li><a href="#">Guides</a></li>
                            <li><a href="#">Research</a></li>
                            <li><a href="#">Experts</a></li>
                            <li><a href="#">Agencies</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 single-footer-widget">
                        <h4>Instragram Feed</h4>
                        <ul class="instafeed d-flex flex-wrap">
                            <li><img src="storage/img/i1.jpg" alt=""></li>
                            <li><img src="storage/img/i2.jpg" alt=""></li>
                            <li><img src="storage/img/i3.jpg" alt=""></li>
                            <li><img src="storage/img/i4.jpg" alt=""></li>
                            <li><img src="storage/img/i5.jpg" alt=""></li>
                            <li><img src="storage/img/i6.jpg" alt=""></li>
                            <li><img src="storage/img/i7.jpg" alt=""></li>
                            <li><img src="storage/img/i8.jpg" alt=""></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-bottom row align-items-center">
                   
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
