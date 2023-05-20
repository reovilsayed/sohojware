<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Models\Category;
use App\Models\Page;
use App\Models\Portfolio;
use App\Models\Post;
use App\Models\subscribe;

class PageController extends Controller
{
    public function home()
    {
        $services = Category::orderBy('order', 'asc')->get();
        $posts = Post::where('featured', 1)->where('status', 'PUBLISHED')->get();
        $clients = Client::all();
        $portfolios = Portfolio::latest()->limit(6)->get();
        return view('welcome', compact('services', 'posts', 'clients', 'portfolios'));
    }
    public function posts()
    {
        $posts = Post::latest()->where('status', 'PUBLISHED')->paginate(12);
        $categories = Category::get();
        return view('posts', compact('posts', 'categories'));
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
        $services = Category::orderBy('order', 'asc')->get();
        return view('services', compact('services',));
    }
    public function service($slug)
    {
        $service = Category::where('slug', $slug)->firstOrFail();
        $services = Category::whereNot('id', $service->id)->get();
        return view('service', compact('service', 'services'));
    }
    public function portfolios()
    {
        $clients = Client::all();
        $portfolios = Portfolio::latest()->get();
        return view('portfolios', compact('clients', 'portfolios'));
    }
    public function portfolio($slug)
    {
        $portfolio = Portfolio::where('slug', $slug)->firstOrFail();
        return view('single_portfolio', compact('portfolio'));
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
    public function page($slug)
    {
        $page = Page::where('slug', $slug)->where('status', 'ACTIVE')->first();
        return view('page', compact('page'));
    }
    public function sitemap()
    {
        $posts = Post::latest()->where('status', 'PUBLISHED')->get();
        $pages = Page::where('status', 'ACTIVE')->get();
        $services = Category::latest()->get();
        $portfolios = Portfolio::latest()->get();
        return response()->view('sitemap', [
            'posts' => $posts,
            'pages' => $pages,
            'services' => $services,
            'portfolios' => $portfolios,
        ])->header('Content-Type', 'text/xml');
    }
    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => ['required', 'unique:subscribes,email'],
        ], [
            'email.unique' => 'You already subscribed'
        ]);
        subscribe::create([
            "email" => $request->email,
        ]);
        return back()->with('success_msg', 'Thanks for your subscription');
    }
}