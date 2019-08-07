@extends('layouts.app')

@section('content')
<div class="site-main-container">

    <!-- Start latest-post Area -->
    <section class="latest-post-area pb-120">
        <div class="container no-padding">
            <div class="row">
                <div class="col-lg-8 post-list">
                    <!-- Start single-post Area -->
                    <div class="single-post-wrap">
                        <div class="feature-img-thumb relative">
                            <div class="overlay overlay-bg"></div>
                            <img class="img-fluid" src="/storage/img/f1.jpg" alt="">
                        </div>
                        <div class="content-wrap">
                            <a href="#">
                                <h3>{{$post->title}}</h3>
                            </a>
                            <ul class="meta pb-20">
                                <li><a href="#"><span class="lnr lnr-user"></span>
                                        {{$post->user->first_name.' '.$post->user->last_name}}
                                    </a></li>
                                <li><a href="#"><span class="lnr lnr-calendar-full"></span>
                                        {{$post->published_at}}
                                    </a></li>
                                <li><a href="#"><span class="lnr lnr-bubble"></span>06 </a></li>
                            </ul>
                            {!!$post->content!!}
                        </div>
                        <div class="comment-form">
                            <h4>Post Comment</h4>
                            <form>
                                <div class="form-group form-inline">
                                    <div class="form-group col-lg-6 col-md-12 name">
                                        <input type="text" class="form-control" id="name" placeholder="Enter Name"
                                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'">
                                    </div>
                                    <div class="form-group col-lg-6 col-md-12 email">
                                        <input type="email" class="form-control" id="email"
                                            placeholder="Enter email address" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Enter email address'">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control mb-10" rows="5" name="message" placeholder="Messege"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"
                                        required=""></textarea>
                                </div>
                                <a href="#" class="primary-btn text-uppercase">Post Comment</a>
                            </form>
                        </div>
                    </div>
                    <!-- End single-post Area -->
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
