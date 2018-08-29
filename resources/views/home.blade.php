@extends('defaults.default')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <div class="card">
                    <div class="card-header">
                            <h4 class="pull-left d-inline-block">Profil</h4>
                            <h4 class="d-inline-block pull-right btn btn-default btn-sm">
                                    <a href="/articles/create">
                                        <i class="fa fa-plus"></i> New Article
                                        </a>
                            </h4>
                        </div>
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
                                    @if (count($articles) > 0) <!--start if articles count -->
                                    @foreach ($articles as $article) <!--start foreach -->
                                    <tr>
                                    <td>{{$article->title}}</td>
                                    <td>{{$article->created_at->diffForHumans()}}</td>
                                    <td>
                                            <a  href="{{route('articles.edit', $article->id)}}" class="btn btn-secondary btn-sm">
                                                <i class="fa fa-edit"></i> Edit !
                                            </a> 
                                    </td>
                                    <td>
                                      <form action="{{route('articles.destroy', $article->id)}}"  onsubmit="return confirm('Are You Sure that you want delete this article !?')" class="d-inline-block" action="{{route('articles.destroy', $article->id)}}" method="POST"> 
                                         @csrf <!--protect my form csrf -->
                                            @method('DELETE') 
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-close"></i> Delete</button>
                                     </form>
                                    </td>
                                    </tr>
                                    @endforeach<!--End foreach -->
                                    @else
                                    <div class="alert alert-info text-center"> <strong>OH Sorry There is No Articles To Show For The Moment !!!!!!!</strong> </div>
                                    @endif <!-- End If  articles count-->
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
        <div class="col-md-5">
                <div class="card">
                    <div class="card-header">
                        <h4 class="d-inline-block">Profil</h4>
                        <h4 class="d-inline-block pull-right btn btn-default btn-sm">
                                <a href="/histories/create">
                                    <i class="fa fa-plus"></i> New History
                                    </a>
                        </h4>
                    </div>
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
                                        @if (count($histories) > 0)  <!--start history count -->
                                        @foreach ($histories as $history) <!--start foreach -->
                                        <tr>
                                        <td>{{$history->title}}</td>
                                        <td>{{$history->created_at->diffForHumans()}}</td>
                                        <td>
                                                <a  href="{{route('histories.edit', $history->id)}}" class="btn btn-secondary btn-sm">
                                                    <i class="fa fa-edit"></i> Edit !
                                                </a> 
                                        </td>
                                        <td>
                                          <form action="{{route('histories.destroy', $history->id)}}"  onsubmit="return confirm('Are You Sure that you want delete this history !?')"
                                             class="d-inline-block" action="{{route('histories.destroy', $history->id)}}" method="POST"> 
                                             @csrf <!--protect my form csrf -->
                                                @method('DELETE') 
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-close"></i> Delete</button>
                                         </form>
                                        </td>
                                        </tr>
                                        @endforeach
                                        <!--the rest of the histories -->

                                    @else
                                    <div class="alert alert-info text-center"> <strong>OH Sorry There is No History To Show For The Moment !!!!!!!</strong> </div>
                                    @endif <!-- End If history count-->

                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection
