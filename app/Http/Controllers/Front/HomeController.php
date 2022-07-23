<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.home');
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
