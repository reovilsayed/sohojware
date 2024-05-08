@extends('layouts.app')
@section('title','About us-Trusted By Worldwide Clients' )
@section('social_media')
    <meta property="og:title" content="{{ setting('site.title') }}" />
    <meta property="og:description"content="{{ setting('site.description') }}" />
    <meta property="og:url" content="{{ route('about') }}" />
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
<x-breadcrumb :title="About Us"/>
    <x-about />
@endsection
