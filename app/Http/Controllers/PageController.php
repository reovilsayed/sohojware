<?php

namespace App\Http\Controllers;

use App\Client;
use App\Models\Category;
use App\Models\Portfolio;
use App\Models\Post;
use App\Service;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $services = Category::latest()->get();
        $posts = Post::where('featured', 1)->where('status', 'PUBLISHED')->get();
        $clients = Client::all();
        $portfolios = Portfolio::latest()->limit(6)->get();
        return view('welcome', compact('services', 'posts', 'clients', 'portfolios'));
    }
    public function posts()
    {
        $posts = Post::latest()->where('status','PUBLISHED')->paginate(12);
        $categories = Category::get();
        return view('posts', compact('posts', 'categories'));
    }
    public function service($slug)
    {
        $service = Category::where('slug', $slug)->firstOrFail();
        $services = Category::limit(5)->get();
        return view('service', compact('service', 'services'));
    }
    public function portfolios()
    {
        $clients = Client::all();
        $portfolios = Portfolio::latest()->limit(9)->get();
        return view('portfolios', compact('clients', 'portfolios'));
    }
    public function portfolio($slug)
    {
        $portfolio = Portfolio::where('slug', $slug)->firstOrFail();
        return view('single_portfolio', compact('portfolio'));
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
        return view('services', compact('services',));
    }
    public function about()
    {
        return view('about');
    }
    public function pricing()
    {
        return view('pricing');
    }
    public function faq()
    {
        return view('faq');
    }
}
