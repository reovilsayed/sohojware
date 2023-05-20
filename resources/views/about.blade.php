@extends('layouts.app')
@section('social_media')
    <meta property="og:title" content="{{ setting('site.title') }}" />
    <meta property="og:description"content="{{ setting('site.description') }}" />
    <meta property="og:url" content="{{ route('about') }}" />
@endsection

@section('css')

@endsection
@section('content')
<x-breadcrumb :title="'About Us'"/>
    <x-about />
@endsection
