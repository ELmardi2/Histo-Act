@extends('defaults.default')

@auth
<form action="{{ route('logout') }}"  method="POST" class="d-inline-block float-right">
    @csrf
    <button class=" btn btn-secondary  ">logout</button>
</form>
@else
<a href="{{route('login')}}">login</a>
@endauth
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
