@extends('layouts.backend')
@extends('layouts.css')
@section('content')
    
    <div class="row">
        <div class="col-md-2">
            <div>
                <a class="list-group-item list-group-item-action active" href="{{route('articles.create')}}"><span><i class="fas fa-plus-circle"></i></span> Add Article </a>
            </div>
        </div>
        <div class="col-md-10">
            <div class="input-group mb-3" style="margin-top:12px;">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
                </div>
                <input id="search-bar" type="text" class="form-control" placeholder="Search" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>
    </div>

    <div id="contingut">
    @if(Auth::user()->user_type==1)
       
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
                    <a href="{{route('articles.show',$article->id)}}"><i class="fas fa-search"></i></a><a href="{{route('articles.edit',$article->id)}}"><i class="fas fa-pencil-alt"></i></a>@if($article->is_published ==1 )<a href="{{route('disablearticle',$article->id)}}"><i class="fas fa-ban"></i></a>@else <a class="linkenable" href="{{route('enablearticle',$article->id)}}"><i class="fas fa-check-circle"></i></a> @endif<a href="{{route('destroyarticle',$article->id)}}"><i class="fas fa-trash"></i></a></td>
            </tr>
        @empty
        <h1>Empty</h1>
        @endforelse
        </table>
    @endif

    @if(Auth::user()->user_type==2)
    
    <a href="{{route('articles.create')}}"><img src="../public/images/add.png"></a> Add Article
        <table class="table">
            <th>Title</th><th>Description</th><th>Photo</th><th>User</th><th>Published</th><th>Featured</th><th>Tools</th>
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
                <td>Yes</td>
                    @endif  
                @if($article->featured == 0)              
                    <td>No</td>
                @elseif($article->featured == 1)
                    <td>Featured</td>
                @else
                    <td>Semi-featured</td>
                @endif  


                <td><a href="{{route('articles.show',$article->id)}}"><img src="../public/images/show.jpg" title="show"></a><a href="{{route('articles.edit',$article->id)}}"><img src="../public/images/edit.png" title="edit"></a>@if($article->is_published ==1 )<a href="{{route('disablearticle',$article->id)}}"><img src="../public/images/disable.png" title="disable"></a>@else <a class="linkenable" href="{{route('enablearticle',$article->id)}}"><img src="../public/images/enable.png" title="enable"></a> @endif</td>
            </tr>        
        @empty
        <h1>Empty</h1>
        @endforelse
        </table>
    @endif
    </div>
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
                       $('#contingut').html(data);
                    }
                });
            });
        });
    </script>
@endsection