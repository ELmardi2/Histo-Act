@extends('defaults.default')

<div class="bg-info text-white p-4 mb-3">
    <a href="{{url('/')}}" class=" btn btn-secondary">Histo-Act</a>
<a href="{{url('/')}}" class=" btn btn-secondary">Home</a>
<a href="{{url('/histories')}}" class=" btn btn-secondary">Histories</a>
<a href="{{url('histories/create')}}" class=" btn btn-secondary">create a history</a>
</div>
@section('content') <!--start content section-->
<h2 class="text-center mt-5"> Welcome to histories page!!!</h2>
@stop <!--End content section-->