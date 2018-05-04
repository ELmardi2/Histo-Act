@extends('defaults.default')

@section('title', 'articles-page') <!--page title-->

<div class="bg-info text-white p-4 mb-3">
    <a href="{{url('/')}}" class=" btn btn-secondary">Histo-Act</a>
    <a href="{{url('/articles')}}" class=" btn btn-secondary">Articles</a>
    <a href="{{url('articles/create')}}" class=" btn btn-secondary">create an article</a>
</div>
@section('content') <!--start content section-->
<h2 class="text-center mt-5"> Welcome to articles page!!!</h2>
<div class="card">
    <div class="card-header">
            {{$article->title}}
    </div>
    <div class="card-body">
        <p>
            {{$article->details}}
        </p>
    </div>
</div>
<hr>

<hr>
<div class="panel-body">
    <h4>Leave your comment</h4>
    <form action="comments/{article}/addComment" >
        @csrf
        @method('POST')
        <div class="form-group">
                <textarea name="comment" id="contente" class="form-control" cols="5" rows="2"></textarea>
            </div>
            <div class="form-group">
            <button type="submit" class="btn btn-outline-primary"> Add comment</button>
            </div>
    </form>
</div>
@stop <!--End content section-->
