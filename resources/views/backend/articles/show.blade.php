@extends('layouts.backend')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Article {{$article->id}}</h1>
                <h2>Title : {{$article->title}} </h2><br>
                <h3><b>Description</b> : {{$article->description}} </h3><br>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <b>Body</b> : {{$article->body}} <br>
                </div>
                <div class="col-md-4">
                    <b>Photo</b> : <img src="../{{$article->photo}}" class="rounded float-right" style="width: 300px;"> <br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <b>User_ID</b> : {{$article->user_id}} <br>
                    <b>Is_published</b> : {{$article->is_published}} <br>
                    <b>Featured</b> : {{$article->featured}} <br>
                    <b>Created_at</b> : {{$article->created_at}} <br>
                    <b>Updated_at</b> : {{$article->updated_at}} <br>
                </div>
            </div>
        </div>
    </div>
@endsection