@extends('layouts.app')
@extends('layouts.css')
@section('content')

    @if(Auth::user()->user_type==1)
       <a href="{{route('articles.create')}}"><img src="../public/images/add.png"></a> Afegir Article
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
                <td><a href="{{route('articles.show',$article->id)}}"><img src="../public/images/show.jpg"></a><a href="{{route('articles.edit',$article->id)}}"><img src="../public/images/edit.png"></a><a href="{{route('articles.disable',$article->id)}}"><img src="../public/images/disable.png"></a><a href="{{route('destroyarticle',$article->id)}}"><img src="../public/images/delete.png"></a></td>
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