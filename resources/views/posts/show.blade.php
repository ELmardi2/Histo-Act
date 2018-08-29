@extends('defaults.default')

@section('content') <!--Start section content -->
<h2>Welcome To The main page of all posts</h2>
@if (count($posts) > 0)  <!--start posts count -->
    @foreach ($post as $post )
        <div class="card">
            <div class="card-header">
                <h3>
                    {{$post->title}}
                </h3>
            </div>
        </div>
    @endforeach
    @else
    <div class="alert alert-info text-center">
         <strong>OH Sorry  </strong>There is No History To Show For The Moment !!!!!!!
    </div>
@endif<!--End if  posts count -->
@stop <!--End section content -->