@extends('defaults.default')

@section('title', 'articles-page') <!--page title-->

<div class="bg-info text-white p-4 mb-3">
    <a href="{{url('/')}}" class=" btn btn-secondary">Histo-Act</a>
    <a href="{{url('/articles')}}" class=" btn btn-secondary">Articles</a>
    <a href="{{url('articles/create')}}" class=" btn btn-secondary">create an article</a>
</div>
@section('content') <!--start content section-->
<h2 class="text-center mt-5"> Welcome to articles  page!!!</h2>
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
@stop <!--End content section-->
