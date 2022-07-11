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
}
