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
@if (count($articles) > 0)
@foreach ($articles as $article) <!--start foreach -->
<div class="card mt-4">
    <div class="card-header">
        <h3>
             <a href="{{route('articles.show', $article->id)}}">
                 {{$article->title}}
             </a>
             <a  href="{{route('articles.edit', $article->id)}}" class="btn btn-secondary">Edit !</a>
            <form action="{{route('articles.destroy', $article->id)}}" method="POST"  onsubmit="return confirm('Are You Sure that you want delete this article !?')" class="d-inline-block" action="{{route('articles.destroy', $article->id)}}"> 
                @csrf <!--protect my form csrf -->
                @method('DELETE') 
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>     
        </h3>
        <hr>
        <small>{{$article->created_at->diffForHumans()}}</small>
    </div>
</div>
@endforeach <!--End foreach -->
{{ $articles->links() }} <!-- the rest pages --> 

@else
<div class="alert alert-info text-center"> <strong>OH Sorry There is No Articles To Show For The Moment !!!!!!!</strong> </div>
@endif <!-- End If -->

@stop <!--End content section-->
