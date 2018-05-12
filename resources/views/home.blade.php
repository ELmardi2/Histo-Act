@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">Profil</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3>
                        Welcome <strong>{{ Auth::user()->name }}</strong> To Histo-Act
                    </h3>
                        <h4>Your Articles</h4>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>create</th>
                                    <th>edit</th>
                                    <th>delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach ($articles as $article) <!--start foreach -->
                                    <tr>
                                    <td>{{$article->title}}</td>
                                    <td>{{$article->created_at->diffForHumans()}}</td>
                                    <td>
                                            <a  href="{{route('articles.edit', $article->id)}}" class="btn btn-secondary">
                                                <i class="fa fa-edit"></i> Edit !
                                            </a> 
                                    </td>
                                    <td>
                                      <form action="{{route('articles.destroy', $article->id)}}"  onsubmit="return confirm('Are You Sure that you want delete this article !?')" class="d-inline-block" action="{{route('articles.destroy', $article->id)}}" method="POST"> 
                                         @csrf <!--protect my form csrf -->
                                            @method('DELETE') 
                                            <button type="submit" class="btn btn-danger"><i class="fa fa-close"></i> Delete</button>
                                     </form>
                                    </td>
                                    </tr>
                                    @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
        <div class="col-md-5">
                <div class="card">
                    <div class="card-header">Profil</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h3>
                            Welcome <strong>{{ Auth::user()->name }}</strong> To Histo-Act
                        </h3>
                            <h4>Your histories</h4>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>create</th>
                                        <th>edit</th>
                                        <th>delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach ($histories as $history) <!--start foreach -->
                                        <tr>
                                        <td>{{$history->title}}</td>
                                        <td>{{$history->created_at->diffForHumans()}}</td>
                                        <td>
                                                <a  href="{{route('histories.edit', $history->id)}}" class="btn btn-secondary">
                                                    <i class="fa fa-edit"></i> Edit !
                                                </a> 
                                        </td>
                                        <td>
                                          <form action="{{route('histories.destroy', $history->id)}}"  onsubmit="return confirm('Are You Sure that you want delete this history !?')"
                                             class="d-inline-block" action="{{route('histories.destroy', $history->id)}}" method="POST"> 
                                             @csrf <!--protect my form csrf -->
                                                @method('DELETE') 
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-close"></i> Delete</button>
                                         </form>
                                        </td>
                                        </tr>
                                        @endforeach
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection
