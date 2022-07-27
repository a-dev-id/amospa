<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Post;
use App\Models\Setting;
use App\Models\PostImage;

class HomeController extends Controller
{
    public function index()
    {
        $page = Page::where('status', '1')->where('id', '1')->first();
        $salon = Page::where('status', '1')->skip(1)->limit(8)->get();

        $setting = Setting::where('id', '1')->first();
        return view('front.home')->with(compact('page', 'salon', 'setting'));
    }

    public function home_detail($slug)
    {
        $page = Page::where('status', '1')->where('slug', $slug)->first();
        if (empty($page->banner_image)) {
            return abort(404);
        } elseif (!$page->slug == $slug) {
            return abort(404);
        } else {
            $page = Page::where('status', '1')->where('slug', $slug)->first();
            $posts = Post::where('status', '1')->where('page_id', $page->id)->get();

            $setting = Setting::where('id', '1')->first();
            return view('front.home-detail')->with(compact('posts', 'page', 'setting'));
        }
    }

    public function amo_cafe()
    {
        return view('front.amo-cafe');
    }

    public function drinks_menu()
    {
        return view('front.drinks-menu');
    }

    public function food_menu()
    {
        return view('front.food-menu');
    }

    public function nails()
    {
        return view('front.nails');
    }

    public function groups_mobile()
    {
        return view('front.groups-mobile');
    }

    public function promotion()
    {
        return view('front.promotion');
    }

    public function review()
    {
        return view('front.review');
    }

    public function gallery()
    {
        return view('front.gallery');
    }

    public function news_informations()
    {
        return view('front.news-informations');
    }

    public function about()
    {
        return view('front.about');
    }

    public function contact()
    {
        return view('front.contact');
    }
}
