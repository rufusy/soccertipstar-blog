@extends('layouts.app')

@section('content')
<div class="site-main-container">
    <!-- Start top-post Area -->
    <section class="top-post-area pt-10">
        <div class="container no-padding">
            <div class="row small-gutters">
                @if(count($recent_posts) > 0)
                <div class="col-lg-8 top-post-left">
                    <div class="feature-image-thumb relative">
                        <div class="overlay overlay-bg"></div>
                        @php
                            $recent_post_0_images = explode(',',$recent_posts[0]->image);
                        @endphp
                        <img class="img-fluid" src="/storage/{{$recent_post_0_images[0]}}" alt="">
                    </div>
                    <div class="top-post-details">
                        <a href="/post/{{$recent_posts[0]->slug}}">
                            <h3>{{$recent_posts[0]->title}}</h3>
                        </a>
                        <ul class="meta">
                            <li><a href="#"><span class="lnr lnr-user"></span>
                                    {{$recent_posts[0]->user->first_name.' '.$recent_posts[0]->user->last_name}}
                                </a></li>
                            <li><a href="#"><span class="lnr lnr-calendar-full"></span>
                                    {{$recent_posts[0]->published_at}}
                                </a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 top-post-right">
                    @if(count($recent_posts) > 1)
                        <div class="single-top-post">
                            <div class="feature-image-thumb relative">
                                <div class="overlay overlay-bg"></div>
                                @php
                                    $recent_post_1_images = explode(',',$recent_posts[1]->image);
                                @endphp
                                <img class="img-fluid" src="/storage/{{$recent_post_1_images[1]}}" alt="">
                            </div>
                            <div class="top-post-details">
                                <a href="/post/{{$recent_posts[1]->slug}}">
                                    <h4>{{$recent_posts[1]->title}}</h4>
                                </a>
                                <ul class="meta">
                                    <li><a href="#"><span class="lnr lnr-user"></span>
                                            {{$recent_posts[1]->user->first_name.' '.$recent_posts[1]->user->last_name}}
                                        </a></li>
                                    <li><a href="#"><span class="lnr lnr-calendar-full"></span>
                                            {{$recent_posts[1]->published_at}}
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                    @endif
                    @if(count($recent_posts) > 2)
                        <div class="single-top-post mt-10">
                            <div class="feature-image-thumb relative">
                                <div class="overlay overlay-bg"></div>
                                @php
                                    $recent_post_2_images = explode(',',$recent_posts[2]->image);
                                @endphp
                                <img class="img-fluid" src="/storage/{{$recent_post_2_images[1]}}" alt="">
                            </div>
                            <div class="top-post-details">
                                <a href="/post/{{$recent_posts[2]->slug}}">
                                    <h4>{{$recent_posts[2]->title}}</h4>
                                </a>
                                <ul class="meta">
                                    <li><a href="#"><span class="lnr lnr-user"></span>
                                            {{$recent_posts[2]->user->first_name.' '.$recent_posts[2]->user->last_name}}
                                        </a></li>
                                    <li><a href="#"><span class="lnr lnr-calendar-full"></span>
                                            {{$recent_posts[2]->published_at}}
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                    @endif
                </div>
                @endif
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
                                    @php
                                        $post_images = explode(',',$post->image);
                                    @endphp
                                    <img class="img-fluid" src="/storage/{{$post_images[2]}}" alt="">
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
                        <div class="single-sidebar-widget editors-pick-widget">
                            <h6 class="title">Editor’s Pick</h6>
                            <div class="editors-pick-post">
                                @if (count($featured_posts)>0)  
                                <div class="feature-img-wrap relative">
                                    <div class="feature-img relative">
                                        <div class="overlay overlay-bg"></div>
                                        @php
                                            $featured_post_0_images = explode(',',$featured_posts[0]->image);
                                        @endphp
                                        <img class="img-fluid" src="/storage/{{  $featured_post_0_images[3]}}" alt="">
                                    </div>
                                </div>
                                <div class="details">
                                    <a href="/post/{{$featured_posts[0]->slug}}">
                                        <h4 class="mt-20">{{$featured_posts[0]->title}}</h4>
                                    </a>
                                    <ul class="meta">
                                        <li><a href="#"><span class="lnr lnr-user"></span>
                                                {{$featured_posts[0]->user->first_name.' '.$featured_posts[0]->user->last_name}}
                                            </a></li>
                                        <li><a href="#"><span class="lnr lnr-calendar-full"></span>
                                                {{$featured_posts[0]->published_at}}
                                            </a></li>
                                    </ul>
                                    <p class="excert">
                                        {!!$featured_posts[0]->excerpt!!}
                                    </p>
                                </div>
                                <div class="post-lists">
                                    @if (count($featured_posts)>1)  
                                        @foreach ($featured_posts->slice(1) as $featured_post)
                                            @php
                                                $featured_posts_images = explode(',',$featured_post->image);
                                            @endphp
                                        <div class="single-post d-flex flex-row">
                                            <div class="thumb">
                                                <img src="/storage/{{$featured_posts_images[4]}}" alt="">
                                            </div>
                                            <div class="detail">
                                                <a href="/post/{{$featured_post->slug}}">
                                                    <h6>{{$featured_post->title}}</h6>
                                                </a>
                                                <ul class="meta">
                                                    <li><a href="#"><span
                                                        class="lnr lnr-calendar-full"></span>{{$featured_post->published_at}}</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        @endforeach
                                    @endif
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="single-sidebar-widget ads-widget">
                            <img class="img-fluid" src="/storage/img/sidebar-ads.jpg" alt="">
                        </div>

                        <div class="single-sidebar-widget newsletter-widget">
                            <h6 class="title">Newsletter</h6>
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
                                You can unsubscribe us at any time to receive the latest news and other goodies as they become available.
                                We promise not to spam you.
                            </p>
                        </div>
                        <div class="single-sidebar-widget most-popular-widget">
                            <h6 class="title">Most Popular</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End latest-post Area -->
</div>
@endsection
