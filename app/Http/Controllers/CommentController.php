<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logo = Logo::all();
        $comment = Comment::where('approved', false)->get();
        // dd($comment->created_at);
        // $commentApproved = $comment->where('approved', true);
        $nbr = count($comment);
        return view('boComment', compact('comment', 'nbr', 'logo'));
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
        // dd($request);
        $postComment = explode('/', url()->previous());
        $store = new Comment;
        if (Auth::check()) {
            $store->name = Auth::user()->name;
            $store->mail = Auth::user()->email;
        } else {
            $store->name = $request->name;
            $store->mail = $request->mail;    
        }
        
        $store->message = $request->message;
        $store->post_id = $postComment[4];
        $store->approved = false;
        $store->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }

    public function commentValidate($id)
    {
        $update = Comment::find($id);
        $update->approved = 1;
        $update->save();
        return redirect()->back();
    }
}
