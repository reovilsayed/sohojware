@extends('layouts.app')
@section('title', `Lets Builds`)
@section('social_media')
    <meta property="og:title" content="{{ setting('site.title') }}" />
    <meta property="og:description"content="{{ setting('site.description') }}" />
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
    <x-breadcrumb :title="'Lets Builds'" />

@endsection
