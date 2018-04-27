@extends('defaults.default')



<div class="bg-info text-white p-4 mb-3">
    <a href="{{url('/')}}" class=" btn btn-secondary">Histo-Act</a>
<a href="{{url('/articles')}}" class=" btn btn-secondary">Articles</a>
<a href="{{url('articles/create')}}" class=" btn btn-secondary">create an article</a>
@auth
<form action="{{ route('logout') }}"  method="POST" class="d-inline-block float-right">
    @csrf
    <button class=" btn btn-secondary  ">logout</button>
</form>
@else
<a href="{{route('login')}}">login</a>
@endauth
</div>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
