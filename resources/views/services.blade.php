@extends('layouts.app')
@section('title','Ensure the highest quality of services' )
@section('social_media')
    <meta property="og:title" content="{{ setting('site.title') }}" />
    <meta property="og:description"content="{{ setting('site.description') }}" />
    <meta property="og:url" content="{{ route('services') }}" />
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
    <x-breadcrumb :title="'Services'" />
    <x-services :services="$services" />
@endsection
