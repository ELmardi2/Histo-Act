@extends('defaults.default')

@section('title', 'articles-page') <!--page title-->

@section('content') <!--start content section-->
<h2 class="text-center mt-5"> Welcome to articles page!!!</h2>
@auth
<a href="{{url('/home')}}" class=" btn btn-primary"> Back</a>
@endauth
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
<div class="card">
    <div class="card-header">
            <h1>{{$article->title}}</h1>
    </div>
    <div class="card-body">
        <p>
            {{$article->details}}
        </p>
    </div>
</div>
<hr>
@if (!Auth::guest() && (Auth::user()->id == $article->user_id))
<a  href="{{route('articles.edit', $article->id)}}" class="btn btn-secondary"><i class="fa fa-edit"></i> Edit !</a>
    <form action="{{route('articles.destroy', $article->id)}}"  onsubmit="return confirm('Are You Sure that you want delete this article !?')" class="d-inline-block" action="{{route('articles.destroy', $article->id)}}" method="POST"> 
        @csrf <!--protect my form csrf -->
        @method('DELETE') 
        <button type="submit" class="btn btn-danger"> <i class="fa fa-close"></i> Delete</button>
     </form>
     @endif  
<div class="panel-body">
    <h4>Leave your comment</h4>
    <form action="#" >
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
