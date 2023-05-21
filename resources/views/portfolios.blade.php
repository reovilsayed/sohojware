@extends('layouts.app')
@section('social_media')
    <meta property="og:title" content="{{ setting('site.title') }}" />
    <meta property="og:description"content="{{ setting('site.description') }}" />
    <meta property="og:url" content="{{ route('portfolios') }}" />
@endsection

@section('css')
<style>
    a,
   .menu-link {
       color: var(--clr-white) !important;
   }
</style>
@endsection
@section('content')
    <x-breadcrumb :title="'Portfolios'"/>
    <x-portfolio :portfolios="$portfolios" />
@endsection
