@extends('layouts.backend')
@extends('layouts.css')
@section('content')

    <input type="text" id="search-bar">
    @if(Auth::user()->user_type==1)
        <table class="table">
            <th>Titol</th><th>Description</th><th>Body</th><th>Photo</th><th>User_ID</th><th>Is_Published</th><th>Featured</th><th>Tools</th>
        @forelse($articles as $article)
            <tr>
                <td>{{$article->title}}</td>
                <td>{{$article->description}}</td>
                <td>{{$article->body}}</td>
                <td>{{$article->photo}}</td>
                <td>{{$article->user_id}}</td>
                <td>{{$article->is_published}}</td>    
                <td>{{$article->featured}}</td>
                <td><a href="{{route('articles.create')}}"><img src="../images/add.png"></a><a href="{{route('articles.edit',$article->id)}}"><img src="../images/edit.png"></a><a href=""><img src="../images/disable.png"></a><a href=""><img src="../images/delete.png"></a></td>
            </tr>        
        @empty
        <h1>Empty</h1>
        @endforelse
        </table>
    @endif

    @if(Auth::user()->user_type==2)
        <table class="table">
            <th>Titol</th><th>Description</th><th>Body</th><th>Photo</th><th>Is_Published</th><th>Featured</th>
        @forelse($articles as $article)
            <tr>
                <td>{{$article->title}}</td>
                <td>{{$article->description}}</td>
                <td>{{$article->body}}</td>
                <td>{{$article->photo}}</td>
                <td>{{$article->is_published}}</td>
                <td>{{$article->featured}}</td>
                <td><a href="{{route('articles.create')}}"><img src="../images/add.png"></a><a href="{{route('articles.edit',$article->id)}}"><img src="../images/edit.png"></a><a href=""><img src="../images/disable.png"></a></td>
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
                   url: ,
                   method: 'GET',
                   success: function (data, status) {
                       
                   } 
                });
            })
        });
    </script>
@endsection