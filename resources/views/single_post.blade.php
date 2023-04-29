@extends('layouts.app')

@section('title','Sohojware | '. $post->title )
@section('meta-description', $post->meta_description)
@section('meta-keywords', $post->meta_keywords)

@section('social_media')
<meta property="og:title" content="{{ $post->title}}" />
<meta property="og:description" content="{{$post->meta_description}}" />
<meta property="og:url" content="{{route('post',$post->slug)}}" />
<meta property="og:image" content="{{Voyager::image($post->image)}}" />
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/post.css') }}">
<style>
    .fa-facebook-square:before,
    .fa-square-facebook:before {
        font-size: 30px !important;
    }

    .fa-twitter:before {
        font-size: 30px !important;
    }

    .fa-linkedin:before {
        font-size: 30px !important;
    }

    .fa-telegram:before {
        font-size: 30px !important;
    }

    .fa-whatsapp:before {
        font-size: 30px !important;
    }

    .fa-reddit:before {
        font-size: 30px !important;
    }
</style>

@endsection
@section('content')








<div id="main-wrapper ">
    <div class="site-wrapper-reveal">
        <!-- Blog Details Wrapper Start -->
        <div class="blog-details-wrapper section-space--ptb_80">
            <div class="container ">
                <div class="row row--17">
                    <div class="blog-details-col-8 mt-5">
                        <!-- blog details Post Start -->
                        <div class="blog-details-post-wrap">
                            <div class="blog-details-thum">
                                <img src="{{Voyager::image($post->image)}}" alt="">
                            </div>
                            <div class="blog-details-post-content">
                                <div class="blog-details-meta-box">
                                    <div class="post-meta-left-side mb-2">
                                        <div class="trending-blog-post-category ">
                                            <a href="#">{{ $post->category->name}}</a>
                                        </div>
                                        <div class="following-blog-post-author">
                                            By <a href="#">Sayed Khan</a>
                                        </div>
                                    </div>

                                    <div class="post-mid-side mb-2">
                                        <span class="post-meta-left-side">
                                            <span class="post-date">
                                                <i class="icofont-ui-calendar"></i>
                                                <a href="#">{{ $post->created_at->format('d M Y') }} </a>
                                            </span>
                                        </span>

                                    </div>

                                    <!-- <div class="post-meta-right-side mb-2">
                                        <a href="#"><img src="https://htmldemo.net/bunzo/bunzo/assets/images/icons/small-bookmark.png" alt="" /></a>
                                        <a href="#"><img src="https://htmldemo.net/bunzo/bunzo/assets/images/icons/heart.png" alt="" /></a>
                                    </div> -->
                                </div>
                                <h3 class="following-blog-post-title text-white">
                                    <a href="#">{{$post->title}}
                                    </a>
                                </h3>

                                <div class="post-details-text">
                                    {!! $post->body !!}





                                    <div class="blog-details-tag-and-share-area">
                                        <!-- <div class="post-tag">
                                            <a href="#" class="btn-solid reveal-start">Fashion</a>
                                            <a href="#" class="btn-solid reveal-start">Health</a>
                                            <a href="#" class="btn-solid reveal-start">Travel</a>
                                        </div> -->
                                        <ul class="social-share-area ">
                                            <!-- <li class="" title="Facebook"><a class="btn-solid " href="#0" title="social media icon"><i class="fab fa-facebook-f sc-icon"></i></a>
                                            </li>
                                            <li class="sc-item " title="youtube"><a class="btn-solid" href="#0" title="social media icon"><i class="fab fa-youtube sc-icon"></i></a>
                                            </li>
                                            <li class="sc-item " title="instagram"><a class="btn-solid " href="#0" title="social media icon"><i class="fab fa-instagram sc-icon"></i></a>
                                            </li>
                                            <li class="sc-item " title="twitter"><a class="btn-solid " href="#0" title="social media icon"><i class="fab fa-twitter sc-icon"></i></a>
                                            </li> -->
                                            {!! $shareComponent !!}
                                        </ul>

                                    </div>

                                </div>



                            </div>
                        </div><!-- blog details Post End -->
                    </div>
                    <div class="blog-details-col-4">




                        <div class="latest-post-inner-wrap mt-5">
                            <div class="latest-post-header">
                                <div class="section-title">
                                    <h4>Latest Post</h4>
                                </div>
                            </div>
                            <div class="swiper-container latest-post-slider-active">
                                <div class="">
                                    <div class="">
                                        <div class="latest-post-box">


                                            @foreach ($posts as $post )
                                            <div class="single-latest-post">
                                                <div class="latest-post-thum">
                                                    <a href="{{route('post',$post->slug)}}">
                                                        <img src="{{Voyager::image($post->image)}}" alt="" height="120">
                                                    </a>
                                                </div>
                                                <div class="latest-post-content">
                                                    <h6 class="title"><a href="{{route('post',$post->slug)}}">{{$post->title}}</a>
                                                    </h6>
                                                    <div class="latest-post-meta">
                                                        <span class="post-date">
                                                            <i class="icofont-ui-calendar"></i>
                                                            <a href="{{route('post',$post->slug)}}" class="text-dark">{{ $post->created_at->format('d-m-Y') }}</a>
                                                        </span>
                                                        <span>10 min read</span>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div> <!-- Blog Details Wrapper End -->



    </div>
</div>


@endsection