<span class="btn btn-info">
    <i class="fa fa-oclock-o"></i>{{$article->created_at->diffForHumans()}}
</span> 
<span class="btn btn-success">
    <i class="fa fa-user"></i>{{$article->user->name}}
</span> 

@if (!Auth::guest() && (Auth::user()->id == $article->user_id))
<a  href="{{route('articles.edit', $article->id)}}" class="btn btn-secondary">Edit !</a>
<form action="{{route('articles.destroy', $article->id)}}"  onsubmit="return confirm('Are You Sure that you want delete this article !?')" class="d-inline-block" action="{{route('articles.destroy', $article->id)}}" method="POST"> 
   @csrf <!--protect my form csrf -->
   @method('DELETE') 
   <button type="submit" class="btn btn-danger">Delete</button>
</form>
@endif    

<p>
    {{str_limit(strip_tags($article->details), 50)}}
    @if (strlen(strip_tags($article->details) > 50)
        <a href="{{route('histories.show', $history->id)}}" class="btn btn-info-sm">Read More</a>
    @endif
</p>