@extends('layouts.app')
@section('title', 'Sohojware | ' . $portfolio->title)
@section('meta-description', $portfolio->meta_description)
@section('meta-keywords', $portfolio->meta_keywords)
@section('social_media')
    <meta property="og:title" content="{{ $portfolio->title }}" />
    <meta property="og:description"content="{{ $portfolio->body }}" />
    <meta property="og:url" content="{{ route('portfolio', $portfolio->slug) }}" />
    <meta property="og:image" content="{{ Voyager::image($portfolio->image) }}" />
@endsection
@section('css')
    <style>
        a,
        .menu-link {
            color: var(--clr-white) !important;
        }
    </style>
@endsection
@section('content')
    <x-breadcrumb :title="$portfolio->title" />
    <section class="portfolio-single mega-section">
        <div class="container">
            <div class="featured-area">
                <div class="row">
                    <div class="col-12  mx-auto">
                        <div class="project-featured-img"><img class="featured-img " loading="lazy"
                                src="{{ Voyager::image($portfolio->image) }}" alt="featuerd image"></div>
                    </div>
                </div>
            </div>
            <div class="main-area">
                <div class="row">
                    <div class="col-12 col-lg-9  ">
                        <p>{!! $portfolio->body !!}</p>
                    </div>
                    <div class="col-12 col-lg-3  ">
                        <div class="info-area">
                            <div class="project-info">
                                <div class="row">
                                    <div class="col-6 col-lg-12">
                                        <div class="info">
                                            <h5 class="title"> client</h5>
                                            <p class="detail">{{ $portfolio->title }}</p><i
                                                class="fas fa-address-card icon"></i>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-12">
                                        <div class="info">
                                            <h5 class="title">category</h5>
                                            <p class="detail">Web Development</p><i class="fas fa-tasks icon"></i>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
