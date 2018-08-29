
@extends('defaults.default')

@section('title', 'create-comment')

@section('content')
<h1 class="my-5 text-center">Add An Article</h1>
@if ($errors->all())
<div class="alert-danger">
        @foreach ($errors->all() as $error)
        <li>
            {{$error}}
         </li> 
     @endforeach
</div>
@endif
@if (session()->has('message'))
    <div class="alert alert-success">
        {{session()->get('message')}}
    </div>
@endif
<div class="card">
    <div class="card-header">Leave your comment</div>
    <div class="card-body">
    <form action="/comments/{article_id}/articles" method="POST" >
            @csrf
            <div class="form-group">
                    <textarea name="content" id="content" class="form-control" cols="5" rows="2"></textarea>
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-primary "> Add comment</button>
                </div>
        </form>
    </div>
</div>
<!-- End Comment form-->
@stop