@extends('layouts.app')

@section('title','Sohojware | '. $page->title )
@section('meta-description', $page->meta_description)
@section('meta-keywords', $page->meta_keywords)

@section('social_media')
<meta property="og:title" content="{{ $page->title}}" />
<meta property="og:description" content="{{$page->meta_description}}" />
<meta property="og:url" content="{{route('post',$page->slug)}}" />
<meta property="og:image" content="{{Voyager::image($page->image)}}" />
@endsection
@section('content')
<div class="blog blog-post ">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-10 mx-auto">

                <h2 class="post-title">{{ $page->title }}</h2>
                @if ($page->image)
                <div class="post-img-wrapper post-featured-area">
                    <img class="featured-img" loading="lazy" src="{{ Voyager::image($page->image) }}"
                        alt="{{ $page->title }}" title="{{ $page->title }}">
                </div>

                @endif
            </div>
            <div class="col-12 col-lg-10 mx-auto">
                <div class="post-main-area">
                    <div class="post-info">

                        <a class="info post-date" href="#">
                            <i class="fas fa-history icon">
                            </i>{{ $page->created_at->format('M d Y') }}</a>
                    </div>
                    <div class="post-content">
                        {!! $page->body !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
