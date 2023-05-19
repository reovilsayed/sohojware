@extends('layouts.app')
@section('social_media')
    <meta property="og:title" content="{{ setting('site.title') }}" />
    <meta property="og:description"content="{{ setting('site.description') }}" />
    <meta property="og:url" content="{{ route('portfolios') }}" />
@endsection

@section('css')
  
@endsection
@section('content')
<x-breadcrumb >
    {{'Portfolios'}}
    </x-breadcrumb>
    <x-portfolio :portfolios="$portfolios" />
    <!-- End  portfolio Section-->
    <!-- Start  testimonials Section-->
   
    <!-- End  testimonials Section-->
    <!-- Start  our-clients Section-->
    <x-clients :clients="$clients" />
@endsection
