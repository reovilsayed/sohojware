@extends('layouts.app')
@section('title','Portfolios Let's Build Something Together' )
@section('social_media')
    <meta property="og:title" content="{{ setting('site.title') }}" />
    <meta property="og:description"content="{{ setting('site.description') }}" />
    <meta property="og:url" content="{{ route('portfolios') }}" />
@endsection

@section('css')
    <style>
        .header-basic a,
        .header-basic .menu-link {
            color: var(--clr-white) !important;
        }

        .display  {
            display: none
        }
    </style>
@endsection
@section('content')
    <x-breadcrumb :title="'Portfolios'" />
    <x-portfolio :portfolios="$portfolios" />
@endsection
