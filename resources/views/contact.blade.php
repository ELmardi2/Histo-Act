@extends('defaults.default')

<div class="bg-info text-white p-4 mb-3">
    <a href="{{url('/')}}" class=" btn btn-success"><span class="label label-default">Histo-Act</span></a>
<a href="{{url('/')}}" class=" btn btn-secondary">Home</a>
<a href="{{url('/about')}}" class=" btn btn-secondary">About</a>
<a href="{{url('/articles')}}" class=" btn btn-secondary">Articles</a>
<a href="{{url('/histories')}}" class=" btn btn-secondary">Histories</a>
<div class="d-inline-block float-right">
        <a href="#" class=" btn btn-secondary  ">Signins</a>
        <a href="#" class=" btn btn-secondary  mr-4">Signup</a>
    </div>
</div>
@section('content') <!--start content section-->
<h2 class="text-center mt-5"> Welcome to contact-us page!!!</h2>
@stop <!--End content section-->