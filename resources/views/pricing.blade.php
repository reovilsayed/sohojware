@extends('layouts.app')
@section('social_media')
    <meta property="og:title" content="{{ setting('site.title') }}" />
    <meta property="og:description"content="{{ setting('site.description') }}" />
    <meta property="og:url" content="{{ route('pricing') }}" />
@endsection

@section('css')
@endsection
@section('content')
    <x-breadcrumb>
        {{ 'Pricing' }}
    </x-breadcrumb>
    <x-pricing />
@endsection
