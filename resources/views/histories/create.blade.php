@extends('defaults.default')

@section('title', 'create-histories') <!--page title-->

@section('content')<!--start content section-->
<h1 class="my-5 text-center">Add A History</h1>
@if ($errors->all())
<div class="alert-danger">
        @foreach ($errors->all() as $error)
        <li>
            {{$error}}
         </li> 
     @endforeach
</div>
@endif
<form action="#" method="POST">
    @csrf
<div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" id="title" class="form-control" placeholder="type your title here">
</div>
<div class="form-group">
    <label for="details">Details</label>
    <textarea name="details" id="details" class="form-control" cols="30" rows="10"></textarea>
</div>
<div class="form-group">
<button type="submit" class="btn btn-outline-primary"> Add A History</button>
</div>
</form>
@stop   <!--End content section-->