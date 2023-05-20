@extends('layouts.app')
@section('social_media')
    <meta property="og:title" content="{{ setting('site.title') }}" />
    <meta property="og:description"content="{{ setting('site.description') }}" />
    <meta property="og:url" content="{{ route('services') }}" />
@endsection

@section('css')
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/service.css') }}"> --}}
@endsection
@section('content')
    <x-breadcrumb :title="'Services'"/>
    <x-services :services="$services" />
@endsection
