<?php

namespace App\Http\Controllers;

use App\Category;
use App\Images;
use App\News;
use App\Product;
use App\Service;
use App\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $category = Category::latest()->get();
        $news = News::latest()->get();
        $servicedown = Service::latest()->limit(3)->get();
        $images = Images::latest()->limit(6)->get();

        return view('user.home.home',[
            'category' =>$category,
            'news' => $news,
            'servicedown'=>$servicedown,
            'images' => $images,
        ]);
    }
    public function about()
    {
        $about = Team::all();
        return view('user.about.about',[
            'category' => $about,
        ]);
    }
    public function contact()
    {
        return view('user.contact.contact');
    }
    public function service()
    {
        $service = Service::latest()->limit(6)->get();
        return view('user.service.service',[
            'service' => $service,
        ]);
    }
    public function work()
    {
        $product = Product::all();
        return view('user.work.work',[
            'product' => $product
        ]);
    }
    public function blog()
    {
        $news = News::latest()->limit(2)->get();

        return view('user.blog.blog',[
            'news' => $news,

        ]);
    }

    public function newsClassic()
    {
        $news = News::latest()->limit(3)->get();
        return view('user.news.newsclassic',[
            'news' => $news,
        ]);
    }

    public function newsDetails($id)
    {
        $news = News::find($id);
        $newsall = News::latest()->get();
        return view('user.news.newsdetails',[
            'news' => $news,
            'newsall' => $newsall,
        ]);
    }
    public function userLogin()
    {
        return view('user.auth.login');
    }
    public function adminIndex()
    {
        return view('admin.home.home');
    }
}
