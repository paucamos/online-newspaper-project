@if(Auth::user()->user_type==1)
    <table class="table">
        <th>Title</th><th>Description</th><th>Photo</th><th>Journalist</th><th>Published</th><th>Featured</th><th>Tools</th>
        @forelse($filtres as $article)
            <tr>
                <td>{{$article->title}}</td>
                <td>{{$article->description}}</td>
                <td>{{$article->photo}}</td>
                @forelse($users as $user)
                    @if($user->id == $article->user_id)
                        <td>{{$user->name}}</td>
                    @endif
                @empty
                @endforelse
                @if($article->is_published == 0)
                    <td>No</td>
                @else
                    <td>Yes</td>
                @endif
                @if($article->featured == 0)
                    <td>No</td>
                @elseif($article->featured == 1)
                    <td>Featured</td>
                @else
                    <td>Semi-featured</td>
                @endif


                <td>
                    <a href="{{route('articles.show',$article->id)}}"><i class="fas fa-search"></i></a><a href="{{route('articles.edit',$article->id)}}"><i class="fas fa-pencil-alt"></i></a>@if($article->is_published ==1 )<a href="{{route('disablearticle',$article->id)}}"><i class="fas fa-ban"></i></a>@else<a class="linkenable" href="{{route('enablearticle',$article->id)}}"><i class="fas fa-check-circle"></i></a> @endif<a href="{{route('destroyarticle',$article->id)}}"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
        @empty
            <h1>Empty</h1>
        @endforelse
    </table>
@endif
