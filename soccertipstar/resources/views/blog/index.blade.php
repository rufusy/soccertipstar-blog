@extends('layouts.app')

@section('content')
<div class="site-main-container">
    <!-- Start top-post Area -->
    <section class="top-post-area pt-10">
        <div class="container no-padding">
            <div class="row small-gutters">

                <div class="col-lg-8 top-post-left">
                    <div class="feature-image-thumb relative">
                        <div class="overlay overlay-bg"></div>
                        <img class="img-fluid" src="storage/img/top-post1.jpg" alt="">
                    </div>
                    <div class="top-post-details">
                        <a href="/post/{{$featured_posts[0]->slug}}">
                            <h3>{{$featured_posts[0]->title}}</h3>
                        </a>
                        <ul class="meta">
                            <li><a href="#"><span class="lnr lnr-user"></span>
                                    {{$featured_posts[0]->user->first_name.' '.$featured_posts[0]->user->last_name}}
                                </a></li>
                            <li><a href="#"><span class="lnr lnr-calendar-full"></span>
                                    {{$featured_posts[0]->published_at}}
                                </a></li>
                            <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 top-post-right">
                    <div class="single-top-post">
                        <div class="feature-image-thumb relative">
                            <div class="overlay overlay-bg"></div>
                            <img class="img-fluid" src="storage/img/top-post2.jpg" alt="">
                        </div>
                        <div class="top-post-details">
                            <a href="/post/{{$featured_posts[1]->slug}}">
                                <h4>{{$featured_posts[1]->title}}</h4>
                            </a>
                            <ul class="meta">
                                <li><a href="#"><span class="lnr lnr-user"></span>
                                    {{$featured_posts[1]->user->first_name.' '.$featured_posts[1]->user->last_name}}
                                </a></li>
                                <li><a href="#"><span class="lnr lnr-calendar-full"></span>
                                    {{$featured_posts[1]->published_at}}
                                </a></li>
                                <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-top-post mt-10">
                        <div class="feature-image-thumb relative">
                            <div class="overlay overlay-bg"></div>
                            <img class="img-fluid" src="storage/img/top-post2.jpg" alt="">
                        </div>
                        <div class="top-post-details">
                            <a href="/post/{{$featured_posts[2]->slug}}">
                                <h4>{{$featured_posts[2]->title}}</h4>
                            </a>
                            <ul class="meta">
                                <li><a href="#"><span class="lnr lnr-user"></span>
                                    {{$featured_posts[2]->user->first_name.' '.$featured_posts[2]->user->last_name}}
                                </a></li>
                                <li><a href="#"><span class="lnr lnr-calendar-full"></span>
                                    {{$featured_posts[2]->published_at}}
                                </a></li>
                                <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End top-post Area -->
    <!-- Start latest-post Area -->
    <section class="latest-post-area pb-120">
        <div class="container no-padding">
            <div class="row">
                <div class="col-lg-8 post-list">
                    <!-- Start latest-post Area -->
                    <div class="latest-post-wrap">
                        <h4 class="cat-title">Latest News</h4>
                        @if(count($posts) > 0)
                        @foreach($posts as $post)
                        <div class="single-latest-post row align-items-center">
                            <div class="col-lg-5 post-left">
                                <div class="feature-img relative">
                                    <div class="overlay overlay-bg"></div>
                                    <img class="img-fluid" src="storage/img/l1.jpg" alt="">
                                </div>

                            </div>
                            <div class="col-lg-7 post-right">
                                <a href="/post/{{$post->slug}}">
                                    <h4>{{$post->title}}</h4>
                                </a>
                                <ul class="meta">
                                    <li><a href="#"><span class="lnr lnr-user"></span>
                                            {{$post->user->first_name.' '.$post->user->last_name}}
                                        </a></li>
                                    <li><a href="#"><span class="lnr lnr-calendar-full"></span>
                                            {{$post->published_at}}</a>
                                    </li>
                                    <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
                                </ul>
                                <p class="excert">{!!$post->excerpt!!}</p>
                            </div>
                        </div>
                        @endforeach
                        <div style="margin-top: 10px;">
                            {{$posts->links()}}
                        </div>
                        @endif
                    </div>
                    <!-- End latest-post Area -->

                    <!-- Start banner-ads Area -->
                    <div class="col-lg-12 ad-widget-wrap mt-30 mb-30">
                        <img class="img-fluid" src="storage/img/banner-ad.jpg" alt="">
                    </div>
                    <!-- End banner-ads Area -->
                </div>
                <div class="col-lg-4">
                    <div class="sidebars-area">
                        <div class="single-sidebar-widget ads-widget">
                            <img class="img-fluid" src="storage/img/sidebar-ads.jpg" alt="">
                        </div>
                        <div class="single-sidebar-widget newsletter-widget">
                            <h6 class="title">Newsletter</h6>
                            <p>
                                Here, I focus on a range of items
                                andfeatures that we use in life without
                                giving them a second thought.
                            </p>
                            <div class="form-group d-flex flex-row">
                                <div class="col-autos">
                                    <div class="input-group">
                                        <input class="form-control" placeholder="Email Address"
                                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'"
                                            type="text">
                                    </div>
                                </div>
                                <a href="#" class="bbtns">Subcribe</a>
                            </div>
                            <p>
                                You can unsubscribe us at any time
                            </p>
                        </div>
                        <div class="single-sidebar-widget most-popular-widget">
                            <h6 class="title">Most Popular</h6>
                            <div class="single-list flex-row d-flex">
                                <div class="thumb">
                                    <img src="storage/img/m1.jpg" alt="">
                                </div>
                                <div class="details">
                                    <a href="image-post.html">
                                        <h6>Help Finding Information
                                            Online is so easy</h6>
                                    </a>
                                    <ul class="meta">
                                        <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a>
                                        </li>
                                        <li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-list flex-row d-flex">
                                <div class="thumb">
                                    <img src="storage/img/m2.jpg" alt="">
                                </div>
                                <div class="details">
                                    <a href="image-post.html">
                                        <h6>Compatible Inkjet Cartr
                                            world famous</h6>
                                    </a>
                                    <ul class="meta">
                                        <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a>
                                        </li>
                                        <li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-list flex-row d-flex">
                                <div class="thumb">
                                    <img src="storage/img/m3.jpg" alt="">
                                </div>
                                <div class="details">
                                    <a href="image-post.html">
                                        <h6>5 Tips For Offshore Soft
                                            Development </h6>
                                    </a>
                                    <ul class="meta">
                                        <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a>
                                        </li>
                                        <li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-list flex-row d-flex">
                                <div class="thumb">
                                    <img src="storage/img/m4.jpg" alt="">
                                </div>
                                <div class="details">
                                    <a href="image-post.html">
                                        <h6>5 Tips For Offshore Soft
                                            Development </h6>
                                    </a>
                                    <ul class="meta">
                                        <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a>
                                        </li>
                                        <li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End latest-post Area -->
</div>
@endsection
