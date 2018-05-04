@extends('defaults.default')

<div class="bg-info text-white p-4 mb-3">
    <a href="{{url('/')}}" class=" btn btn-secondary">Histo-Act</a>
    <a href="{{url('/histories')}}" class=" btn btn-secondary">Histories</a>
    <a href="{{url('histories/create')}}" class=" btn btn-secondary">create a history</a>
</div>
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