@extends('layouts.backend')
@extends('layouts.css')
@section('content')
    <input type="text" id="search-bar"><br>
    @if(Auth::user()->user_type==1)
       <a href="{{route('articles.create')}}"><img src="../public/images/add.png"></a> Add Article
        <table class="table">
            <th>Title</th><th>Description</th><th>Photo</th><th>Journalist</th><th>Published</th><th>Featured</th><th>Tools</th>
        @forelse($articles as $article)
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
                    <td>Si</td>
                @endif  
                @if($article->featured == 0)              
                    <td>No</td>
                @elseif($article->featured == 1)
                    <td>Destacat</td>
                @else
                    <td>Semi-destacat</td>
                @endif  


                <td><a href="{{route('articles.show',$article->id)}}"><img src="../public/images/show.jpg" title="show"></a><a href="{{route('articles.edit',$article->id)}}"><img src="../public/images/edit.png" title="edit"></a>@if($article->is_published ==1 )<a href="{{route('disablearticle',$article->id)}}"><img src="../public/images/disable.png" title="disable"></a>@else <a href="{{route('enablearticle',$article->id)}}"><img src="../public/images/enable.png" title="enable"></a> @endif<a href="{{route('destroyarticle',$article->id)}}"><img src="../public/images/delete.png" title="delete"></a></td>
            </tr>        
        @empty
        <h1>Empty</h1>
        @endforelse
        </table>
    @endif

    @if(Auth::user()->user_type==2)
    <a href="{{route('articles.create')}}"><img src="../public/images/add.png"></a> Afegir Article
        <table class="table">
            <th>Titol</th><th>Description</th><th>Photo</th><th>User_ID</th><th>Is_Published</th><th>Featured</th><th>Tools</th>
        @forelse($articles as $article)
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
                <td>Si</td>
                    @endif  
                @if($article->featured == 0)              
                    <td>No</td>
                @elseif($article->featured == 1)
                    <td>Destacat</td>
                @else
                    <td>Semi-destacat</td>
                @endif  


                <td><a href="{{route('articles.show',$article->id)}}"><img src="../public/images/show.jpg" title="show"></a><a href="{{route('articles.edit',$article->id)}}"><img src="../public/images/edit.png" title="edit"></a>@if($article->is_published ==1 )<a href="{{route('disablearticle',$article->id)}}"><img src="../public/images/disable.png" title="disable"></a>@else <a href="{{route('enablearticle',$article->id)}}"><img src="../public/images/enable.png" title="enable"></a> @endif</td>
            </tr>        
        @empty
        <h1>Empty</h1>
        @endforelse
        </table>
    @endif
@endsection
@section('jquery')
    <script>
        $(document).ready(function () {
            $('#search-bar').keyup(function () {
                var input = $('#search-bar').val();
                $.ajax({
                    url: '{{route('listArticle')}}?articleList='+input,
                    method: 'GET',
                    success: function (data, status) {
                       $('#contingut').html(status);
                       console.log(data);
                    }
                });
            })
        });
    </script>
@endsection