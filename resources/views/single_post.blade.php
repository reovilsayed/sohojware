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
        <div class="blog-details-wrapper section-space--ptb_80">
            <div class="container ">
                <div class="row row--17 justify-content-center">
                    <div class="blog-details-col-8 mt-5">
                        <div class="blog-details-post-wrap">
                            <div class="blog-details-thum">
                                <img src="{{Voyager::image($post->image)}}" alt="sohojware" title="{{$post->title}}">
                            </div>
                            <div class="blog-details-post-content">
                                <div class="blog-details-meta-box">
                                    <div class="post-mid-side mb-2">
                                        <span class="post-meta-left-side">
                                            <span class="post-date">
                                                <i class="icofont-ui-calendar"></i>
                                                <a href="#">{{ $post->created_at->format('M d Y') }} </a>
                                            </span>
                                        </span>

                                    </div>
                                </div>
                                <h3 class="following-blog-post-title text-white">
                                    <a href="#">{{$post->title}}
                                    </a>
                                </h3>
                                <div class="post-details-text">
                                    {!! $post->body !!}
                                    <div class="blog-details-tag-and-share-area">
                                        <ul class="social-share-area ">
                                            {!! $shareComponent !!}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
