<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Comment;
use App\Article;
use App\User;
class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Article  $article_id)
    {
        $this->validate($request,[
            'content' => 'required | min:10 | max:350'
        ]);
        
        //$article = Article::where('article_id', $article_id)->firstOrFail();
        
        $article = Article::findOrFail($article_id);

        $userId = Auth::id();

        $comment = new Comment();
        $comment->content = $request->content;
        $comment->article()->associate($article);
        $userId = Auth::user_id();
        $comment->article_id = $article_id;
        $comment->save();
       
         session()->flash('message', 'your comment successfully added');
        return redirect()->route('articles.show', $article->id);
        
        //return redirect()->route('articles.show', $article->slug);
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
