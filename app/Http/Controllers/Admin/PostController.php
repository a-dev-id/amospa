<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Page;
use App\Models\PostImage;
use Illuminate\Support\Str;

class PostController extends Controller
{

    public function generatePostUid()
    {
        do {
            $post_uid = random_int(1000, 9999);
        } while (Post::where("post_uid", "=", $post_uid)->first());

        return $post_uid;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.post.index')->with(compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pages = Page::all();
        return view('admin.post.create')->with(compact('pages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (empty($request->file('banner_image'))) {
            $banner_image = null;
        } else {
            $banner_image = $request->file('banner_image')->store('post/banner', 'public');
        }

        $post_uid = $this->generatePostUid();

        Post::create([
            'post_uid' => $post_uid,
            'page_id' => $request->page_id,
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'description' => $request->description,
            'excerpt' => $request->excerpt,
            'banner_image' => $banner_image,
            'button_title' => $request->button_title,
            'button_url' => $request->button_url,
            'status' => $request->status,
        ]);

        foreach ($request->file('post_images') as $post_images) {
            $pi = new PostImage;
            $image = $post_images->store('post/cover', 'public');
            $pi->image = $image;
            $pi->post_uid = $post_uid;
            $pi->save();
        }

        return redirect()->route('post.index')->with('message', $request->title . ' created Successfully');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $pages = Page::all();
        $post = Post::find($id);
        $post_images = PostImage::where('post_uid', $post->uid)->get();
        return view('admin.post.edit')->with(compact('post', 'pages', 'post_images'));
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
        if (empty($request->file('banner_image'))) {
            $banner_image = $request->old_banner_image;
        } else {
            $banner_image = $request->file('banner_image')->store('post/banner', 'public');
        }

        $p = Post::find($id);

        $p->title = $request->title;
        $p->slug = Str::slug($request->title);
        $p->description = $request->description;
        $p->excerpt = $request->excerpt;
        $p->banner_image = $banner_image;
        $p->button_title = $request->button_title;
        $p->button_url = $request->button_url;
        $p->status = $request->status;

        $p->save();

        foreach ($request->file('post_images') as $post_images) {
            $post_images = $request->file('post_images')->store('post/cover', 'public');
            PostImage::create([
                'post_uid' => $p->post_uid,
                'image' => $post_images,
            ]);
        }

        return redirect()->route('post.index')->with('message', $request->title . ' edited Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $p = Post::find($id);
        $p->delete();
        return redirect()->route('post.index')->with('message', $p->title . ' deleted Successfully');
    }
}
