@extends('defaults.default')
@section('title', 'show-history') <!--section page title -->

@section('content') <!--start content section -->
<a href="{{url('/histories')}}" class=" btn btn-primary"> Back</a>
<hr>
<div class="card">
    <div class="card-header">
        <h1>{{$history->title}}</h1>
    </div>
    <div class="card-body">
        <p>
            {{$history->details}}
        </p>
    </div>
</div>
<hr>
@if (!Auth::guest() && (Auth::user()->id == $history->user_id))
<a  href="{{route('histories.edit', $history->id)}}" class="btn btn-secondary">
    <i class="fa fa-edit"></i> Edit !
</a>
<form action="{{route('histories.destroy', $history->id)}}" method="POST" onsubmit="return confirm('Are You Sure that you want delete this article !?')" class="d-inline-block" action="{{route('histories.destroy', $history->id)}}"> 
    @csrf <!--protect my form csrf -->
    @method('DELETE') 
    <button type="submit" class="btn btn-danger"><i class="fa fa-close"></i> Delete</button>
</form> 
@endif

<div class="panel-body">
    <h4 class="text-center pt-2">Leave your comment</h4>
    <form action="#" >
        @csrf
        @method('POST')
        <div class="form-group">
                <textarea name="comment" id="comment" class="form-control" cols="5" rows="2"></textarea>
            </div>
            <div class="form-group">
            <button type="submit" class="btn btn-outline-primary"> Add Your comment</button>
            </div>
    </form>
</div>
@stop <!--end content section -->