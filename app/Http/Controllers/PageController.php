<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $services=Service::latest()->get();
       return view('welcome',compact('services'));
    }
    public function service($slug)
    {
       $service=Service::where('slug',$slug)->firstOrFail();
       $services=Service::limit(5)->get();
       return view('service',compact('service','services'));
    }

}
