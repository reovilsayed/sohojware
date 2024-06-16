<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Models\Category;
use App\Models\Member;
use App\Models\Page;
use App\Models\Portfolio;
use App\Models\Post;
use App\Models\subscribe;
use App\Models\User;

class PageController extends Controller
{
    public function home()
    {
        $services = Category::orderBy('order', 'asc')->get();
        $posts = Post::latest()->limit(4)->where('status', 'PUBLISHED')->get();
        $clients = Client::all();
        $portfolios = Portfolio::latest()->limit(6)->where('status', 1)->get();
        return view('welcome', compact('services', 'posts', 'clients', 'portfolios'));
    }
    public function posts()
    {
        $posts = Post::latest()
            ->where('status', 'PUBLISHED')
            ->filter(request(['search', 'category']))
            ->paginate(12);
        $categories = Category::get();
        return view('posts', compact('posts', 'categories'));
    }
    public function post($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $related_posts = Post::where('category_id', $post->category_id)
                             ->where('id', '!=', $post->id)
                             ->orderBy('created_at', 'desc')
                             ->where('status', 'PUBLISHED')
                             ->latest()
                             ->take(4)
                             ->get();
        return view('single_post', compact('post', 'related_posts'));
    }
    public function posttoposts($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return redirect(route('post',$post->slug));
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
        $portfolios = Portfolio::latest()->where('status', 1)->get();
        return view('portfolios', compact('clients', 'portfolios'));
    }
    public function ourTeam()
    {
        $ourTeams = Member::orderBy('position', 'asc')->get();

        return view('team', compact('ourTeams'));
    }
    public function portfolio($slug)
    {
        $portfolio = Portfolio::where('slug', $slug)->where('status', 1)->firstOrFail();
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
    public function snapshopPrivacy()
    {
        return view('snapshopPrivacy');
    }
    public function page($slug)
    {
        $page = Page::where('slug', $slug)->where('status', 'ACTIVE')->firstOrFail();
        return view('page', compact('page'));
    }
    public function sitemap()
    {
        $posts = Post::latest()->where('status', 'PUBLISHED')->get();
        $pages = Page::where('status', 'ACTIVE')->get();
        $services = Category::latest()->get();
        $portfolios = Portfolio::latest()->where('status', 1)->get();
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
    public function letsBuild(){
        return view('letsbuild');
    }
    public function single_view(Member $member){

        return view('single_view',compact('member'));
    }
  
}
