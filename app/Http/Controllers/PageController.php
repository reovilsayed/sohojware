<?php

namespace App\Http\Controllers;

use App\Client;
use App\Models\Category;
use App\Service;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class PageController extends Controller
{
    public function home()
    {
        $services = Category::latest()->get();
        $posts = Post::where('featured', 1)->where('status', 'PUBLISHED')->get();
        $clients = Client::all();
        return view('welcome', compact('services', 'posts', 'clients'));
    }
    public function posts()
    {
        $posts = Post::latest()->paginate(12);
        return view('posts', compact('posts'));
    }
    public function service($slug)
    {
        $service = Category::where('slug', $slug)->firstOrFail();
        $services = Category::limit(5)->get();
        return view('service', compact('service', 'services'));
    }
    public function post($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $shareComponent = \Share::page(
            route('post', $slug),
            'Your share text comes here',
        )
            ->facebook()
            ->twitter()
            ->linkedin()
            ->telegram()
            ->whatsapp()
            ->reddit();
        return view('single_post', compact('post', 'shareComponent'));
    }
    public function services()
    {
        $services = Category::latest()->get();
        return view('services', compact('services'));
    }
}