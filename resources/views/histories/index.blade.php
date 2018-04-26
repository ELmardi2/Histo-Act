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
@foreach ($histories as $history ) <!--start foreach -->
  <div class="card mt-4">
      <div class="card-body">
          <h3>
              <a href="{{route('histories.show', $history->id)}}">
                <!--title of the history -->
                  {{$history->title}}
              </a>
          </h3>
      </div>
      </div>  
@endforeach <!--endforeach -->

<!--the rest of the histories -->
{{$histories->links()}}

@endsection <!--end content section -->