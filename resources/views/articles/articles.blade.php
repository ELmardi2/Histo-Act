@extends('defaults.default')

@section('title', 'articles-page') <!--page title-->

<div class="bg-info text-white p-4 mb-3">
        <a href="{{url('/')}}" class=" btn btn-secondary">Histo-Act</a>
    <a href="{{url('/articles')}}" class=" btn btn-secondary">Articles</a>
    <a href="{{url('articles/create')}}" class=" btn btn-secondary">create an article</a>
    <form action="{{ route('logout') }}" class="d-inline-block float-right">
        <button class=" btn btn-secondary  ">logout</button>
    </form>
</div>
@section('content') <!--start content section-->
<h1 class="text-center mt-5"> Welcome to articles  page!!!</h1>
@if (session()->has('message'))
    <div class="alert alert-success">
        {{session()->get('message')}}
    </div>
@endif
@if (session()->has('error'))
    <div class="alert alert-danger">
        {{session()->get('error')}}
    </div>
@endif
@if (count($articles) > 0)
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

@else
<p>Oh sorry there is no articles to show right now!!!</p>
@endif <!-- End If -->

@stop <!--End content section-->
