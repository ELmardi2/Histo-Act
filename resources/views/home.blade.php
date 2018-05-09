@extends('defaults.default')



<div class="bg-info text-white p-4 mb-3">
    <a href="{{url('/')}}" class=" btn btn-success"><span class="label label-default">Histo-Act</span></a>
    <a href="{{url('/')}}" class=" btn btn-secondary">Home</a>
    <a href="{{url('/about')}}" class=" btn btn-secondary">About</a>
    <a href="{{url('/articles')}}" class=" btn btn-secondary">Articles</a>
    <a href="{{url('/histories')}}" class=" btn btn-secondary">Histories</a>
    <a href="{{url('/contact')}}" class=" btn btn-secondary">Contact-us</a>

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
                <div class="card-header">Profil</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3> Welcome  To Histo-Act</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
