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
                             @php
                                $post_images = explode(',',$post->image);
                            @endphp
                            <img src="/storage/{{$post_images[5]}}"  alt="">
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
                            </ul>
                            {!!$post->content!!}
                        </div>

                        <div class="comment-form">
                            <h4>Post Comment</h4>
                            <!-- start disqus -->
                            <div id="disqus_thread"></div>
                            <script>
                                var disqus_config = function () {
                                    var slug = {{$post->slug}};
                                    this.page.url = 'http://soccertipstar.test/post/'+slug;  
                                    this.page.identifier = slug; 
                                };

                                (function() { // DON'T EDIT BELOW THIS LINE
                                    var d = document, s = d.createElement('script');
                                    s.src = 'https://soccertipstar.disqus.com/embed.js';
                                    s.setAttribute('data-timestamp', +new Date());
                                    (d.head || d.body).appendChild(s);
                                })();
                            </script>
                            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            <!-- end disqus -->
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
                                You can unsubscribe us at any time to receive the latest news and other goodies as they become available. 
                                We promise not to spam you.
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End latest-post Area -->
</div>
@endsection
