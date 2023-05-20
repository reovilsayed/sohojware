@extends('layouts.app')
@section('social_media')
    <meta property="og:title" content="{{ setting('site.title') }}" />
    <meta property="og:description"content="{{ setting('site.description') }}" />
    <meta property="og:url" content="{{ route('posts') }}" />
@endsection
@section('content')
<x-breadcrumb :title="'Posts'"/>
<section class="blog blog-home mega-section" id="blog">
        <div class="container ">
            <div class="row ">
                <div class="col-12 col-lg-8 ">
                    <div class="posts-grid">
                        <div class="row">
                            <x-posts :posts="$posts" />
                            <div class="col-12">
                                {{$posts->links('pagination.sohojware')}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="blog-sidebar">
                        <!--search box-->
                        <div class="search sidebar-box">
                            <form class="search-form" action="#">
                                <input class="search-input" type="search" name="seach_form" placeholder="Search Posts...">
                                <button class="search-btn" type="submit"><i class="bi bi-search icon"></i></button>
                            </form>
                        </div>
                        <!--categories box-->
                        <div class="cats sidebar-box">
                            <h6 class="sidebar-box-title">
                                Categories:</h6>
                            <ul class="sidebar-list cats-list  ">

                                @foreach ($categories as $category)
                                    <li class="cat-item"><a class="cat-link" href="#">{{ $category->name }}<span
                                                class="cat-count">{{ $category->posts->count() }}</span></a></li>
                                @endforeach

                            </ul>
                        </div>
                        <!--Recent posts  -->
                        <div class="recent-posts sidebar-box">
                            <h6 class="sidebar-box-title">
                                recent posts: </h6>
                            <ul class="sidebar-list r-posts-list ">
                                @foreach ($posts as $post)
                                    <li class="r-post-item"><a class="r-post-link" href="#">
                                            <div class="r-post-img-wrapper"><img class="r-post-img" loading="lazy"
                                                    src="{{ Voyager::image($post->image) }}" alt="recent post image">
                                            </div>
                                            <div class="content">
                                                <h6 class="r-post-title">{{ $post->title }}</h6><span
                                                    class="r-post-date">{{ $post->created_at->format('M, d Y') }}</span>
                                            </div>
                                        </a></li>
                                @endforeach

                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="blog blog-home mega-section  " id="blog">
        <div class="container ">
            <div class="sec-heading">
                <h2 class="title wow fadeInUp" data-wow-delay=".4s">latest <span class='hollow-text'>news</span></h2>
            </div>
        </div>
        <div class="container">
            <x-posts :posts="$posts" />
        </div>
        </div>
    </section> --}}
@endsection
