@extends('layouts.app')

@section('content')
    <x-breadcrumb :title="'404 Error'" />
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-4">
                <div class="text-center">
                    <img src="{{asset('assets/404.gif')}}" alt="404"> <br>
                    <div class="card-footer"><a href="{{route('home')}}" class="btn btn-success">GO Back To Home</a></div>
                </div>
            </div>
        </div>
    </div>
@endsection
