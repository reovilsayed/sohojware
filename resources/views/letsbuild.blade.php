@extends('layouts.app')
@section('title', `Lets Builds`)
@section('social_media')
    <meta property="og:title" content="{{ setting('site.title') }}" />
    <meta property="og:description"content="{{ setting('site.description') }}" />
@endsection
@section('content')
    <x-breadcrumb :title="'Lets Builds'" />
    <x-letsbuild/>
@endsection
