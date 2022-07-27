<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Page;
use App\Models\Post;
use App\Models\Setting;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page = Page::where('status', '1')->where('id', '1')->first();
        $salon = Page::where('status', '1')->skip(1)->limit(8)->get();

        $setting = Setting::where('id', '1')->first();
        return view('front.home')->with(compact('page', 'salon', 'setting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
