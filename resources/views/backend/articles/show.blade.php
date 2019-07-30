@extends('layouts.app')
@section('content')
<h1>Article {{$article->id}}</h1>
<b>Title</b> : {{$article->title}} <br>
<b>Description</b> : {{$article->description}} <br>
<b>Body</b> : {{$article->body}} <br>
<b>Photo</b> : <img src="../{{$article->photo}}"> <br>
<b>User_ID</b> : {{$article->user_id}} <br>
<b>Is_published</b> : {{$article->is_published}} <br>
<b>Featured</b> : {{$article->featured}} <br>
<b>Created_at</b> : {{$article->created_at}} <br>
<b>Updated_at</b> : {{$article->updated_at}} <br>
@endsection