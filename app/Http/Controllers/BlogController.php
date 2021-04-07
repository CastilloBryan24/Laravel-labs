<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Footer;
use App\Models\Logo;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logo = Logo::all();
        $footer = Footer::all();
        $categories = Category::all();
        $tags = Tag::all();
        $users = User::all();
        $posts = Post::orderBy('id', 'desc')->paginate(3);
        $comment = Comment::where('approved', true)->get();

        return view('blog', compact('logo', 'comment', 'users', 'footer', 'categories', 'tags', 'posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function backoffice()
    {
        $logo = Logo::all();
        $blog = Blog::all();
        return view('boBlog', compact('blog', 'logo'));
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
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Post::find($id);
        $categories = Category::all();

        $logo = Logo::all();
        $footer = Footer::all();
        $tags = Tag::all();
        $users = User::all();
        $posts = Post::all();
        $comment = Comment::where([['post_id', $show->id], ['approved', true]])
        ->orderBy('id', 'desc')
        ->get();
        // dd($comment->created_at);
        // $commentApproved = $comment->where('approved', true);
        $nbr = count($comment);

        return view('blogPost', compact('show', 'categories', 'logo', 'footer', 'tags', 'users', 'posts', 'comment', 'nbr'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
