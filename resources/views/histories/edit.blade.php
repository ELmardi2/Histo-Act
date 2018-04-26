@extends('defaults.default')

@section('title', 'create-history')

@section('content') <!--Start content section-->
<h1 class="my-5 text-center">Update The History</h1>
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
<form action="{{route('histories.update', $history->id)}}" method="POST">
    @csrf
    @method('put')
<div class="form-group">
    <label for="title">Title</label>
<input type="text" name="title"  id="title" class="form-control" value="{{$history->title}}">
</div>
<div class="form-group">
    <label for="details">Details</label>
    <textarea name="details"  id="details" class="form-control" cols="30" rows="10">{{$history->details}}</textarea>
</div>
<div class="form-group">
    <button type="submit" class="btn btn-outline-primary"> Update The History</button>
</div>
</form>
@stop <!--End content section-->