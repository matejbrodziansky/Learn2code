<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{

     /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
    }



    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        

        $request->validate([
            'text' => 'required',
            'post_id' => 'required|integer|exists:posts,id',
        ]);

        $comment = auth()->user()->comments()->create(
            $request->all()
        );

        return redirect('/post/'. $comment->post->slug. '#comments')
            ->with('flash', 'komentár bol pridaný');
        
    }

    /**
     * Display the specified resource.
     *
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, Comment $comment)
    {
        $this->authorize('update', $comment);
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy(Comment $comment)
    {
        $this->authorize('update', $comment);

        $comment->delete();
 
    }
}
