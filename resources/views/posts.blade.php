@extends('layouts.app')
@section('title','Blogs' )
@section('social_media')
    <meta property="og:title" content="{{ setting('site.title') }}" />
    <meta property="og:description"content="{{ setting('site.description') }}" />
    <meta property="og:url" content="{{ route('posts') }}" />
@endsection
@section('css')
<style>
   .header-basic a,
        .header-basic .menu-link {
            color: var(--clr-white) !important;
        }
</style>
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
                        <div class="search sidebar-box">
                            <form class="search-form" action="">
                                <input type="hidden" name="category" value="{{request('category')}}">
                                <input class="search-input" type="search" name="search" placeholder="Search Posts..." value="{{request('search')}}">
                                <button class="search-btn" type="submit"><i class="fa fa-search icon"></i></button>
                            </form>
                        </div>
                        <div class="cats sidebar-box">
                            <h6 class="sidebar-box-title">
                                Categories:</h6>
                            <ul class="sidebar-list cats-list  ">
                                @foreach ($categories as $category)
                                    <li class="cat-item"><a class="cat-link" href="{{ route('posts', ['category' => $category->slug, 'search' => request('search')]) }}">{{ $category->name }}<span
                                                class="cat-count">{{ $category->posts->count() }}</span></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
