@extends('defaults.default')

@section('title', 'histories') <!--title of the page -->
 
<!-- what is  goining to show in this page as content-->

<div class="bg-info text-white p-4 mb-3">
    <a href="{{url('/')}}" class=" btn btn-secondary">Histo-Act</a>
<a href="{{url('/histories')}}" class=" btn btn-secondary">Histories</a>
<a href="{{url('histories/create')}}" class=" btn btn-secondary">create a history</a>
</div>
@section('content') <!--start content section-->
<h2 class="text-center mt-5"> Welcome to all histories page!!!</h2>
@if (count($histories) > 0)

@foreach ($histories as $history ) <!--start foreach -->
  <div class="card mt-4">
      <div class="card-body">
          <h3>
              <a href="{{route('histories.show', $history->id)}}">
                <!--title of the history -->
                  {{$history->title}}
              </a>
              <a  href="{{route('histories.edit', $history->id)}}" class="btn btn-secondary">Edit !</a>
              <form action="{{route('histories.destroy', $history->id)}}" method="POST" onsubmit="return confirm('Are You Sure that you want delete this article !?')" class="d-inline-block" action="{{route('histories.destroy', $history->id)}}"> 
                  @csrf <!--protect my form csrf -->
                  @method('DELETE') 
                  <button type="submit" class="btn btn-danger">Delete</button>
              </form> 
          </h3>
          <small>Written on {{$history->created_at}}</small>
      </div>
      </div>  
@endforeach <!--endforeach -->

<!--the rest of the histories -->
{{$histories->links()}}

@else
<div class="alert alert-info text-center"> <strong>OH Sorry There is No History To Show For The Moment !!!!!!!</strong> </div>
@endif <!-- End If -->

@endsection <!--end content section -->