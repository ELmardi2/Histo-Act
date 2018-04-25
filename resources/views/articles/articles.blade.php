@extends('defaults.default')

@section('title', 'articles-page') <!--page title-->

<div class="bg-info text-white p-4 mb-3">
        <a href="{{url('/')}}" class=" btn btn-secondary">Histo-Act</a>
    <a href="{{url('/')}}" class=" btn btn-secondary">Home</a>
    <a href="{{url('/articles')}}" class=" btn btn-secondary">Articles</a>
    <a href="{{url('articles/create')}}" class=" btn btn-secondary">create an article</a>
</div>
@section('content') <!--start content section-->
<h1 class="text-center mt-5"> Welcome to articles  page!!!</h1>
@foreach ($articles as $article) <!--start foreach -->
<div class="card mt-4">
    <div class="card-header">
        <h3>
             <a href="{{route('articles.show', $article->id)}}">
                 {{$article->title}}
             </a>       
        </h3>
    </div>
</div>
@endforeach <!--End foreach -->
{{ $articles->links() }} <!-- the rest pages -->
@stop <!--End content section-->