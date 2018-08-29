@extends('defaults.default')

@section('content') <!--Start section content -->
<h2 class="text-center">Welcome To The main page of all posts</h2>
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
@if (count($posts) > 0)  <!--start posts count -->
    @foreach ($posts as $post )
        <div class="card">
            <div class="card-header">
                <h3>
                    {{$post->title}}
                </h3>
            </div>
            <div class="card-body">
                {{$post->detail}}  
                <hr>
                <span class="btn btn-info">
                    <i class="fa fa-calendar"></i>{{$post->created_at->diffForHumans()}}
                </span> 
                <span class="btn btn-success">
                    <i class="fa fa-user"></i>
                </span> 
            </div>
        </div>
    @endforeach
    {{ $posts->links() }} <!-- the rest pages --> 
    @else
    <div class="alert alert-info text-center">
         <strong>OH Sorry  </strong>There is No History To Show For The Moment !!!!!!!
    </div>
@endif<!--End if  posts count -->
@stop <!--End section content -->