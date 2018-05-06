<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Article;
use App\History;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addComment(Request $request, Article $article)
    {
        $this->validate($request, [
            'content' => 'required',
        ]);
        $comment = new Comment;
        $comment->content = $request->content;
        $user_id = $request->user_id;
        $article_id = $request->article_id;
        $article->comments()->save(comments);


        //$comments = App\Article::all()->comments;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $comments = Article::findOrFail($request->article_id);

        Comment::create([
            'content' => $request->content,
            'user_id' => Auth::id(),
            'article_id' => $request->article_id,
        ]);
        $article->comments()->save(comments);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
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
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
