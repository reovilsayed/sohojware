@extends('layouts.app')
@section('title','Frequently Asked Questions ' )
@section('social_media')
    <meta property="og:title" content="{{ setting('site.title') }}" />
    <meta property="og:description"content="{{ setting('site.description') }}" />
    <meta property="og:url" content="{{ route('faq') }}" />
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
    <x-breadcrumb :title="'FAQS'"/>
    <x-faq />
@endsection
